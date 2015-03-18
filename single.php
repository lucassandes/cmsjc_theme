<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>



<!-- start content container -->
<div class=" dmbs-content"> <!-- tinha um row aqui -->

    <div class="clear"></div>

    <?php // tres destaques ?>


    <div class="row">

        <?php //left sidebar ?>
        <?php get_sidebar('left'); ?>

        <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

            <?php

            //if this was a search we display a page header with the results count. If there were no results we display the search form.
            if (is_search()) :
                $total_results = $wp_query->found_posts;
                echo "<h2 class='page-header'>" . sprintf(__('%s Search Results for "%s"', 'devdmbootstrap3'), $total_results, get_search_query()) . "</h2>";

                if ($total_results == 0) :
                    get_search_form(true);
                endif;

            endif;

            ?>

            <?php // theloop
            $i = 0;
            /*if ( have_posts() ) : while ( have_posts() && $i < 10 ) : the_post(); ?>
                   $i++; */
            if (have_posts()) : while (have_posts()) : the_post();

                // single post
                if (is_single()) : ?>
                    <div class="post-single">
                        <?php get_template_part('template-part', 'postmeta-single'); ?>

                        <h2 class="page-header">  <?php the_title(); ?></h2>

                        <h3><?php the_excerpt(); ?></h3>

                        <div class="header-noticias row">

                            <?php /*
                            <!-- I got these buttons from simplesharebuttons.com -->
                            <div id="share-buttons">

                                <!-- Facebook -->
                                <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/facebook.png" alt="Facebook" /></a>

                                <!-- Twitter -->
                                <a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&hashtags=cmsjc" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/twitter.png" alt="Twitter" /></a>

                                <!-- Google+ -->
                                <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/google.png" alt="Google" /></a>


                                <!-- whats -->
                                <a href="whatsapp://send" data-text="Dê uma olhada nessa notícia:" data-href="" class="wa_btn wa_btn_s" style="display:none">Compartilhe</a>

                                <!-- Email
                                <a href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://www.simplesharebuttons.com"><img src="http://www.simplesharebuttons.com/images/somacro/email.png" alt="Email" /></a>
                                -->
                            </div>
                            */ ?>
                            <div class=" col-md-6 col-xs-6 midias" id="share-buttons">
                                <ul>
                                    <li>
                                        <!-- Facebook -->
                                        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/facebook.png" alt="Facebook" /></a>

                                    </li>
                                    <li>
                                        <!-- Twitter -->
                                        <a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&hashtags=cmsjc" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/twitter.png" alt="Twitter" /></a>

                                    </li>
                                    <li>
                                        <!-- Google+ -->
                                        <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/google.png" alt="Google" /></a>

                                    </li>
                                </ul>
                            </div>
                            <div class="funcoes col-md-6  col-xs-6 ">

                                <ul>
                                    <li>
                                        <i class="icon-print"></i> <a href="javascript:void(0);" class="print" onclick="imprimir();">Imprimir</a>
                                    </li>
                                    <li>
                                        <i class="icon-mail"></i> <a href="mailto:?Subject=<?php the_title(); ?>&Body=<?php the_title(); ?>%20Leia%22em:%20 <?php the_permalink(); ?>">Enviar por
                                            email</a></li>
                                    <li>
                                        <i class="icon-rss"></i> <a href="#" data-toggle="modal" data-target="#modalRSS">RSS</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="clear"></div>

                        <div <?php post_class('post'); ?> >


                            <?php /*if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                                        <div class="clear"></div>
                                <?php endif; */
                            ?>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>

                            <?php //comments_template(); ?>


                        </div>
                    </div>

                <?php endif; ?>

            <?php endwhile; ?>
            <?php else: ?>

                <?php get_404_template(); ?>

            <?php endif; ?>


        </div>
        <?php //get the right sidebar ?>
        <?php get_sidebar('right'); ?>

    </div>

</div><!-- end row -->
<!-- end content container -->

<?php get_footer(); ?>
