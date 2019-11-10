@extends('painel.layout')
@section('title','Cadastro de Clientes')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <a id="list" href="{{URL::route('cliente.create')}}" title="Cadastrar" class="btn btn-primary custom"><i class="fa fa-file-text"></i> Novo Cliente</a>
        </div> 
    </div>
</div>
@if(!empty($dados) && count($dados) > 0)
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Clientes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>CPF</th>
                        <th>CNH</th>
                        <th>Email</th>
                        <th>Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($dados as $value)
                    <tr>
                        <td>{{$value->nome}}</td>
                        <td>{{$value->sobrenome}}</td>
                        <td>{{$value->cpf}}</td>
                        <td>{{$value->cnh}}</td>
                        <td>{{$value->email}}</td>
                        <td class="acoes-lista">
                            <a id="edit" href="{{URL::route('cliente.edit',$value->id_cliente)}}" title="Editar" class="fa fa-edit"></a>
                            <form action="{{ action('ClientesController@destroy', $value->id_cliente) }}" method="POST">
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
        <span class="sem-dados">Não há Clientes Cadastrados</span>
    </div>    
@endif

@endsection