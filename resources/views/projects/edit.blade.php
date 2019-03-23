@extends('layout')

@section('title', 'Edit')

@section('content')

    <h1>Edit Projects</h1>

<form action="/projects/{{ $project->id }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $project->title }}" required>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" name="description" id="description" rows="3" required>{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>

    <form action="/projects/{{ $project->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete Project</button>
    </form>

@endsection