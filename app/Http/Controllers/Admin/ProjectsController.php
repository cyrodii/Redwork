<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Project;


class ProjectsController extends Controller
{
    public function index(Project $project)
    {
        $projects = Project::latest('created_at')->limit(5)->get();

        return response()->json($projects);
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'teamMembers' => 'required',
            'createdBy' => 'required',
        ]);

        Project::create($validated);

        return Project::latest('created_at')->first();
    }

    public function update(Project $project)
    {

       $project->title = request('title'); 
       $project->description = request('description');
       $project->save();

       return response()->json($projects);
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return response()->json("ok");
    }
}
