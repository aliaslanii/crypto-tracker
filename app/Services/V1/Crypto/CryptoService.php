<?php

namespace App\Services\V1\Crypto;

use App\Models\CryptoCurrency;
use App\Services\V1\Contracts\Crypto\CryptoServiceInterface;
use Illuminate\Support\Facades\Http;

class CryptoService implements CryptoServiceInterface
{
    public function fetchCryptos():array
    {
        $response = Http::get('https://api.coingecko.com/api/v3/coins/markets', [
            'vs_currency' => 'usd',
            'order' => 'market_cap_desc',
            'per_page' => 10,
            'page' => 1,
            'sparkline' => false
        ]);
        return $response->json();
    }
    public function setCrypto($cryptos):void
    {
        $newNames = [];
        foreach ($cryptos as $crypto) {
            $newNames[] = $crypto['name'];
            CryptoCurrency::updateOrCreate(
                ['name' => $crypto['name']],
                [
                    'image' => $crypto['image'],
                    'price' => $crypto['current_price'],
                    'retrieved_at' => now()
                ]
            );
        }
        CryptoCurrency::whereNotIn('name', $newNames)->delete();
    }
}
