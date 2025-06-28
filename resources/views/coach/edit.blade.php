@extends('Layout.main')

@section('body')
<br>
<br>
<div class="container mt-5">
    <h2 class="mb-4">  Edit Coach Information</h2>

    <form action="{{ route('coach.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label> FirstName:</label>
            <input type="text" name="firstName" value="{{ old('firstName', $user->firstName) }}" class="form-control">
        </div>
        <div class="form-group">
            <label> LastName:</label>
            <input type="text" name="lastName" value="{{ old('lastName', $user->lastName) }}" class="form-control">
        </div>


        <div class="form-group mt-2">
            <label>Note:</label>
            <input type="text" name="note" value="{{ old('note', $user->coach->note ?? '') }}" class="form-control">
        </div>

            <button type="submit" class="btn btn-sm" style="background-color: #001f3f; color: white;">Update</button>
    </form>
</div>
@endsection
