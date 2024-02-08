<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function addmembership($plan, $price)
    {
        $data = new Membership;
        $data->name = $plan;
        $data->price = $price;
        $data->user_id = auth()->user()->id;
        $expiryDate = Carbon::now()->addDays(30);
        $data->expiry = $expiryDate;
        $data->save();
        $user = auth()->user();
        $user->usertype = 'seller';
        $user->save();
        return redirect()->back()->with('success', 'Membership Bought');
    }
}
