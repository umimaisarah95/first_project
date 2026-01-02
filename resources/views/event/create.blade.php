@extends('layout.template')
@section('content')
    <h1>Create New Event</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Event Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Event Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="date">Event Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('events.index') }}" class="btn btn-secondary">Cancel</a>

    </form>

