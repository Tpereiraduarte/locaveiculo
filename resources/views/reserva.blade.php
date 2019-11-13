@extends('site.layout-reserva')
@section('title','LocaVeículo')
@section('content')
<div class="row">
                <div class="col-md-8">
                    <div class="corousel-gallery-content">
                        <div class="gallery">
                             <div class="full-view owl-carousel">
                                  <a class="item" href="{{asset("site/assets/images/post/list-image-three.jpg")}}">
                                      <img src="{{asset("site/assets/images/post/post01.jpg")}}" alt="post">
                                  </a>
                              </div>
                        </div> <!-- /.gallery-two -->
                    </div> <!-- /.corousel-gallery-content -->

                    <div class="vehicle-single-content">
                        <div class="tb mb-block">
                            <div class="tb-cell mb-block">
                               <h2 class="vehicle-single-title">{{$dados->modelo}}</h2>
                            </div><!-- /.tb-cell -->
                            <div class="tb-cell mb-block">
                               <h2 class="pull-right rent-price">Valor da diária: {{$categoria[0]->valor_diaria}}</h2>
                            </div><!-- /.tb-cell -->
                        </div><!-- /.tb -->
                        <div class="clearfix"></div><!-- /.clearfix -->
                        
                        <div class="price-details">
                            <h3 class="details-title">Dados do Carro:</h3>
                            <ul>
                        <li>Ano: {{$dados->ano}}</li>
                        <li>Fabricante: {{$dados->fabricante}}</li>
                        <li>Pacla: {{$dados->placa}}</li>
                            </ul>
                        </div><!-- /.price -->

                    </div><!-- /.family-apartment-content -->

                    <div class="hidden-md hidden-lg text-center extend-btn">
                        <span class="extend-icon">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </div>
                </div> <!-- /.col-md-8 -->

                <div class="col-md-4">
                    <div class="vehicle-sidebar pd-zero">                    
                        <form action="#" method="get" class="advance-search-query search-query-two">
                            <h2 class="form-title">Fazer a Reserva</h2>
                            <div class="form-content available-filter">
                                <div class="regular-search">
                                <div class="form-group">

                                    <label>Data Inicial:</label>
                                    <div class="input">
                                        <i class="fa fa-calendar"></i>
                                        <input type="text" name="datainicial" class="date-start date-selector form-controller" placeholder="Data Inicial">
                                    </div><!--/.input-->

                                    <label>Data Final:</label>
                                    <div class="input">
                                        <i class="fa fa-calendar"></i>
                                        <input type="text" name="datafinal" class="date-end date-selector form-controller" placeholder="Data Final">
                                    </div><!--/.input-->

                                    <label class="text-uppercase">Categoria do Caro:</label>
                                    <div class="input">
                                        <i class="fa  fa-car "></i>
                                        <input type="text" name="Categoria" value="{{$categoria[0]->nome}}">
                                    </div><!--/.input-->

                                    <label class="text-uppercase">Carro:</label>
                                    <div class="input">
                                        <i class="fa  fa-car"></i>
                                        <input type="text" name="carro" value="{{$dados->modelo}}" placeholder="Carro" class="pick-location form-controller">
                                    </div><!--/.input-->

                                    <label class="text-uppercase">Valor Total da Diária:</label>
                                    <div class="input">
                                        <i class="fa fa-dollar"></i>
                                        <input type="text"  name="vtotal" >
                                    </div><!--/.input-->
                                </div><!-- /.form-group -->
                                </div><!-- /.div regular-search -->

                                <div class="check-vehicle-footer">
                                    <button type="submit" class="button yellow-button">Finalizar Reserva</button>                          
                                </div><!-- /.check-vehicle-footer -->
                            </div><!-- /.from-cotent -->
                        </form><!-- /.advance_search_query -->
                    </div><!-- /.vehicle-sidebar -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
@endsection