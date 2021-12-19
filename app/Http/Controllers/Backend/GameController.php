<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameConfig;
use App\Models\GameGameType;
use App\Models\GameType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index(Request $request){
        // dd(Auth::guard());
        $records = Game::all();

        foreach($records as $key => $record){
            $types = GameGameType::where('game_id', $record->id)->get();
            $type_ids = array();
            foreach($types as $key => $type){
                $type_ids[$key] = GameType::find($type->game_type_id)->name;
            }
            $record->type = implode(', ', $type_ids);
        }
        
        return view('backend.layouts.game.index', compact('records'));
    }

    public function create(){
        $types = GameType::all();
        return view('backend.layouts.game.create', compact('types'));
    }

    public function store(Request $request){
        $input = $request->all();

        $result = array(            
            'name' => $input['name'],
            'studio' => $input['studio'],
            'rate' => $input['rate'],
            'review' => $input['editor1'],
            'publish_date' => $input['publish_date'],
            'link' => $input['link'],
        );

        $game_config_result = array(
            'cpu' => $input['cpu'],
            'ram' => $input['ram'],
            'vga' => $input['vga'],
            'hard_drive' => $input['hard_drive'],
            'os' => $input['os']
        );

        if($request->hasFile('image')) {
            //get filename with extension
            $filenamewithextension = $request->file('image')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('image')->move(public_path('uploads/games'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/games/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            $result['photo_url'] = $filenametostore;
            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
        }

        $game_config = GameConfig::create($game_config_result);
        $result['game_config_id'] = $game_config->id;
        $game = Game::create($result);

        if($input['type']){
            $game_type_id = explode(',', $input['type']);
            foreach($game_type_id as $key => $record){
                $game->gameType()->attach($record);
            }
        }

        return redirect()->route('admin.game.index')->with('success', 'Tạo mới thành công');
    }

    public function type(){
        $records = GameType::all();
        return view('backend.layouts.game.type', compact('records'));
    }

    public function typeStore(Request $request){
        $input = $request->all();
        $result=array(
            'name' => $input['name']
        );
        GameType::create($result);

        return redirect()->route('admin.game.type');
    }

    public function typeDelete(Request $request){
        $id = $request->all()['id'];
        GameType::where('id', $id)->delete();

        return response()->json(array('success'=>'Xóa thành công'));
    }

    public function edit(Request $request){
        $record = Game::find($request->all()['id']);
        $game_config = GameConfig::find($record->game_config_id);
        
        $type_ids = GameGameType::where('game_id',$record->id)->get();
        $type_selected = array();
        $type_selected_ids = array();
        foreach($type_ids as $key => $type_id){
            $type_selected[$key] = GameType::find($type_id->game_type_id);
            $type_selected_ids[$key] = GameType::find($type_id->game_type_id)->id;
        }

        $types = GameType::whereNotIn('id', $type_selected_ids)->get();
        $type_selected_ids = implode(',', $type_selected_ids);

        return view('backend.layouts.game.edit', compact('record', 'types', 'type_selected', 'game_config', 'type_selected_ids'));
    }

    public function update(Request $request){
        $input = $request->all();

        $result = array(            
            'name' => $input['name'],
            'studio' => $input['studio'],
            'rate' => $input['rate'],
            'review' => $input['editor1'],
            'publish_date' => $input['publish_date'],
        );

        $game_config_result = array(
            'cpu' => $input['cpu'],
            'ram' => $input['ram'],
            'vga' => $input['vga'],
            'hard_drive' => $input['hard_drive'],
            'os' => $input['os']
        );

        if($request->hasFile('image')) {
            //get filename with extension
            $filenamewithextension = $request->file('image')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('image')->move(public_path('uploads/games'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/games/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            $result['photo_url'] = $filenametostore;
            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
        }

        $game_config = GameConfig::find($input['game_config_id']);
        $game_config->update($game_config_result);
        $result['game_config_id'] = $game_config->id;
        $game = Game::find($input['id']);
        $game->update($result);

        if($input['type']){
            $game_type_id = explode(',', $input['type']);
            $game->gameType()->sync($game_type_id);
        }

        return redirect()->route('admin.game.index')->with('success', 'Chỉnh sửa thành công');
    }

    public function delete(Request $request){
        $id = $request->all()['id'];
        $id_config = Game::find($id)->game_config_id;

        GameGameType::where('game_id', $id)->delete();
        GameConfig::find($id_config)->delete();
        Game::find($id)->delete();
        
        return response()->json(array('success'=>'Xóa thành công'));
    }
}
