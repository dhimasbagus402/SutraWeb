<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Validator;

class BlogController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
    	// mengambil data dari table
        
        $maxlenght = Blog::count();
    	$blogs = Blog::sortable()->paginate($maxlenght);

        return view('adminpanel.admin', compact('blogs'));
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
            'nama' => 'required|max:50',
            'deskripsi' => 'required',
			'tanggal' => 'required',
			'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            ->with('success', 'Data updated successfully');

    }



	public function edit(Blog $blog)
    {
        return view('blogs.editblog', compact('blog'));
    }


    // update data
	public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'deskripsi' => 'required',
			'tanggal' => 'required'
        ]);

        $input = $request->all();

        if($request->hasFile('gambar')){

            // user intends to replace the current image for the category.  
            // delete existing (if set)
        
            if($oldImage = $blog->gambar) {
        
                unlink(public_path('imgblog/') . $oldImage);
            
            }

            $gambar = $request->file('gambar');
            $destinationPath = 'imgblog/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
            
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
        if(is_file($image_path)){
            unlink($image_path);
        }
        $blog->delete();


        return redirect()->route('blogs.index')
            ->with('success', 'Blog deleted successfully');
    }
    

}
