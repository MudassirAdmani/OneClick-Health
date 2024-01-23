<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect() {
        $usertype = Auth::user()->role;
        if($usertype == 0){
            return view('home.index');
        } else {
            return view('dashboard.index');
        }
    }
}
