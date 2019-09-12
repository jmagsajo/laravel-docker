<?php

namespace App\Console\Commands;

use App\Jobs\SampleJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        dispatch(new SampleJob("My Job From Scheduled Command"));
        Log::info('Command Executed');
        echo "Command Executed... \n";
    }
}
