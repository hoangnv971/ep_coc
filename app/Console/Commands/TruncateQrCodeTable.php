<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Code;
use Illuminate\Support\Facades\File; 

class TruncateQrCodeTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'empty:qrcode';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Truncate table code';

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
     * @return int
     */
    public function handle()
    {
        Code::truncate();
        File::deleteDirectory(public_path('files'));
        $this->info('done!');
        return 0;
    }
}
