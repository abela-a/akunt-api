<?php

namespace App\Models;

use App\Models\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use UUID;

    protected $fillable = [
        'title',
        'amount',
        'time',
        'type',
    ];

    protected $casts = [
        'amount' => 'double',
        'time' => 'datetime',
    ];
}
