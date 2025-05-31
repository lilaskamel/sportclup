@extends('Layout.main')

@section('body')
<div class="container mt-5"><br>
    <br>
    <h2 class="mb-4">Add coaches  </h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('coaches.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">name </label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="specialty">Specialty</label>
            <input type="text" name="specialty" class="form-control" required value="{{ old('specialty') }}">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
        <a href="{{ route('coaches.index') }}" class="btn btn-secondary">Delete</a>
    </form>
</div>
@endsection
