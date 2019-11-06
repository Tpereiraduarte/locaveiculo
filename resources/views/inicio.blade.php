@extends('site.layout-index')
@section('title','LocaVeículo')
@section('content')
<div class="row tb default-margin-bottom yellow-theme">
                <!-- block-title-area -->
                <div class="col-md-9 col-sm-8 block-title-area tb-cell">
                    <div class="heading-content style-one border">
                        <h2 class="title"> Carros</h2>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-9 -->

                <!-- block-navigation-area -->
                <div class="col-md-3 col-sm-4 hidden-xs block-navigation-area tb-cell">
                    <div class="pull-right">                    
                        <div class="item-navigation hidden-xs">
                            <a href="#" class="previous-item">
                                <i class="fa fa-angle-left"></i> 
                            </a>
                            <a href="#" class="next-item">
                                <i class="fa fa-angle-right"></i> 
                            </a>
                        </div><!-- /.item-navigation -->
                    </div><!-- /.pull-right -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row --> 

            <!-- vehicle-slider -->
            <div class="vehicle-slider slider-style-two owl-carousel" data-item="[4,2,1,1]">
                <div class="item">
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
                                    <span>Rent:  $200 / </span> Day. -  $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.car-content -->
                </div><!-- /.item -->

                <div class="item">
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
                    </div><!-- /.car-content -->
                </div><!-- /.item -->

                <div class="item">
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
                    </div><!-- /.car-content -->
                </div><!-- /.item -->

                <div class="item">
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
                    </div><!-- /.car-content -->
                </div><!-- /.item -->
            </div><!-- /.vehicle-slider -->
@endsection