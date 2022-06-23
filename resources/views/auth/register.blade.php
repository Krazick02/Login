@extends('layouts.plantilla')

@section('title','Register')

@section('content')

    <form action="/register" method="POST">
        @csrf
        <input type="text" name="username" id="">
        <input type="email" name="email" id="">
        <input type="password" name="password" id="">
        <input type="password" name="password_confirmation" id="">
        <button type="submit">Register</button>
    </form>

@endsection
