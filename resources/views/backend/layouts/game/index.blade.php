@extends('backend.master')
@section('content')

<div class="body container">
    <div class="d-flex justify-content-between">
        <h4>Tất cả games</h4>
        <p>Game / Tất cả</p>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">Thể loại</th>
            <th scope="col">Studio</th>
            <th scope="col">Ngày ra mắt</th>
            <th scope="col">Điểm</th>
            <th scope="col">Review</th>
            <th scope="col" colspan="2">Tác vụ</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($records as $key => $record)
                <tr id="id-{!! $record->id !!}">
                    <th scope="row">{{ ++$key }}</th>
                    <td>{!! $record->name !!}</td>
                    <td>{!! $record->type !!}</td>
                    <td>{!! $record->studio !!}</td>
                    <td>{!! $record->publish_date !!}</td>
                    <td>{!! $record->rate !!}</td>
                    <td>{!! $record->review !!}</td>
                    <td><a href="{{ route('admin.game.edit', ['id' => $record->id]) }}"><ion-icon name="pencil-outline"></ion-icon></a></td>
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
            url: '{{route('admin.game.delete')}}',
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