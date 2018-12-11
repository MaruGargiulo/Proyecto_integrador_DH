<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Sticker;
use App\Category;

class UserController extends Controller
{
    public function home()
    {
        $user = Auth::user(); 
        return view('users.home')->with('user', $user);
    }
}
