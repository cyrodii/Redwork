<?php

namespace Redwork\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class consumeCoffee extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'consumeCoffee';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds to coffee cache twice daily';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        (Cache::has('coffee') ? Cache::increment('coffee', 1) : Cache::add('coffee', 1, now()->addYears(1)));
    }
}
