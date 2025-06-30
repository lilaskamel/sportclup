@extends('Layout.main')

@section('body')
    <div class="container mt-5">
        <br><br>

        <a href="{{ route('users.create') }}" class="btn btn-success mb-3">{{ __('Add New Member') }}</a>

        <style>
            th {
                text-transform: capitalize !important;
            }
        </style>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>Birthdate</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Joining Date</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->firstName }}</td>
                        <td>{{ $user->lastName }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{$user->password}}</td>
                        <td>{{ \Carbon\Carbon::parse($user->birthdate)->format('d-m-Y') }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ \Carbon\Carbon::parse($user->joiningDate)->format('d-m-Y') }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm text-white"
                                style="background-color:#003366;">Edit</a>

                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm text-white"
                                    style="background-color: #c72525; border: none;">
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