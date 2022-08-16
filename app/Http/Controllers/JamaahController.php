<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JamaahController extends Controller
{
    public function index()
    {
        $umroh = DB::table('jamaah')->where('nama', 'umroh')->first();
        return view('pages.home');
    }
}
