<?php

namespace App\Services\CoinMarketCap;

use App\Services\CoinMarketCap\Endpoints\HasCryptocurrencies;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class CoinMarketCapService
{
    use HasCryptocurrencies;

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            'X-CMC_PRO_API_KEY' => config('services.cmc.key')
        ])->baseUrl('https://pro-api.coinmarketcap.com/v1/cryptocurrency');
    }
}
