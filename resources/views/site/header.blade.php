 <!-- ====== Header Top Area ====== --> 
 <header class="header-top-area bg-nero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 hidden-xs">
                <div class="header-content-left">
                    <ul class="header-top-menu">
                        <li>
                            <a href="#" class="top-left-menu">
                                <i class="fa fa-phone"></i>
                                <span>Telefone - 99999 - 0000</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="top-left-menu">
                                <i class="fa fa-envelope"></i>
                                <span>locaveiculo@locaveiculo@gmail.com</span>
                            </a>                                 
                        </li>
                    </ul><!-- /.header-top-menu -->
                </div><!-- /.header-content-left -->
            </div><!-- /.col-md-9 -->

            <div class="col-md-6 col-sm-5">
                <div class="header-content-right">
                    <ul class="header-top-menu">
                        <li>
                            <button type="button" class="btn btn-warning" style="margin-top: 10px" data-toggle="modal" data-target="#modalExemplo">
                                <i class="fa fa-user"></i> Login</button>
                            </li>
                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

 
<!-- MODAL -->

<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login da LocaVeiculo</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="email" class="control-label">E-mail</label>
                                  <input type="text" class="form-control" id="email" name="email" value="" required=""  placeholder="exemplo@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="senha" class="control-label">Senha</label>
                                  <input type="password" class="form-control" id="senha" name="password" value="" required="">
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Ainda não é cadastrado na <span class="text-success">LocaVeículo</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span>Vários tipo de carro.</li>
                          <li><span class="fa fa-check text-success"></span>Ótimo atendimento</li>
                          <li><span class="fa fa-check text-success"></span>Preços Acessíveis</li>
                      </ul>
                      <p><a href="/new-customer/" class="btn btn-info btn-block">Cadastre Agora</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>



<!-- ====== Header Nav Area ====== --> 
<header class="header-nav-area">
    <div class="container">        
        <div class="row">
            <div class="col-md-3 col-sm-10 col-xs-10">
                <div class="site-logo">
                    <a href="{{ url('/inicio/')}}"><img src="{{asset("site/assets/images/car-logo.png")}}" alt="logo" /></a>
                </div><!-- /.logo -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-9 col-sm-2 col-xs-2 pd-right-0">
                <nav class="site-navigation top-navigation nav-style-one">
                    <div class="menu-wrapper">
                        <div class="menu-content">
                            <ul class="menu-list">
                                <li>
                                    <a href="{{ url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a href="">Carros</a>
                                </li>
                            </ul> <!-- /.menu-list -->
                        </div> <!-- /.menu-content-->
                    </div> <!-- /.menu-wrapper --> 
                </nav><!-- /.site-navigation -->
                <!--Mobile Main Menu-->
                <div class="mobile-menu-main hidden-md hidden-lg">
                    <div class="menucontent overlaybg"> </div>
                    <div class="menuexpandermain slideRight">
                        <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                            <span></span>
                        </a>
                    </div><!--/.menuexpandermain-->

                    <div id="mobile-main-nav" class="mb-navigation slideLeft">
                        <div class="menu-wrapper">
                            <div id="main-mobile-container" class="menu-content clearfix"></div>
                        </div>
                    </div><!--/#mobile-main-nav-->
                </div><!--/.mobile-menu-main-->
            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.header-bottom-area -->
