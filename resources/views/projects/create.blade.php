@extends('layout')

@section('title', 'Create')

@section('content')

    <h1>Create Projects</h1>

    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project Title" value="{{ old('title') }}">
        </div>
        <div>
            <textarea name="description" id="desc" cols="30" rows="10">{{ old('description') }}</textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>
        <div class="notifcation">
            <ul>
                @foreach ($errors->all() as $error)
                 <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </form>
@endsection