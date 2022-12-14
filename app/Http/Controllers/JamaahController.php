<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jamaah;
use Illuminate\Support\Facades\View;

class JamaahController extends Controller
{

    public function index()
    {
        // mengambil data dari table 
    	$jamaah = DB::table('jamaahs')->get();
 
    	// mengirim data  ke view index
    	return view('jamaahs.jamaah', compact('jamaah'));
    }

    public function edit(Jamaah $jamaah)
    {
        return view('jamaahs.editjamaah', compact('jamaah'));
    }

    // update data 
    public function update(Request $request, Jamaah $jamaah)
    {
        $request->validate([
            'jumlah' => 'required',
        ]);

        $input = $request->all();

        $jamaah->update($input);

        return redirect()->route('jamaahs.index')
            ->with('success', 'Data updated successfully');
    }

}
