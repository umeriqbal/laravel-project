@extends('layouts.master')

@section('title')
    Post Title
@endsection

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <span class="subtitle">{{ $post->author }} | {{ $post->created_at }}</span>
        <p>{{ $post->body }}</p>
        <a href="">Read more</a>
    </article>
@endsection