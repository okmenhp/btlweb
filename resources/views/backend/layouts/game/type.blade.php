@extends('backend.master')
@section('content')

<div class="body container">
    <div class="d-flex justify-content-between">
        <h4>Thể loại game</h4>
        <p>Game / Thể loại</p>
    </div>
    <div class="game">
        <form action="{{route('admin.game.type.store')}}" method="post">
            @csrf
            <label for="type">Tên thể loại</label>
            <input type="text" name="name">
            <button>Thêm mới</button>
        </form>
        <div class="d-flex flex-wrap mt-3">
            @foreach ($records as $record)
                <div id="id-{!!$record->id!!}" class="d-flex align-items-center type-rounded border-muted rounded bg-secondary px-1 py-1 mr-2 mb-2">
                    <p class="mb-0 text-light pr-1" style="font-size: 14px">{!!$record->name!!}</p>
                    <a href="javascript:void(0)" data-id="{!!$record->id!!}" class="delete-btn text-danger px-1" style="font-size: 16px">x</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    $('.delete-btn').click(function(){
        let id = $(this).data('id')
        $.ajax({
            url: '{{route('admin.game.type.delete')}}',
            type: 'get',
            data: {id: id},
            success: function(res){
                alert(res.success)
                $('#id-'+id).remove()
            }
        })
    })
</script>
@stop