<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::latest()->paginate(10);
        return view('admin.dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        User::create($validated);
        return redirect()->route('admin.users.index')
            ->with('success', 'Kullanıcı başarıyla oluşturuldu.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.dashboard.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.dashboard.users.edit', compact('user', ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $validated = $request->validated();
        $user->fill($validated);
        $user->save();
        return redirect()->route('admin.users.index')
            ->with('success', 'Kullanıcı başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')
            ->with('success', 'Kullanıcı başarıyla silindi.');
    }
}
