<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class BlogShowController extends Controller
{

    public function index2()
    {
    	// mengambil data dari table
    	$blogs = Blog::latest()->paginate(9);
        $banerblog = DB::table('images')->where('nama', 'Baner_Blog')->first();

        return view('pages.blog',compact('blogs','banerblog'));
    }

    public function show(Blog $blog)
    {
        $banerblog = DB::table('images')->where('nama', 'Baner_Blog')->first();
        return view('pages.blogdetail', compact('blog','banerblog'));
    }
}