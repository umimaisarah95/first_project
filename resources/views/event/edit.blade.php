@extends('layout.template')

@section('content')

<h1>Edit Event</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('events.update', $events) }}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
    <label>Event Name</label>
    <input type="text" name="name"
           class="form-control"
           value="{{ old('name', $events->name) }}">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description"
              class="form-control">{{ old('description', $events->description) }}</textarea>
</div>

<div class="mb-3">
    <label>Event Time</label>
    <input type="date"
           name="time"
           class="form-control"
           value="{{ old('time', $events->time) }}">
</div>

<button type="submit" class="btn btn-primary">Update Event</button>

</form>
@endsection
