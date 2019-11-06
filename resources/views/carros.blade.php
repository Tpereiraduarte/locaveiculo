@extends('site.layout-carro')
@section('title','LocaVeículo')
@section('content')
        <div class="row tb default-margin-bottom yellow-theme">
            <div class="col-md-9 col-sm-8 block-title-area tb-cell">
                <div class="heading-content style-one border">
                    <h3 class="subtitle">Reserva</h3>
                    <h2 class="title">Selecione o melhor carro e tarifa para você.</h2>
                </div><!-- /.heading-content-one -->
            </div><!-- /.col-md-10 -->
            <div class="col-md-3 col-sm-4 hidden-xs block-navigation-area tb-cell">
                <div class="pull-right">                    
                    <div class="item-navigation">
                        <a href="#" class="previous-item">
                            <i class="fa fa-angle-left"></i> 
                        </a>
                        <a href="#" class="next-item">
                            <i class="fa fa-angle-right"></i> 
                        </a>
                    </div><!-- /.item-navigation -->
                </div><!-- /.pull-right -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row --> 

        <div class="vehicle-slider slider-style-two owl-carousel" data-item="[1,1,1,1]">
            <div class="item row">
                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="reserva-carro.html">
                                <img src="{{asset("site/assets/images/popular/popular-01.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 --> 

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-02.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->  

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-03.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->  

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-04.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 --> 

                <div class="clearfix"></div>

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-05.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->   

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-06.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 --> 

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-07.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->  

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-08.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.item -->

            <div class="item row">
                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-01.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 --> 

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-02.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->  

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-03.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->  

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-04.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 --> 

                <div class="clearfix"></div>

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-05.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->   

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-06.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 --> 

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-07.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->  

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="{{asset("site/assets/images/popular/popular-08.png")}}" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                           <h2 class="vehicle-title"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item">
                                    <span>Rent:  $200 /</span> Day.  -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.item -->
        </div><!-- /.vehicle-slider -->

        <!-- block-navigation-area -->
        <div class="block-navigation-area visible-xs-block">
            <div class="view-all-item clearfix">
                <a href="#" class="view-all-btn">View all</a>
            </div><!-- /.view-all-item -->
        </div><!-- /.block-navigation-area -->

@endsection