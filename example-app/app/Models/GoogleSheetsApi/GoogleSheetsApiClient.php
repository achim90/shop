<?php

declare(strict_types=1);


namespace App\Models\GoogleSheetsApi;

use Google\Client;
use Google\Service\Sheets;

class GoogleSheetsApiClient
{
    private Client $client;

    /**
     * @throws \Google\Exception
     */
    public function __construct(Client $client)
    {
        //base_path - path to root project
        $filePath = base_path() .'/credentials.json';
        $client->setApplicationName('Google Sheets API PHP Shop');
        $client->setScopes('https://www.googleapis.com/auth/spreadsheets');
        $client->setDeveloperKey('AIzaSyDQ5oDEmDs0_jL9P4xMx4WG5KUtqR7wzXs');
        $client->setAuthConfig($filePath);

        $this->client = $client;
    }

    public function init(): Sheets
    {
        return new Sheets($this->client);
    }
}
