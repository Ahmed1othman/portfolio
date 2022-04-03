
<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/input-tags/js/tagsinput.js') }}"></script>

<script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
<!--notification js -->
<script src="{{ asset('admin/assets/plugins/notifications/js/lobibox.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/notifications/js/notifications.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/notifications/js/notification-custom-script.js') }}"></script>
{{-- <script src="{{ asset('admin/assets/js/index.js') }}"></script> --}}
<!--app JS-->
<script src="{{ asset('admin/assets/js/app.js') }}"></script>
<script src="{{ asset('js/crud-ajax.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/sweet-alert-script.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script>
    var app_url = "{{ url('/') }}";
    var lang = "{{ app()->getLocale() }}";
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>
<script>
    function uploadFancy(){
        $('.fancy-file-upload').FancyFileUpload({
            params: {
                action: 'fileuploader'
            },
            maxfilesize: 1000000
        });
    }
    uploadFancy();
</script>

<style>
    .ck-content {
        min-height: 350px;
    }
</style>
{{-- Cannot write in Arabic --}}
<script>
    $('.myInput_en').keypress(function(e) {
        var regex = /^[A-Za-z-pL\s\-]+$/;
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
         else {
            e.preventDefault();
            alert('الأحرف العربية غير مسموح بها');
            return false;
        }
    });
</script>

{{-- Cannot write in English --}}
<script>
    $('.myInput_ar').keypress(function(e) {

        var regex = /^[أ-ي-pL\s\-]+$/;
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        } else {
            e.preventDefault();
            alert('الأحرف الانجليزية غير مسموح بها');
            return false;
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{asset('admin/assets/js/coloris.min.js')}}"></script>
<!--app JS-->
<style>
    .clr-field{
        width: 100% !important;
    }
</style>
@stack('js')
