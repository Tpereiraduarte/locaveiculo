<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\CollectionCollection;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Cliente::all();
        return view("cliente.index",compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.store');
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
        return redirect()->action('ClientesController@index')->with('success', 'Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_cliente)
    {
        return view('cliente.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cliente)
    {
        $dados = Cliente::find($id_cliente);
        return view("cliente.edit",compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cliente)
    {
        $dados = Cliente::find($id_cliente);
        $dados->nome = $request->nome;
        $dados->sobrenome = $request->sobrenome;
        $dados->cpf = $request->cpf;
        $dados->cnh = $request->cnh;
        $dados->email = $request->email;
        $dados->password = $request->password;
        $dados->update();
        return redirect()->action('ClientesController@index')->with('success', 'Alterado com Sucesso!');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cliente)
    {
        $dados = Cliente::find($id_cliente);
        $dados->delete();
        return redirect()->action('ClientesController@index')->with('success', 'Excluído com Sucesso!');
    }
}
