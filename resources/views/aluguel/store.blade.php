@extends('painel.layout')
@section('title','Cadastro do Aluguel')
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
        <h3 class="box-title">Cadastro do aluguel do carro</h3>
      </div>
      <form role="form" action="{{ action('AluguelsController@store') }}" method="POST">
      @csrf
        <div class="box-body">
          <div class="form-group">
              <label for="cliente">Cliente:</label>
              <select class="form-control" id="cliente_id" name="cliente_id" aria-required="true">
                  <option selected disabled value="">Escolha o cliente</option>
                  @foreach($cliente as $value)
                  <option value="{{$value->id_cliente}}">{{$value->nome}}                                
                  </option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="carro">Categoria:</label>
              <select class="form-control dinamic aluguel" data-dependent="categoria" id="categoria_id" name="categoria_id" aria-required="true">
                  <option selected disabled value="">Escolha uma categoria</option>
                  @foreach($categoria as $value)
                  <option value="{{$value->id_categoria}}">{{$value->nome}}                                
                  </option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="carro">Carro:</label>
              <select class="form-control" data-dependent="carro" id="carro" name="carro_id" aria-required="true">
                  <option selected disabled value="">Escolha um carro</option>
              </select>
          </div>
          <div class="form-group">
            <label for="Data Inicial">Data Inicial</label>
            <input type="date" class="form-control aluguel" data-dependent="data-inicial" id="dataInicial" placeholder="Digite o Data Inicial do aluguel" name="datainicial" required>
          </div>
          <div class="form-group">
            <label for="Data Inicial">Data Final</label>
            <input type="date" class="form-control aluguel" id="dataFinal" placeholder="Digite o Data Final do aluguel" name="datafinal" required>
          </div>
          <div class="form-group">
              <label for="carro" id="preco">Preço:</label>
          </div>
        </div>
        <div class="box-footer">
          <a href="{{URL::route('aluguel.index')}}" title="Voltar" class="btn btn-primary">Voltar</a>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        $('.dinamic').change(function() {
            if ($(this).val() != '') {
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{URL::route('dinamico')}}",
                    method: "POST",
                    data: {
                        value: value,
                        _token: _token,
                        dependent: dependent
                    },
                    success: function(result) {
                        $('#' + dependent).html(result);
                        $('#carro').empty();
                        $('#carro').append(result);
                    }
                });
            }
        });

        $('.aluguel').change(function() {
                var categoria = $('#categoria_id').children("option:selected").val();
                var datainicial = $('input[name="datainicial"]').val();
                var datafinal = $('input[name="datafinal"]').val();
                debugger
            if(categoria){
              if (datafinal != '' && datainicial) {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{URL::route('calculo')}}",
                    method: "POST",
                    data: {
                      datainicial: datainicial,
                      datafinal: datafinal,
                      _token: _token,
                      categoria: categoria
                    },
                    success: function(result) {
                        $('#preco').empty();
                        $('#preco').append('Preço: R$'+result);
                    }
                });
            }
          }
        });
    });
</script>
@endpush 
@endsection