<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Fetch
    public function showproduct()
    {
        $data = Pharmacy::all();
        return view('dashboard.showproduct', compact('data'))
    }

    // Create
    public function createproduct(Request $request)
    {
        $data = new Pharmacy;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('productimages', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->stock = $request->stock;
        $data->user_id = auth()->user()->id;
        $data->save();
        return redirect()->back()->with('Message', 'Product Added Successfully');
    }

    // Delete
    public function deleteproduct($id)
    {
        $data = Pharmacy::find($id);
        $data->delete();
        return redirect()->back()->with('Message', 'Product Deleted');
    }

    // Edit
    public function editproduct($id)
    {
        $data = Pharmacy::find($id);
        return view('dashboard.editproduct', compact('data'));
    }

    // Update
    public function updateproduct(Request $request, $id)
    {
        $data = Pharmacy::find($id);
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('productimages', $imagename);
            $data->image = $imagename;
        }
        $data->name = $request->name;
        $data->price = $request->price;
        $data->stock = $request->stock;
        $data->save();
        return redirect()->back()->with('Message', 'Product Updated Successfully');
    }
}
