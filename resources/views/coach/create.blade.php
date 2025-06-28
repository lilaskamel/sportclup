@extends('Layout.main')

@section('title', 'Add Coach')

@section('body')
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
                <label for="name">firstName</label>
                <input type="text" name="firstName" class="form-control"  value="{{ old('firstName') }}">
            </div>
            <div class="form-group mb-3">
                <label for="name">lastName</label>
                <input type="text" name="lastName" class="form-control"  value="{{ old('lastName') }}">
            </div>
            <div class="form-group mb-3">
                <label for="name">email</label>
                <input type="text" name="email" class="form-control"  value="{{ old('email') }}">
            </div>
            <div class="form-group mb-3">
                <label for="name">password</label>
                <input type="text" name="password" class="form-control"  value="{{ old('password') }}">
            </div>

           <div class="form-group mb-3">
                <label for="name">note</label>
                <input type="text" name="note" class="form-control"  value="{{ old('note') }}">
            </div>


            <button type="submit" class="btn btn-sm" style="background-color: #001f3f; color: white;">Add</button>
            <a href="{{ route('coach.index') }}" class="btn btn-sm"
                style="background-color: #c72525; color: white;">Cancel</a>
        </form>
    </div>
@endsection
