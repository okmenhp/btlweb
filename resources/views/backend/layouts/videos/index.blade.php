@extends('backend.master')
@section('content')

<div class="body container">
    <div class="d-flex justify-content-between">
        <h4>Tất cả videos</h4>
        <p>Videos / Tất cả</p>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Nguồn</th>
            <th scope="col" colspan="2">Tác vụ</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($records as $key => $record)
                <tr id="id-{!! $record->id !!}">
                    <th scope="row">{{ ++$key }}</th>
                    <td><input type="text" id="content-{!! $record->id !!}" class="video-input video-input-disable" value="{!! $record->content !!}" disabled></td>
                    <td><input type="text" id="source-{!! $record->id !!}" class="video-input video-input-disable" value="{!! $record->source !!}" disabled></td>
                    <td><a href="javascript:void(0)" class="update-btn" data-id="{!! $record->id !!}"><ion-icon name="pencil-outline"></ion-icon></a></td>
                    <td><a href="javascript:void(0)" class="delete-btn" data-id="{!! $record->id !!}"><ion-icon name="trash-outline"></ion-icon></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $('body').delegate('.update-btn', 'click', function(){
        let id = $(this).data('id')
        let input = $(this).closest('#id-'+id).find('.video-input')
        input.prop('disabled', false)
        input.toggleClass('boder border-bottom border-dark')
        $(this).html('<ion-icon name="checkmark-outline"></ion-icon>')
        $(this).toggleClass('submit')
    })

    $('body').delegate('.submit', 'click', function(){
        let id = $(this).data('id')
        let input = $(this).closest('#id-'+id).find('.video-input')
        input.prop('disabled', true)
        input.removeClass('boder border-bottom border-dark')
        $(this).html('<ion-icon name="pencil-outline"></ion-icon>')
        $('.update-btn').removeClass('submit')

        let content = $(this).closest('#id-'+id).find('#content-'+id).val()
        let source = $(this).closest('#id-'+id).find('#source-'+id).val()

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '{{route('admin.video.update')}}',
            method: 'post',
            data: {id: id, content: content, source: source},
            success: function(res){
                alert('Chỉnh sửa thành công')
            }
        })
    })

    $('.delete-btn').click(function(){
        let id = $(this).data('id')
        $.ajax({
            url: '{{route('admin.video.delete')}}',
            method: 'get',
            data: {id: id},
            success: function(res){
                $('#id-'+id).remove();
                alert('Xóa thành công')
            }
        })
    })
</script>
@stop