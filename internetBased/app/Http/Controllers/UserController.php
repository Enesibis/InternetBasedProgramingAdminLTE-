<?php

namespace App\Http\Controllers;

use App\Models\Duyuru;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userprofile()
    {
        return view('userprofile');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


    public function updateProfile(Request $request)
    {
        // Mevcut kullanıcıyı al
        $user = Auth::user();

        // Formdan gelen verileri doğrula
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'required|string|max:255', // Yeni şifre alanını ekle ve doğrula, nullable yaparak zorunlu olmadığını belirt
        ]);

        // Kullanıcı adı ve e-posta adresini güncelle
        $user->name = $request->name;
        $user->email = $request->email;


        $user->password = bcrypt($request->password);


        // Değişiklikleri kaydet
        $user->save();

        // Kullanıcıyı profil sayfasına yönlendir
        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }



    public function showMessages()
    {
        // Tüm duyuruları başlık, içerik ve oluşturulma tarihi ile al
        $messages = Duyuru::select('baslik', 'icerik', 'created_at')->get();

        // showMessages.blade.php view'ını kullanarak duyuruları göster
        return view('showMessages', compact('messages'));
    }

}
