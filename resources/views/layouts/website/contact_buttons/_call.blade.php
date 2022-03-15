<!-- ======= whatsapp ======= -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
    .float1{
        position:fixed;
        width:60px;
        height:60px;
        bottom:50px;
        left:50px;
        background-color: #007BD3;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    .my-float1{
        margin-top:16px;
    }

    .my-float1 i:hover{
        margin-top:16px;
        color: #ee0d41;
    }
</style>
<a  href="tel:{{ websiteInfo_hlp('phone') }}" class="float1" target="_blank">
    <i class="fa fa-phone my-float1"></i>
</a>
<!-- End whatsapp -->
