<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BdU Online</title>
  <!-- Bootstrap core CSS-->
  <link href="{{URL::to('/')}}/theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{URL::to('/')}}/theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{URL::to('/')}}/theme/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{URL::to('/')}}/theme/css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index">BdU Online</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Commissione Pareri">
          <a class="nav-link" href="tables">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Commissione Pareri</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Commissione Pareri">
          <a class="nav-link" href="nuovoparere">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Inserimento Parere</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar">Navbar</a>
            </li>
            <li>
              <a href="cards">Cards</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login">Login Page</a>
            </li>
            <li>
              <a href="register">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
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
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
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
  <div class="content-wrapper">

  
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Commissione Pareri</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tabella delle commissioni pareri</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-sm table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Controllo Flag</th>
                  <th>Flag Export</th>
                  <th>Id_Cp</th>
                  <th>Codice Us</th>
                  <th>AQBCE</th>
                  <th>Stato</th>
                  <th>US</th>
                  <th>Commissione Pareri</th>
                  <th>Data Commissione</th>
                  <th>Esito</th>
                  <th>Richiesta pp</th>
                  <th>Notifica parere finale</th>
                  <th>Scadenza 30 giorni</th>
                  <th>Note</th>
                  <th>Edificio Incongruo</th>
                  <th>Argomenti discussi</th>
                  <th>Ubicazione</th>
                  <th>Indirizzo Presidente</th>
                  <th>Indirizzi Tecnici</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Controllo Flag</th>
                  <th>Flag Export</th>
                  <th>Id_Cp</th>
                  <th>Codice Us</th>
                  <th>AQBCE</th>
                  <th>Stato</th>
                  <th>US</th>
                  <th>Commissione Pareri</th>
                  <th>Data Commissione</th>
                  <th>Esito</th>
                  <th>Richiesta pp</th>
                  <th>Notifica parere finale</th>
                  <th>Scadenza 30 giorni</th>
                  <th>Note</th>
                  <th>Edificio Incongruo</th>
                  <th>Argomenti discussi</th>
                  <th>Ubicazione</th>
                  <th>Indirizzo Presidente</th>
                  <th>Indirizzi Tecnici</th>
                </tr>
              </tfoot>
              

              <tbody>
                
                <?php

					use App\Parere;
					
					$pareri = App\Parere::all();
					
					foreach ($pareri as $parere):
			    ?>
			    <tr>
			        <td><?php echo $parere->controllo_flag; ?></td>
			        <td><?php echo $parere->flag_export; ?></td>
			        <td><?php echo $parere->id_cp; ?></td>
			        <td><?php echo $parere->cod_us; ?></td>
			        <td><?php echo $parere->aqbce; ?></td>
			        <td><?php echo $parere->stato; ?></td>
      			    <td><?php echo $parere->us; ?></td>
			        <td><?php echo $parere->numero_cp; ?></td>
			        <td><?php echo $parere->data_cp; ?></td>
			        <td><?php echo $parere->esito; ?></td>
			        <td><?php echo $parere->richiesta_progetto_preliminare; ?></td>
			        <td><?php echo $parere->notifica_parere_finale; ?></td>
    			    <td><?php echo $parere->scadenza_30_giorni; ?></td>
			        <td><?php echo $parere->note; ?></td>
			        <td><?php echo $parere->edificio_incongruo; ?></td>
			        <td><?php echo $parere->argomenti_discussi; ?></td>
			        <td><?php echo $parere->ubicazione; ?></td>
			        <td><?php echo $parere->indirizzo_presidente; ?></td>
			        <td><?php echo $parere->indirizzo_tecnici; ?></td>
			   </tr>
					<?php endforeach; ?>
				
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->

      <div class="col-md-4 col-md-offset-1">
      <h3 class="text-center">Nuovo Parere</h3>
	
	{!! Form::open(array('url' => '/tables/register')) !!}   
	
	  <div class="form-group">
        <label for="controllo_flag">controllo_flag</label>
        <input type="text" name="controllo_flag" id="controllo_flag" placeholder="1234" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="flag_export">flag_export</label>
        <input type="text" name="flag_export" id="flag_export" placeholder="1" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="id_cp">id_cp</label>
        <input type="text" name="id_cp" id="id_cp" placeholder="2223" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="cod_us">cod_us</label>
        <input type="text" name="cod_us" id="cod_us" placeholder="1" class="form-control">
      </div>
         
      <div class="form-group">
        <label for="aqbce">aqbce</label>
        <input type="text" name="aqbce" id="aqbce" placeholder="16567" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="esito">esito</label>
        <input type="text" name="esito" id="esito" placeholder="esito" class="form-control">
      </div>

      <div class="form-group">
        <label for="stato">stato</label>
        <input type="text" name="stato" id="stato" placeholder="stato" class="form-control">
      </div>
      
      
      <div class="form-group">
        <label for="numero_cp">numero_cp</label>
        <input type="text" name="numero_cp" id="numero_cp" placeholder="2" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="data_cp">data_cp</label>
        <input type="text" name="data_cp" id="data_cp" placeholder="2015-04-29" class="form-control">
      </div>
      
      
      <div class="form-group">
        <label for="us">us</label>
        <input type="text" name="us" id="us" placeholder="1" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="richiesta_progetto_preliminare">richiesta_progetto_preliminare</label>
        <input type="text" name="richiesta_progetto_preliminare" id="richiesta_progetto_preliminare" placeholder="richiesta_progetto_preliminare" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="notifica_parere_finale">notifica_parere_finale</label>
        <input type="text" name="notifica_parere_finale" id="notifica_parere_finale" placeholder="notifica_parere_finale" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="scadenza_30_giorni">scadenza_30_giorni</label>
        <input type="text" name="scadenza_30_giorni" id="scadenza_30_giorni" placeholder="2015-04-29" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="note">note</label>
        <input type="text" name="note" id="note" placeholder="note" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="edificio_incongruo">edificio_incongruo</label>
        <input type="text" name="edificio_incongruo" id="edificio_incongruo" placeholder="edificio_incongruo" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="argomenti_discussi">argomenti_discussi</label>
        <input type="text" name="argomenti_discussi" id="argomenti_discussi" placeholder="argomenti_discussi" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="ubicazione">ubicazione</label>
        <input type="text" name="ubicazione" id="ubicazione" placeholder="ubicazione" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="indirizzo_presidente">indirizzo_presidente</label>
        <input type="text" name="indirizzo_presidente" id="indirizzo_presidente" placeholder="indirizzo_presidente" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="indirizzo_tecnici">indirizzo_tecnici</label>
        <input type="text" name="indirizzo_tecnici" id="indirizzo_tecnici" placeholder="indirizzo_tecnici" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="campo_extra">campo_extra</label>
        <input type="text" name="campo_extra" id="campo_extra" placeholder="campo_extra" class="form-control">
	  </div>
	
      <div class="form-group">
        <input type="submit" value="Save"><button class="btn btn-info" id="add">Add</button>
      </div>

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
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{URL::to('/')}}/theme/vendor/jquery/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{URL::to('/')}}/theme/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{URL::to('/')}}/theme/vendor/datatables/jquery.dataTables.js"></script>
    <script src="{{URL::to('/')}}/theme/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{URL::to('/')}}/theme/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="{{URL::to('/')}}/theme/js/sb-admin-datatables.min.js"></script>
   

      <script>
  $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#dataTable tfoot th').each( function () {
        var title = $(this).text();
        //$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        $(this).html( '<input type="text" placeholder="Search" />' );
    } );
 
    // DataTable
    var table = $('#dataTable').DataTable();
    
    $('button').click( function() {
        var data = table.$('input, select').serialize();
        alert(
            "The following data would have been submitted to the server: \n\n"+
            data.substr( 0, 120 )+'...'
        );
        return false;
    } );
    
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );

  
  </script>
  </div>
</body>

</html>
