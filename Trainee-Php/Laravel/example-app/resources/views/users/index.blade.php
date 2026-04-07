@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Users</h2>
    <a href="/users/create">+ Add User</a>

    @foreach($users as $user)
        <div class="list-item">
            <strong>{{ $user->name }}</strong> ({{ $user->email }})
            <br>
            <a href="/users/{{ $user->id }}/edit">Edit</a>
        </div>
    @endforeach
</div>
@endsection