@extends('Layout.app')

@section('content')
<div class="container">
    <h2>Edit User</h2>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="firstName" class="form-control" value="{{ old('firstName', $user->firstName) }}">
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lastName" class="form-control" value="{{ old('lastName', $user->lastName) }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
        </div>

        <div class="form-group">
            <label>Birthdate</label>
            <input type="date" name="birthdate" class="form-control" value="{{ old('birthdate', $user->birthdate) }}">
        </div>

        <div class="form-group mb-3">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control">
                <option value="">Select Gender</option>
                <option value="male" {{ (old('gender', $user->gender) == 'male') ? 'selected' : '' }}>Male</option>
                <option value="female" {{ (old('gender', $user->gender) == 'female') ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}">
        </div>

        <div class="form-group">
            <label>Joining Date</label>
            <input type="date" name="joiningDate" class="form-control" value="{{ old('joiningDate', $user->joiningDate) }}">
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{ old('address', $user->address) }}">
        </div>

        <div class="form-group">
            <label>Password (leave blank to keep current)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-sm" style="background-color: #001f3f; color: white;">Update</button>
    </form>
</div>
@endsection