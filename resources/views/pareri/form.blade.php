<?php  use App\Parere; ?>
@extends('layouts.dashboard')

@section('breadcrumb','Nuovo Parere') 

@section('content') 

<div class = "form-horizontal">
<fieldset>
@if(isset($parere))
    {!! Form::model($parere,['method'=>'put','id'=>'frm', 'files' => 'true', 'style'=>'border:solid gray 2px; width: 650px; background-color: #92a8d1;', 'autocomplete' => 'off', 'route' => ['pareri.update', $parere->id_commissione_pareri]]) !!}
@else
    {!! Form::open(['id'=>'frm','files' => 'true', 'method'=>'post', 'enctype' => 'multipart/form-data','style'=>'border:solid gray 2px; width: 650px; background-color: #92a8d1;','autocomplete' => 'off','url' => 'pareri']) !!}
@endif

<div class="modal-header">
    <h5 class="modal-title">{{isset($parere)?'Modifica':'Nuovo'}} Parere</h5>
    <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>-->
</div>
<div class="modal-body">
    <div class="form-group row required">
        {!! Form::label("Aqbce","AQBCE",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
        @if(isset($parere))
		    {!! Form::text("aqbce",null,["class"=>"form-control".($errors->has('aqbce')?" is-invalid":""),'placeholder'=>'','id'=>'focus', "style" => "display: block; "]) !!}
		@else
		    {!! Form::text("aqbce",'AQ-BCE-',["class"=>"form-control".($errors->has('aqbce')?" is-invalid":""),'placeholder'=>'','id'=>'focus', "style" => "display: block; float: left;width: 350px;"]) !!}
		@endif
            
                            @if ($errors->has('aqbce'))
                            <span class="help-block">
                                {{ $errors->first('aqbce') }}
                            </span>
                            @endif
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Stato","Stato",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
   		 {{Form::select('stato', App\Parere::distinct('stato')->pluck('stato', 'stato'), null, ["class"=>"form-control".($errors->has('us')?" is-invalid":""),'placeholder'=>'Selezionare uno stato...','id'=>'focus', "style" => "display: block; float: left;width: 350px;"])}}
   		                    @if ($errors->has('stato'))
                            <span class="help-block">
                                {{ $errors->first('stato') }}
                            </span>
                            @endif
   		             <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Unita' Strutturale","Unita' Strutturale",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
            {!! Form::text("us",null,["class"=>"form-control".($errors->has('us')?" is-invalid":""),'placeholder'=>'','id'=>'focus', "style" => "display: block; float: left;width: 350px;"]) !!}
                            @if ($errors->has('us'))
                            <span class="help-block">
                                {{ $errors->first('us') }}
                            </span>
                            @endif
            
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Numero CP","Numero CP",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
            {!! Form::text("numero_cp",null,["class"=>"form-control".($errors->has('numero_cp')?" is-invalid":""),'placeholder'=>'','id'=>'focus', "style" => "display: block; float: left;width: 350px;"]) !!}
                          
                            @if ($errors->has('numero_cp'))
                            <span class="help-block">
                                {{ $errors->first('numero_cp') }}
                            </span>
                            @endif
            
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>  
    <div class="form-group row required">
        {!! Form::label("Data Commissione Parere","Data Commissione Parere",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
                @if(isset($parere))
				     {!! Form::date("data_cp", null, array('id' => 'datepicker_cp'), ["class"=>"form-control".($errors->has('data_cp')?" is-invalid":""),'placeholder'=>'','id'=>'focus']) !!}
				@else
				    {!! Form::date("data_cp",\Carbon\Carbon::now(), array('id' => 'datepicker_cp'), ["class"=>"form-control".($errors->has('data_cp')?" is-invalid":""),'placeholder'=>'','id'=>'focus']) !!}
				@endif       
                            @if ($errors->has('data_cp'))
                            <span class="help-block">
                                {{ $errors->first('data_cp') }}
                            </span>
                            @endif
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Esito","Esito",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
   		 {{Form::select('esito', App\Parere::distinct('esito')->pluck('esito','esito'), null, ["class"=>"form-control".($errors->has('esito')?" is-invalid":""),'placeholder'=>'Selezionare un esito...','id'=>'focus', "style" => "display: block; float: left;width: 350px;"])}}
   		    		        @if ($errors->has('esito'))
                            <span class="help-block">
                                {{ $errors->first('esito') }}
                            </span>
                            @endif
   		             <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Notifica Parere Finale","Notifica Parere Finale",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
                @if(isset($parere))
				    {!! Form::date("notifica_parere_finale",null, array('id' => 'datepicker_n'), ["class"=>"form-control".($errors->has('notifica_parere_finale')?" is-invalid":""),'placeholder'=>'','id'=>'focus']) !!}
				@else
				    {!! Form::date("notifica_parere_finale",\Carbon\Carbon::now(), array('id' => 'datepicker_n'), ["class"=>"form-control".($errors->has('notifica_parere_finale')?" is-invalid":""),'placeholder'=>'','id'=>'focus']) !!}
				@endif
                            @if ($errors->has('notifica_parere_finale'))
                            <span class="help-block">
                                {{ $errors->first('notifica_parere_finale') }}
                            </span>
                            @endif
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Scadenza","Scadenza",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
                @if(isset($parere))
				    {!! Form::date("scadenza",null, array('id' => 'datepicker_c'), ["class"=>"form-control".($errors->has('scadenza')?" is-invalid":""),'placeholder'=>'','id'=>'focus']) !!}
				@else
				    {!! Form::date("scadenza",\Carbon\Carbon::now(), array('id' => 'datepicker_c'), ["class"=>"form-control".($errors->has('scadenza')?" is-invalid":""),'placeholder'=>'','id'=>'focus']) !!}
				@endif
            
            
                            @if ($errors->has('scadenza'))
                            <span class="help-block">
                                {{ $errors->first('scadenza') }}
                            </span>
                            @endif
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Richiesta progetto preliminare","Richiesta progetto preliminare",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
            {!! Form::checkbox("richiesta_progetto_preliminare",1,isset($parere)?$parere->richiesta_progetto_preliminare:false,["class"=>"form-control".($errors->has('richiesta_progetto_preliminare')?" is-invalid":""),'placeholder'=>'','id'=>'focus', "style" => "display: block; float: left;width: 350px;"]) !!}
                            @if ($errors->has('richiesta_progetto_preliminare'))
                            <span class="help-block">
                                {{ $errors->first('richiesta_progetto_preliminare') }}
                            </span>
                            @endif
            
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Edificio Incongruo","Edificio Incongruo",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
            {!! Form::checkbox("edificio_incongruo",1,isset($parere)?$parere->edificio_incongruo:false,["class"=>"form-control".($errors->has('edificio_incongruo')?" is-invalid":""),'placeholder'=>'','id'=>'focus', "style" => "display: block; float: left;width: 350px;"]) !!}
                            @if ($errors->has('edificio_incongruo'))
                            <span class="help-block">
                                {{ $errors->first('edificio_incongruo') }}
                            </span>
                            @endif
            
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Argomenti Discussi","Argomenti Discussi",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
            {!! Form::text("argomenti_discussi",null,["class"=>"form-control".($errors->has('argomenti_discussi')?" is-invalid":""),'placeholder'=>'','id'=>'focus', "style" => "display: block; float: left;width: 350px;"]) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Note","Note",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
            {!! Form::text("note",null,["class"=>"form-control".($errors->has('note')?" is-invalid":""),'placeholder'=>'','id'=>'focus', "style" => "display: block; float: left;width: 350px;"]) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required" >
        {!! Form::label("Allega Documento","Allega Documento",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
          <div class="col-md-4">
          	{!! Form::file("documento",null,["class"=>"form-control".($errors->has('documento')?" is-invalid":""),'placeholder'=>'','id'=>'focus', "style" => "display: block; float: left;width: 350px;"]) !!}
            <span id="error-name" class="invalid-feedback"></span>
          </div>
    </div>
    @isset($parere->documento)
	<div class="form-group">
	    <label for="link">Documento Allegato: ({{ $parere->documento }})</label>
	</div>
	@endisset
	
	<div class="form-group row required">
        {!! Form::label("Numero Protocollo","Numero Protocollo",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
            {!! Form::text("numero_protocollo",null,["class"=>"form-control".($errors->has('numero_protocollo')?" is-invalid":""),'placeholder'=>'','id'=>'focus', "style" => "display: block; float: left;width: 350px;"]) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Data Protocollo","Data Protocollo",["class"=>"col-form-label col-md-3", "style" => "display: block; float: left;width: 150px;"]) !!}
        <div class="col-md-9">
                @if(isset($parere))
				    {!! Form::date("data_protocollo",null, array('id' => 'datepicker_c'), ["class"=>"form-control".($errors->has('data_protocollo')?" is-invalid":""),'placeholder'=>'','id'=>'focus']) !!}
				@else
				    {!! Form::date("data_protocollo",\Carbon\Carbon::now(), array('id' => 'datepicker_c'), ["class"=>"form-control".($errors->has('data_protocollo')?" is-invalid":""),'placeholder'=>'','id'=>'focus']) !!}
				@endif
            
            
                            @if ($errors->has('data_protocollo'))
                            <span class="help-block">
                                {{ $errors->first('data_protocollo') }}
                            </span>
                            @endif
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    
    <!--  
    <div class="form-group row required">
        {!! Form::label("Indirizzo Presidente","Indirizzo Presidente",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("indirizzo_presidente",null,["class"=>"form-control".($errors->has('indirizzo_presidente')?" is-invalid":""),'placeholder'=>'','id'=>'focus']) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("Indirizzo Tecnici","Indirizzo Tecnici",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("indirizzo_tecnici",null,["class"=>"form-control".($errors->has('indirizzo_tecnici')?" is-invalid":""),'placeholder'=>'','id'=>'focus']) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    -->
    <div class="modal-footer">
    <!--  <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>-->
    {!! Form::submit("Save",["class"=>"btn btn-primary"])!!}
	</div>
</div>
</fieldset>
</div>


{!! Form::close() !!}
</div>

@endsection
@section('pagespecificscripts') 
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	  <script>

	  $(function() {

	    $( "#datepickerS" ).datepicker({

	    	
		     dateFormat: 'yy-mm-dd',
      		 changeMonth: true,
      		 changeYear: true

	    });

	    $( "#datepickerN" ).datepicker({

	    	
		     dateFormat: 'yy-mm-dd',
     		 changeMonth: true,
     		 changeYear: true

	    });

	    $( "#datepicker30" ).datepicker({

	    	
		     dateFormat: 'yy-mm-dd',
    		 changeMonth: true,
    		 changeYear: true

	    });
	  });
	  </script>

@endsection
