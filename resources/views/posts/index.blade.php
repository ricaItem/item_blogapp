@extends('layouts.app')

@section('content')
<h1>All Posts</h1>
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Create New Post</a>

@foreach ($posts as $post)
<div class="card mb-2">
    <div class="card-body">
        <h4>{{ $post->title }}</h4>
        <p>{{ Str::limit($post->body, 100) }}</p>
        <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i> View</a>
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i> Edit</a>

        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button>
        </form>
    </div>
</div>
@endforeach
@endsection