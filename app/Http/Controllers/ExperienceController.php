<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ExperienceController extends Controller
{
    //
    public function index()
    {
        # code...
        $user = User::all();
        return view('experience', ['dataUser' => $user]);
    }
}
