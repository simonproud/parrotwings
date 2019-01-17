<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use App\Events\Transaction\TransactionCreated;
class Transaction extends Model
{
use Searchable;
    protected $fillable = [
        'source', 'destination', 'data',
    ];
    protected $dispatchesEvents = [
        'created' => TransactionCreated::class,
    ];

}
