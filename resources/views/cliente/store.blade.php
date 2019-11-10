@extends('painel.layout')
@section('title','Cadastro de Cliente')
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
              <h3 class="box-title">Cadastro de Cliente</h3>
            </div>
            <form role="form" action="{{ action('ClientesController@store') }}" method="POST">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                  <label for="sobrenome">Sobrenome</label>
                  <input type="text" class="form-control" id="sobrenome" placeholder="Digite o sobrenome" maxlength="150" name="sobrenome" size="50" required>
                </div>
                <div class="form-group">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" placeholder="Digite o CPF - Somente números" name="cpf" maxlength="11" size="50" required>
                </div>
                <div class="form-group">
                  <label for="cnh">CNH</label>
                  <input type="text" class="form-control" id="cnh" placeholder="CNH" maxlength="9" name="cnh" size="50" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Digite o email" name="email" maxlength="150" size="50" required>
                </div>
                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" placeholder="Digite a senha" name="password" maxlength="150" size="50" required>
                </div>
              </div>
              <div class="box-footer">
                <a href="{{URL::route('cliente.index')}}" title="Voltar" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
</div>
@endsection