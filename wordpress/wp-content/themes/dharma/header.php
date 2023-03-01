<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!--ICONS-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <!-- FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Ubuntu&display=swap" rel="stylesheet">
    <?php wp_head();?>

</head>


<body>

    <div class="wrapper">
        <header>

            <div class='mobile-container'>
                <nav>
                    <div class='flex-container'>
   
                      <img src="<?php echo get_template_directory_uri() ?>/images/logga1.png" alt="header" class="headermobile">
                        <!--Mobile navigation-->
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="mobile-menu">
                        <?php
                        wp_nav_menu();
                        ?>
                    </div>
                </nav>
            </div>
            <div class='desktop-container'>
                <!--desktop navigation-->
                <nav>
                    <div class='flex-container'>
                    <a href="home">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logga1.png" alt="header" class="headermobile"></a>
           
                        <div class="desktop-menu">
                        <?php
                        wp_nav_menu();
                        ?>
                        </div> </div>
                </nav>
           
    </div>
    <div class="header-img">
        
<img src="<?php header_image() ?>" height="<?php echo get_custom_header()->height;?>"width="<?php echo get_custom_header()->width;?>"  alt="logotyp">
                            
        <div class="centered">
            <p>A place to heal</p>
            <div class="button">
                <a href="cottages">Booking</a>
            </div>
        </div>
    </div> 
    </header>