<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
{
    public function addinsurance($plan, $price)
    {
        if (Auth::check()) {
            // If the user is logged in, redirect to the route to add insurance data
            $data = new Insurance;
            $data->name = $plan;
            $data->price = $price;
            $data->user_id = auth()->user()->id;
            $data->save();
            return redirect()->back()->with('success', 'Insurance Bought');
        } else {
            // If the user is not logged in, redirect back with an alert
            return back()->with('alert', 'Please login');
        }
    }
}
