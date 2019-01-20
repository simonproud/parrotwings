<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Transaction;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        if (Auth::check()) {
            // The user is logged in...
            $trob = Transaction::where('source', Auth::user()->id)->orWhere('destination',  Auth::user()->id)->orderBy('created_at', 'desc')->take(6)->get();
    $tr = $trob->toArray();
if(count($tr) > 0){
    foreach($tr as $k=>$t){

        $tr[$k]['source'] = User::find($tr[$k]['source'])->name;
        $tr[$k]['destination'] = User::find($tr[$k]['destination'])->name;
    }
    }
    $data['transactions'] = $tr;
    $data['transactionsob'] = $trob;
             $data['wallet'] = User::find(Auth::user()->id)->wallet()->first()->toArray();

        }else{
            $data['wallet']['wallet'] = 0;
        }


        return view('home', $data);
    }

    public function getUsers(Request $request){
       $users = User::search($request->q)->get()->toArray();
        return $users;

    }
}
