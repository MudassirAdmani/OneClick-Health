<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // login work
    public function redirect()
    {
        // check usertype
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('dashboard.index');
        } else {
            return view('home.index');
        }
    }
    // default page
    public function index()
    {
        return view('welcome');
    }
}