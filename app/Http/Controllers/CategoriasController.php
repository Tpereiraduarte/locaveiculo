<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\CollectionCollection;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Categoria::all();
        return view("categoria.index",compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categoria.store");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = new Categoria();
        $dados->nome = $request->nome;
        $dados->capacidade_carga = $request->capacidade_carga;
        $dados->passageiro = $request->passageiro;
        $dados->opcionais = $request->opcionais;
        $dados->valor_diaria = $request->valor_diaria;
        $dados->save();
        return redirect()->action('CategoriasController@index')->with('success', 'Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_categoria)
    {
        return view('categoria.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_categoria)
    {
        $dados = Categoria::find($id_categoria);
        return view("categoria.edit",compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_categoria)
    {
        $dados = Categoria::find($id_categoria);
        $dados->nome = $request->nome;
        $dados->capacidade_carga = $request->capacidade_carga;
        $dados->passageiro = $request->passageiro;
        $dados->opcionais = $request->opcionais;
        $dados->valor_diaria = $request->valor_diaria;
        $dados->update();
        return redirect()->action('CategoriasController@index')->with('success', 'Alterado com Sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_categoria)
    {
        $dados = Categoria::find($id_categoria);
        $dados->delete();
        return redirect()->action('CategoriasController@index')->with('success', 'Excluído com Sucesso!');
    }
}
