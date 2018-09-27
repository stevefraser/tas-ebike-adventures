<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head profile="http://gmpg.org/xfn/11">

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
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/responsive.css" media="screen" />
    <link rel='stylesheet' type='text/css' href='<?php bloginfo('template_directory'); ?>/styles/style.php' />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>



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

</head>
<body <?php body_class(); ?>>




<div><!-- complete page wrapper  -->




