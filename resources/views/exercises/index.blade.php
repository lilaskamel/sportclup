@extends('Layout.main')

@section('body')
<br><br>
<div class="container mt-5">
    <h2 class="mb-4">قائمة التمارين</h2>
    <div class="row">
        @foreach($exercises as $exercise)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">

                    <img src="{{ asset('storage/app/public/image/img1.jpg' . $exercise->muscle_image) }}" class="card-img-top" alt="Muscle Image" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">{{ $exercise->name }}</h5>
                        <a href="{{ route('exercises.show', $exercise->id) }}" class="btn btn-primary mt-auto" style="background-color: #001f3f">تفاصيل</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
