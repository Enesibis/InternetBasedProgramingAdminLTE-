<?php

namespace App\Http\Controllers;
use App\Models\Duyuru;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //


    public function mesajGonder(Request $request)
    {
        $this->middleware(UserAccess::class . ':admin'); // Middleware'i burada çağırın

        // Formdan gelen verileri al
        $baslik = $request->input('baslik');
        $icerik = $request->input('icerik');

        // Duyuru modelini kullanarak veritabanına ekle
        Duyuru::create([
            'baslik' => $baslik,
            'icerik' => $icerik
        ]);


        // Başarılı mesaj ile birlikte yönlendir
        return redirect()->back()->with('success', 'Mesaj başarıyla gönderildi.');
    }
}
