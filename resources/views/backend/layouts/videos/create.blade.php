@extends('backend.master')
@section('content')

<div class="body container">
    <div class="d-flex justify-content-between">
        <h4>Thêm mới video</h4>
        <p>Video / Thêm mới</p>
    </div>
    <div class="mid-body">
        <form action="{{route('admin.video.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="selection">
                <div class="title d-flex ">
                    <p class="mr-2">Nội dung: </p>
                    <input type="text" style="width: 15em" name="content">
                </div>
                <div class="title d-flex ">
                    <p class="mr-2">Nguồn: </p>
                    <input type="text" style="width: 25em" name="source">
                </div>
            </div>
            <button type="submit">Thêm mới</button>
        </form>
    </div>
</div>

@stop