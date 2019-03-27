<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \Cache;

class MainController extends Controller
{
    public function index()
    {
        $data = array(
            'pageViews' => Cache::get('pageViews'),
            'coffee' => Cache::get('coffee'),
        );

        return view('main.home')->with($data);
    }

    public function store()
    {
        $validated = request()->validate([
            'email' => 'required',
        ]);

        DB::table('email_updates')->insert($validated);

        return redirect('/#email_updates');
    }

    public function charity()
    {
        return view('main.charity');
    }
    
    public function privacy()
    {
        return view('main.privacy');
    }

    public function mission_statement()
    {
        return view('main.missionstatement');
    }
}
