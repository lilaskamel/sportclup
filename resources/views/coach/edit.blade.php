@extends('Layout.app')

@section('content')
<br>
<br>
<div class="container ">
    <h2 class="mb-4"> Edit Coach Information</h2>

    <form action="{{ route('coach.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label> FirstName</label>
            <input type="text" name="firstName" value="{{ old('firstName', $user->firstName) }}" class="form-control">
        </div>
        <div class="form-group">
            <label> LastName</label>
            <input type="text" name="lastName" value="{{ old('lastName', $user->lastName) }}" class="form-control">
        </div>
        <div class="form-group">
            <label> Email</label>
            <input type="text" name="email" value="{{ old('email', $user->email) }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Phone </label>
            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" value="{{ old('gender') }}">
                <option value="">Select Gender</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label>Address </label>
            <input type="text" name="address" value="{{ old('address', $user->address) }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Password </label>
            <input type="text" name="password"  class="form-control">
        </div>
        <div class="form-group">
            <label>Birthdate </label>
            <input type="date" name="birthdate" value="{{ old('birthdate', $user->birthdate) }}" class="form-control">
        </div>
        <div class="form-group">
            <label>JoiningDate </label>
            <input type="date" name="joiningDate" value="{{ old('joiningDate', $user->joiningDate) }}" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label>Note</label>
            <input type="text" name="note" value="{{ old('note', $user->coach->note ?? '') }}" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label>Descreption</label>
            <input type="text" name="descreption" value="{{ old('descreption', $user->coach->descreption ?? '') }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-sm" style="background-color: #001f3f; color: white;">Update</button>
    </form>
</div>
@endsection