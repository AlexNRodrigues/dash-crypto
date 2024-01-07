<?php

namespace App\Services\CoinMarketCap\Endpoints;

use App\Services\CoinMarketCap\Entities\Cryptocurrency;
use App\Services\CoinMarketCap\Entities\Crypto;
use Illuminate\Support\Collection;

class Cryptocurrencies extends BaseEndpoint
{
    public function map(): Collection
    {
        return $this->transform(
            $this->service->api->get('/map')->json('data'),
            Cryptocurrency::class
        );
    }

    public  function listingsLatest(): Collection
    {
        return $this->transform(
            $this->service->api->get('/listings/latest?limit=12')->json('data'),
            Crypto::class
        );
    }

}
