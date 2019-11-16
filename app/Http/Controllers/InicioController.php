<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Aluguel;
use App\Models\User;
use App\Models\Carro;
use App\Models\Cliente;
use App\Models\Categoria;
use App\Models\CategoriaCarro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
            ->select('categorias.id_categoria','categorias.nome','categorias.valor_diaria')
            ->get();
        
        return view('reserva',compact('dados','categoria'));
    }


      public function calculaValorAluguel($data_inicial , $data_final, $categoria_id)
    {
        $valor_diaria = Categoria::find($categoria_id);
        $data_ini = Carbon::createFromFormat('Y-m-d', $data_inicial);
        $data_fin = Carbon::createFromFormat('Y-m-d', $data_final);
        return $resultado = ($data_fin->diffInDays($data_ini)) * (float)$valor_diaria->valor_diaria;
    }


    public function reservastore(Request $request)
    {
        $nome_cliente = $request->get('usuario_nome');
        $cliente_id = DB::table('clientes')->where('nome','=',$nome_cliente)
        ->select('clientes.id_cliente')->pluck('id_cliente');
       
        $dados = new Aluguel();
        $dados->data_inicial = $request->datainicial;
        $dados->data_final = $request->datafinal;
        $dados->cliente_id = $cliente_id[0];
        $dados->carro_id = $request->carro;
        $dados->valor = $this->calculaValorAluguel($dados->data_inicial,$dados->data_final,$request->categoria_id);
        $dados->save();
        return redirect()->action('InicioController@index')->with('success', 'Cadastrado com Sucesso!');
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
}
