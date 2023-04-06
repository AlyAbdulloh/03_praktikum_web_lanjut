<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        # code...
        $user = User::where('NIM', '2141720039')->get();
        // $user = User::all();
        return view('profile', ['dataUser' => $user]);
    }
    
}
