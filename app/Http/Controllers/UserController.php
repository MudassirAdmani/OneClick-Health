<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fetch
    public function showuser()
    {
        $data = User::all();
        return view('dashboard.showuser', compact('data'));
    }

    // Create
    public function createuser(Request $request)
    {
        $data = new User;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('userimages', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->pass;
        $data->usertype = $request->usertype;
        $data->phone = $request->phone;
        $data->save();
        return redirect()->back()->with('Message', 'User Added Successfully');
    }

    // Delete
    public function deleteuser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('Message', 'User Deleted');
    }

    // Edit
    public function edituser($id)
    {
        $data = User::find($id);
        return view('dashboard.edituser', compact('data'));
    }

    // Update
    public function updateuser(Request $request, $id)
    {
        $data = User::find($id);
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('userimages', $imagename);
            $data->image = $imagename;
        }
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->usertype = $request->usertype;
        $data->save();
        return redirect()->back()->with('Message', 'Product Updated Successfully');
    }
}
