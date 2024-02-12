<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Check if the user is authenticated
        if ($user) {
            // Check if the user has an active membership
            if ($user->usertype == 'seller') {
                $membership = Membership::where('user_id', $user->id)
                    ->where('expiry', '>=', Carbon::now())
                    ->first();

                if (!$membership) {
                    // Membership has expired, update usertype to 'user'
                    $user->update(['usertype' => 'user']);
                }
            }
        }
        return view('home.index');
    }
}
