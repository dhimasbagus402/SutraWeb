<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Redirect,Response,DB;
use File;
use PDF;

class TesController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Blog::select('*'))
            ->addColumn('action', 'blog-button')
            ->addColumn('gambar', 'gambar')
            ->rawColumns(['action','gambar'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('tespages.list');
    } 

    public function store(Request $request)
    {  
        request()->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    
        $blogId = $request->blog_id;
    
        $details = ['nama' => $request->nama, 'deskripsi' => $request->deskripsi, 'tanggal' => $request->tanggal];
    
        if ($files = $request->file('gambar')) {
            
        //delete old file
        \File::delete('imgblog/'.$request->hidden_gambar);
        
        //insert new file
        $destinationPath = 'imgblog/'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $details['gambar'] = "$profileImage";
        }
        
        $blog   =   Blog::updateOrCreate(['id' => $blogId], $details);  
            
        return Response()->json($blog);
    } 

    public function stor22e(Request $request)
    {  
        $blogId = $request->id;
        if($blogId){
             
            $blog = Blog::find($blogId);
            if($request->hasFile('gambar')){
                $path = $request->file('gambar')->store('imgblog');
                $blog->gambar = $path;
            }   
            }else{
                $path = $request->file('gambar')->store('imgblog');
                $blog = new Blog;
                $blog->gambar = $path;
            }
         
        $blog->nama = $request->nama;
        $blog->deskripsi = $request->deskripsi;
        $blog->tanggal = $request->tanggal;
        $blog->save();  
            
        return Response()->json($blog);
    } 

    public function edit($id)
    {   
        $where = array('id' => $id);
        $blog  = Blog::where($where)->first();
    
        return Response::json($blog);
    }

    public function destroy($id) 
    {
        $data = Blog::where('id',$id)->first(['gambar']);
        \File::delete('imgblog/'.$data->gambar);
        $blog = Blog::where('id',$id)->delete();
    
        return Response::json($blog);
    }

}
