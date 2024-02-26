<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
{
    // Add
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

    // Fetch
    public function showinsurance()
    {
        $data = Insurance::all();
        return view('dashboard.showinsurance', compact('data'));
    }

    // Delete
    public function deleteinsurance($id)
    {
        $data = Insurance::find($id);
        $data->delete();
        return redirect()->back()->with('Message', 'Insurance Deleted');
    }
}
