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
                <h3 class="box-title">Cadastro de categorias</h3>
            </div>
            <form role="form" action="{{ action('CategoriasController@update', $dados->id_categoria) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="box-body">
                <div class="form-group">
                    <label for="Modelo">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome da categoria" name="nome" value="{{$dados->nome}}" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                    <label for="capacidade de carga">Capacidade de carga</label>
                    <input type="text" class="form-control" id="Capacidade de carga" placeholder="Capacidade de carga do carro" value="{{$dados->capacidade_carga}}" maxlength="4" name="capacidade_carga" size="50" required>
                </div>
                <div class="form-group">
                    <label for="Passageiros">Passageiros</label>
                    <input type="text" class="form-control" id="Passageiros" placeholder="Digite o Passageiros do carro" name="passageiro" value="{{$dados->passageiro}}" maxlength="2" size="50" required>
                </div>
                <div class="form-group">
                    <label for="opcionais">Opcionais</label>
                   <textarea id="opcionais" name="opcionais"  cols="52" rows="4" required="">{{$dados->opcionais}}</textarea>
                </div>
                <div class="form-group">
                    <label for="valor da diária">valor da diária</label>
                    <input type="text" class="form-control" id="valor da diária" placeholder="valor da diária do carro" name="valor_diaria" value="{{$dados->valor_diaria}}" maxlength="5" size="50" required>
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