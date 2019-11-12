<div id="wrapper">
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Locadora</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Cadastros
        </div>

         <li class="nav-item">
            <a class="nav-link" href="{{ url('/aluguel/')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Aluguéis</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/carro/')}}">
            <i class="fas fa-fw fa-table"></i>
                <span>Carros</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/categoria/')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Categorias</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/categoriacarro/')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Categoria do Carro</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/usuario/')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Usuarios</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/cliente/')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Clientes</span></a>
        </li>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-white-600 small">{{Auth::user()->nome}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/logout')}}" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Sair
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
