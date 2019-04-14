<?php

namespace Redwork\Http\Controllers\Admin;
use Redwork\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redwork\Models\User;
use Redwork\Models\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['users'] = User::all();
        $data['projects'] = Project::latest('created_at')->limit(5)->get();

        return view('admin.dashboard', $data);
    }
}
