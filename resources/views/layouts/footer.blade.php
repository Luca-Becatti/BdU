<!-- common scripts -->

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
    <!-- <script src="{{URL::to('/')}}/theme/js/sb-admin-datatables.min.js"></script>-->
    <script src="{{URL::to('/')}}/theme/vendor/datatables/dataTables.buttons.min.js"></script>   
    <script src="{{URL::to('/')}}/theme/vendor/datatables/buttons.flash.min.js"></script>
    <script src="{{URL::to('/')}}/theme/vendor/datatables/jszip.min.js"></script>
    <script src="{{URL::to('/')}}/theme/vendor/datatables/pdfmake.min.js"></script>
    <script src="{{URL::to('/')}}/theme/vendor/datatables/vfs_fonts.js"></script>
    <script src="{{URL::to('/')}}/theme/vendor/datatables/buttons.print.min.js"></script>  
    <script src="{{URL::to('/')}}/theme/vendor/datatables/buttons.html5.min.js"></script>
    <script src="{{URL::to('/')}}/theme/vendor/datatables/jquery.dataTables.yadcf.js"></script>  
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

<!-- page specific scripts -->
@yield('pagespecificscripts')
