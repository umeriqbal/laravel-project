@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/modal.css') }}" type="text/css" />
@endsection

@section('content')
<div class="container">
    @include('includes.info-box')
    <section id="post-admin">
        <a href="{{ route('admin.blog.create_post') }}">New Post</a>
    </section>
    <section>
            @if(count($posts) == 0)
                No Posts.
            @else 
                @foreach($posts as $post)
                    <article>
                        <div class="post-info">
                            <h3>{{ $post->title }}</h3>
                            <span class="info">{{ $post->author }} | {{ $post->created_at }}</span>
                        </div>
                        <div class="edit">
                            <ul>
                                <li><a href="">View Post</a></li>
                                <li><a href="">Edit</a></li>
                                <li><a href="" class="danger">Delete</a></li>
                            </ul>
                        </div>
                    </article>
                @endforeach
            @endif
    </section>
    @if ($posts->lastPage() > 1)
        <section class="pagination">
            @if ($posts->currentPage() !== 1)
                <a href="{{ $posts->previousPageUrl() }}"><li class="fa fa-caret-left"></li></a>
            @endif
             @if ($posts->currentPage() !== $posts->lastPage())
                <a href="{{ $posts->nextPageUrl() }}"><li class="fa fa-caret-right"></li></a>
            @endif
        </section>
    @endif
</div>
@endsection