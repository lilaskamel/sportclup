@extends('Layout.main')

@section('body')
<div class="container mt-5">
    <h2 class="mb-4">Coach List</h2>
    <a href="{{ route('coach.create') }}" class="btn btn-success mb-3">Add New Coach</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Specialty</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coaches as $coach)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $coach->name }}</td>
                    <td>{{ $coach->specialty }}</td>
                    <td>
                        <a href="{{ route('coach.edit', $coach->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        <form action="{{ route('coach.destroy', $coach->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
