@extends('Layout.simple')

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
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
            </div>

            <div class="form-group mb-4">
                <label for="specialty">Specialty</label>
                <input type="text" name="specialty" class="form-control" required value="{{ old('specialty') }}">
            </div>

            <button type="submit" class="btn btn-sm" style="background-color: #001f3f; color: white;">Add</button>
            <a href="{{ route('coach.index') }}" class="btn btn-sm"
                style="background-color: #c72525; color: white;">Cancel</a>
        </form>
    </div>
@endsection
