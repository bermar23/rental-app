<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="<?php echo url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo url();?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo url();?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo url();?>css/price-range.css" rel="stylesheet">
    <link href="<?php echo url();?>css/animate.css" rel="stylesheet">
	<link href="<?php echo url();?>css/main.css" rel="stylesheet">
	<link href="<?php echo url();?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo url();?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo url();?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo url();?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo url();?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>


    <div id="mainContainer" class="clearfix">

    @yield('header')

    @yield('content')

    @yield('footer')

    </div>


    <script src="<?php echo url();?>js/jquery.js"></script>
	<script src="<?php echo url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo url();?>js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo url();?>js/price-range.js"></script>
    <script src="<?php echo url();?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo url();?>js/main.js"></script>
</body>
</html>
