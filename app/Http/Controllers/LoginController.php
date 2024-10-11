<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginUserRequest;
class LoginController extends Controller
{
    public function index(): View
    {
        return view("auth.login");
    }

    public function submit(LoginUserRequest $request): RedirectResponse
    {
        $credentials = $request->only("email", "password");
        if (Auth::attempt($credentials)) {
            return redirect()->route("home");
        }
        return redirect(route("login.index"))->with("error", "Login failed");
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
