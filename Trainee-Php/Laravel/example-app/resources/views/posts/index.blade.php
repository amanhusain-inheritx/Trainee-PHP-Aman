@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Posts</h2>

    @foreach($posts as $post)
        <div class="list-item">
            <strong>{{ $post->title }}</strong>
            <p>{{ $post->content }}</p>

            <span class="badge">{{ $post->user->name }}</span>
        </div>
    @endforeach
</div>
@endsection