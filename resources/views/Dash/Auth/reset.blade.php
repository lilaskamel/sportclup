@extends('Dash.layout')

@section('content')
    <h2>إعادة تعيين كلمة المرور</h2>

    @if ($errors->any())
        <div style="color: #c72525;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('resetPassword') }}">
        @csrf
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" name="email" required><br>

        <label for="password">كلمة المرور الجديدة:</label>
        <input type="password" name="password" required><br>

        <label for="password_confirmation">تأكيد كلمة المرور:</label>
        <input type="password" name="password_confirmation" required><br>

        <button type="submit">إعادة تعيين</button>
    </form>
@endsection
