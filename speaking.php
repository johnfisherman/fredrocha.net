<?php
/*
Template Name: Speaking
*/
?>

<?php get_header(); ?>

<?php $templateURL = get_bloginfo('template_url'); ?>

	<div id="content" class="speaking-content clearfix">

		<div id="inner-content">

				<div id="main" class="first clearfix wrap" role="main">

					<h1>Speaking</h1>

					<p class="webdev-intro">I spoke at WordCamp Porto in 2024 with the aim of giving back to the community from which I reaped so many good things already.</p>

					<div class="">
						<a href="https://wordpress.tv/2024/05/20/a-presenca-online-de-uma-redacao-de-jornalismo-independente-apoiada-pela-comunidade/" target="_blank">
							<img src="<?php echo $templateURL; ?>/img/wordcamp-porto-thumb.png" alt="Thumbnail for the video of WordCamp Porto presentation.">
						</a>
						<a href="https://wordpress.tv/2024/05/20/a-presenca-online-de-uma-redacao-de-jornalismo-independente-apoiada-pela-comunidade/" target="_blank">
							<h2>A presença online de uma redação de jornalismo independente apoiada pela comunidade</h2>
						</a>
						<p>
							No espírito de transparência radical que orienta o trabalho do Fumaça, o Fred mostra quais as peças que constituem a instalação do WordPress do <a href="https://fumaca.pt" target="_blank">Fumaça</a>, e que papel têm na gestão e crescimento da comunidade (que financia o projecto).
						</p>
						
						<p>
							Falamos de algumas das decisões tomadas pela redação que melhor servem a divulgação e consumo das reportagens de jornalismo lento em podcast.
						</p>
					</div>
						
				</div><!-- #main -->

				<br/>
				<br/>

		</div> <?php // end #inner-content ?>

	</div> <?php // end #content ?>

<?php get_footer(); ?>
