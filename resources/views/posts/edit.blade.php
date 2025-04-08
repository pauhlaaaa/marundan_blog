@extends('posts.layout')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Edit Post</h2>
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="title" class="font-weight-bold">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
                </div>

                <div class="form-group mb-4">
                    <label for="content" class="font-weight-bold">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
                </div>

                <button type="submit" class="btn btn-warning btn-block">Update Post</button>
            </form>
        </div>
    </div>
@endsection
