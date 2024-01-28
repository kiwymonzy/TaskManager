<!-- resources/views/projects/show.blade.php -->

@extends('layouts.app')

@section('title', 'Project Details')

@section('content')
    <h1>Project Details</h1>

    <p><strong>ID:</strong> {{ $project->id }}</p>
    <p><strong>Name:</strong> {{ $project->name }}</p>

    <a href="{{ route('projects.index') }}" class="btn btn-primary">Back to Projects</a>
@endsection
