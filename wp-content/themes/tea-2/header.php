<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head profile="http://gmpg.org/xfn/11">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N6XS4XJ');</script>
<!-- End Google Tag Manager -->


    <!-- Basic Page Needs
  ================================================== -->
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/base.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/skeleton.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/slidemenu.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/flexslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/responsive.css" media="screen" />
    <link rel='stylesheet' type='text/css' href='<?php bloginfo('template_directory'); ?>/styles/style.php' />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/responsive.css" media="screen" />

    <?php //if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php gravity_form_enqueue_scripts(2,true) ?>

    <?php wp_head(); ?>

    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FONTS
  ================================================== -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '553708244967662'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=553708244967662&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->




</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6XS4XJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="preloader">
  <div id="status">&nbsp;</div>
</div>


<div><!-- complete page wrapper  -->

<!--  <div class="fullWidthHeader">
     <div class="container">
        <div class="row remove-bottom">
            <div class="sixteen columns">
                <div class="wrapHeader">


                </div>
            </div>
        </div>
    </div>
</div> -->





<!-- NORMAL STICKY MENU ========================================= -->
<div id="fullWidthStickyNav">
        <div class="logo-menu">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo_menu.png" alt="TEA" />
            </a>
        </div>
        <div class="book_now">
            <a class="ease" href="<?php echo get_bloginfo('url'); ?>/contact-us/" >Enquire</a>
        </div>
        <div class="stickyNav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'sort_column' => 'menu_order', 'menu_class'=>'stickyMenu' ) ); ?>
            <div class="clear"></div>
        </div>
        <div class="lines_two"></div>
</div>



<!-- FLOATING MENU -->
<div id="floatingNav">
        <div class="logo-menu">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo_menu.png" alt="TEA" />
            </a>
        </div>
        <div class="book_now">
            <a class="ease" href="<?php echo get_bloginfo('url'); ?>/contact-us/" >Enquire</a>
        </div>
        <div style="display: block;" class="lines_two"></div>
</div>
<!-- /Floating Menu -->


