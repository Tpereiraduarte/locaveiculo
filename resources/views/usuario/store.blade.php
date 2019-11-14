@extends('painel.layout')
@section('title','Cadastro de Usuário')
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
              <h3 class="box-title">Cadastro de usuário</h3>
            </div>
            <form role="form" action="{{ action('UsersController@store') }}" method="POST">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Digite o email" name="email" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" placeholder="Digite a senha" name="password" maxlength="150" size="50" required>
                </div>
                <input type="hidden" id="tipo_usuario" name="tipo_usuario" value="usuario">
              </div>
              <div class="box-footer">
                <a href="{{URL::route('usuario.index')}}" title="Voltar" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
</div>
@endsection