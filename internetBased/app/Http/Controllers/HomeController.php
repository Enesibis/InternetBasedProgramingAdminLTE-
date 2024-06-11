<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('userhome', compact('product'));
    }

    public function adminHome()
    {
        return view('dashboard');
    }

    public function userHome()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('userhome', compact('product'));
    }
}
