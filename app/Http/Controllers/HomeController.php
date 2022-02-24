<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = \App\Models\User::all();

        return view('home.index', compact('user'));
    }
    public function load()
    {
    }
    public function store(Request $request)
    {

//            $request->validate([
//                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
//            ]);
//
//            // Save the file locally in the storage/public/ folder under a new folder named /product
//            $request->file->store('product', 'public');
//
//            // Store the record, using the new file hashname which will be it's new filename identity.
//            $user = new \App\Models\User([
//                "file_path" => $request->file->hashName()
//            ]);

        $user = new \App\Models\User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->save();
        return redirect('/')->with('success', "Account successfully registered.");

    }
}
