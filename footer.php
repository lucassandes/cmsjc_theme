    <div class="dmbs-footer">
        <?php
        global $dm_settings;
        if ($dm_settings['author_credits'] != 0) : ?>
            <div class="row dmbs-author-credits">
                <p class="text-center"><a href="<?php global $developer_uri;
                    echo esc_url($developer_uri); ?>">DevDmBootstrap3 <?php _e('created by', 'devdmbootstrap3') ?> Danny
                        Machal</a></p>
            </div>
        <?php endif; ?>


    </div>

</div><!-- end main container -->

<?php get_template_part('template-part', 'footernav'); ?>



<?php wp_footer(); ?>

    <script language="javascript" type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/yt-jquery.js"></script>
    <!-- YOUTUBE -->


    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#youtubevideos').youTubeChannel({
                userName: 'camarasjc',
                showPlayer: true,
                playerWidth: "600",
                playerHeight: "400",
                channel: "uploads",
                hideAuthor: true,
                numberToDisplay: 3,
                linksInNewWindow: false
            });
        });

    </script>
</body>
</html>
