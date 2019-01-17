<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Transaction;
class WalletController extends Controller
{

    public function index(){
    $data = [];
    $data['wallet'] = User::find(Auth::user()->id)->wallet()->first()->toArray();
    $data['user'] = User::find(Auth::user()->id)->first()->toArray();

	return view('wallet.index', $data);
    }

    public function moneyto(){
    $data = [];
    $data['wallet'] = User::find(Auth::user()->id)->wallet()->first()->toArray();
    $data['user'] = User::find(Auth::user()->id)->first()->toArray();

	return view('wallet.moneyto', $data);
    }

    public function sendMoney(Request $request){
        $swallet = User::find(Auth::user()->id)->wallet()->first()->toArray();
        if($swallet['wallet'] >= $request['money']){
            $t = new Transaction;
            $t->source = Auth::user()->id;
            $t->destination = $request->user;
            $t->data = $request->money;
            $t->save();
       }
    return ['data' => $t, 'status' => 'ok'];
    }

    public function transactions(Request $request){
    $trob = Transaction::where('source', Auth::user()->id)->orWhere('destination',  Auth::user()->id)->orderBy('created_at', 'desc')->paginate(15);
    $tr = $trob->toArray();

    foreach($tr['data'] as $k=>$t){

        $tr['data'][$k]['source'] = User::find($tr['data'][$k]['source'])->name;
        $tr['data'][$k]['destination'] = User::find($tr['data'][$k]['destination'])->name;
    }
    $data['wallet'] = User::find(Auth::user()->id)->wallet()->first()->toArray();
    $data['transactions'] = $tr;
    $data['transactionsob'] = $trob;
    return view('wallet.transactions', $data);
    }

}
