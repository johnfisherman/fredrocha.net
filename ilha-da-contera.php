<?php
/*
Template Name: Ilha Da Contera
*/
?>

<?php get_header(); ?>

<?php $templateURL = get_bloginfo('template_url'); ?>

	<div id="content" class="idc-content clearfix">

		<div id="inner-content">

            <div id="main" class="first clearfix" role="main">

                <div id="book-info">
                    <div id="book-cover">
                        <img id="actual-book" src="<?php echo get_template_directory_uri(); ?>/img/ilha da contera - fred rocha.png" alt="">
                        <img id="book-BG" src="<?php echo get_template_directory_uri(); ?>/img/ilha da contera - book BG - fred rocha.png" alt="">
                    </div>
                    <div id="book-description">
                        <h1>Ilha da Contera</h1>
                        <h2>Uma aventura etno-botânica à beira-mar plantada</h2>
                        <p id="idc-intro-quote">"A Contera vista do mar é uma experiência diferente. Conseguimos ter uma visão mais geral da ilha. 
                            É esta capacidade de mudar de perspectiva que faz com que os pássaros tenham uma sabedoria que nós humanos não temos."
                        </p>
                        <p>– Dr. Rafael Contrasenso</p>
                        <p>A Ilha é o personagem principal deste livro, onde se imagina um sítio remoto partilhado por nativos e portugueses, onde um vulcão dorme um sono leve, e onde
                            existe um exemplar único de uma planta magnífica.
                        </p>
                    </div>
                </div>

                <div id="ebook-cta">
                    <div id="ebook-form">
                        <?php echo do_shortcode('[mailerlite_form form_id="3"]'); ?>
                    </div>
                </div>
            </div> <?php // end #main ?>
				
		</div> <?php // end #inner-content ?>

	</div> <?php // end #content ?>

<?php get_footer(); ?>
