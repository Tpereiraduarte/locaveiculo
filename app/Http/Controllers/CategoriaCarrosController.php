<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Categoria;
use App\Models\CategoriaCarro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\CollectionCollection;

class CategoriaCarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = CategoriaCarro::all();
        return view("categoriacarro.index",compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carro  = Carro::all();
        $categoria  = Categoria::all();
        return view("categoriacarro.store",compact('carro','categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = new CategoriaCarro();
        $dados->categoria_id = $request->categoria_id;
        $dados->carro_id  = $request->carro_id;
        $dados->save();
        return redirect()->action('CategoriaCarrosController@index')->with('success', 'Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_categoria_carro)
    {
        return view('categoriacarro.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_categoria_carro)
    {
        $dados = CategoriaCarro::find($id_categoria_carro);
        $carro  = Carro::all();
        $categoria  = Categoria::all();
        return view("categoriacarro.edit",compact('dados','carro','categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_categoria_carro)
    {
        $dados = CategoriaCarro::find($id_categoria_carro); 
        $dados->categoria_id = $request->categoria_id;
        $dados->carro_id  = $request->carro_id;
        $dados->update();
        return redirect()->action('CategoriaCarrosController@index')->with('success', 'Alterado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_categoria_carro)
    {
        $dados = CategoriaCarro::find($id_categoria_carro);
        $dados->delete();
        return redirect()->action('CategoriaCarrosController@index')->with('success', 'Excluído com Sucesso!');
    }
}
