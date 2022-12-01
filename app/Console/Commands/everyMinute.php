<?php

namespace App\Console\Commands;

use App\Models\Test_data;
use Illuminate\Console\Command;

class everyMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clear table data ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Test_data::truncate();
        echo "deletion done.";
    }
}
