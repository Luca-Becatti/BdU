@extends('layouts.dashboard')

@section('breadcrumb','Commissioni Parere Eliminate') 

@section('content') 
	<!--@include('pareri/modal_form')-->
      <!-- Example DataTables Card-->
      <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Commissioni Parere Eliminate
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-sm table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Azioni</th>
                  <th>AQBCE</th>
                  <th>Stato</th>
                  <th>US</th>
                  <th>Numero CP</th>
                  <th>Data Commissione</th>
                  <th>Esito</th>
                  <th>Ubicazione Gis</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
               	  <th>Azioni</th>
                  <th>AQBCE</th>
                  <th>Stato</th>
                  <th>US</th>
                  <th>Numero CP</th>
                  <th>Data Commissione</th>
                  <th>Esito</th>
                  <th>Ubicazione Gis</th>
                </tr>
              </tfoot>         

              <tbody>
                
                
                
                <?php

					
					
					foreach ($pareri as $parere):
					
					//$ubicazione = App\GisPratiche::where('aqbce',$parere->aqbce)->first();
			    ?>
			    
			    
			    <tr>

			    	<td>
	            	 <!--<a class="nav-link" title="Modifica" style= "display:inline; padding: .0rem .3rem " href="#" onclick="redirect({{$parere->id_commissione_pareri}});return false;">
	           			 <i class="fa fa-fw fa-pencil"></i>
	         		 </a>-->
	         		 
	                 
	                 <!--  <a class="nav-link" title="Elimina"  style= "display:inline; padding: .0rem .3rem " href="#" >
	           			 <i class="fa fa-fw fa-trash-o"></i>
	         		 </a>	-->
					{!! Form::open(['method' => 'GET', 'style'=>'display:inline-block', 'route' => ['pareri.edit', $parere->id_commissione_pareri]]) !!}
	         		 
	         		{!! Form::button('<i class="fa fa-fw fa-pencil"></i>', ['type' => 'submit'] )  !!}
					{!! Form::close() !!}
					
					
					{!! Form::open(['method' => 'DELETE', 'style'=>'display:inline-block', 'route' => ['pareri.destroy', $parere->id_commissione_pareri]]) !!}
	         		 
	         		{!! Form::button('<i class="fa fa-fw fa-trash-o"></i>', ['type' => 'submit'] )  !!}
					{!! Form::close() !!}
					
				    {!! Form::open(['method' => 'GET', 'style'=>'display:inline-block', 'id' => 'showDetails', 'route' => ['pareri.showTrashed', $parere->id_commissione_pareri]]) !!}
	         		 
	         		{!! Form::button('<i class="fa fa-fw fa-plus-circle"></i>', ['type' => 'submit'] )  !!}
					{!! Form::close() !!}
					
					{!! Form::open(['method' => 'GET', 'style'=>'display:inline-block', 'id' => 'restore', 'route' => ['pareri.restore', $parere->id_commissione_pareri]]) !!}
	         		 
	         		{!! Form::button('<i class="fa fa-fw fa fa-ambulance"></i>', ['type' => 'submit'] )  !!}
					{!! Form::close() !!}
					
	            	 <!--<a class="nav-link" title="Dettagli" style= "display:inline; padding: .0rem .3rem " href="index">
	           			 <i class="fa fa-fw fa-plus-circle"></i>
	         		 </a>-->
            	    </td>
            	  
			        <td><?php echo $parere->aqbce; ?></td>
			        <td><?php echo $parere->stato; ?></td>
      			    <td><?php echo $parere->us; ?></td>
			        <td><?php echo $parere->numero_cp; ?></td>
			        <td><?php echo $parere->data_cp; ?></td>
			        <td><?php echo $parere->esito; ?></td>
			        <td><?php echo $parere->localita; ?></td>
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
    window.location.href = 'pareri/' + id + '/edit';
    };
</script>
	<script>

	$(document).ready(function() {

	
	    var table = $('#dataTable').DataTable( {

	    	"dom": 'Brtip',
	    	//"dom": 'Bfrtip' se si vuole il campo di ricerca in alto a destra
        
	        "lengthMenu": [
		                     [ 10, 25, 50, -1 ],
		                     [ '10 elementi', '25 elementi', '50 elementi', 'Mostra Tutto' ]
		                 ],
		                 buttons: [{
			                 
		                     extend: 'pageLength',
		                     text: 'Visualizza'

		                 },
		                  {
		                      text: 'Aggiungi',
		                      action: function ( e, dt, node, config ) {
		                          alert( 'Button 1 clicked on' );
		                      }
		                  },
		                  {
		                      text: 'Commissioni',
		                      action: function ( e, dt, node, conf ) {
		                    	  window.location = 'pareri';
		                      }
		                  },
		                  {
		                      text: 'Esporta',
		                      action: function ( e, dt, node, conf ) {
		                          alert( 'Button 3 clicked on' );
		                      }
		                  }
		                 ],


	    	"language": {
	            processing:     "Traitement en cours...",
	            search:         "Ricerca..",
	            lengthMenu:     "Afficher _MENU_ &eacute;l&eacute;ments",
	            info:           "Visualizzando la riga da  _START_ a _END_ di _TOTAL_ elementi",
	            infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
	            infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
	            infoPostFix:    "",
	            loadingRecords: "Caricamento in corso",
	            zeroRecords:    "Nessun elemento da visualizzare",
	            emptyTable:     "Tabella Vuota",
	            paginate: {
	                first:      "Prima",
	                previous:   "Indietro",
	                next:       "Avanti",
	                last:       "Ultima"
	            },
	            aria: {
	                sortAscending:  ": activer pour trier la colonne par ordre croissant",
	                sortDescending: ": activer pour trier la colonne par ordre décroissant"
	            }
	        },



	        "columnDefs": [ 
	        	 {"width": "90px", "targets": 0}
	         ]
	    } );

	    
	    
        // Setup - add a text input to each footer cell
        $('#dataTable tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="" />' );
        } );

        $('#dataTable tfoot tr').appendTo('#dataTable thead');
       
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