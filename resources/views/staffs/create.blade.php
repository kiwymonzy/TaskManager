<!-- resources/views/staffs/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Staff</h2>
        <form action="{{ route('staffs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name"> Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Staff</button>
        </form>
    </div>
@endsection
