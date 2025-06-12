@extends('Layout.main')

@section('body')
    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
    <style>
        body {
            background-color: #f1f4f9;
            color: #001f3f;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h1 {
            color: #001f3f;
            font-weight: bold;
        }

        label {
            color: #001f3f;
            font-weight: 600;
        }

        .form-control,
        .form-select {
            background-color: #f0f4f8;
            border: 1px solid #ccd6e0;
            padding: 10px 14px;
            border-radius: 8px;
            color: #001f3f;
        }

        .btn-navy {
            background-color: #001f3f;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 16px;
            transition: 0.3s ease;
        }

        .btn-navy:hover {
            background-color: #001f3f;
;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
    </style>

    <br><br>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="mb-4 text-center">Edit Information</h1>

        <form action="{{ route('profile.update') }}" method="POST" class="form-container">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
            </div>

            <div class="mb-3 position-relative">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" name="password" class="form-control" id="password">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">👁️</button>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" value="{{ $user->address }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Birthdate</label>
                <input type="date" name="birth_date" value="{{ $user->birth_date }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option value="m" {{ $user->gender == 'm' ? 'selected' : '' }}>Male</option>
                    <option value="f" {{ $user->gender == 'f' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Joining Date</label>
                <input type="date" name="join_date" value="{{ $user->join_date }}" class="form-control">
            </div>

            <button type="submit" class="btn-navy w-100 mt-3">Save Edit</button>
        </form>
    </div>
@endsection
