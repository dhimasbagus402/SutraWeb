<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Photo;

class UploadImagesController extends Controller
{
   public function index()
    {
        return view('image-upload-form');
    }
    public function store(Request $request)
    {
         
        $validateImageData = $request->validate([
        'images' => 'required',
            'images.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);
        if($request->hasfile('images'))
         {
            foreach($request->file('images') as $key => $file)
            {
                $path = $file->store('imgblog');
                $name = $file->getClientOriginalName();
                $insert[$key]['title'] = $name;
                $insert[$key]['path'] = $path;
            }
         }
        Photo::insert($insert);
 
        return redirect('upload-multiple-image-preview')->with('status', 'All Images has been uploaded successfully');
    }
}