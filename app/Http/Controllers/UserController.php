<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Validator;

class UserController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
    	// mengambil data dari table
    	$users = User::sortable()->paginate(26);

        return view('manajerpanel.manajer', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


	public function edit(User $user)
    {
        return view('manajerpanel.edituser', compact('user'));
    }


    // update data
	public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
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

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }


    // method untuk hapus data
	public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();


        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
