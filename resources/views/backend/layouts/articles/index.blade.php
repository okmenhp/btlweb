@extends('backend.master')
@section('content')

<div class="body container">
    <div class="d-flex justify-content-between">
        <h4>Tất cả bài viết</h4>
        <p>Tin tức / Bài viết</p>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Thời gian</th>
            <th scope="col" colspan="2">Tác vụ</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($records as $key => $record)
                <tr id="id-{!! $record->id !!}">
                    <th scope="row">{{ ++$key }}</th>
                    <td>{!! $record->headline !!}</td>
                    <td>{!! $record->created_at !!}</td>
                    <td><a href="{{ route('admin.articles.edit', ['id' => $record->id]) }}"><ion-icon name="pencil-outline"></ion-icon></a></td>
                    <td><a href="javascript:void(0)" class="delete-btn" data-id="{!! $record->id !!}"><ion-icon name="trash-outline"></ion-icon></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $('.delete-btn').click(function(){
        let id = $(this).data('id');

        $.ajax({
            url: '{{route('admin.articles.delete')}}',
            type: 'get',
            data: {id: id},
            success: function(res){
                $('#id-'+id).remove()
                alert(res.success)
                
            }
        })
    })
</script>
@stop