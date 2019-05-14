<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Demo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'demo Scheduler';

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
        \Log::info('Test - '.\Carbon\Carbon::now());
    }
}
