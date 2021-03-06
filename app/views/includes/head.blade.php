<!DOCTYPE html>
<html>



<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>XARA CBS</title>

    <!-- Core CSS - Include with every page -->
    {{ HTML::style('css/bootstrap.min.css') }}


   {{ HTML::style('font-awesome/css/font-awesome.css') }}
    <!-- Page-Level Plugin CSS - Blank -->

    <!-- SB Admin CSS - Include with every page -->

    {{ HTML::style('css/sb-admin.css') }}
    <!-- datatables css -->
    {{ HTML::style('media/css/jquery.dataTables.min.css') }}
    {{ HTML::style('media/css/select2.min.css') }}
    {{ HTML::style('datepicker/css/bootstrap-datepicker.css') }}
    <!-- jquery scripts with datatable scripts -->
     {{ HTML::script('media/jquery-1.12.0.min.js') }}
    {{ HTML::script('media/js/jquery.dataTables.js') }}
    {{ HTML::script('media/js/select2.full.js') }}
    {{ HTML::script('media/js/select2.js') }}
    {{ HTML::script('datepicker/js/bootstrap-datepicker.js') }}
   <script type="text/javascript">
  $(document).ready(function() {
    $('#users').DataTable({
        aaSorting: []
    });
    $('#vehs').DataTable({
        aaSorting: []
    });
    $('#shs').DataTable({
        aaSorting: []
    });
    $('#saves').DataTable({
        aaSorting: []
    });
    $('#docs').DataTable({
        aaSorting: []
    });
    $('#mobile').DataTable();
    $('#rejected').DataTable();
    $('#app').DataTable();
    $('#disbursed').DataTable();
    $('#amended').DataTable();
	} );
</script>
<script type="text/javascript">
   $(document).ready(function() {
      $('.selectable').select2();
   });
</script>
<style type="text/css">
   .right-inner-addon {
    position: relative;
   }
   .right-inner-addon input {
    padding-right: 30px;
   }
   .right-inner-addon i {
    position: absolute;
    right: 0px;
    padding: 10px 12px;
    pointer-events: none;
   }

   .ui-datepicker {
    padding: 0.2em 0.2em 0;
    width: 550px;
   }

   tfoot {
    display: table-header-group;
   }

   tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
   </style>
<script type="text/javascript">
    $(function(){
          $('.datepicker').datepicker({
              format: 'yyyy-mm-dd',
              autoclose: true,
              orientation: 'bottom'
          });
    });
</script>
<script type="text/javascript">
$(function(){
$('.datepicker2').datepicker({
    format: "mm-yyyy",
    startView: "months",
    minViewMode: "months",
    autoclose: true,
    orientation: 'bottom'
});
});
</script>
</head>
