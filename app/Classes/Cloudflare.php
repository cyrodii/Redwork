<?php

namespace App\Classes;
use Cloudflare\API\Auth\APIKey;
use Cloudflare\API\Adapter\Guzzle;
use Cloudflare\API\Endpoints\Zones;
use \Cache;

class Cloudflare {
    
    
    public function __construct()
    {
        $this->key = new APIKey('rileykotarba@gmail.com', '74b92e5c5779b1aeb660e27ec93dae90f25e6');
        $this->adapter = new Guzzle($this->key);      
        $this->zones = new Zones($this->adapter);
    }
    
    public function getPageViews()
    {

        $subtract = strtotime('-1 year');
        $since = date('Y-m-d', $subtract);
        $until = date('Y-m-d');
        $time = urldecode('T00:00:00Z');
        $data = [];

        foreach ($this->zones->listZones()->result as $zone) {
            $data[] = $this->zones->getAnalyticsDashboard($zone->id, $since.$time, $until.$time)->totals->requests->all;
        }
        
        if(Cache::has('pageViews')){
            Cache::forget('pageViews');
            Cache::add('pageViews', array_sum($data), now()->addYears(1));
        } else {
            Cache::add('pageViews', array_sum($data), now()->addYears(1));
        }

        echo array_sum($data);
    }
}

