<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />
    <title><?php wp_title('&laquo;', true, 'right'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/fontello.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animation.css"><!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,800' rel='stylesheet' type='text/css'>
    <!--<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>-->
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=509516282407690&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
