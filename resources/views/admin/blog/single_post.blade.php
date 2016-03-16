@extends('layouts.admin-master')

@section('content')
    <div class="container">
        <section id="post-admin">
            <a href="">Edit Post</a>
            <a href="">Delete Post</a>
        </section>
        <section class="post">
            <h1>{{ $post->title }}</h1>
            <span class="info">{{ $post->created_at }}</span>
            <p>{{ $post->body }}</p>
        </section>
    </div>
@endsection