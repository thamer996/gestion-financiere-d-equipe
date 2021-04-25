<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class mainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:12',
            'budget' => 'required',

            
        ]);
        $admin=new admin;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password= Hash::make($request-> password);
        $admin->budget=$request->budget;
        $save=$admin->save();
        if($save){
            return back()->with('success','user created successfully!');
        }
        else{
            return back()->with('fail','something went wrong');
            
        } 
    }
    function check(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:5|max:12',

            
        ]);
        $userinfo=admin::where('email','=',$request->email)->first();
        if(!$userinfo){
            return back()->with('fail','we do not recognize your email');
        }
        else{
            if(hash::check($request->password,$userinfo->password)){
            $request->session()->put('loggedUser',$userinfo->id);
            return redirect('/home');
            
            
        }
        else{
            return back()->with('fail','incorrect password');
        } 
    }
    }
    function home(){
        $data=['loggeduserinfo'=>admin::where('id','=',session('loggedUser'))->first()];
        return view('home',$data);
    }
    function logout(){
        if(session()->has('loggedUser')){
            session()->pull('loggedUser');
            return redirect('/auth/login');
        }
    }
    function player(){
        $data=['loggeduserinfo'=>admin::where('id','=',session('loggedUser'))->first()];
        return redirect()->route('players.index',$data);
    }
}
