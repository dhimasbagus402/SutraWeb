<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Jamaah;
use Illuminate\Support\Facades\View;

class JamaahShowController extends Controller
{
    
    public function utama()
        {
            $umroh = DB::table('jamaahs')->where('nama', 'umroh')->first();
            $hajj = DB::table('jamaahs')->where('nama', 'hajj')->first();
            return view('home',['umroh'=>$umroh],['hajj'=>$hajj]);
        }
    
}