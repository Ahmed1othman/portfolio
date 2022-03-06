<script src="{{ asset('website/vendorAsset/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/vendorAsset/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/vendorAsset/bootstrap/js/popper.js')}}"></script>
<script src="{{ asset('website/vendorAsset/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/vendorAsset/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('website/vendorAsset/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('website/vendorAsset/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{ asset('website/vendorAsset/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset('website/vendorAsset/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('website/vendorAsset/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{ asset('website/vendorAsset/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('website/vendorAsset/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ asset('website/vendorAsset/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('website/vendorAsset/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{ asset('website/vendorAsset/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('website/js/revo-custom.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/vendorAsset/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/vendorAsset/parallax100/parallax100.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/vendorAsset/waypoint/jquery.waypoints.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/vendorAsset/countterup/jquery.counterup.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/vendorAsset/slick/slick.min.js')}}"></script>
<script src="{{ asset('website/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('website/vendorAsset/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('admin/assets/plugins/notifications/js/lobibox.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/notifications/js/notifications.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/notifications/js/notification-custom-script.js') }}"></script>
<script src="{{ asset('website/js/main.js')}}"></script>

<script>
    var app_url = "{{url('/')}}";
    var lang = "{{app()->getLocale()}}";
</script>
<script src="{{ asset('website/js/front.js')}}"></script>

@yield('js')
