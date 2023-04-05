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
        $user = User::all();
        return view('profile', ['dataUser' => $user]);
    }
    
}
