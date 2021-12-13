@extends('backend.master')
@section('content')

<div class="body container">
    <div class="d-flex justify-content-between">
        <h4>Thêm game mới</h4>
        <p>Game / Thêm mới</p>
    </div>
    <div class="mid-body">
        <form action="{{route('admin.game.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="selection">
                <div class="title d-flex ">
                    <p class="mr-2">Tên: </p>
                    <input type="text" style="width: 15em" name="name">
                </div>
                <div class="title d-flex ">
                    <p class="mr-2">Thể loại: </p>
                    <input type="hidden" name="type" id="game-type">
                    <div class="">
                        <input type="text" style="width: 15em" name="type-search" placeholder="Tìm kiếm...">
                        <div class="d-flex">
                            <div class="type-box border border-dark px-2 py-1 my-2 mr-2" style="width: 15em; height: 10em">
                                @foreach ($types as $type)
                                    <div id="type-id-{!!$type->id!!}" data-id="{!!$type->id!!}" class="type-id d-flex align-items-center">
                                        <p class="type-name mb-0">{!! $type->name !!}</p>
                                        <a href="javascript:void(0)" data-id="{!!$type->id!!}" class="plus-type d-flex align-items-center"><ion-icon name="add-outline" class="text-primary"></ion-icon></a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="type-add-box border border-dark px-2 py-1 my-2" style="width: 15em; height: 10em">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title d-flex ">
                    <p class="mr-2">Studio: </p>
                    <input type="text" style="width: 15em" name="studio">
                </div>
                <div class="title d-flex ">
                    <p class="mr-2">Điểm: </p>
                    <input type="text" style="width: 15em" name="rate">
                </div>
                <div class="title d-flex ">
                    <p class="mr-2">Ngày ra mắt: </p>
                    <input type="text" style="width: 15em" name="publish_date">
                </div>
                <p class="mb-0">Cấu hình tối thiểu: </p>
                <div class="title d-flex ">
                    <p class="mr-2">CPU: </p>
                    <input class="mr-2" type="text" style="width: 8em" name="cpu">
                    <p class="mr-2">RAM: </p>
                    <input class="mr-2" type="text" style="width: 8em" name="ram">
                    <p class="mr-2">VGA: </p>
                    <input class="mr-2" type="text" style="width: 8em" name="vga">
                    <p class="mr-2">Hard drive: </p>
                    <input class="mr-2" type="text" style="width: 8em" name="hard_drive">
                    <p class="mr-2">OS: </p>
                    <input class="mr-2" type="text" style="width: 8em" name="os">
                </div>
                <div class="img d-flex ">
                    <p class="">Ảnh minh họa: </p>
                    <input type="file" style="width: 40em" name="image">
                </div>
                <div class="title d-flex ">
                    <p class="mr-2">Link tải: </p>
                    <input type="text" style="width: 15em" name="link">
                </div>
            </div>
            <p class="">Nhận xét: </p>
            <div class="content">
                <textarea name="editor1"></textarea>
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

    $('.plus-type').click(function(){
        $(this).parent().remove()
        let id = $(this).data('id')
        let name = $(this).parent().find('.type-name').html()
        $('.type-add-box').append('<div id="type-id-'+id+'" data-id="'+id+'" class="type-id-added d-flex align-items-center">'+
                                    '<p class="type-name mb-0">'+name+'</p>'+
                                    '<a href="javascript:void(0)" data-id="'+id+'" class="minus-type d-flex align-items-center"><ion-icon name="remove-outline" class="text-danger"></ion-icon></a>'+
                                '</div>')
        
        let data = $('.type-id-added').map(function(){
            return $(this).data('id')
        }).get().join(',')
        $('#game-type').val(data)
    })

    $('.minus-type').click(function(){
        $(this).parent().remove()
        let id = $(this).data('id')
        let name = $(this).parent().find('.type-name').html()
        $('.type-box').append('<div id="type-id-'+id+'" data-id="'+id+'" class="type-id d-flex align-items-center">'+
                                    '<p class="type-name mb-0">'+name+'</p>'+
                                    '<a href="javascript:void(0)" data-id="'+id+'" class="plus-type d-flex align-items-center"><ion-icon name="add-outline" class="text-primary"></ion-icon></a>'+
                                '</div>')
        
        let data = $('.type-id-added').map(function(){
            return $(this).data('id')
        }).get().join(',')
        $('#game-type').val(data)
    })
    
</script>

@stop