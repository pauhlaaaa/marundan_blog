@extends('posts.layout')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Posts</h2>


            @if(session('success'))
                <div class="alert alert-success mb-4">
                    {{ session('success') }}
                </div>
            @endif


            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Create New Post</a>


            <ul class="list-group">
                @foreach($posts as $post)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
