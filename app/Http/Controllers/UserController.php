<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Trade;

class UserController extends Controller
{
    public function home()
    {

        $trades = Trade::where('owner_id', Auth::user()->id)->where('tradeNotify', true)->get();

        $user = Auth::user(); 
        return view('users.home')->with('user', $user)->with('trades', $trades);
    }
}
