@extends('layout')

@section('title', 'Show')

@section('content')

    <h1>{{ $project->title }}</h1>

    <p>{{ $project->description }}</p>

    @if ($project->tasks->count())
        <div>
             @foreach ($project->tasks as $task)            
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-check">
                        <label class="form-check-label {{ $task->completed ? 'is-complete' : ''}}">
                            <input type="checkbox" class="form-check-input" name="completed" id="completed" value="checkedValue" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                            {{$task->description}}
                        </label>
                    </div>
                </form>
            @endforeach
        </div>      
    @endif
    
    <form action="/projects/{{ $project->id }}/tasks" method="POST" name="tasks">
        @csrf
        <div class="form-group">    
          <label for="task"><h3>New Task</h3></label>
          <input type="text" class="form-control" name="description" id="task" aria-describedby="helpId" placeholder="Create New Task" required>
        </div>
    </form>
    <button type="button" class="btn btn-primary" type="submit" onClick="document.forms['tasks'].submit();">Create New Task</button>
    <a class="btn btn-warning" href="/projects/{{ $project->id }}/edit" role="button">Edit the Project</a>
@endsection