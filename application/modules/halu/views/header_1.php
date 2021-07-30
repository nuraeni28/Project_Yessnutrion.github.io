  
<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yessnutrion</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/home/css/bootstrap.min.css')?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/main.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/util.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/animate.min.css')?>">    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/animations.css')?>">    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/bootstrap-datepicker.min.css')?>">    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/bootstrap-dropdownhover.css')?>">    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/fancyBox.css')?>">    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/stroke-gap.css')?>"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/magnific-popup.css')?>"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/owl.css')?>"> 
     

    
    

    <!-- Responsive stylesheet  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/responsive.css')?>">

    <!-- Favicon -->
    <link href="<?php echo base_url('assets/home/img/favicon.png')?>" rel="shortcut icon" type="image/png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">   
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  

     <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="<?= base_url('assets/home/css/style_n.css')?>" />
 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
 
<body>

    <div class="preloader"></div>

    <!-- Header navbar start -->


    <div class="main-navbar conner-style style-2 position-fixed">
        <div class="container padding-none">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1 style="font-family: 'Viaoda Libre', cursive; padding-top:20px;">Yess<span style="color: red;">nutrion!</h1>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations-delay="1.8s" data-animations="fadeInUp">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Home">Home </i></span> </a>
                                        </li>
                            
                                <li>
                                    <a href="#"  role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Depertment">About Us</span></a>
                                </li>
                                <li>
                                    <a href="#"  role="button" aria-haspopup="true" aria-expanded="false"><span class="" data-hover="Depertment">Nutrition Consul</span></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('halu/nutrishop')?>"  role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Depertment">Nutrishop</span></a>
                                </li>
                                 <ul class="nav navbar-nav">
                                   
                                    <li><a href="<?php echo base_url('login');?>"><span class="glyphicon glyphico n-log-in"></span> Logout</a></li>
                                 </ul>
                                
                               
                                <li>
                                    <div class="dropdown" style="padding-top:6px;">
                                        <div class="btn-group menu-search-box">
                    
                                            <button type="button" class="btn dropdown-toggle" id="header-drop-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon icon-Search"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-drop-3">
                                                <li>
                                                    <form role="search" class="search-box">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Search">
                                                            <i class="icon icon-Search form-control-feedback"></i>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                
                                        <div class="btn-group">
                                            <?php
                                           $keranjang =  '<i class="icon icon-ShoppingCart"></i>'.$this->cart->total_items('<span class="menu-cart">')
                                            ?>
                                            <?php echo anchor('halu/detail_keranjang', $keranjang) ?>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header navbar end --> 