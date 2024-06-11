<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function profilepage()
    {
        return view('profile');
    }

    public function updateProfile(Request $request)
    {
        // Mevcut kullanıcıyı al
        $user = Auth::user();

        // Formdan gelen verileri doğrula
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        ]);

        // Kullanıcı adı ve e-posta adresini güncelle
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        // Kullanıcıyı profil sayfasına yönlendir
        return redirect()->route('admin/profile')->with('success', 'Profile updated successfully.');
    }


}
