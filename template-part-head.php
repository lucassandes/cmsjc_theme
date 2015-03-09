<?php global $dm_settings; ?>
<div id="accessibility-bar">
    <script>        var tituloToggle = "";
        function setActiveStyleSheet(title) {
            var i, a, main;
            for (i = 0; (a = document.getElementsByTagName("link")[i]); i++) {
                if (a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
                    a.disabled = true;
                    if (a.getAttribute("title") == title) a.disabled = false;
                }
            }
            console.log("Title antes do if: " + tituloToggle);
            if (tituloToggle == "") {
                tituloToggle = "acessibilidade";
            } else {
                tituloToggle = "";
            }
            console.log("Title apos do if: " + tituloToggle);
        }
        function getActiveStyleSheet() {
            var i, a;
            for (i = 0; (a = document.getElementsByTagName("link")[i]); i++) {
                if (a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
            }
            return null;
        }
        function getPreferredStyleSheet() {
            var i, a;
            for (i = 0; (a = document.getElementsByTagName("link")[i]); i++) {
                if (a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("rel").indexOf("alt") == -1 && a.getAttribute("title")) return a.getAttribute("title");
            }
            return null;
        }
        function createCookie(name, value, days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
            } else expires = "";
            document.cookie = name + "=" + value + expires + "; path=/";
        }
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
        window.onload = function (e) {
            var cookie = readCookie("style");
            var title = cookie ? cookie : getPreferredStyleSheet();
            setActiveStyleSheet(title);
        }
        window.onunload = function (e) {
            var title = getActiveStyleSheet();
            createCookie("style", title, 365);
        }
        var cookie = readCookie("style");
        var title = cookie ? cookie : "standard";
        setActiveStyleSheet(title);    </script>

    <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    <div class="container dmbs-container">
        <ul id="accessibility" class="hidden-sm hidden-xs">
            <li><a accesskey="1" href="<?php echo $actual_link ?>#conteudo-principal" id="link-conteudo"> Ir para o
                    conteúdo <span>[1]</span> </a></li>
            <li><a accesskey="2" href="<?php echo $actual_link ?>#left-menu" id="link-navegacao"> Ir para o menu <span>[2]</span>
                </a></li>
            <!--<li>                <a accesskey="3" href="#SearchableText" id="link-buscar">                    Ir para a busca                    <span>3</span>                </a>            </li>-->
            <li class="last-item"><a accesskey="3" href="<?php echo $actual_link ?>#afooter" id="link-rodape"> Ir para o
                    rodapé <span>[3]</span> </a></li>
        </ul>
        <ul id="portal-siteactions">
            <li id="siteaction-accessibility"><a href="acessibilidade/" title="Acessibilidade" accesskey="5">Acessibilidade</a>
            </li>
            <script></script>
            <li id="siteaction-contraste"><a href="javascript:void(0);" onclick="setActiveStyleSheet(tituloToggle)"
                                             title="Alto Contraste" accesskey="6">Alto Contraste</a></li>
            <!--<li id="siteaction-mapadosite" class="last-item"><a href="http://www.brasil.gov.br/mapadosite"                                                                title="Mapa do Site" accesskey="7">Mapa do Site</a></li>-->
        </ul>
    </div>
</div>

<div id="header">


    <div class="container dmbs-container">

        <?php if ($dm_settings['show_header'] != 0) : ?>

            <div class="row dmbs-header">

                <?php //if (get_header_image() != '' || get_header_textcolor() != 'blank') : ?>

                <?php /* if (get_header_image() != '') : ?>
                    <div class="col-md-2 dmbs-header-img text-center">
                        <!--<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>"
                                                                             height="<?php echo get_custom_header()->height; ?>"
                                                                             width="<?php echo get_custom_header()->width; ?>"
                                                                             alt=""/></a>-->
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/brasao.png"

                                alt=""/></a>
                    </div>
                <?php endif;  */
                ?>
                <div class="col-md-1 col-sm-2">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/brasao.png" alt=""
                            class="logo-brasao center-block"/></a>
                </div>

                <div class="col-md-7 col-sm-7 dmbs-header-text">
                    <div id="logo">

                        <a class="" href="<?php //echo esc_url(home_url('/')); ?>"
                           title="Câmara Municipal de São José dos Campos">
                            <span class="camara-municipal">Câmara Municipal</span>

                            <h1 class="visible-xs visible-sm">S. J. dos Campos</h1>
                            <h1 class="visible-md visible-lg">São José dos Campos</h1>
                        </a>
                    </div>

                    <?php /*if (get_header_textcolor() != 'blank') : ?>
                        <h1><a class="custom-header-text-color"
                               href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <h4 class="custom-header-text-color"><?php bloginfo('description'); ?></h4>
                    <?php endif; ?>
                    <?php else : ?>
                        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <h4><?php bloginfo('description'); ?></h4>
                    <?php // endif; */
                    ?>


                </div>
                <div class="col-md-4 ">
                    <div id="social-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/camarasjc" target="_blank"
                                   class="sprite facebook-btn replace" title="Facebook">Facebook</a></li>

                            <li><a href="https://twitter.com/camara_sjc" target="_blank"
                                   class="sprite twitter-btn replace"
                                   title="Twitter">Twiiter</a>
                            </li>

                            <li><a href="https://www.youtube.com/user/camarasjc" target="_blank"
                                   class="sprite youtube-btn replace" title="Youtube">Youtube</a>
                            </li>

                            <li><a href="https://instagram.com/camarasjc/" target="_blank"
                                   class="sprite instagram-btn replace" title="Instagram">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- fim do social net -->
                <div class="col-md-4 ">

                    <div class="widget widget-search-top">
                        <form role="search" method="get" id="searchform" class="searchform"
                              action="<?php echo home_url('/'); ?>">
                            <div class="input-group">


                                <!--<span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span> -->
                                <input type="search" class="form-control" class="search-field" name="s" id="s"
                                       placeholder="<?php echo esc_attr_x('Faça sua busca ...', 'placeholder') ?>"
                                       name="s"
                                       title="<?php echo esc_attr_x('Search for:', 'label') ?>"/>
                                    <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit" type="button"><span
                                                    class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button>
                                          </span>

                                <!--<input type="submit" id="searchsubmit" value="Pesquisar"> -->
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        <?php endif; ?>
    </div>
</div>

