@extends('backend.layouts.tbody')

@section('type')
<?php
$type = 'user';
?> 
@endsection

@section('title')
Utenti
@endsection

@section('content_title')
@if($filter == 'active')
Utenti
@elseif($filter == 'trash')
Utenti cancellati
@endif
@endsection

@section('thead')
<td width="60"></td>
<td>Cognome</td>
<td>Nome</td>
<td>Email</td>
<td>Data registrazione</td>
@endsection          

@section('tcontent')
@forelse($list as $user)
<tr style="cursor:pointer" onclick="redirect({{$user->id}})">
    <td>
        @if($user->deleted_at)
        <img src="/images/uncheck.png" />
        @else
        <img src="/images/check.png" />
        @endif
    </td>
    <td>{{ $user->surname }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->created_at->format('d/m/Y H:m') }}</td>
</tr>
@empty
<tr><td colspan="3"><h4>&nbsp;&nbsp; Nessun utente presente</h4></td></tr>
@endforelse
<script type="text/javascript">
    function redirect(id){
    window.location.href = '/office/user/' + id + '/edit';
    };
</script>
@endsection

