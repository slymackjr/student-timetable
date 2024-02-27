<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DeleteExpiredNotices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notices:delete-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete expired notices';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DB::table('notices')->where('due_date', '<', now())->delete();

        $this->info('Expired notices deleted successfully.');
    }
}
