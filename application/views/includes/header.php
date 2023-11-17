<!DOCTYPE html>
<html lang="en">
<head>
    <title>TAKAS Demo Sayfa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href=""/>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/chosen.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/js/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/jquery.scrollbar.min.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/mobile-menu.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>assets/css/style.css?v=1.8">
    <style>
    .button_style{
        line-height:1;
        padding: 6px 20px;
        border-radius: 5px;
        display:inline-block;
        text-decoration:none;
        color:#FFFFFF;
        background:#df4a4a;
        font-size: 13px;
    }
    .home_banner{
        margin-bottom:20px;
        margin-top:20px;
    }
    .home_banner .container{
        border-radius:5px;
        overflow:hidden;
    }
    .categories{
        margin-bottom:20px;
    }
    .cats_title{
        text-align: center;
        padding: 10px;
        background: #df4a4a;
        margin-bottom: 10px;
        color: #FFFFFF;
    }
    .cats{
        display: flex;
        flex-direction: column;
    }
    .cat_name{
        border-bottom: 1px dashed #dddddd;
        
    }
    .cat_name a{
        padding:6px;
        display:block;
    }
    .cat_name a:hover{
        background:#f7f7f7;
    }

    .adverts{
        display: flex;
        flex-direction: column;
        /* gap: 20px; */
        justify-content: space-between;
    }

    .advert{
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom:15px;
    }
    .adv_info{
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 20px;
    }

    .adv_title{
        font-weight:bold;
    }

    

</style>
</head>
<body class="home">
<header class="header style7">
    
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 col-md-6 col-xs-5 col-ts-12" style="text-align:center;">
                    <a class="logoUrl" href="<?php echo $_ENV['BASE_URL'];?>">
                        <img src="https://place-hold.it/240x60/666666/FFFFFF&text=DEMO-LOGO" alt="img">
                    </a>
                </div>
                <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="header-nav">
                    <div class="container-wapper" style="display: flex;align-items: center;justify-content: space-between;">
                        <div>
                            <a href="<?php echo $_ENV['BASE_URL'];?>" class="stelina-menu-item-title" title="Home">Anasayfa</a>
                        </div>
                        <ul class="stelina-clone-mobile-menu stelina-nav main-menu " id="menu-main-menu">
                            <li class="menu-item">
                                <a href="<?php echo $_ENV['BASE_URL'];?>" class="stelina-menu-item-title" title="Home">Üye ol</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo $_ENV['BASE_URL'];?>" class="stelina-menu-item-title" title="Shop">Giriş yap</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="<?php echo $_ENV['BASE_URL'];?>">
                    <img src="<?php echo $_ENV['BASE_URL'];?>assets/cam-demo-images/cam-tablo-demo-logo.png" alt="img" width="240">
                </a>
            </div>
        </div>
        <div class="item item mobile-search-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="header-searchform-box">
                    <form class="header-searchform">
                        <div class="searchform-wrap">
                            <input type="text" class="search-input" placeholder="Enter keywords to search...">
                            <input type="submit" class="submit button" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="item menu-bar">
            <a class=" mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>