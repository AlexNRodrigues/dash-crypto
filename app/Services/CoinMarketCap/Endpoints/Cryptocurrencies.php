<?php

namespace App\Services\CoinMarketCap\Endpoints;

use App\Services\CoinMarketCap\CoinMarketCapService;
use App\Services\CoinMarketCap\Entities\Cryptocurrency;
use Illuminate\Support\Collection;

class Cryptocurrencies
{
    protected CoinMarketCapService $service;
    public function __construct()
    {
        $this->service = new CoinMarketCapService();
    }

    public function map()
    {
        return $this->transform(
            $this->service->api->get('/map')->json('data'),
            Cryptocurrency::class
        );
    }

    private function transform(mixed $json, string $entity): Collection
    {
        return collect($json)->map(fn ($sport) => new $entity($sport));
    }
}
