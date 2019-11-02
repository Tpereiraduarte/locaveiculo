<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('login.index');
    }

      public function login(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = ['email'=>$request->email,'password'=>$request->password];
        if(Auth::attempt($credentials)){
            $user = DB::table('users')->where('email', $request->email)->first();
            return redirect()->intended('inicio');
        }else{
            return redirect()->back()->with('msg',"Acesso negado com estas credenciais");
        }

   }

}