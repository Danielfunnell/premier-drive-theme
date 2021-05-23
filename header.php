<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>
</head>
<body <?php body_class('test');?>>



<header>    

            
                <nav class="navbar fixed-top navbar-expand-lg  navbar-light bg-light pl-md-5 pr-md-5">
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>"> <img src="<?php bloginfo('template_directory');?>/src/img/logowebsite.jpg" alt="logo" class="navbar__logo"></a>   
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                
                
                    
                    <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'top-menu',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarSupportedContent',
                        'menu_class'      => 'navbar-nav mr-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                    
                    
                    ?>
                    
                    <div class="secondary-nav collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" >
                    
                    <li class="nav-item mb-4 mb-md-0">
                            <a href="<?php echo home_url('#contact-us');?> "class="secondary-nav__anchor"><i class="ion-android-contact secondary-nav__cart" aria-hidden="true"></i>Contact Us</a>
                    </li>
                    <?php if(is_user_logged_in()) {
                    ?> 
                    <li class="nav-item mb-4 mb-md-0">
                    <a href="<?php echo wp_logout_url(); ?>" class="secondary-nav__anchor" role="button" aria-pressed="true"><i class="ion-log-out secondary-nav__cart" aria-hidden="true"></i>Sign Out</a>
                    <?php } else { ?>
                    </li>
                        
                        <li class="nav-item mb-4 mb-md-0">
                        <a href="<?php echo wp_login_url(); ?>" class="secondary-nav__anchor" role="button" aria-pressed="true"><i class=" ion-ios-personadd secondary-nav__cart" aria-hidden="true"></i>Login</a>
                        </li>
                     
                        
                    <?php }?>
                  
                   
                    <li class="nav-item mb-4 mb-md-0 ml-4">
                   
                        <div class="item-count">
                            <?php global $woocommerce;
                            $count = $woocommerce->cart->cart_contents_count;?>
                    <a href="<?php echo wc_get_cart_url() ?>" class="premier-cart">Cart (<?php echo $woocommerce->cart->cart_contents_count ?>)<?php echo sprintf( _n( '%d', '%d', $count, 'text domain' ), $count );?>> </a>
                        </div>
                 
                    </li>
                    <li class="nav-item mb-4 mb-md-0">
                    <a class="js-search-trigger secondary-nav__anchor"><i class="ion-android-search secondary-nav__cart" aria-hidden="true"></i></a>
                    </li>
                    
                   
                        
                       
                    
                </div>    
                    
                </nav>  
            
                        
           

          

        </header>

 <script>




const intensiveDropDown = document.getElementById('menu-item-dropdown-63')
intensiveDropDown.addEventListener('click' , function() {
    document.location.href= "<?php echo site_url('/intensive-courses');?>"
});


 
 </script>