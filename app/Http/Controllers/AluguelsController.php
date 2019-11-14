<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Aluguel;
use App\Models\Carro;
use App\Models\Cliente;
use App\Models\Categoria;
use App\Models\CategoriaCarro;
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
        $cliente = Cliente::all();
        $categoria = Categoria::all();
        $categoriacarro = CategoriaCarro::all();
        $carro  = Carro::all();
        return view("aluguel.store",compact('cliente','categoria','categoriacarro','carro'));
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
        $dados->data_inicial = $request->datainicial;
        $dados->data_final = $request->datafinal;
        $dados->cliente_id = $request->cliente_id;
        $dados->carro_id = $request->carro_id;
        $dados->valor = $this->calculaValorAluguel($dados->data_inicial,$dados->data_final,$request->categoria_id);
        $dados->save();
        return redirect()->action('AluguelsController@index')->with('success', 'Cadastrado com Sucesso!');
    }

    public function dinamico(Request $request)
    {
        $value = $request->get('value');
        $data = DB::table('categoria_carros')
        ->join('carros','categoria_carros.carro_id','=','carros.id_carro')
        ->select('carros.id_carro','carros.modelo','carros.ano','categoria_carros.carro_id')
        ->where('categoria_id',$value)
        ->get();
        $resultado ='<option value="">Escolha o carro desejado</option>';
        foreach($data as $key => $row){
            $resultado .='<option value="'.$row->carro_id.'">'.$row->modelo.' - '.$row->ano.'</option>';
        }
        echo $resultado;
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
        $dados->data_inicial = $request->datainicial;
        $dados->data_final = $request->datafinal;
        $dados->cliente_id = $request->cliente_id;
        $dados->carro_id = $request->carro_id;
        $dados->valor = $this->calculaValorAluguel($dados->data_inicial,$dados->data_final,$request->categoria_id);
        $dados->update();
        return redirect()->action('AluguelsController@index')->with('success', 'Alterado com Sucesso!');    
    }

    public function calculaValorAluguel($data_inicial , $data_final, $categoria_id)
    {
        $valor_diaria = Categoria::find($categoria_id);
        $data_ini = Carbon::createFromFormat('Y-m-d', $data_inicial);
        $data_fin = Carbon::createFromFormat('Y-m-d', $data_final);
        return $resultado = ($data_fin->diffInDays($data_ini)) * (float)$valor_diaria->valor_diaria;
    }

    public function calculoValorAluguelDinamico(Request $request)
    {
        $data_inicial = $request->get('datainicial');
        $data_final = $request->get('datafinal'); 
        $categoria_id = $request->get('categoria');
        $valor_diaria = Categoria::find($categoria_id);
        $data_ini = Carbon::createFromFormat('Y-m-d', $data_inicial);
        $data_fin = Carbon::createFromFormat('Y-m-d', $data_final);
        return $resultado = ($data_fin->diffInDays($data_ini)) * (float)$valor_diaria->valor_diaria;
    }
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
