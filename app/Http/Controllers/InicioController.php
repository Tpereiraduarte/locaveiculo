<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use App\Models\User;
use App\Models\Carro;
use App\Models\Cliente;
use App\Models\Categoria;
use App\Models\CategoriaCarro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Carro::all();
        return view('inicio',compact('dados'));
    }

    public function reserva($id_carro)
    {
        $dados = Carro::find($id_carro);
        $carro = Categoria::find($id_carro);
        $categoria = DB::table('categoria_carros')->where('carro_id','=',$id_carro)
            ->join('categorias','categorias.id_categoria', '=','categoria_carros.categoria_id')
            ->select('categorias.nome','categorias.valor_diaria')
            ->get();
        
        return view('reserva',compact('dados','categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente;
        $clientes->nome             = $request->nome;
        $clientes->sobrenome        = $request->sobrenome;
        $clientes->cpf              = $request->cpf;
        $clientes->cnh              = $request->cnh;
        $clientes->email            = $request->email;  
        $clientes->password         = bcrypt($request['password']);
        $clientes->save();

        $usuarios = new User;
        $usuarios->nome             = $request->nome;
        $usuarios->email            = $request->email;  
        $usuarios->password         = bcrypt($request['password']);
        $usuarios->tipo_usuario     = $request->tipo_usuario;
        $usuarios->save();                    
        
        return redirect()->action('InicioController@index')->with('success', 'Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
