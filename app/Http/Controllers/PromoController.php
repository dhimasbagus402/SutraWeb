<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class PromoController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
        $maxlenght = Promo::count();
    	$promos = Promo::latest()->paginate($maxlenght);

        return view('promos.promoview', compact('promos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function tambah()
    {
	    // memanggil view tambah
	    return view('promos.tambahpromo');
 
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
            $destinationPath = 'promo/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        Promo::create($input);

        return redirect()->route('promos.index')
            ->with('success', 'Blog created successfully.');

    }

	public function edit(Promo $promo)
    {
        return view('promos.editpromo', compact('promo'));
    }


    // update data
	public function update(Request $request, Promo $promo)
    {   
        //$request->validate([
            //'nama' => 'required',
        //]);

        $input = $request->all();

        if($request->hasFile('gambar')){

            // user intends to replace the current image for the category.  
            // delete existing (if set)
        
            if($oldImage = $promo->gambar) {
        
                unlink(public_path('promo/') . $oldImage);
            
            }

            $gambar = $request->file('gambar');
            $destinationPath = 'promo/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        $promo->update($input);

        return redirect()->route('promos.index')
            ->with('success', 'Blog updated successfully');
    }


    // method untuk hapus data
	public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $image_path = public_path('promo').'/'.$promo->gambar;
        unlink($image_path);
        $promo->delete();


        return redirect()->route('promos.index')
            ->with('success', 'Blog deleted successfully');
    }

}
