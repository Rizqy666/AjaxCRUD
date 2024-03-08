<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AvatarController extends Controller
{
    public function index()
    {
        return view('avatar.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = auth()->user();
        if (!$user) {
            return redirect()->route('home')->with('error', 'User tidak ditemukan.');
        }

        $avatarName = $user->id . '_avatar' . time() . '.' . $request->avatar->getClientOriginalExtension();
        $request->avatar->storeAs('avatars', $avatarName);
        $user->avatar = $avatarName;

        if (!$user->save()) {
            return redirect()->route('home')->with('error', 'Gagal menyimpan avatar.');
        }

        return redirect()->route('home')->with('success', 'Avatar Anda berhasil diperbarui.');
    }
}
