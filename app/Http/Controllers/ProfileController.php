<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        return view("front.author", compact("user"));
    }
}
