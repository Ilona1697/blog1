@extends('layouts.app')

@section('title')Контакты@endsection

@section('contact')
    <h1 class="mb-4">Страница контактов</h1>

    <form action="{{route('contact_submit')}}"  method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div> 
        <div class="input-group mb-3">
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div> 
        <div class="input-group mb-3">
            <input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control">
        </div> 
        <div class="input-group mb-3">
            <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea>
        </div> 
        <div class="input-group mb-3">
            <button type="submit" class="btn btn-outline-success" class="form-control">Отправить</button>
        </div> 
    </form>
@endsection