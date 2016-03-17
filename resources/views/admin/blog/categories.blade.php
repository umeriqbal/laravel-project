@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::secure('src/css/categories.css') }}" type="text/css" />
@endsection

@section('content')
    <div class="container">
        <section id="category-admin">
            <form action="" method="post">
                <div class="input-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" />
                    <button type="submit" class="btn">Create Category</button>
                </div>
            </form>
        </section>
        <section class="list">
            @foreach($categories as $category)
                <article>
                    <div class="category-info" data-id="{{ $category->id }}">
                        <h3>{{ $category->name}}</h3>
                    </div>
                    <div class="edit">
                        <nav>
                            <ul>
                                <li class="category-edit"><input type="text"</li>
                                <li><a href="">Edit</a></li>
                                <li><a href="" class="danger">Delete</a></li>
                            </ul>
                        </nav>
                    </div>
                </article>
            @endforeach
        </section>
        @if ($categories->lastPage() > 1)
            <section class="pagination">
                @if ($categories->currentPage() !== 1)
                    <a href="{{ $categories->previousPageUrl() }}"><li class="fa fa-caret-left"></li></a>
                @endif
                 @if ($categories->currentPage() !== $categories->lastPage())
                    <a href="{{ $categories->nextPageUrl() }}"><li class="fa fa-caret-right"></li></a>
                @endif
            </section>
        @endif
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
    <script type="text/javascript" src="{{ URL::secure('src/js/categories.js') }}"></script>
@endsection