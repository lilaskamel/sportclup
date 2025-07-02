@extends('Layout.main')

@section('body')
<br>
<br>
<div class="container mt-5">
    <h2 class="mb-4">Exercise display menu</h2>
    <div class="row">
        @foreach ($exercises as $exercise)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <img src="{{ asset('storage/' . $exercise->machineImage) }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center">{{ $exercise->machineName }}</h5>
                    <a href="{{ route('exercises.show', $exercise->id) }}" class="btn mt-auto" style="background-color:#003366; color: white;">Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection