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
                            <button type="button" class="btn btn-warning" style="margin-top: 10px" data-toggle="modal" data-target="#modal-login">
                                <i class="fa fa-user"></i> Login</button>
                            </li>
                            <li>
                            <button type="button" class="btn btn-warning" style="margin-top: 10px" data-toggle="modal" data-target="#modalcadastro">
                                <i class="fa fa-user"></i>  Cadastre Agora</button>
                            </li>
                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

 
<!-- MODAL -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login da LocaVeiculo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Senha:</label>
            <input type="password" name="password" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success btn-block">Login</button>
      </div>
    </div>
  </div>
</div>


<!--Modal cadastro-->

<div class="modal fade" id="modalcadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastre-se na LocaVeiculo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="{{ action('InicioController@store') }}" method="POST">
            @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sobrenome:</label>
            <input type="text" name="sobrenome" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">CPF:</label>
            <input type="text" name="cpf" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">CNH:</label>
            <input type="text" name="cnh" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Senha:</label>
            <input type="password" name="password" class="form-control" id="recipient-name">
          </div>
            <div class="modal-footer">
         <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
      </div>
        </form>
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
