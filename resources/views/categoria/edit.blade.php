@extends('painel.layout')
@section('title','Edição de categoria')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edição de categoria</h3>
            </div>
            <form role="form" action="{{ action('CategoriasController@update', $dados->id_categoria) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="box-body">
                <div class="form-group">
                    <label for="Modelo">Modelo</label>
                    <input type="text" class="form-control" id="modelo" placeholder="Digite o modelo do carro" name="modelo" value="{{$dados->modelo}}" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                    <label for="ano">Ano</label>
                    <input type="text" class="form-control" id="ano" placeholder="ano do carro" maxlength="4" name="ano" value="{{$dados->ano}}" size="50" required>
                </div>
                <div class="form-group">
                    <label for="Fabricante">Fabricante</label>
                    <input type="text" class="form-control" id="fabricante" placeholder="Digite o Fabricante do carro" name="fabricante" value="{{$dados->fabricante}}" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                    <label for="Placa">Placa</label>
                    <input type="text" class="form-control" id="placa" placeholder="Placa do carro" maxlength="9" name="placa" size="50" value="{{$dados->placa}}" required>
                </div>
                </div>
                <div class="box-footer">
                <a href="{{URL::route('categoria.index')}}" title="Voltar" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection