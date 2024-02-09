<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profiles.show', compact('user'));
    }

    public function editName()
    {
        return view('profiles.editname');
    }

    public function updateName(Request $request)
    {
        $userId = Auth::id(); // Get the authenticated user's ID
        User::where('id', $userId)->update(['name' => $request->input('name')]);
        return redirect()->route('profile.show')->with('success', 'Name updated successfully!');
    }

    public function editEmail()
    {
        return view('profiles.editemail');
    }

    public function updateEmail(Request $request)
    {
        $user = Auth::user();
        $user->email = $request->input('email');
        $user->save(); // Corrected method
        return redirect()->route('profile.show')->with('success', 'Email updated successfully!');
    }

    public function editPassword()
    {
        return view('profiles.editpassword');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $user->password = bcrypt($request->input('password'));
        $user->save(); // Corrected method
        return redirect()->route('profile.show')->with('success', 'Password updated successfully!');
    }
}
