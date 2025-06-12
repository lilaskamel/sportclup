@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Edit User</h2>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstName" class="form-control" value="{{ $user->firstName }}">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>

            <div class="form-group">
                <label>Password (leave blank to keep current)</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-sm" style="background-color: #001f3f; color: white;">Update</button>
        </form>
    </div>
@endsection
