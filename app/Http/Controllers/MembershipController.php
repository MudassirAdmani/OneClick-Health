<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Membership;
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
        auth()->user()->update(['usertype' => 'seller']);
        return redirect()->back()->with('success', 'Membership Bought');
    }
}
