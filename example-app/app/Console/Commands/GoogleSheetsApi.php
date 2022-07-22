<?php

namespace App\Console\Commands;

use App\Models\GoogleSheetsApi\GoogleSheetsApiService;
use Illuminate\Console\Command;

class GoogleSheetsApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:sheet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get sheet';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(GoogleSheetsApiService $client)
    {
        $client->getDataFromSheet();
        return 0;
    }
}
