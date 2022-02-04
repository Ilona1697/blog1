@extends('layouts.app')

@section('title')Обновление записи@endsection

@section('updateMessage')
    <h1 class="mb-4">Обновление записи</h1>

    @include('inc.messages')

    <form action="{{route('contact_update_submit', $data->id)}}"  method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control" value="{{$data->name}}">
        </div> 
        <div class="input-group mb-3">
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control" value="{{$data->email}}">
        </div> 
        <div class="input-group mb-3">
            <input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control" value="{{$data->subject}}">
        </div> 
        <div class="input-group mb-3">
            <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control">{{$data->message}}</textarea>
        </div> 
        <div class="input-group mb-3">
            <button type="submit" class="btn btn-outline-success" class="form-control">Обновить</button>
        </div> 
    </form>
@endsection