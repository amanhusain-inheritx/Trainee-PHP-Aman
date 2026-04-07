@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Tags</h2>

    @foreach($tags as $tag)
        <div class="list-item">
            <span class="badge">{{ $tag->name }}</span>
        </div>
    @endforeach
</div>
@endsection