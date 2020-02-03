@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the Laravel application from the "Laravel From Scratch" Youtube Series</p>
        <p><a href="/login" class="btn btn-primary btn-lg m-2" role="button">Login</a><a href="/register" class="btn btn-success btn-lg m-2" role="button">Register</a></p>
    </div>
@endsection