@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h2>{{ $post->title }}</h2>
        </div>
        <div class="card-body">
            <p>{{ $post->body }}</p>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection