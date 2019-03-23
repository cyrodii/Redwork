<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main.home');
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
    
    public function getPageViews($zone)
    {
        $subtract = strtotime('-1 year');
        $since = date('Y-m-d', $subtract);
        $until = date('Y-m-d');

        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'https://api.cloudflare.com/client/v4/zones/'. $zone .'/analytics/dashboard?since='. $since .'T00:00:00Z&until='. $until .'T00:00:00Z&continuous=true', [
            'headers' => ['X-Auth-Email' => 'rileykotarba@gmail.com', 
            'X-Auth-Key' => '74b92e5c5779b1aeb660e27ec93dae90f25e6', 
            'Content-Type' => 'application/json']
        ]);

        $data = json_decode($res->getBody(), true);
        return $data['result']['totals']['requests']['all'];
        // "200"
    }
}
