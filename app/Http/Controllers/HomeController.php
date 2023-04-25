<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Code;

class HomeController extends Controller
{

    public function index()
    {
        $codes = Code::limit(30)->get();
        $logoPath = public_path('/images/logo.jpg');
        return view('home', compact('codes', 'logoPath'));
    }
}
