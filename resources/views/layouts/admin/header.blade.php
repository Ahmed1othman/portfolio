<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
<link href="{{asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
<link href="{{ asset('admin/assets/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>
@if (app()->getLocale()=='ar')<link href="{{ asset('admin/assets/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
<link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
<!-- loader-->
<link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
<script src="{{ asset('admin/assets/js/pace.min.js')}}"></script>
<!-- Bootstrap CSS -->
<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">
<!-- Theme Style CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/dark-theme.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/css/semi-dark.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/css/header-colors.css') }}" />
@else
<link href="{{ asset('admin/assetsEn/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('admin/assetsEn/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
<link href="{{ asset('admin/assetsEn/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet">

<link href="{{ asset('admin/assetsEn/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assetsEn/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
<!-- loader-->
<link href="{{ asset('admin/assetsEn/css/pace.min.css') }}" rel="stylesheet" />
<script src="{{ asset('admin/assetsEn/js/pace.min.js')}}"></script>
<!-- Bootstrap CSS -->
<link href="{{ asset('admin/assetsEn/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link href="{{ asset('admin/assetsEn/css/app.css') }}" rel="stylesheet">

<link href="{{ asset('admin/assetsEn/css/icons.css') }}" rel="stylesheet">
<!-- Theme Style CSS -->

<link rel="stylesheet" href="{{ asset('admin/assetsEn/css/dark-theme.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assetsEn/css/semi-dark.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assetsEn/css/header-colors.css') }}" />
@endif
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
      rel="stylesheet" />
<style>
    .bootstrap-tagsinput .tag {
        margin-right: 2px;
        color: #ffffff;
        background: #2196f3;
        padding: 2px 7px;
        border-radius: 3px;
    }
    .bootstrap-tagsinput {
        width: 100%;
        padding: 0.450rem 0.80rem;
    }

    .tp-bgimg{
        filter: blur(2px) brightness(0.8);
    }
    .t1-b-1 {
        font-family: Cairo;
    }
</style>
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/coloris.min.css')}}">


<script src="{{asset('assets/ckeditor4/ckeditor/ckeditor.js')}}"></script>
<script>
    function ckeditor(){
        CKEDITOR.replace( '.ckeditor',{

        } );
        CKEDITOR.add
    }
    ckeditor()

</script>
