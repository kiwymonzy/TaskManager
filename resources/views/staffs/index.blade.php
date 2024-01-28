@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Staff List</h2>
        <a href="{{ route('staffs.create') }}" class="btn btn-success mb-3">Create Staff</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffs as $staff)
                    <tr>
                        <td>{{ $staff->id }}</td>
                        <td>{{ $staff->name }}</td>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->phone ?: 'Not available' }}</td>
                        <td>{{ $staff->address ?: 'Not available' }}</td>
                        <td>
                            <a href="{{ route('staffs.show', $staff->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('staffs.edit', $staff->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('staffs.destroy', $staff->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this staff member?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
