@extends('layouts.dashboard')

@section('breadcrumb','Pratiche dal Gis') 

@section('content') 
      <!-- Example DataTables Card-->
      <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tabella delle Pratiche
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-sm table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
               	  <th>Azioni</th>
                  <th>Codice Gis</th>
                  <th>AQBCE</th>
                  <th>Localita'</th>
                  <th>Zona</th>
                  <th>Ambito</th>
                  <th>Data</th>
                  <th>Richiedente</th>
                  <th>Progettista</th>
                  <th>Codice</th>
                  <th>Esito</th>
                  <th>Importo Richiesto</th>
                  <th>Importo Ammesso</th>
                  <th>Importo Accertato</th>
                  <th>Importo Concesso</th>
                  <th>Stato Cantiere</th>
                  <th>Totale Liquidato</th>
                  <th>Step</th>
                  <th>Priorita' Sub</th>
                  <th>Livelli Sicurezza</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
               	  <th>Azioni</th>
                  <th>Codice Gis</th>
                  <th>AQBCE</th>
                  <th>Localita'</th>
                  <th>Zona</th>
                  <th>Ambito</th>
                  <th>Data</th>
                  <th>Richiedente</th>
                  <th>Progettista</th>
                  <th>Codice</th>
                  <th>Esito</th>
                  <th>Importo Richiesto</th>
                  <th>Importo Ammesso</th>
                  <th>Importo Accertato</th>
                  <th>Importo Concesso</th>
                  <th>Stato Cantiere</th>
                  <th>Totale Liquidato</th>
                  <th>Step</th>
                  <th>Priorita' Sub</th>
                  <th>Livelli Sicurezza</th>
                </tr>
              </tfoot>
              

              <tbody>
                
                <?php

					use App\Gispratiche;
					
					$pareri = App\Gispratiche::take(1000)->get();
					
					foreach ($pareri as $parere):
					
					//$ubicazione = App\GisPratiche::where('aqbce',$parere->aqbce)->first();
			    ?>
			    <tr>
			    	
			    	<td>
	            	 <a class="nav-link" style= "display:inline; padding: .0rem .3rem " onclick="redirect({{$parere->id_commissione_pareri}})">
	           			 <i class="fa fa-fw fa-pencil"></i>
	         		 </a>
	         		 
	            	 <a class="nav-link" style= "display:inline; padding: .0rem .3rem " href="tables">
	           			 <i class="fa fa-fw fa-trash-o"></i>
	         		 </a>

	            	 <a class="nav-link" style= "display:inline; padding: .0rem .3rem " href="index">
	           			 <i class="fa fa-fw fa-plus-circle"></i>
	         		 </a>
            	    </td>
            	
			    
			        <td><?php echo $parere->codice_gis; ?></td>
			        <td><?php echo $parere->aqbce; ?></td>
			        <td><?php echo $parere->localita; ?></td>
			        <td><?php echo $parere->zona; ?></td>
			        <td><?php echo $parere->ambito; ?></td>
			        <td><?php echo $parere->data; ?></td>
      			    <td><?php echo $parere->richiedente; ?></td>
			        <td><?php echo $parere->progettista; ?></td>
			        <td><?php echo $parere->codice; ?></td>
			        <td><?php echo $parere->esito; ?></td>
			        <td><?php echo $parere->imp_rich; ?></td>
			        <td><?php echo $parere->imp_amm; ?></td>
    			    <td><?php echo $parere->imp_acc; ?></td>
			        <td><?php echo $parere->imp_con; ?></td>
			        <td><?php echo $parere->stato_cantiere; ?></td>
			        <td><?php echo $parere->totale_liquidato; ?></td>
			        <td><?php echo $parere->step; ?></td>
			        <td><?php echo $parere->proirita_sub_comprensorio; ?></td>
			        <td><?php echo $parere->livelli_sicurezza; ?></td>
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
@endsection

<!-- Page specific scripts-->
@section('pagespecificscripts') 
<script type="text/javascript">
    function redirect(id){
    window.location.href = 'nuovoparere/' + id + '/edit';
    };
</script>
	<script>
		$(document).ready(function() {
			// Setup - add a text input to each footer cell
			$('#dataTable tfoot th').each( function ({
	            deferRender:    true,
	            scrollY:        200,
	            scrollCollapse: true,
	            scroller:       true

				}) {
				var title = $(this).text();
				//$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
				$(this).html( '<input type="text" placeholder="Search" />' );
			} );

		    // DataTable
		    var table = $('#dataTable').DataTable();

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
@endsection
<!-- Page specific scripts-->