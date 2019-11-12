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
                               <h2 class="pull-right rent-price">Valor da diária: {{$preco[0]->valor_diaria}}</h2>
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

                                    <label class="text-uppercase">Picking up location</label>
                                    <div class="input">
                                        <i class="fa fa-map-marker"></i>
                                        <input type="text" placeholder="your location" class="pick-location form-controller">
                                    </div><!--/.input-->

                                    <label class="text-uppercase">Dropping off location</label>
                                    <div class="input">
                                        <i class="fa fa-map-marker"></i>
                                        <input type="text" placeholder="your location" class="pick-location form-controller">
                                    </div><!--/.input-->

                                    <label>Picking up Date</label>
                                    <div class="input">
                                        <i class="fa fa-calendar"></i>
                                        <input type="text" class="date-start date-selector form-controller" placeholder="Hire On">
                                    </div><!--/.input-->

                                    <label>Dropping off Date</label>
                                    <div class="input">
                                        <i class="fa fa-calendar"></i>
                                        <input type="text" class="date-end date-selector form-controller" placeholder="Return On">
                                    </div><!--/.input-->

                                    <label class="text-uppercase">Picking up Time</label>
                                    <div class="input">
                                        <i class="fa fa-clock-o"></i>
                                        <input type="text" class="time-selector form-controller" placeholder="15:00 am">
                                    </div><!--/.input-->

                                    <label class="text-uppercase">Dropping of Time</label>
                                    <div class="input">
                                        <i class="fa fa-clock-o"></i>
                                        <input type="text" class="time-selector form-controller" placeholder="15:00 am">
                                    </div><!--/.input-->

                                    <label class="text-uppercase">Select Class</label>
                                    <div class="input">                                    
                                        <select>
                                            <option value="0" selected="selected">Intermediate</option>
                                            <option value="1">Intermediate</option>
                                            <option value="2">Compact</option>
                                            <option value="3">Station Wagon</option>
                                            <option value="4">SUV</option>
                                            <option value="5">Minibus</option>
                                        </select>
                                    </div><!-- /.input -->

                                    <label class="text-uppercase">Select Fuel</label>
                                    <div class="input">                                    
                                        <select>
                                            <option value="0" selected="selected">Petrol</option>
                                            <option value="1">Diesel</option>
                                            <option value="2">Octen</option>
                                        </select>
                                    </div><!-- /.input -->
                                </div><!-- /.form-group -->

                                </div><!-- /.div regular-search -->

                                <div class="advance-search">
                                    <div class="form-group">
                                        <label class="text-uppercase">Infant Child Seats</label>
                                        <div class="input">                                        
                                            <select>
                                                <option value="0" selected="selected">0</option>
                                                <option value="1">0</option>
                                                <option value="2">1</option>
                                                <option value="3">2</option>
                                                <option value="4">3</option>
                                                <option value="5">4</option>
                                            </select>
                                        </div><!-- /.input -->

                                        <div class="advance-filters">
                                            <label>Resources</label>
                                            <ul class="checkbox-content">
                                                <li>
                                                    <input type="checkbox" id="gps-tracker" name="chack" value="chack">
                                                    <label for="gps-tracker">GPS Tracker</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="hand-controls" name="chack" value="chack">
                                                    <label for="hand-controls">Hand Controls</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="electric-windows" name="chack" value="chack">
                                                    <label for="electric-windows">Electric Windows</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="air-bags" name="chack" value="chack">
                                                    <label for="air-bags">Air Bags</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.advance-search -->

                                <div class="check-vehicle-footer">
                                    <button type="submit" class="button yellow-button">Book Now</button>                          
                                    <div class="advanced-search yellow-color">
                                        <a href="#" class="advanced-search-btn"><i class="fa fa-search"></i>Available Extra</a>
                                    </div>
                                </div><!-- /.check-vehicle-footer -->
                            </div><!-- /.from-cotent -->
                        </form><!-- /.advance_search_query -->
                    </div><!-- /.vehicle-sidebar -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
@endsection