@extends('layouts.app')

@section('title') Главная страница @endsection

@section('home')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nisi facilis quam officia blanditiis sequi! Corrupti est voluptates libero ducimus deserunt voluptas beatae repellendus sunt?</p>

    @section('aside')
    @parent
    @endsection
@endsection