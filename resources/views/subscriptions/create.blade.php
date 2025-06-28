@extends('layout.app')

@section('content')
    <div class="container">
        <form action="{{ route('subscriptions.store') }}" method="POST">
            @csrf
           
            <h2 style="color: #001f3f;">Add New Subscribtions</h2>

            <div class="mb-3">
                <label for="startDate" class="form-label">StartDate</label>
                <input type="text" name="startDate" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label"> Price</label>
                <input type="text" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description </label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <button type="submit" class="btn" style="background-color: #001f3f; color: white;">Add</button>
            <a href="{{ route('subscriptions.index') }}" class="btn"
                style="background-color: #c72525; color: white;">Cancel</a>
        </form>


        </form>
    </div>
@endsection
