<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Code;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        if(isset($request->s)){
            $serial = $request->s;
            $code = Code::where('serial', $serial)->first();
            return view('home', compact('code'));
        }
        return view('home');
    }
}
