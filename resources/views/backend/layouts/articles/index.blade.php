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
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{!! $record->headline !!}</td>
                    <td>{!! $record->created_at !!}</td>
                    <td><a href="{{ route('admin.articles.edit', ['id' => $record->id]) }}"><ion-icon name="pencil-outline"></ion-icon></a></td>
                    <td><ion-icon name="trash-outline"></ion-icon></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop