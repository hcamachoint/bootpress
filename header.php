<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <title><?php wp_title('•', true, 'right'); ?></title>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <header>
     <nav class="navbar navbar-expand-sm navbar-dark bg-nav shadow">
       <a href="/" class="navbar-brand logo-page"><img class="logo_header" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" height="60px" style="margin-bottom:-5;margin-top:0px;margin-right:5"/></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
    		  <i class="fa fa-bars iconi"></i>
    	</button>
       <?php
         wp_nav_menu([
           'menu'            => 'top',
           'theme_location'  => 'top',
           'container'       => 'div',
           'container_id'    => 'bs4navbar',
           'container_class' => 'collapse navbar-collapse navbar-right', //justify-content-center
           'menu_id'         => false,
           'menu_class'      => 'navbar-nav ml-auto', //ml-auto to left
           'depth'           => 2,
           'fallback_cb'     => 'bs4navwalker::fallback',
           'walker'          => new bs4navwalker()
         ]);
       ?>
       </div>
     </nav>
    </header>
