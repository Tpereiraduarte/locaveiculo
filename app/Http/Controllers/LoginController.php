<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
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
            $usuario = DB::table('users')->where('tipo_usuario', 'usuario')->first();
            if ($usuario =='usuario'){
            return redirect()->intended('/aluguel');
            }else{
            return redirect()->intended('/inicio');  
            }
        }else{
            return redirect()->back()->with('msg',"Acesso negado com estas credenciais");
        }

   }

}