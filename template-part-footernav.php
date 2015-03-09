<?php //if (has_nav_menu('footer_menu')) : ?>

    <div class="footer">
        <div class="red-bar"></div><div class="yellow-bar"></div><div class="blue-bar"></div>
        <div class="container ">


            <div class="dmbs-footer-menu col-md-9">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="container row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-2-collapse">
                                <span class="sr-only"><?php _e('Toggle navigation', 'devdmbootstrap3'); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <?php
                        wp_nav_menu(array(
                                'theme_location' => 'footer_menu',
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse navbar-2-collapse',
                                'menu_class' => 'nav navbar-nav',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker())
                        );
                        ?>
                    </div>
                </nav>
            </div>
        </div>

        <div class="thin-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <div class="brasao-small">

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/brasao-small.png"
                                 alt="Brasão de São José dos Campos"/>
                        </div>
                    </div>
                    <div class="col-md-11">
                        <p>
                            Câmara Municipal de Sâo José dos Campos<br/>
                            Rua Desembargador Francisco Murilo Pinto, 33 - Vila Sta. Luzia - CEP: 12209-535<br/>
                            Tel: +55 (12) 3925-6566.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php //endif; ?>