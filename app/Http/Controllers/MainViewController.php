<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Jamaah;
use App\Models\Images;
use App\Models\Blog;
use Illuminate\Support\Facades\View;

class MainViewController extends Controller
{

        public function utama()
        {
                $blogs = Blog::latest()->paginate(3);
                $umroh = DB::table('jamaahs')->where('nama', 'umroh')->first();
                $hajj = DB::table('jamaahs')->where('nama', 'hajj')->first();
                $baner1 = DB::table('images')->where('nama', 'Baner_1')->first();
                $baner2 = DB::table('images')->where('nama', 'Baner_2')->first();
                $aboutus = DB::table('images')->where('nama', 'About_Us')->first();
                $aboutus2 = DB::table('images')->where('nama', 'About_Us_2')->first();
            
                return View::make('home', compact('blogs','hajj','umroh','baner1','baner2',
                                'aboutus','aboutus2'));
        }
        
        public function banerabout()
        {
                $banerabout = DB::table('images')->where('nama', 'Baner_About')->first();
                return View::make('pages.about',compact('banerabout'));
        }

        public function banerservices()
        {
                $banerservices = DB::table('images')->where('nama', 'Baner_Services')->first();
                return View::make('pages.services',compact('banerservices'));
        }

        public function banercontact()
        {
                $banercontact = DB::table('images')->where('nama', 'Baner_Contact')->first();
                return View::make('pages.contact',compact('banercontact'));
        }
        
}