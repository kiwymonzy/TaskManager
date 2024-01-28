<!-- resources/views/staffs/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Staff Details</h2>
        <p><strong>ID:</strong> {{ $staff->id }}</p>
        <p><strong>Name:</strong> {{ $staff->name }}</p>
        <p><strong>Email:</strong> {{ $staff->email }}</p>
        <p><strong>Phone:</strong> {{ $staff->phone ?: 'Not available' }}</p>
        <p><strong>Address:</strong> {{ $staff->address ?: 'Not available' }}</p>

        <a href="{{ route('staffs.edit', $staff->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('staffs.destroy', $staff->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
@endsection
