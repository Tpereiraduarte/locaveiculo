@extends('painel.layout')
@section('title','Cadastro de Carros')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <a id="list" href="{{URL::route('carro.create')}}" title="Cadastrar" class="btn btn-primary custom"><i class="fa fa-file-text"></i> Novo Carro</a>
        </div> 
    </div>
</div>
@if(!empty($dados) && count($dados) > 0)
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de carros</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Fabricante</th>
                        <th>Placa</th>
                        <th>Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($dados as $value)
                    <tr>
                        <td>{{$value->modelo}}</td>
                        <td>{{$value->ano}}</td>
                        <td>{{$value->fabricante}}</td>
                        <td>{{$value->placa}}</td>
                        <td class="acoes-lista">
                            <a id="edit" href="{{URL::route('carro.edit',$value->id_carro)}}" title="Editar" class="fa fa-edit"></a>
                            <form action="{{ action('CarrosController@destroy', $value->id_carro) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button id="delete" type='submit' title="Excluir" class="fa fa-fw fa-trash"></button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@else
    <div class="sem-dados">
        <span class="sem-dados">Não há Carros Cadastrados</span>
    </div>    
@endif

@endsection