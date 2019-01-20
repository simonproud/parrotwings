<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class AdminController extends Controller
{
    public function index(){
        if(Auth::user()->id != 1){abort(403);}
        $data['users'] = User::where('id', '>', 1)->with('wallet')->paginate(15);
     $data['wallet'] = User::find(Auth::user()->id)->wallet()->first()->toArray();

        return view('admin.index', $data);
    }

    public function actionBan(Request $request){
        $user = User::find($request->id);
        $user->active = 0;
        $user->save();
        return back();
    }
    public function actionUnban(Request $request){
        $user = User::find($request->id);
        $user->active = 1;
        $user->save();
        return back();
    }

}
