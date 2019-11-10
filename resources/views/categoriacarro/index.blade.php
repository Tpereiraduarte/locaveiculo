@extends('painel.layout')
@section('title','Categoria de carros')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <a id="list" href="{{URL::route('categoriacarro.create')}}" title="Cadastrar" class="btn btn-primary custom"><i class="fa fa-file-text"></i> Cadastrar Cat.Carro</a>
        </div> 
    </div>
</div>
@if(!empty($dados) && count($dados) > 0)
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de categorias de carros</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Carro</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($dados as $value)
                    <tr>
                        <td>{{$value->categoria->nome}}</td>
                        <td>{{$value->carro->modelo}}</td>
                        <td class="acoes-lista">
                            <a id="edit" href="{{URL::route('categoriacarro.edit',$value->id_categoria_carro)}}" title="Editar" class="fa fa-edit"></a>
                            <form action="{{ action('CategoriaCarrosController@destroy', $value->id_categoria_carro) }}" method="POST">
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
        <span class="sem-dados">Não há Categorias de carros cadastradas</span>
    </div>    
@endif

@endsection