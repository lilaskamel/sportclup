@extends('Layout.main')

@section('body')
<style>
    body {
        background-color: #f1f4f9;
        direction: ltr;
        text-align: left;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .profile-card {
        background-color: #ffffff;
        color: #001f3f;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        max-width: 1500px;
    }

    .profile-card h1 {
        color: #001f3f;
        font-size: 40px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .profile-card label {
        color: #001f3f;
        font-weight: 600;
    }

    .profile-card .form-control {
        background-color: #f0f4f8;
        border: 1px solid #ccd6e0;
        padding: 10px 14px;
        border-radius: 8px;
        color: #001f3f;
        font-size: 15px;
    }

    .btn-navy {
        background-color: #001f3f;
        color: #ffffff;
        border: none;
        border-radius: 8px;
        padding: 12px;
        font-size: 16px;
        transition: 0.3s ease;
    }

    .btn-navy:hover {
        background-color: #001f3f;
    }
</style>
<br><br>

<div class="profile-card">
    <h1>Profile</h1>

    <div class="mb-3">
        <label class="form-label">First Name:</label>
        <p class="form-control">{{ $user->firstName }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Last Name:</label>
        <p class="form-control">{{ $user->lastname }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Email:</label>
        <p class="form-control">{{ $user->email }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Address:</label>
        <p class="form-control">{{ $user->address }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Birth Date:</label>
        <p class="form-control">{{ $user->birthdate }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Gender:</label>
        <p class="form-control">{{ $user->gender }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Phone:</label>
        <p class="form-control">{{ $user->phone }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Joining Date:</label>
        <p class="form-control">{{ $user->joiningDate }}</p>
    </div>

    <a href="{{ route('profile.edit') }}" class="btn-navy w-100 mt-4">Edit Information</a>
</div>
@endsection
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

