@extends('painel.layout')
@section('title','Cadastro de Carros')
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
              <h3 class="box-title">Cadastro de carros</h3>
            </div>
            <form role="form" action="{{ action('CarrosController@store') }}" method="POST">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="Modelo">Modelo</label>
                  <input type="text" class="form-control" id="modelo" placeholder="Digite o modelo do carro" name="modelo" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                  <label for="ano">Ano</label>
                  <input type="text" class="form-control" id="ano" placeholder="ano do carro" maxlength="4" name="ano" size="50" required>
                </div>
                <div class="form-group">
                  <label for="Fabricante">Fabricante</label>
                  <input type="text" class="form-control" id="fabricante" placeholder="Digite o Fabricante do carro" name="fabricante" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                  <label for="Placa">Placa</label>
                  <input type="text" class="form-control" id="placa" placeholder="Placa do carro" maxlength="9" name="placa" size="50" required>
                </div>
                <div class="form-group">
                    <label for="imagem">Imagem do Carro:</label><br />
                    <input type="file" name="imagem" id="imagem">
                </div>
              </div>
              <div class="box-footer">
                <a href="{{URL::route('carro.index')}}" title="Voltar" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection