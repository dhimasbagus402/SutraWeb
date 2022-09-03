<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    //Main View
     public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('pages.about');
    } 

    public function contact()
    {
        return view('pages.contact');
    } 

    public function services()
    {
        return view('pages.services');
    } 

    public function blog()
    {
        return view('pages.blog');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminpanel.admin');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('manajerpanel.manajer');
    }
}