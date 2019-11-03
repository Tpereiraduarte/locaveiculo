<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\CollectionCollection;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Carro::all();
        return view("carro.index",compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("carro.store");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = new Carro();
        $dados->modelo = $request->modelo;
        $dados->ano = $request->ano;
        $dados->fabricante = $request->fabricante;
        $dados->placa = $request->placa;
        $dados->imagem = $request->imagem;
        $dados->save();
        return redirect()->action('CarrosController@index')->with('success', 'Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_carro)
    {
        return view('carro.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_carro)
    {
        $dados = Carro::find($id_carro);
        return view("carro.edit",compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_carro)
    {
        $dados = Carro::find($id_carro);
        $dados->modelo = $request->modelo;
        $dados->ano = $request->ano;
        $dados->fabricante = $request->fabricante;
        $dados->placa = $request->placa;
        $dados->imagem = $request->imagem;
        $dados->update();
        return redirect()->action('CarrosController@index')->with('success', 'Alterado com Sucesso!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_carro)
    {
        $dados = Carro::find($id_carro);
        $dados->delete();
        return redirect()->action('CarrosController@index')->with('success', 'Excluído com Sucesso!');
    }
}
