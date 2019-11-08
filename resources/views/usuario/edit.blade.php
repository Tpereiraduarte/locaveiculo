@extends('painel.layout')
@section('title','Edição de Usuário')
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
              <h3 class="box-title">Edição de usuário</h3>
            </div>
            <form role="form" action="{{ action('UsersController@update', $dados->id_usuario) }}" method="POST">
            @method('PUT')
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome" value="{{$dados->nome}}" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                  <label for="sobrenome">Sobrenome</label>
                  <input type="text" class="form-control" id="sobrenome" placeholder="Digite o sobrenome" name="sobrenome" value="{{$dados->sobrenome}}" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" placeholder="Digite o CPF - Somente números" name="cpf" value="{{$dados->cpf}}" maxlength="11" size="50" required>
                </div>
                <div class="form-group">
                  <label for="cnh">CNH</label>
                  <input type="text" class="form-control" id="cnh" placeholder="CNH" name="cnh" value="{{$dados->cnh}}" maxlength="9" size="50" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Digite o email" name="email" value="{{$dados->email}}" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" placeholder="Digite a senha" name="password" value="{{$dados->password}}" maxlength="150" size="50" required>
                </div>
              </div>
              <div class="box-footer">
                <a href="{{URL::route('usuario.index')}}" title="Voltar" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection