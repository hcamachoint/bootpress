<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MM Construction LLC was founded by Rafael A. Morros, III with over 10 years, post serving his country, managing complex residential and commercial real estate redevelopment projects. With hight experience in Residential & Commercial Pool Construction, Custom Home Design & Construction, Kitchens Remodeling.">
    <meta name="robots" content="index,follow">
    <meta name="keywords" content="construction,constractor,builder,building,home,home builders,pool,pool builders,pool builders near me,pool construction,pool construction near me,building a pool deck">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152013000-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-152013000-1');
    </script>
    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <header>

     <nav class="navbar navbar-expand-sm navbar-dark bg-nav shadow">
       <h2 style="color:#000"><a href="/"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" height="60px" style="margin-bottom:-10px;margin-top:0px;margin-right:10px"/></a></h2>
       <?php
         wp_nav_menu([
           'menu'            => 'top',
           'theme_location'  => 'top',
           'container'       => 'div',
           'container_id'    => 'bs4navbar',
           'container_class' => 'collapse navbar-collapse navbar-right',
           'menu_id'         => false,
           'menu_class'      => 'navbar-nav left', //mr-auto to left
           'depth'           => 2,
           'fallback_cb'     => 'bs4navwalker::fallback',
           'walker'          => new bs4navwalker()
         ]);
       ?>
         <div class="social-part">
			 <?php dynamic_sidebar( 'sidebar-2' ); ?>
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
       </div>
     </nav>
    </header>
