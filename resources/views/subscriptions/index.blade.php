@extends('Layout.main')

@section('body')
    <div class="container mt-5">
        <br>
        <br>
        <a href="{{ route('subscriptions.create') }}" class="btn btn-success mb-3">Add New Subscribtion</a>
        <style>
            th {
                text-transform: capitalize !important;
            }
        </style>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>StartDate</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscriptions as $subscribtion)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subscribtion->price ?? '---' }}</td>
                        <td>{{ $subscribtion->describtion ?? '---' }}</td>
                        <td>{{ $subscribtion->start_date ?? '---' }}</td>
                        <td>
                            <a href="{{ route('subscriptions.edit', $subscribtion->id) }}"
                                class="btn btn-primary btn-sm">Edit</a>

                            <form action="{{ route('subscriptions.destroy', $subscribtion->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm"
                                    style="background-color: #b31313; color: white;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
