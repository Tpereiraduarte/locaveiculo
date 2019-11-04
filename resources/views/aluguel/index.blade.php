@extends('painel.layout')
@section('title','Aluguel de Carros')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <a id="list" href="{{URL::route('aluguel.create')}}" title="Cadastrar" class="btn btn-primary custom"><i class="fa fa-file-text-o"></i> Novo Carro</a>
        </div> 
    </div>
</div>
@if(!empty($dados) && count($dados) > 0)
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de carros alugados</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>Carro</th>
                        <th>Data Inicial</th>
                        <th>Data Final</th>
                        <th>Valor</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Usuário</th>
                        <th>Carro</th>
                        <th>Data Inicial</th>
                        <th>Data Final</th>
                        <th>Valor</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @foreach($dados as $value)
                    <tr>
                        <td>{{$value->usuarios->nome}}</td>
                        <td>{{$value->carros->nome}}</td>
                        <td>{{$value->data_inicial}}</td>
                        <td>{{$value->data_final}}</td>
                        <td class="acoes-lista">
                            <a id="edit" href="{{URL::route('aluguel.edit',$value->id_aluguel)}}" title="Editar" class="fa fa-edit"></a>
                            <form action="{{ action('AluguelsController@destroy', $value->id_aluguel) }}" method="POST">
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
        <span class="sem-dados">Não há Carros Alugados</span>
    </div>    
@endif

@endsection