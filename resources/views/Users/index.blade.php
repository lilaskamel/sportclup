@extends('Layout.main')

@section('body')
    <div class="container mt-5">
        <br>
        <br>
        <a href="{{ route('users.create') }}" class="btn btn-success mb-3">Add New Member</a>
        <style>
            th {
                text-transform: capitalize !important;
            }
        </style>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>firstName</th>
                    <th>lastName</th>
                    <th>email</th>
                    <th>birthdate</th>
                    <th>gender</th>
                    <th>phone</th>
                    <th>joiningdate</th>
                    <th>address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->birthdate }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->joiningdate }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm"
                                style="background-color:#003366; color: white;">Edit</a>

                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm"
                                    style="background-color: #c72525; color: white; border: none;">
                                    Delete
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
