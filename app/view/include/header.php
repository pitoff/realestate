<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo URLROOT;?>/realestate/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/realestate/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/realestate/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/realestate/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/realestate/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/realestate/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/realestate/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/realestate/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/realestate/css/style.css" type="text/css">
<!--===============================================================================================-->
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Wrapper Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <span class="icon_close"></span>
        </div>
        <div class="logo">
            <div style="border-left: 3px solid #a31317; padding-left: 2px;"><a href="<?php echo URLROOT;?>"><h4 style="color: #a31317;"><strong><?php echo SITENAME?></strong></h4></a></div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="om-widget">
            <ul>
                <li><i class="icon_mail_alt" style="color: #a31317;"></i> vostan.support@vostan.com</li>
                <li><i class="fa fa-mobile-phone" style="color: #a31317;"></i> +234805544332211</li>
            </ul>
            <a href="<?php echo URLROOT;?>/properties/submit" class="hw-btn" style="background: #a31317;">Submit property</a>
        </div>
        <div class="om-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
    </div>
<?php require APPROOT .'/view/include/navbar'. '.php';?>
<?php require APPROOT .'/view/include/sidebar'. '.php';?>

