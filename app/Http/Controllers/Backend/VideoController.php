<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        $records = Video::all();

        return view('backend.layouts.videos.index', compact('records'));
    }

    public function create(){

        return view('backend.layouts.videos.create');
    }

    public function store(Request $request){
        $input = $request->all();

        $data = array(
            'content' => $input['content'],
            'source' => $input['source'],
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

        Video::create($data);

        return redirect()->route('admin.video.index')->with('success', 'Thêm mới thành công');
    }

    public function update(Request $request){
        $input = $request->all();

        $data = array(
            'content' => $input['content'],
            'source' => $input['source'],
        );

        Video::find($input['id'])->update($data);

        return redirect()->route('admin.video.index')->with('success', 'Chỉnh sửa thành công');
    }

    public function delete(Request $request){
        $id = $request->all()['id'];

        Video::find($id)->delete();
        return response()->json(array('success', 'Xóa thành công'));
    }
}
