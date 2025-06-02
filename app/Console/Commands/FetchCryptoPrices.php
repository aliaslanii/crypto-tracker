<?php

namespace App\Console\Commands;

use App\Services\V1\Crypto\CryptoService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchCryptoPrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-crypto-prices';

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
        $service = new CryptoService();

        $cryptos = $service->fetchCryptos();
        $service->setCrypto($cryptos);

        $this->info('Cryptocurrencies fetched successfully!');
        $this->info('Database updated with latest top 10 cryptocurrencies.');
    }

}
