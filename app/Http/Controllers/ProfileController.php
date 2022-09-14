<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Dotenv\Validator;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('users.profile', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit-profile', compact('user'));
    }

    // update data
	public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $input = $request->all();

        if($request->hasFile('image')){

            // user intends to replace the current image for the category.  
            // delete existing (if set)
            $oldImage = public_path('storage/userimg').'/'.$user->image;
            if(is_file($oldImage)) {
                
                unlink($oldImage);
            
            }

            $image = $request->file('image');
            $destinationPath = 'storage/userimg';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        
        }

        $user->update($input);

        return Redirect::back()
            ->with('success', 'Profile berhasil diperbarui');
    }


    // method untuk hapus data
	public function destroy($id)
    {
        $user = User::findOrFail($id);
        $image_path = public_path('storage/userimg').'/'.$user->image;
        
        if(is_file($image_path)){
            unlink($image_path);
        }
        $user->delete();


        return redirect()->route('login')
            ->with('success', 'Akun berhasil dihapus');

    }
}









































