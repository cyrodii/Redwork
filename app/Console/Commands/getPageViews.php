<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Classes\Cloudflare;

class getPageViews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cf:getPageViews';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Getting the pageviews from Cloudflare';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->cloudflare = new Cloudflare();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->cloudflare->getPageViews();
        echo $this->cloudflare->getPageViews();
    }
}
