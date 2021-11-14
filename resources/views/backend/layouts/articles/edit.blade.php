@extends('backend.master')
@section('content')

<div class="body container">
    <div class="d-flex justify-content-between">
        <h4>Chỉnh sửa bài viết</h4>
        <p>Tin tức / Chỉnh sửa bài viết</p>
    </div>
    <div class="mid-body">
        <form action="{{route('admin.articles.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" value="{!! $record->id !!}" name="id" hidden>
            <div class="selection">
                <div class="title d-flex ">
                    <p class="">Tiêu đề: </p>
                    <input type="text" style="width: 40em" name="headline" value="{!! $record->headline !!}">
                </div>
                <div class="type d-flex ">
                    <p class="">Ưu tiên: </p>
                    <input type="text" style="width: 4em" name="priority" value="{!! $record->priority !!}">
                </div>
                <div class="tag d-flex ">
                    <p class="">Thẻ: </p>
                    <input type="text" style="width: 40em" name="tag" value="{!! $record->tags !!}">
                </div>
                <div class="img d-flex ">
                    <p class="">Ảnh minh họa: </p>
                    <input type="file" style="width: 40em" name="image">
                </div>
            </div>

            <div class="content">
                <textarea name="editor1">{!! $record->text !!}</textarea>
            </div>
            <div class="selection">
                <div class="title d-flex ">
                    <p class="">Nguồn: </p>
                    <input type="text" style="width: 40em" name="source" value="{!! $record->source !!}">
                </div>
                <div class="type d-flex ">
                    <p class="">Ngày đăng bài: </p>
                    <input type="text" style="width: 4em" name="publish_date">
                </div>
            </div>
            <button type="submit">Chỉnh sửa</button>
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