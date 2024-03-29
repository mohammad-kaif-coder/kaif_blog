<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class DeleteDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-data-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DB :: table('services')->delete();
        $this->info('Your data successfully deleted');
    }
}
