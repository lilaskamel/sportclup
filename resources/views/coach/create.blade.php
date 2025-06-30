@extends('Layout.app')

@section('content')

<div class="container mt-5">
    <h2 style="color: #001f3f;">Add Coach</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('coach.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" class="form-control" value="{{ old('firstName') }}">
        </div>

        <div class="form-group mb-3">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" class="form-control" value="{{ old('lastName') }}">
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" value="{{ old('password') }}">
        </div>

        <div class="form-group mb-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>

        <div class="form-group mb-3">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" value="{{ old('gender') }}">
                <option value="">Select Gender</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="{{ old('address') }}">
        </div>

        <div class="form-group mb-3">
            <label for="birthdate">Birthdate</label>
            <input type="date" name="birthdate" class="form-control" value="{{ old('birthdate') }}">
        </div>

        <div class="form-group mb-3">
            <label for="joiningDate">Joining Date</label>
            <input type="date" name="joiningDate" class="form-control" value="{{ old('joiningDate') }}">
        </div>

        <div class="form-group mb-3">
            <label for="note">Note</label>
            <input type="text" name="note" class="form-control" value="{{ old('note') }}">
        </div>

       <div class="form-group mt-2">
            <label>Descreption</label>
            <input type="text" name="descreption" value="{{ old('descreption', $user->coach->descreption ?? '') }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-sm" style="background-color: #001f3f; color: white;">Add</button>
        <a href="{{ route('coach.index') }}" class="btn btn-sm" style="background-color: #c72525; color: white;">Cancel</a>
    </form>
</div>

@endsection