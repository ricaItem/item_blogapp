@extends('layouts.app')

@section('content')
<h1>Create New Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <div class="mb-3">
        <label>Body</label>
        <textarea name="body" class="form-control" rows="5">{{ old('body') }}</textarea>
        @error('body') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    <button type="submit" class="btn btn-success">Submit</button>

</form>
@endsection