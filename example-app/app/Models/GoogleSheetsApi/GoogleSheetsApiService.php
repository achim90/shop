<?php

declare(strict_types=1);


namespace App\Models\GoogleSheetsApi;

use Google\Service\Sheets;

class GoogleSheetsApiService
{
    private Sheets $sheets;

    public function __construct(private GoogleSheetsApiClient $client)
    {
        $this->sheets = $this->client->init();
    }

    public function getDataFromSheet(): array
    {
        $client = $this->sheets;
        $sheetId = '1w5KxSGKUlV49WY0dnGwRg6OpvaLKwYEskyEs62OXeOE';
        $sheet = 'Sheet3';
//        $range = 'A:Z';

        return $client
            ->spreadsheets_values
            ->get($sheetId, $sheet)
            ->getValues();
    }
}
