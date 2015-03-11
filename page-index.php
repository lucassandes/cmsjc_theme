<?php
/**
 * Template Name: Index
 **/
?><?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<?php
/*
$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );

if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
    the_content();
endwhile; endif;
*/
?>
<!-- start content container -->

<div id="carousel-banner-principal" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-banner-principal" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-banner-principal" data-slide-to="1"></li>
        <li data-target="#carousel-banner-principal" data-slide-to="2"></li>
        <li data-target="#carousel-banner-principal" data-slide-to="3"></li>
        <li data-target="#carousel-banner-principal" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">


        <div class="item active">
            <!-- image for big devices -->
            <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4032/mulheres+desafios+e+conquistas"><img
                    src="http://camarasjc2.hospedagemdesites.ws/2015/arquivo/thumb/noticias/45e3ecdc4db38b39e344_1140x365_1_1.jpg"
                    alt="Mulheres: Desafios e Conquistas" title="Mulheres: Desafios e Conquistas"
                    class="hidden-sm hidden-xs"/></a>
            <!--image for small devices -->

            <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4032/mulheres+desafios+e+conquistas"><img
                    src="http://camarasjc2.hospedagemdesites.ws/2015/arquivo/thumb/noticias/45e3ecdc4db38b39e344_720x400_1_1.jpg"
                    alt="Mulheres: Desafios e Conquistas" title="Mulheres: Desafios e Conquistas"
                    class="visible-sm visible-xs"/></a>

            <div class="carousel-caption ">
                <h3><a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4032/mulheres+desafios+e+conquistas">Mulheres:
                        Desafios e Conquistas</a></h3>

                <p class=" hidden-xs"><a
                        href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4032/mulheres+desafios+e+conquistas">Reportagem
                        da TV Câmara mostra atuação da mulher na mudança da sociedade</a></p>
            </div>
        </div>
        <div class="item ">
            <!-- image for big devices -->
            <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4030/juiz+da+vara+especial+civel+e+chefe+do+procon+visitam+a+camara"><img
                    src="http://camarasjc2.hospedagemdesites.ws/2015/arquivo/thumb/noticias/565c4e2a9740a74309f4_1140x365_1_1.jpg"
                    alt="Juiz da Vara Especial C�vel e chefe do Procon visitam a C�mara"
                    title="Juiz da Vara Especial Cível e chefe do Procon visitam a Câmara" class="hidden-sm hidden-xs"/></a>
            <!--image for small devices -->

            <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4030/juiz+da+vara+especial+civel+e+chefe+do+procon+visitam+a+camara"><img
                    src="http://camarasjc2.hospedagemdesites.ws/2015/arquivo/thumb/noticias/565c4e2a9740a74309f4_720x400_1_1.jpg"
                    alt="Juiz da Vara Especial C�vel e chefe do Procon visitam a C�mara"
                    title="Juiz da Vara Especial Cível e chefe do Procon visitam a Câmara"
                    class="visible-sm visible-xs"/></a>

            <div class="carousel-caption ">
                <h3>
                    <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4030/juiz+da+vara+especial+civel+e+chefe+do+procon+visitam+a+camara">Juiz
                        da Vara Especial Cível e chefe do Procon visitam a Câmara</a></h3>

                <p class=" hidden-xs"><a
                        href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4030/juiz+da+vara+especial+civel+e+chefe+do+procon+visitam+a+camara">Expectativa
                        do presidente da Câmara é ampliar parceria para melhor atender a população</a></p>
            </div>
        </div>
        <div class="item ">
            <!-- image for big devices -->
            <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4015/combate+as+drogas+e+a+principal+reivindicacao+em+audiencia+publica+da+pm"><img
                    src="http://camarasjc2.hospedagemdesites.ws/2015/arquivo/thumb/noticias/7893c6a5785fe709ff63_1140x365_1_1.jpg"
                    alt="Combate �s drogas � a principal reivindica��o em audi�ncia p�blica da PM"
                    title="Combate às drogas é a principal reivindicação em audiência pública da PM"
                    class="hidden-sm hidden-xs"/></a>
            <!--image for small devices -->

            <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4015/combate+as+drogas+e+a+principal+reivindicacao+em+audiencia+publica+da+pm"><img
                    src="http://camarasjc2.hospedagemdesites.ws/2015/arquivo/thumb/noticias/7893c6a5785fe709ff63_720x400_1_1.jpg"
                    alt="Combate �s drogas � a principal reivindica��o em audi�ncia p�blica da PM"
                    title="Combate às drogas é a principal reivindicação em audiência pública da PM"
                    class="visible-sm visible-xs"/></a>

            <div class="carousel-caption ">
                <h3>
                    <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4015/combate+as+drogas+e+a+principal+reivindicacao+em+audiencia+publica+da+pm">Combate
                        às drogas é a principal reivindicação em audiência pública da PM</a></h3>

                <p class=" hidden-xs"><a
                        href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4015/combate+as+drogas+e+a+principal+reivindicacao+em+audiencia+publica+da+pm">A
                        audiência sobre segurança , realizada na Câmara, contou com aproximadamente 250 pessoas</a></p>
            </div>
        </div>
        <div class="item ">
            <!-- image for big devices -->
            <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4012/liderancas+regionais+fazem+encontro+em+defesa+do+rio+paraiba"><img
                    src="http://camarasjc2.hospedagemdesites.ws/2015/arquivo/thumb/noticias/c2afb8d5d44453cba5d5_1140x365_1_1.jpg"
                    alt="Lideran�as regionais fazem encontro em defesa do rio Para�ba"
                    title="Lideranças regionais fazem encontro em defesa do rio Paraíba"
                    class="hidden-sm hidden-xs"/></a>
            <!--image for small devices -->

            <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4012/liderancas+regionais+fazem+encontro+em+defesa+do+rio+paraiba"><img
                    src="http://camarasjc2.hospedagemdesites.ws/2015/arquivo/thumb/noticias/c2afb8d5d44453cba5d5_720x400_1_1.jpg"
                    alt="Lideran�as regionais fazem encontro em defesa do rio Para�ba"
                    title="Lideranças regionais fazem encontro em defesa do rio Paraíba" class="visible-sm visible-xs"/></a>

            <div class="carousel-caption ">
                <h3>
                    <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4012/liderancas+regionais+fazem+encontro+em+defesa+do+rio+paraiba">Lideranças
                        regionais fazem encontro em defesa do rio Paraíba</a></h3>

                <p class=" hidden-xs"><a
                        href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4012/liderancas+regionais+fazem+encontro+em+defesa+do+rio+paraiba">O
                        grupo quer transparência e diálogo frente à crise hídrica</a></p>
            </div>
        </div>
        <div class="item ">
            <!-- image for big devices -->
            <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4008/programas+utilizados+para+fazer+a+declaracao+do+ir+ja+estao+disponiveis"><img
                    src="http://camarasjc2.hospedagemdesites.ws/2015/arquivo/thumb/noticias/dfd8b8e998a8a4800825_1140x365_1_1.jpg"
                    alt="Programas utilizados para fazer a declara��o do IR j� est�o dispon�veis"
                    title="Programas utilizados para fazer a declaração do IR já estão disponíveis"
                    class="hidden-sm hidden-xs"/></a>
            <!--image for small devices -->

            <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4008/programas+utilizados+para+fazer+a+declaracao+do+ir+ja+estao+disponiveis"><img
                    src="http://camarasjc2.hospedagemdesites.ws/2015/arquivo/thumb/noticias/dfd8b8e998a8a4800825_720x400_1_1.jpg"
                    alt="Programas utilizados para fazer a declara��o do IR j� est�o dispon�veis"
                    title="Programas utilizados para fazer a declaração do IR já estão disponíveis"
                    class="visible-sm visible-xs"/></a>

            <div class="carousel-caption ">
                <h3>
                    <a href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4008/programas+utilizados+para+fazer+a+declaracao+do+ir+ja+estao+disponiveis">Programas
                        utilizados para fazer a declaração do IR já estão disponíveis</a></h3>

                <p class=" hidden-xs"><a
                        href="http://camarasjc2.hospedagemdesites.ws/2015/noticias/4008/programas+utilizados+para+fazer+a+declaracao+do+ir+ja+estao+disponiveis">Prazo
                        para entrega da declaração vai até o próximo dia 30 de abril. </a></p>
            </div>
        </div>


        <!--
        <div class="item ">
            <img src="images/foto-cortada2.jpg" alt="...">

            <div class="carousel-caption">
                <h3>Aprovado convênio com União para Libertadores 2</h3>

                <p>Com a aprovação, prefeitura firmará convênio com a União para viabilizar nova Copa Libertadores
                    na
                    cidade 2</p>
            </div>
        </div>

        <div class="item ">
            <img src="images/foto-cortada.jpg" alt="...">

            <div class="carousel-caption">
                <h3>Aprovado convênio com União para Libertadores 3</h3>

                <p>Com a aprovação, prefeitura firmará convênio com a União para viabilizar nova Copa Libertadores
                    na
                    cidade 3</p>
            </div>
        </div> -->

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-banner-principal" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-banner-principal" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

<!-- slider -->
<!--<div class="container dmbs-container"> essa linha  -->

<div class=" dmbs-content"> <!-- tinha um row aqui -->

    <?php if (is_front_page()): ?>

    <?php endif; ?>
    <div class="clear"></div>


    <div class="row">

        <?php //left sidebar ?>
        <?php get_sidebar('left'); ?>

        <div class="col-md-6<?php //devdmbootstrap3_main_content_width(); ?> dmbs-main">

            <div class="destaques row">
                <div class="col-xs-6  ">
                    <a href="http://ged.camarasjc.sp.gov.br/municipe/" target="_blank"><img
                            src="http://camarasjc2.hospedagemdesites.ws/2015/imgs/home/banners/banner_ged.jpg" width="293" alt="Banner Ged"
                            class="img-responsive center-block"/></a>
                </div>

                <div class="col-xs-6">
                    <a href="http://www.ceaam.net/sjc/legislacao/" target="_blank"><img
                            src="http://camarasjc2.hospedagemdesites.ws/2015/imgs/home/banners/banner_pesqleis.jpg" alt="" width="293" class="img-responsive center-block"/></a>
                </div>
            </div>




            <h2>Últimas Notícias<i class="icon-angle-double-right"></i></h2>

            <div class="container-box ">

                <?php // theloop

                $latest_blog_posts = new WP_Query(array('posts_per_page' => 6));
                $postcount = 0;
                if ($latest_blog_posts->have_posts()) :
                while ($latest_blog_posts->have_posts()) : $latest_blog_posts->the_post(); ?>
                    <?php //echo ($i == 0) ? '<h2>Últimos Avisos<i class="icon-angle-double-right"></i></h2>' : '';
                    $postcount++; ?>


                    <div <?php post_class('noticia col-md-6'); ?> class="bs-callout bs-callout-info">

                        <?php get_template_part('template-part', 'postmeta'); ?>

                        <!-- <h3 class="page-header"> -->
                        <h3>
                            <a href="<?php the_permalink(); ?>"
                               title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                               rel="bookmark"><?php the_title(); ?></a>
                        </h3>


                        <a href="<?php the_permalink(); ?>"
                           title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                           rel="bookmark"><?php the_excerpt(); ?>
                            </a>
                        <?php wp_link_pages(); ?>

                        <?php /*if (comments_open()) : ?>
                        <div class="clear"></div>
                        <p class="text-right">
                            <a class="btn btn-success"
                               href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Deixar um comentário', 'devdmbootstrap3'), __('One Comment', 'devdmbootstrap3'), '%' . __(' Comments', 'devdmbootstrap3')); ?>
                                <span class="glyphicon glyphicon-comment"></span></a>
                        </p>
                    <?php endif; */
                        ?>
                    </div>
                    <?php
                    if (($postcount % 2) == 0)
                        echo('<div class="clear"></div>');
                    ?>


                <?php endwhile; ?>

            </div>
            <div class="clearfix"></div>
            <div class="destaques">
                <h2 class="red">Últimas Notícias<i class="icon-angle-double-right"></i></h2>

                <div class="col-xs-6 " style="margin-left:-15px;  padding-right: 0;">

                    <a href="noticias/3255/divulgacao+dos+editais+do+concurso+publico+da+camara">
                        <img src="http://camarasjc2.hospedagemdesites.ws/2015/imgs/home/banners/banner_concurso.jpg" alt="Banner Concurso" class="img-responsive center-block"
                            title="Banner Concurso"/>
                   </a>



                </div>

                <div class="col-xs-6 " style="margin-left:15px; padding-right: 0; ">
                    <a href="portal-da-transparencia/">
                        <img src="http://camarasjc2.hospedagemdesites.ws/2015/imgs/home/banners/banner_transparencia.jpg"
                            alt="Banner Transparência" class="img-responsive center-block"
                            title="Banner Transparência"/>
                    </a>
                </div>
            </div>




            <?php else: ?>

            <?php get_404_template(); ?>

            <?php
                endif;
            ?>


        </div>

        <div class="col-md-3 ">

        </div>


        <?php //get the right sidebar ?>
        <?php get_sidebar('right'); ?>

    </div>

    <!-- TV CÂMARA -->

    <div class="col-md-12">
        <h2 class="red">
            <div title="Code: 0xe807" class="the-icons span3">TV Câmara<i class="icon-angle-double-right"></i>
        </h2>

        <!--<iframe width="356" height='330' frameborder='0' scrolling="no" src="http://www.cmsjc.net/player.html" class="tv-ao-vivo"></iframe>-->

        <div class="container-box tv-camara-widget">

            <div class="row">
                <div id="youtubevideos"></div>
                <p class="text-right" style="margin-right: 15px;">Veja todos os vídeos em nosso canal do YouTube</p>
                <!--<div class="col-md-7" >

                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/0E7-hL1f1xg" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-5 right-content" >
                    <h3>'Com a Palavra', o chefe da Divisão de Engenharia Civil do ITA, Cláudio Jorge Alves Pinto</h3>

                    <p> Assista a entrevista com o chefe da Divisão de Engenharia Civil do ITA, Cláudio Jorge Alves
                        Pinto.
                        Ele recorda o histórico da aviação regional no país e como o governo federal tem abordado essa
                        questão atualmente. </p>

                    <h4>Assista à outros vídeos</h4>
                        <img src="" />
                    <p><a href="#">Veja todos os programas em nosso canal do YouTube</a></p>
                </div> -->
            </div>
        </div>
    </div>

</div>

<!-- FIM TB -->
</div>
<!-- end row -->
<!-- end content container -->


<?php get_footer(); ?>
