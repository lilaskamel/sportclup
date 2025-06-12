@extends('layout.main') {{-- أو layout الداشبورد تبعك --}}

@section('content')
    <div class="container mt-4">
        <h2>قائمة التمارين</h2>
        <ul class="list-group">
            @foreach($exercises as $exercise)
                <li class="list-group-item">{{ $exercise->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
