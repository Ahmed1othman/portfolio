<!-- ======= whatsapp ======= -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:50px;
        right:50px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    .my-float{
        margin-top:16px;
    }

    .my-float i:hover{
        margin-top:16px;
        color:#5cd08d;
    }
</style>
<a href="https://api.whatsapp.com/send?phone={{ websiteInfo_hlp('whats_up') }}" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<!-- End whatsapp -->
