<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|alpha',
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'is_admin' => 'required|boolean'
        ]);

        $user = new User();

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = \Hash::make($validated['password']);
        $user->is_admin = $validated['is_admin'];

        $user->save();

        $request->session()->flash('success', __('site.user_added'));
        return to_route('admin.users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            request()->session()->flash('danger', __('site.not_exist'));
            return to_route('admin.users');
        }

        return view('admin.users.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            request()->session()->flash('danger', __('site.not_exist'));
            return to_route('admin.users');
        }

        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        if (!$user) {
            request()->session()->flash('danger', __('site.not_exist'));
            return to_route('admin.users');
        }

        $validated = $request->validate([
            'name' => 'required|alpha',
            'email' => ['required', 'email', "unique:users,email,$id"],
            'password' => ['sometimes', 'confirmed'],
            'is_admin' => 'required|boolean'
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->is_admin = $validated['is_admin'];

        if ($validated['password']) {
            $user->password = \Hash::make($validated['password']);
        }

        $user->save();

        $request->session()->flash('success', __('site.user_updated'));
        return to_route('admin.users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            request()->session()->flash('danger', __('site.not_exist'));
            return to_route('admin.users');
        }

        $user->delete();

        request()->session()->flash('success', __('site.user_deleted'));
        return to_route('admin.users');
    }
}
