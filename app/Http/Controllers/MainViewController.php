<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jamaah;
use App\Models\Images;
use App\Models\Blog;
use App\Models\Promo;
use Illuminate\Support\Facades\View;

class MainViewController extends Controller
{

        public function utama()
        {
                $maxlenght = Promo::count();
                $blogs = Blog::latest()->paginate(3);
                $promos = Promo::latest()->paginate(4);
                $umroh = DB::table('jamaahs')->where('nama', 'umroh')->first();
                $hajj = DB::table('jamaahs')->where('nama', 'hajj')->first();
                $baner1 = DB::table('images')->where('nama', 'Baner_1')->first();
                $baner2 = DB::table('images')->where('nama', 'Baner_2')->first();
                $aboutus = DB::table('images')->where('nama', 'About_Us')->first();
                $aboutus2 = DB::table('images')->where('nama', 'About_Us_2')->first();
            
                return View::make('home', compact('blogs', 'promos', 'hajj','umroh','baner1','baner2',
                                'aboutus','aboutus2'));
        }
        
        public function banerabout()
        {
                $banerabout = DB::table('images')->where('nama', 'Baner_About')->first();
                return View::make('pages.about',compact('banerabout'));
        }

        public function banerservices()
        {
                $maxlenght = Promo::count();
                $promos = Promo::latest()->paginate($maxlenght);
                $banerservices = DB::table('images')->where('nama', 'Baner_Services')->first();
                return View::make('pages.services',compact('banerservices','promos'));
        }

        public function banercontact()
        {
                $banercontact = DB::table('images')->where('nama', 'Baner_Contact')->first();
                return View::make('pages.contact',compact('banercontact'));
        }
        
}