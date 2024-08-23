@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Post Details</h1>
    <p>Title: {{ $post->title }}</p>
    <p>Content: {{ $post->content }}</p>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back to Posts</a>
</div>
@endsection
