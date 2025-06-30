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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Address</th>
                <th>password</th>
                <th>Birthdate</th>
                <th>Joining Date</th>
                <th>Note</th>
                <th>Dscreption</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coaches as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->firstName }}</td>
                <td>{{ $user->lastName }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{$user->gender }}</td>
                <td>{{ $user->address }}</td>
                <td>{{$user->password }}</td>
                <td>{{ $user->birthdate }}</td>
                <td>{{ $user->joiningDate }}</td>
                <td>{{ $user->coach->note }}</td>
                <td>{{$user->coach->descreption }}</td>
                <td>
                    <a href="{{ route('coach.edit', $user->id) }}" class="btn btn-sm"
                        style="background-color:#003366; color: white;">Edit</a>
                    <form action="{{ route('coach.destroy', $user->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
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