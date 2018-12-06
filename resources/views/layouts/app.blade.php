<!DOCTYPE html>
<html lang="it-IT">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BdU Online</title>
  <!-- Bootstrap core CSS-->
  <link href="{{URL::to('/')}}/theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{URL::to('/')}}/theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{URL::to('/')}}/theme/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/theme/vendor/datatables/fixedColumns.bootstrap.min.css" rel="stylesheet">
  <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> Forse da rimuovere, non necessario--> 
  <!-- Custom styles for this template-->
  <link href="{{URL::to('/')}}/theme/css/sb-admin.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/theme/vendor/datatables/buttons.dataTables.min.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" style ="zoom: 0.8">
@yield('body')
    
@include('layouts.footer')
</body>

</html>
