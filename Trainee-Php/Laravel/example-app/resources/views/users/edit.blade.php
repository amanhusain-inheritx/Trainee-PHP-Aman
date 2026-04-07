@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Edit User</h2>

    {{-- Show validation errors --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/users/{{ $user->id }}">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}">

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}">

        <button type="submit">Update User</button>
    </form>
</div>
@endsection