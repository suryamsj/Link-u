<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "total_link" => Link::count(),
            "total_user" => User::count(),
            "total_views" => Link::sum('views')
        ]);
    }
}
