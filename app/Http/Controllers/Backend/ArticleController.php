<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $records = Article::all();

        return view('backend.layouts.articles.index', compact('records'));
    }
    public function create(){
        return view('backend.layouts.articles.create');
    }

    public function store(Request $request){
        $input = $request->all();

        $result = array(            
            'headline' => $input['headline'],
            'text' => $input['editor1'],
            'description' => $input['description'],
            'priority' => $input['priority'],
            'tags' => $input['tag'],
            'source' => $input['source']
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
            $request->file('image')->move(public_path('uploads/articles'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/articles/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            $result['photo_url'] = $filenametostore;
            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
        }

        Article::create($result);

        return redirect()->route('admin.articles.index')->with('success', 'Tạo mới thành công');
    }

    public function edit(Request $request){
        $id = $request->all()['id'];
        $record = Article::where('id', $id)->first();
        return view('backend.layouts.articles.edit', compact('record'));
    }

    public function update(Request $request){
        $input = $request->all();

        $result = array(            
            'headline' => $input['headline'],
            'text' => $input['editor1'],
            'description' => $input['description'],
            'priority' => $input['priority'],
            'tags' => $input['tag'],
            'source' => $input['source']
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
            $request->file('image')->move(public_path('uploads/articles'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/articles/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            $result['photo_url'] = $filenametostore;
            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
        }

        Article::where('id',$input['id'])->update($result);

        return redirect()->route('admin.articles.index')->with('success', 'Tạo mới thành công');
    }

    public function delete(Request $request){
        $id = $request->all()['id'];
        Article::where('id', $id)->delete();

        return response()->json(array('success'=>'Xóa thành công'));
    }
}
