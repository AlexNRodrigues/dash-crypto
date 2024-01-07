<?php

namespace App\Services\CoinMarketCap\Endpoints;

trait HasCryptocurrencies
{
    public function cryptocurrencies(): Cryptocurrencies
    {
        return new Cryptocurrencies();
     }
}
