@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/modal.css') }}" type="text/css" />
@endsection

@section('content')
    <div class="container">
        @include('includes.info-box')
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="{{ route('admin.blog.create_post') }}" class="btn">New Post</a></li>
                        <li><a href="{{ route('admin.blog.index') }}" class="btn">Show All Posts</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    @if(count($posts) == 0)
                    <li>No Posts.</li>
                    @else 
                        @foreach($posts as $post)
                        <li>
                            <article>
                                <div class="post-info">
                                    <h3>{{ $post->title }}</h3>
                                    <span class="info">{{ $post->author }} | {{ $post->created_at }}</span>
                                </div>
                                <div class="edit">
                                    <ul>
                                        <!-- {{ route('admin.blog.index', ['post_id' => $post->id, 'end' => 'admin']) }} -->
                                        <li><a href="">View Post</a></li>
                                        <li><a href="">Edit</a></li>
                                        <li><a href="" class="danger">Delete</a></li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        @endforeach
                    @endif
                </ul>
            </section>
        </div>
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="" class="btn">Show All Messages</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    <!-- If no messages -->
                    <li>No Messages.</li>
                    
                    <!-- If messages -->
                    <li>
                        <article data-message="Body" data-id="ID">
                            <div class="post-info">
                                <h3>Message Subject</h3>
                                <span class="info">Sender: ... | Date</span>
                            </div>
                            <div class="edit">
                                <ul>
                                    <li><a href="">View Post</a></li>
                                    <li><a href="" class="danger">Delete</a></li>
                                </ul>
                            </div>
                        </article>
                    </li>
                </ul>
            </section>
        </div>
    </div>
    <div class="modal" id="contact-message-info">
        <button class="btn" id="modal-close">Close</button>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
    <script type="text/javascript" src="{{ URL::secure('src/js/modal.js') }}"></script>
    <script type="text/javascript" src="{{ URL::secure('src/js/contact_messages.js') }}"></script>
@endsection