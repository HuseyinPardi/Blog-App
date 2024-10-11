<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterUserRequest;
class AdminRegisterController extends Controller
{
    public function index(): View
    {
        return view('admin.auth.register');
    }

    public function store(RegisterUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $admin = Admin::create($validated);

        if ($admin->save()) {

            $credentials = $request->only("email", "password");

            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect()->route("admin.dashboard");
            }

            return redirect(route("admin.login.index"))->with("error", "Login failed");
        }

        return redirect(route("admin.register.index"))->with("error", "Failed to create account");

    }
}
