<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
    	// mengambil data dari table
    	$blogs = Blog::latest()->paginate(26);

        return view('adminpanel.admin', compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

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

    public function tambah()
    {
	    // memanggil view tambah
	    return view('blogs.tambahblog');
 
    }

    // method untuk insert data ke table
    public function store(Request $request)
    {
		$request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
			'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'tanggal' => 'required',
        ]);

        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'imgblog/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        Blog::create($input);

        return response()->json(['success'=>'Added new blog.']);

    }

	public function edit(Blog $blog)
    {
        return view('blogs.editblog', compact('blog'));
    }


    // update data
	public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
			'tanggal' => 'required'
        ]);

        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'imgblog/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        } else {
            unset($input['gambar']);
        }

        $blog->update($input);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog updated successfully');
    }


    // method untuk hapus data
	public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $image_path = public_path('imgblog').'/'.$blog->gambar;
        unlink($image_path);
        $blog->delete();


        return redirect()->route('blogs.index')
            ->with('success', 'Blog deleted successfully');
    }
    

}
