@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4 text-center text-primary">Edit Post</h1>


    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('posts.update', $post) }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
                    @error('title')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea name="body" id="body" class="form-control" rows="5">{{ old('body', $post->body) }}</textarea>
                    @error('body')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>



                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>&nbsp;
                <button type="submit" class="btn btn-primary">Update</button>

            </form>
        </div>
    </div>
</div>
@endsection