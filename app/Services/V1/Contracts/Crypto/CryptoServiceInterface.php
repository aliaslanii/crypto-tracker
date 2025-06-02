<?php

namespace App\Services\V1\Contracts\Crypto;

interface CryptoServiceInterface
{
    public function fetchCryptos():array;

    public function setCrypto($cryptos):void;
}
