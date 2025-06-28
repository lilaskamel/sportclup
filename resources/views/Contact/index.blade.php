@extends('Layout.main')
@section('body')
<br>
<br>
<div class="container mt-5">
    <h2 class="mb-4">  Contact US</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title </th>
                <th>Subject</th>
                <th>Email </th>
                <th>Description </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->title }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->description }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center"> No Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
