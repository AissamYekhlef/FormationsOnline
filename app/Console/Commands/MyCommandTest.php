<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCommandTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iss';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'iss is my test command';

    
    /**
     * The console command help text.
     *
     * @var string|null
     */
    protected $help = "This is a Text Helper";

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
        //
    }
}
