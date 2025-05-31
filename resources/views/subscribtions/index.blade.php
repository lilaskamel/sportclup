@extends('Layout.main')

@section('body')
<div class="container mt-5">
    <br>
    <h2 class="mb-4">Subscribtions List</h2>
    <a href="{{ route('subscribtions.create') }}" class="btn btn-success mb-3">Add New Subscribtion</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscribtions as $subscribtion)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $subscribtion->name ?? '---' }}</td>
                    <td>{{ $subscribtion->price ?? '---' }}</td>
                    <td>{{ $subscribtion->describtion ?? '---' }}</td>
                    <td>{{ $subscribtion->start_date ?? '---' }}</td>
                    <td>
                        <a href="{{ route('subscribtions.edit', $subscribtion->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        <form action="{{ route('subscribtions.destroy', $subscribtion->id) }}" method="POST" style="display:inline;">
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
