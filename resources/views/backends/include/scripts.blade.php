<!-- toastr -->
<script src="{{ asset('backends/plugins/toastr/toastr.min.js') }}"></script>
{{-- <script src="{{ asset('backends/vendor/sweetalert/sweetalert.min.js') }}"></script> <!-- SweetAlert Plugin Js --> 
<script src="{{ asset('backends/vendor/toastr/toastr.js') }}"></script> --}}



<!-- Javascript -->
<!-- Form Page -->
<script src="{{ asset('backends/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('backends/vendor/parsleyjs/js/parsley.min.js') }}"></script>

<script src="{{ asset('backends/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ asset('backends/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('backends/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('backends/bundles/morrisscripts.bundle.js') }}"></script><!-- Morris Plugin Js -->
<script src="{{ asset('backends/bundles/knob.bundle.js') }}"></script> <!-- Jquery Knob-->
<script src="{{ asset('backends/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('backends/js/index4.js') }}"></script>
<script src="{{ asset('backends/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

{{-- Datatable --}}
<script src="{{ asset('backends/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('backends/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backends/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backends/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('backends/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backends/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('backends/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('backends/js/pages/tables/jquery-datatable.js') }}"></script>

<!-- Javascript -->
<script>
    $(function() {
        // validation needs name of the element
        $('#food').multiselect();
    
        // initialize after multiselect
        $('#basic-form').parsley();
    });
</script>