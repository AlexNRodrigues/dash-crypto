<?php

namespace App\Console\Commands;

use App\Services\CoinMarketCap\CoinMarketCapService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Playground extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $service = new CoinMarketCapService();
//        $result = $service->api->get('https://sandbox-api.coinmarketcap.com/v1/cryptocurrency/map');

//        $result = $service->cryptocurrencies()->map();

        $result = $service->cryptocurrencies()->listingsLatest();

        dd($result);

        return Command::SUCCESS;
    }
}
