<?php

namespace App\Services\CoinMarketCap\Entities;

class Cryptocurrency
{
    public int $id;
    public int $rank;
    public string $name;
    public ?string $symbol;
    public int $isActive;
    public ?string $status;
    public string $firstHistoricalData;
    public string $lastHistoricalData;

    public function __construct(array $data)
    {
        $this->id = data_get($data, 'id');
        $this->rank = data_get($data, 'rank');
        $this->name = data_get($data, 'name');
        $this->symbol = data_get($data, 'symbol');
        $this->isActive = data_get($data, 'is_active');
        $this->status = data_get($data, 'status');
        $this->firstHistoricalData = data_get($data, 'first_historical_data');
        $this->lastHistoricalData = data_get($data, 'last_historical_data');
    }
}
