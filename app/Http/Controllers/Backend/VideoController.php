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
