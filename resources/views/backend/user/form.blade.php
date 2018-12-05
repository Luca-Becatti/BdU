@extends('backend.layouts.backend')

@section('type')
<?php
$type = 'user';
?> 
@endsection

@section('title')
Utenti
@endsection

@section('content_title')
@if($action == 'create')
Aggiungi utente
@elseif($action == 'edit')
Modifica utente
@elseif($action == 'restore')
Ripristino utente
@endif
@endsection

@section('content')
<div class="col-sm-1"></div>
<div class="col-sm-10">
    @if ($action == 'create')
    {{ Form::open([ 'url' => 'office/user' ]) }}
    @else
    {{ Form::model($user, ['method' => 'put', 'route' => ['office.user.update', $user->id]]) }}
    @endif

    <div class="form-group">
        {{Form::label('name', 'Nome:')}}
        {{Form::text('name', null, ['class' => 'form-control'])}}
        <br/>
        @if (count($errors->get('name')) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('name') as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="form-group">
        {{Form::label('surname', 'Cognome:')}}
        {{Form::text('surname', null, ['class' => 'form-control'])}}
        <br/>
        @if (count($errors->get('surname')) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('surname') as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="form-group">
        {{Form::label('email', 'Email:')}}
        {{Form::text('email', null, ['class' => 'form-control'])}}
        <br/>
        @if (count($errors->get('email')) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('email') as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        @if($errors->get('duplicate_email'))
        <div class="alert alert-danger">
            <ul>
                <li>{{$errors->first('duplicate_email')}}</li>
            </ul>
        </div>
        @endif
    </div>

    @if($action == 'restore')
    <h5>Data cancellazione: {{ $user->deleted_at->format('d/m/Y H:m') }}</h5>
    <br/>
    @endif

    @if (isset($delete_denied) && $delete_denied == 'true')
    <div class="alert alert-danger">
        <ul>
            <li>Impossibile cancellare questo utente: ci sono ordini associati</li>
        </ul>
    </div>
    @endif

    @if($action != 'create')
    <?php
    $id = $user->id;
    ?>
    @endif
    @include('backend.layouts.partials.button')

</div>
@endsection

