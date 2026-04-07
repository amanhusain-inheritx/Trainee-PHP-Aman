@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Create User</h2>

    <form method="POST" action="/users">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Save</button>
    </form>
</div>
@endsection