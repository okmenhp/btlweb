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
        </tr>
        </thead>
        <tbody>
            @foreach ($records as $key => $record)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{!! $record->name !!}</td>
                    <td>{!! $record->type !!}</td>
                    <td>{!! $record->studio !!}</td>
                    <td>{!! $record->publish_date !!}</td>
                    <td>{!! $record->rate !!}</td>
                    <td>{!! $record->review !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop