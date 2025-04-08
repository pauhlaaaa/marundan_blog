@extends('posts.layout')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Create New Post</h2>
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="font-weight-bold">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="form-group mb-4">
                    <label for="body" class="font-weight-bold">Body</label>
                    <textarea name="body" id="body" class="form-control" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-success btn-block">Create Post</button>
            </form>
        </div>
    </div>
@endsection
