<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterUserRequest;
class RegisterController extends Controller
{
    public function index(): View
    {
        return view("auth.register");
    }

    public function store(RegisterUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);

        if ($user->save()) {

            $credentials = $request->only("email", "password");

            if (Auth::attempt($credentials)) {
                return redirect()->route("home");
            }

            return redirect(route("login.index"))->with("error", "Login failed");
        }

        return redirect(route("register.index"))->with("error", "Failed to create account");

    }
}
