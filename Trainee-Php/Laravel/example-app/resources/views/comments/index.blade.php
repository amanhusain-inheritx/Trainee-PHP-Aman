@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Comments</h2>

    @foreach($comments as $comment)
        <div class="list-item">
            <p>{{ $comment->comment }}</p>
            <small>By {{ $comment->user->name }}</small>
        </div>
    @endforeach
</div>
@endsection