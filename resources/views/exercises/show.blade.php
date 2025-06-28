@extends('Layout.main')

@section('body')
<div class="container mt-5">
    <h2 class="mb-4 text-center">{{ $exercise->name }}</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $exercise->machine_image) }}" class="img-fluid rounded shadow" alt="Machine Image">
        </div>
    </div>

    <div class="mt-4">
        <h5><strong>وصف التمرين:</strong></h5>
        <p>{{ $exercise->description }}</p>
    </div>
</div>
@endsection
