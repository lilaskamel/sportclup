<!-- resources/views/dashboard.blade.php -->

@extends('layout.main')

@section('content')
    <h1>مرحباً بك في لوحة التحكم</h1>
    @if (Auth::user()->role === 'admin')
    {{-- عناصر لوحة تحكم الأدمن --}}
    <li class="nav-item">
        <a href="{{ route('users.index') }}" class="nav-link">
            <i class="fas fa-users"></i>
            <p>إدارة المستخدمين</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('coaches.index') }}" class="nav-link">
            <i class="fas fa-chalkboard-teacher"></i>
            <p>إدارة الكوتشات</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('players.index') }}" class="nav-link">
            <i class="fas fa-running"></i>
            <p>استعراض اللاعبين</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('programs.index') }}" class="nav-link">
            <i class="fas fa-list"></i>
            <p>البرامج</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('subscriptions.index') }}" class="nav-link">
            <i class="fas fa-id-card"></i>
            <p>الاشتراكات</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('machines.index') }}" class="nav-link">
            <i class="fas fa-cogs"></i>
            <p>الآلات</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('offers.index') }}" class="nav-link">
            <i class="fas fa-gift"></i>
            <p>العروض</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('complaints.index') }}" class="nav-link">
            <i class="fas fa-exclamation-triangle"></i>
            <p>الشكاوى</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('notifications.index') }}" class="nav-link">
            <i class="fas fa-bell"></i>
            <p>الإشعارات</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('exercises.index') }}" class="nav-link">
            <i class="fas fa-dumbbell"></i>
            <p>التمارين</p>
        </a>
    </li>
@endif

@if (Auth::user()->role === 'coach')
    {{-- عناصر لوحة تحكم الكوتش --}}
    <li class="nav-item">
        <a href="{{ route('coach.profile') }}" class="nav-link">
            <i class="fas fa-user"></i>
            <p>ملفي الشخصي</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('coach.players') }}" class="nav-link">
            <i class="fas fa-users"></i>
            <p>لاعبيَّ</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('coach.programs') }}" class="nav-link">
            <i class="fas fa-tasks"></i>
            <p>إدارة البرامج</p>
        </a>
    </li>
@endif

@endsection
