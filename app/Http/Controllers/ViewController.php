<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$images = Images::latest()->paginate(26);

        return view('images.views', compact('images'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function tambah()
    {
	    // memanggil view tambah
	    return view('images.tambah');
 
    }

    // method untuk insert data ke table
    public function store(Request $request)
    {
		$request->validate([         
            'nama' => 'required',
			'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'view/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        Images::create($input);

        return redirect()->route('images.index')
            ->with('success', 'Blog created successfully.');

    }

	public function edit(Images $image)
    {
        return view('images.edit', compact('image'));
    }


    // update data
	public function update(Request $request, Images $image)
    {   
        //$request->validate([
            //'nama' => 'required',
        //]);

        $input = $request->all();

        if($request->hasFile('gambar')){

            // user intends to replace the current image for the category.  
            // delete existing (if set)
        
            if($oldImage = $image->gambar) {
        
                unlink(public_path('view/') . $oldImage);
            
            }

            $gambar = $request->file('gambar');
            $destinationPath = 'view/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        $image->update($input);

        return redirect()->route('images.index')
            ->with('success', 'Blog updated successfully');
    }


    // method untuk hapus data
	public function destroy($id)
    {
        $image = Images::findOrFail($id);
        $image_path = public_path('view').'/'.$image->gambar;
        unlink($image_path);
        $image->delete();


        return redirect()->route('images.index')
            ->with('success', 'Blog deleted successfully');
    }

}
