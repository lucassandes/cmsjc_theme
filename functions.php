<?php


set_post_thumbnail_size(300, 300, true);
add_image_size('small-banner', 293, 173, true);
//add_image_size( 'worth-reading', 180, 80 );
function remove_more_link_scroll($link)
{
    $link = preg_replace('|#more-[0-9]+|', '', $link);
    return $link;
}

add_filter('the_content_more_link', 'remove_more_link_scroll');


    //require_once('lib/wp_bootstrap_navwalker.php');
    require_once('lib/bootstrap-custom-menu-widget-cmsjc.php');
	

//include 'theme-options.php';
register_nav_menus(
    array(
        'mobile_menu' => 'Menu Mobile',
        'thin_menu' => 'Menu Fino'
    )
);



if ( !function_exists('register_sidebar')) {
register_sidebar(
    array(
        'name' => 'Right Sidebar',
        'id' => 'right-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
?>