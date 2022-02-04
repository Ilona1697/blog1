@extends('layouts.app')

@section('title'){{$data->subject}}@endsection

@section('oneMessage')
    <h1>{{$data->subject}}</h1>
    <div class="alert alert-info">
        <p>{{$data->email}} - {{$data->name}}</p>
        <p>{{$data->message}}</p>
        <small>{{$data->created_at}}</small>
        <a href="{{route('contact_update', $data->id)}}"><button class="btn btn-primary">Редактировать</button></a>
        <a href="{{route('contact_delete', $data->id)}}"><button class="btn btn-warning">Удалить</button></a>
    </div>
@endsection
