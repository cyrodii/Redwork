<?php

namespace Redwork\Http\Controllers\Home;
use Redwork\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Cache;
use Redwork\Classes\Cloudflare;

class MainController extends Controller
{
    public function __construct()
    {
        $this->cloudflare = new Cloudflare();
    }
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

    public function test()
    {
        return view('admin.main');
    }
}
