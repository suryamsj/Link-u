<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.home', compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        if ($id != Auth::user()->id) {
            return redirect()->route('profile.index');
        }
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  =>  'required',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name'  =>  $request->name,
            'email' => $user->email
        ]);

        if ($user) {
            return redirect()->route('profile.index')
                ->with('berhasil', 'Berhasil mengubah data!');
        } else {
            return redirect()->route('profile.index')
                ->with('gagal', 'Gagal mengubah data!');
        }
    }

    public function change_password()
    {
        return view('user.password');
    }

    public function update_password(Request $request)
    {
        $user = Auth::user();
        $userPassword = $user->password;
        $request->validate([
            'current_password'  => 'required',
            'password'          => 'required|same:confirm_password|min:6',
            'confirm_password'  => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password' => 'password not match']);
        }
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('berhasil', 'Password berhasil diubah');
    }
}
