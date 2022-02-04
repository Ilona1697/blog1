@extends('layouts.app')

@section('title')Все сообщения@endsection

@section('messages')
    <h1>Все сообщения</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{$el->subject}}</h3>
            <p>{{$el->message}}</p>
            <small>{{$el->created_at}}</small>
            <a href="{{route('contact_data_one', $el->id)}}"><button class="btn btn-warning">Детальнее</button></a>
        </div>
    @endforeach
@endsection
