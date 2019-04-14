<?php

<<<<<<< HEAD:app/Http/Controllers/Home/ProjectsController.php
<<<<<<< HEAD:app/Http/Controllers/Home/ProjectsController.php
namespace App\Http\Controllers\Home;
=======
namespace App\Http\Controllers\Admin;
>>>>>>> parent of e051190... Revert "pushing for u jake":app/Http/Controllers/Admin/ProjectsController.php
use App\Http\Controllers\Controller;
=======
namespace Redwork\Http\Controllers\Admin;
use Redwork\Http\Controllers\Controller;
>>>>>>> parent of 069ac39... Revert "This should work lol":app/Http/Controllers/Admin/ProjectsController.php

use Illuminate\Http\Request;
use Redwork\Models\Project;


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
            'users' => 'required'
        ]);

        Project::create($validated);

        return response()->json($validated);
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
