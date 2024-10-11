<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\LoginUserRequest;

class AdminLoginController extends Controller
{
    public function index(): View
    {
        return view('admin.auth.login');
    }

    public function submit(LoginUserRequest $request): RedirectResponse
    {
        $credentials = $request->only("email", "password");
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route("admin.dashboard");
        }
        return redirect(route("admin.register.index"))->with("error", "Login failed");
    }

    public function logoutAdmin(): RedirectResponse
    {
        Auth::guard('admin')->logout();
        return redirect()->route('welcome');
    }
}
