<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(): View {
        return view('register', ["title" => "Register"]);
    }

    public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
            'username' => 'required|unique:users|min:4',
            'name' => 'required',
            'password' => 'required|min:8',
            'password-repeat' => 'required|min:8|same:password',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        session()->flash('success', 'Registrasi sukses. Silakan login.');
        return redirect('/login');
    }
}
