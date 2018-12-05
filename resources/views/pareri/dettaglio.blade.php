@extends('layouts.dashboard')

@section('breadcrumb','Dettaglio Commissione Parere') 

@section('content')

      <!-- Example DataTables Card-->
      <div class="container-fluid">
      <div class="card mb-3">
      	
      	
        <div class="card-header">
          <i class="fa fa-table"></i> Commissione pareri n. {{$parere->numero_cp}} per Aqbce {{$parere->aqbce}}
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-sm table-striped table-hover" style="width:40%;">

                <tbody>	 
                <tr>
                	<th>Azioni</th>
                	<td>

					{!! Form::open(['method' => 'GET', 'style'=>'display:inline-block', 'route' => ['pareri.edit', $parere->id_commissione_pareri]]) !!}
	         		 
	         		{!! Form::button('<i class="fa fa-fw fa-pencil"></i>', ['type' => 'submit'] )  !!}
					{!! Form::close() !!}
					
					
					{!! Form::open(['method' => 'DELETE', 'style'=>'display:inline-block', 'id' => 'deleteForm', 'route' => ['pareri.destroy', $parere->id_commissione_pareri]]) !!}
	         		 
	         		{!! Form::button('<i class="fa fa-fw fa-trash-o"></i>', ['type' => 'submit'] )  !!}
	         		
					{!! Form::close() !!}
					
					@empty($parere->documento)
					
					@else 

					<a href="/bdu/storage/app/public/documents/<?php echo $parere->documento ?>" style= "margin-right: 0.333em !important; padding: 0.2em 0.6em;" class="dt-button fa fa-floppy-o" id = "open"></a>

					@endempty

            	    </td>
                </tr>
                <tr>
                	<th>AQBCE</th>
                	<td><?php echo $parere->aqbce; ?></td>
                </tr>
                <tr>
                	<th>Stato</th>
                	<td><?php echo $parere->stato; ?></td>
                </tr>
                <tr>
                	<th>US</th>
                	<td><?php echo $parere->us; ?></td>
                </tr>
                <tr>
                	<th>Numero CP</th>
                	<td><?php echo $parere->numero_cp; ?></td>
                </tr>
                <tr>
                	<th>Data Commissione</th>
                	<td><?php echo $parere->data_cp; ?></td>
                </tr>
                <tr>
                	<th>Esito</th>
                	<td><?php echo $parere->esito; ?></td>
                </tr>
                <tr>
                	<th>Ubicazione GIS</th>
                	<td><?php echo $parere->localita; ?></td>
                </tr>
                <tr>
                	<th>Progetto Preliminare</th>
                	<td><?php echo $parere->richiesta_progetto_preliminare; ?></td>
                </tr>
                <tr>
                	<th>Notifica Parere Finale</th>
                	<td><?php echo $parere->notifica_parere_finale; ?></td>
                </tr>
                <tr>
                	<th>Scadenza</th>
                	<td><?php echo $parere->scadenza; ?></td>
                </tr>
                <tr>
                	<th>Note</th>
                	<td><?php echo $parere->note; ?></td>
                </tr>
                <tr>
                	<th>Edificio Incongruo</th>
                	<td><?php echo $parere->edificio_incongruo; ?></td>
                </tr>
                <tr>
                	<th>Argomenti Discussi</th>
                	<td><?php echo $parere->argomenti_discussi; ?></td>
                </tr>
                <tr>
                	<th>Indirizzo Presidente</th>
                	<td><?php echo $parere->indirizzo_presidente; ?></td>
                </tr>
                <tr>
                	<th>Indirizzo Tecnici</th>
                	<td><?php echo $parere->indirizzo_tecnici; ?></td>
                </tr>
 
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Ultimo aggiornamento {{$parere->data_ultimo_aggiornamento}} da {{$parere->utente_id}}</div>
      </div>
    </div>
    <!-- /.container-fluid-->
@endsection

<!-- Page specific scripts-->
@section('pagespecificscripts') 
<script>
    $("#deleteForm").on("submit", function(){
        return confirm("Sei sicuro di voler eliminare questo elemento?");
    });
</script>
@endsection
<!-- Page specific scripts-->