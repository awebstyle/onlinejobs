@include('admin.template.partials._head')


<body class="hold-transition skin-blue fixed sidebar-mini">

    <div class="wrapper">

        <!-- start header -->
        @include('admin.template.partials._header')
        <!-- end header -->

        <!-- start modal -->
        @include('admin.template.partials._modal')
        <!-- end modal -->

        <!-- left sidebar -->
        @include('admin.template.partials._sidebar')
        <!-- end sidebar -->            

        <!-- start content -->
        @yield('content')
        <!-- end content -->

        <!-- start footer -->
            <footer class="main-footer">
<div class="pull-right hidden-xs">
    <b>Version</b> 2.3.2
</div>
<strong>Copyright &copy; 2021 <a href="#">CampCodes</a>.</strong> All rights
reserved.
</footer>            <!-- end footer -->

    </div>
        
            <script type="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"> </script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
<script src="dist/js/app.min.js"></script> 

<script type="text/javascript" src="plugins/datepicker/bootstrap-datepicker.js" ></script> 
<script type="text/javascript" src="plugins/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

<script type="text/javascript" src="plugins/dataTables/dataTables.bootstrap.min.js" ></script> 
<script src="plugins/datatables/jquery.dataTables.min.js"></script> 

<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>

<script type="text/javascript" language="javascript" src="plugins/input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>
$(function () {
    $("#dash-table").DataTable();
    $('#dash-table2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });
});

$('input[data-mask]').each(function() {
var input = $(this);
input.setMask(input.data('mask'));
});


$('#BIRTHDATE').inputmask({
    mask: "2/1/y",
    placeholder: "mm/dd/yyyy",
    alias: "date",
    hourFormat: "24"
});

$('#HIREDDATE').inputmask({
    mask: "2/1/y",
    placeholder: "mm/dd/yyyy",
    alias: "date",
    hourFormat: "24"
});

$('.date_picker').datetimepicker({
    format: 'mm/dd/yyyy',
    startDate : '01/01/1950', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0 
});
</script>            
</body>

</html>
