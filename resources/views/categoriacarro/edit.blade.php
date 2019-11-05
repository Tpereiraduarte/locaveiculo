@extends('painel.layout')
@section('title','Categoria do Carro')
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
        <h3 class="box-title">Categoria do carro</h3>
      </div>
      <form role="form" action="{{ action('CategoriaCarrosController@update', $dados->id_categoria_carro)}}" method="POST">
          @method('PUT')
          @csrf
        <div class="box-body">
          <div class="form-group">
                  <label for="usuario">Usuário:</label>
                  <select class="form-control" id="usuario_id" name="usuario_id" aria-required="true">
                      <option value="{{$dados->usuario_id}}" selected>{{$dados->usuario->nome}}</option>
                      @foreach($usuario as $value)
                          @if($dados->usuario_id != $value->id_usuario)
                              <option value="{{$value->id_usuario}}">{{$value->nome}}</option>
                          @endif
                      @endforeach 
                  </select>                        
              </div>
          <div class="form-group">
              <label for="carro">Carro:</label>
              <select class="form-control" id="carro_id" name="carro_id" aria-required="true">
                  <option value="{{$dados->carro_id}}" selected>{{$dados->carros->nome}}</option>
                  @foreach($carro as $value)
                      @if($dados->carro_id != $value->id_carro)
                          <option value="{{$value->id_carro}}">{{$value->nome}}</option>
                      @endif
                  @endforeach 
              </select>                        
          </div>
        </div>
        <div class="box-footer">
          <a href="{{URL::route('categoriacarro.index')}}" title="Voltar" class="btn btn-primary">Voltar</a>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection