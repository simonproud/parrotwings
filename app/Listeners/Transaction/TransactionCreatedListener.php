<?php

namespace App\Listeners\Transaction;

use App\Events\Transaction\TransactionCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use App\User;

class TransactionCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TransactionCreated  $event
     * @return void
     */
    public function handle(TransactionCreated $event)
    {
    $wallets = User::find($event->transaction->source)->wallet()->first();
    $walletd = User::find($event->transaction->destination)->wallet()->first();
    if($wallets->wallet>= $event->transaction->data){
        $wallets->wallet = $wallets->wallet-$event->transaction->data;
        $wallets->save();
        $walletd->wallet = $walletd->wallet+$event->transaction->data;
        $walletd->save();
    }else{
        Log::info($wallets);
        Log::info($walletd);
    }


    }
}
