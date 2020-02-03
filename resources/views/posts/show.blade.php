@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-sm btn-primary mt-3 mb-3">Go back</a>
    <h3>{{$post->title}}</h3>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection