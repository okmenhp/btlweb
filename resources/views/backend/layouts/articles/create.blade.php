@extends('backend.master')
@section('content')

<div class="body container">
    <div class="d-flex justify-content-between">
        <h4>Bài viết mới</h4>
        <p>Tin tức / Bài viết mới</p>
    </div>
    <div class="mid-body">
        <form action="{{route('admin.articles.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="selection">
                <div class="title d-flex ">
                    <p class="">Tiêu đề: </p>
                    <input type="text" style="width: 40em" name="headline">
                </div>
                <div class="type d-flex ">
                    <p class="">Ưu tiên: </p>
                    <input type="text" style="width: 4em" name="priority">
                </div>
                <div class="tag d-flex ">
                    <p class="">Thẻ: </p>
                    <input type="text" style="width: 40em" name="tag">
                </div>
                <div class="img d-flex ">
                    <p class="">Ảnh minh họa: </p>
                    <input type="file" style="width: 40em" name="image">
                </div>
            </div>
            <div class="description">
                <p class="">Mô tả: </p>
                <textarea name="description" cols="100" rows="5"></textarea>
            </div>
            <div class="content">
                <textarea name="editor1"></textarea>
            </div>
            <div class="selection">
                <div class="title d-flex ">
                    <p class="">Nguồn: </p>
                    <input type="text" style="width: 40em" name="source">
                </div>
                {{-- <div class="type d-flex ">
                    <p class="">Ngày đăng bài: </p>
                    <input type="text" style="width: 4em" name="publish_date">
                </div> --}}
            </div>
            <button type="submit">Thêm mới</button>
        </form>
    </div>
</div>
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserUploadUrl: "{{route('admin.articles.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    } );
</script>

@stop