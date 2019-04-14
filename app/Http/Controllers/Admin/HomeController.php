<?php

namespace Redwork\Http\Controllers\Admin;
use Redwork\Http\Controllers\Controller;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\User;
=======
use Redwork\Models\User;
use Redwork\Models\Project;
>>>>>>> parent of 069ac39... Revert "This should work lol"

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
        return view('admin.dashboard', $data);
    }
}
