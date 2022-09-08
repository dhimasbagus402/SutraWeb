<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
        return redirect()->to('/');
    }

    public function edit(User $user)
    {
        return view('users.profile', compact('user'));
    }

    // update data
	public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'storage/userimg';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $user->update($input);

        return redirect()->route('profile.index')
            ->with('success', 'User updated successfully');
    }


    // method untuk hapus data
	public function destroy($id)
    {
        $user = User::findOrFail($id);
        $image_path = public_path('storage/userimg').'/'.$user->image;
        unlink($image_path);
        $user->delete();


        return redirect()->route('profile.index')
            ->with('success', 'User deleted successfully');
    }
}
