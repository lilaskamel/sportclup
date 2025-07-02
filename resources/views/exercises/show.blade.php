@extends('Layout.main')

@section('body')
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 600px;">
        <img src="{{ asset('storage/' . $exercise->machineImage1) }}" class="card-img-top" alt="صورة التمرين الإضافي" style="height: 300px; object-fit: cover;">

        <div class="card-body">
            <h3 class="card-title">{{ $exercise->machineName1 }}</h3>
            <p class="text-muted"><strong>Note:</strong> {{ $exercise->note }}</p>
            <p><strong>Description:</strong> {{ $exercise->description }}</p>
            <a href="{{ route('exercises.index') }}" class="btn mt-3" style="background-color:#003366; color: white;">Back to list</a>
        </div>
    </div>
</div>
@endsection