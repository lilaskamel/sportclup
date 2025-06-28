@extends('Layout.main')

@section('body')
    <div class="container mt-5">
        <h2 class="mb-4">Coach List</h2>
        <a href="{{ route('coach.create') }}" class="btn btn-success mb-3">Add New Coach</a>
        <style>
            th {
                text-transform: capitalize !important;
            }
        </style>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>NOTE</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coaches as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->firstName }}</td>
                        <td>{{ $user->lastName }}</td>
                        <td>{{ optional($user->coach)->note ?? '—' }}</td>

                        <td>
                            <a href="{{ route('coach.edit', $user->id) }}" class="btn btn-primary btn-sm"
                                style="background-color: #001f3f; color: white;">Edit</a>


                            <form action="{{ route('coach.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm"
                                    style="background-color: #b31313; color: white; border: none;">Delete</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
