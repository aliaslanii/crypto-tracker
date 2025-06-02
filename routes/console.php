<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;



Schedule::command("app:fetch-crypto-prices")->everyTenSeconds();
