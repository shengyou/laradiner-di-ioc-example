@extends('layouts.master')

@section('main')
    <h1>All Post</h1>

    <ul>
    @foreach($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
    </ul>
@endsection