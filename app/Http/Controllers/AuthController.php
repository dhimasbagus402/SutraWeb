<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
 
class AuthController extends Controller
{
 
    public function index()
    {
        return view('auth.login');
    }  
 
    public function registration()
    {
        return view('auth.register');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/logindashboard');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("/logindashboard")->withSuccess('Great! You have Successfully loggedin');
    }
     
    public function logindashboard()
    {
 
      if(Auth::check()){
        return view('auth.logindashboard');
      }
       return Redirect::to("/login")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/login');
    }
}