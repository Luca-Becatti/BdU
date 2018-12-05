@extends('layouts.dashboard')

@section('breadcrumb','Commissione Pareri') 

@section('content') 
      <!-- Example DataTables Card-->
      <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tabella delle commissioni pareri
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="dataTable" class="table table-bordered table-sm table-striped table-hover">
              <thead>
                <tr>
                  <th>Azioni</th>
                  <th class="dt-filter-text">AQBCE</th>
                  <th class="dt-filter-text">Ubicazione Gis</th>
                  <th class="dt-filter-select">Stato</th>
                  <th class="dt-filter-text">US</th>
                  <th class="dt-filter-text">Numero CP</th>
                  <th>Data Commissione</th>
                  <th class="dt-filter-select">Esito</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
               	  <th></th>
                  <th>AQBCE</th>
                  <th>Ubicazione Gis</th>
                  <th>Stato</th>
                  <th>US</th>
                  <th>Numero CP</th>
                  <th>Data Commissione</th>
                  <th>Esito</th>
                </tr>
              </tfoot>         
              <tbody>                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    
		    <div id="studentModal" class="modal fade" role="dialog">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <form method="post" id="student_form">
		                <div class="modal-header">
		                   <h4 class="modal-title">Documento non presente</h4>
		                </div>
		                <div class="modal-body">
		                    {{csrf_field()}}
		                    <span id="form_output"></span>
		                    <div class="form-group">
		                        <label>Se si intende caricare un documento bisogna entrare nella sezione di modifica ed aggiungere un nuovo documento. </label>
		                    </div>
		                </div>
		                <div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                </div>
		            </form>
		        </div>
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

	
	    var table = $("#dataTable").DataTable( {

	        processing: true,
	        serverSide: true,


	        ajax: "{{ route('pareri.get_commissioni') }}",

	        
	        columns: [
	      		{data: 'action', name: 'action', orderable: false, searchable: false},
	            { data: 'aqbce'},
	            { data: 'localita'},
	            { data: 'stato'},
	            { data: 'us'},
	            { data: 'numero_cp'},
	            { data: "data_cp" },
	            { data: 'esito'}
	        ],


	    	"dom": 'Brtip',
	    	//"dom": 'Bfrtip' se si vuole il campo di ricerca in alto a destra

        
	        "lengthMenu": [
		                     [ 10, 25, 50, -1 ],
		                     [ '10 elementi', '25 elementi', '50 elementi', 'Mostra Tutto' ]
		                  ],
		                  
		    "buttons": [{
			                 
		                extend: 'pageLength',
		                text: 'Visualizza'

		                 },
		                  {
		                	 text: 'Aggiungi',

		                  },
		                  {
		                      text: 'Cestino',
		                      action: function ( e, dt, node, conf ) {
		                    	  window.location = 'cestino';
		                      }
		                  },
		                  {
		                      extend: 'copy',
		                      text: 'Copia',

		                  },
		                  {
		                      extend: 'excel',
		                      text: 'Excel',

		                  },
		                  {
		                      extend: 'pdf',
		                      text: 'Esporta Pdf',

		                  },
		                  {
		                      extend: 'print',
		                      text: 'Stampa',

		                  },
		              ],


	    	"language": {
	            processing:     "Caricamento in corso...",
	            search:         "Ricerca..",
	            lengthMenu:     "Afficher _MENU_ &eacute;l&eacute;ments",
	            info:           "Visualizzando la riga da  _START_ a _END_ di _TOTAL_ elementi",
	            infoEmpty:      "Visualizzando l'elemento 0 su 0 elementi",
	            infoFiltered:   "(filtrati da _MAX_ elementi in totale)",
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
	                sortAscending:  ": attivare per ordinare la colonna in ordine crescente",
	                sortDescending: ": attivare per ordinare la colonna in ordine decrescente"
	            }
	        },



	        "columnDefs": [ 
	        	 {"width": "90px", "targets": 0}
	         ],



	         initComplete: function () {

	             //Apply select search
	             this.api().columns('.dt-filter-select').every(function () {
	                 var column = this;
	                 var select = $('<select><option value=""></option></select>')
	                     .appendTo($(column.footer()).empty())
	                     .on('change', function () {
	                         var val = $.fn.dataTable.util.escapeRegex(
	                             $(this).val()
	                         );
	                         column
	                             .search( val ? '^'+val+'$' : '', true, false)
	                             .draw();
	                     });
	                 column.data().unique().sort().each(function (d,j) {
	                     select.append('<option value="'+d+'">'+d+'</option>')
	                 });
	             });

	             //Apply text search
	             this.api().columns('.dt-filter-text').every(function () {
	                 var title = $(this.footer()).text();
	                 $(this.footer()).html('<input type="text" placeholder="" />');
	                 var that = this;
	                 $('input',this.footer()).on('keyup change', function () {
	                     if (that.search() !== this.value) {
	                         that
	                             .search(this.value)
	                             .draw();
	                     }
	                 });
	             });
	         }
	    } );

	    $('#dataTable tfoot tr').appendTo('#dataTable thead');   



        }); 


	
</script>
<script>

function alertDocument(e, node, config) {

        $('#studentModal').modal('show');
         $('#student_form')[0].reset();
         $('#form_output').html('');
         $('#button_action').val('insert');
         $('#action').val('Add');
}
</script>
<script>

	$(document).on('click', '.delete', function(){
	    var dataToSend = $(this).attr('id');
	    if(confirm("Sei sicuro di voler eliminare questo record?"))
	    {
	        $.ajax({
	            url:"{{route('pareri.deleteAjax' )}}",
	            mehtod:"get",
	            data:{
		            prova : dataToSend,
		            colour: "red"},
	            success:function(data)
	            {
		            
	                $('#dataTable').DataTable().ajax.reload();
	            }
	        })
	    }
	    else
	    {
	        return false;
	    }
	});
	
    $("#deleteForm").on("submit", function(){
        return confirm("Sei sicuro di voler eliminare questo elemento?");
    });
</script>
@endsection
<!-- Page specific scripts-->