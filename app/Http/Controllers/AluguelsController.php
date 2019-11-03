<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\CollectionCollection;

class AluguelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Aluguel::all();
        return view("aluguel.index",compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("aluguel.store");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = new Aluguel();
        $dados->data_inicial = $request->data_inicial;
        $dados->data_final = $request->data_final;
        $dados->valor = $request->valor;
        $dados->usuario_id = $request->usuario_id;
        $dados->carro_id = $request->carro_id;
        $dados->save();
        return redirect()->action('AluguelsController@index')->with('success', 'Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_aluguel)
    {
        return view('aluguel.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_aluguel)
    {
        $dados = Aluguel::find($id_aluguel);
        return view("aluguel.edit",compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_aluguel)
    {
        $dados = Aluguel::find($id_aluguel);
        $dados->data_inicial = $request->data_inicial;
        $dados->data_final = $request->data_final;
        $dados->valor = $request->valor;
        $dados->usuario_id = $request->usuario_id;
        $dados->carro_id = $request->carro_id;
        $dados->update();
        return redirect()->action('AluguelsController@index')->with('success', 'Alterado com Sucesso!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_aluguel)
    {
        $dados = Aluguel::find($id_aluguel);
        $dados->delete();
        return redirect()->action('AluguelsController@index')->with('success', 'Excluído com Sucesso!');
    }
}
