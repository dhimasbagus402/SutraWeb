<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogShowController extends Controller
{
    public function index(Blog $blog)
    {
        return view('pages.blogdetail', compact('blog'));
    }
}