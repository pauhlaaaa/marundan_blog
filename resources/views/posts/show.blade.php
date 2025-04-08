@extends('posts.layout')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">{{ $post->title }}</h2>
            <p class="lead mb-4">{{ $post->content }}</p>

            <div class="d-flex justify-content-between">

                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit Post</a>


                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
