<?php

<<<<<<< HEAD:app/Http/Controllers/Home/ProjectsController.php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
=======
namespace Redwork\Http\Controllers\Admin;
use Redwork\Http\Controllers\Controller;
>>>>>>> parent of 069ac39... Revert "This should work lol":app/Http/Controllers/Admin/ProjectsController.php

use Illuminate\Http\Request;
use Redwork\Models\Project;


class ProjectsController extends Controller
{
    
    public function index()
    {
        $projects = Project::all();
         
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Project::create($validated);


        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {

       $project->title = request('title'); 
       $project->description = request('description');
       $project->save();

       return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
