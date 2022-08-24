<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$blogs = Blog::latest()->paginate(5);

        return view('adminpanel.admin', compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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

        return redirect()->route('blogs.index')
            ->with('success', 'Blog created successfully.');

    }

	public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
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
	public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')
            ->with('success', 'Blog deleted successfully');
    }
}