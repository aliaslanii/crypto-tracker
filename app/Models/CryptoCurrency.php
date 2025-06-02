<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasVersion4Uuids;
use Illuminate\Database\Eloquent\Model;

class CryptoCurrency extends Model
{
    use HasVersion4Uuids;
    protected $fillable = [
        'name',
        'price',
        'image',
        'retrieved_at',
    ];
}
