@extends('layouts.app')

@section('body')
<div id="wrapper">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('/index') }}">BdU Online</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      @auth
      <?php $role = Auth::user()->ruolo_id; ?>
          @if($role == 2)
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Commissione Pareri">
		          <a class="nav-link" href="{{ url('/pareri') }}">
		            <i class="fa fa-fw fa-table"></i>
		            <span class="nav-link-text">Commissione Pareri</span>
		          </a>
		        </li>
		        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Commissione Pareri">
		          <a class="nav-link" href="{{ url('/pratiche_gis') }}">
		            <i class="fa fa-fw fa-table"></i>
		            <span class="nav-link-text">Pratiche Gis</span>
		          </a>
		        </li>
		        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Commissione Pareri">
		          <a class="nav-link" href="{{ url('/pareri/create') }}">
		            <i class="fa fa-fw fa-table"></i>
		            <span class="nav-link-text">Inserimento Parere</span>
		          </a>
		        </li>

		@else 

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{ url('/index') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{ url('/charts') }}">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Grafici</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Commissione Pareri">
          <a class="nav-link" href="{{ url('/pareri') }}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Commissione Pareri</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Commissione Pareri">
          <a class="nav-link" href="{{ url('/pratiche_gis') }}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Pratiche Gis</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Commissione Pareri">
          <a class="nav-link" href="{{ url('/pareri/create') }}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Inserimento Parere</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Commissione Pareri">
          <a class="nav-link" href="{{ url('/form') }}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Form</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Componenti</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar">Barre di nacigazione</a>
            </li>
            <li>
              <a href="cards">Messaggi</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Pagine di esempio</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="{{ url('/login') }}">Login</a>
            </li>
            <li>
              <a href="{{ url('/register') }}">Registrazione</a>
            </li>
            <li>
              <a href="{{ url('/forgot-password') }}">Password Dimenticata</a>
            </li>
            <li>
              <a href="{{ url('/blank') }}">Pagina Vuota</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Livelli di menu</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Secondo livello</a>
            </li>
            <li>
              <a href="#">Secondo livello</a>
            </li>
            <li>
              <a href="#">Secondo livello</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Terzo Livello</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Terzo Livello</a>
                </li>
                <li>
                  <a href="#">Terzo Livello</a>
                </li>
                <li>
                  <a href="#">Terzo Livello</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      @endif 
      @endauth
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messaggi
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Nuovi messaggi:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Luca</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Messaggio di esempio</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">Leggi i messaggi</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Allarmi
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Nuovi Allarmi:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Esempio di Allerta</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">Guarda tutte le allerte</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Ricerca AQBCE ..">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('/') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">@yield('breadcrumb')</li>
      </ol>
  @yield('content')

    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Effattuare il Logout ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selezionare "Logout" in basso per uscire dalla sessione corrente.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annulla</button>
            <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
@endsection