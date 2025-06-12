@extends('layout.app')

@section('content')
    <div class="container">
        <h2 style="color: #001f3f;">Add New Member</h2>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="firstname">firstname</label>
                <input type="text" name="firstname" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="lastname">lastname</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="birthdate">Birthdate</label>
                <input type="date" name="birthdate" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="joiningdate">Joining Date</label>
                <input type="date" name="joiningdate" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="address">Address</label>
                <textarea name="address" class="form-control" rows="2" required></textarea>
            </div>

            <button type="submit" class="btn" style="background-color: #001f3f; color: white; border: none;">
                Save
            </button>
            <a href="{{ route('users.index') }}" class="btn"
                style="background-color: #c72525; color: white; border: none;">
                Delete
            </a>

        </form>
    </div>
@endsection
