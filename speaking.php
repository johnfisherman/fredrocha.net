<?php
/*
Template Name: Speaking
*/
?>

<?php get_header(); ?>

<?php $templateURL = get_bloginfo('template_url'); ?>

	<div id="content" class="speaking-content clearfix">

		<div id="inner-content">

				<div id="main" class="first clearfix" role="main">

					<h1>Speaking</h1>
					
					<div id="speaking-engagements">

						<div class="speaking-engagement">
							<p class="speaking-intro">I spoke at WordCamp Porto in 2024 with the aim of giving back to the community from which I reaped so many good things already.</p>

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

						<div class="speaking-engagement">
							<p class="speaking-intro">I was invited by Casa da Achada in Lisbon to discuss alternatives to community building without using Big Tech.</p>

							<a href="https://fredrocha.net/2025/11/28/collectively-adopting-alternative-tools-to-big-tech/">
								<img src="https://fredrocha.net/wp-content/uploads/2025/11/crowd-at-big-tech-alternatives.jpg" alt="Algumas pessoas que estiveram na conversa sobre alternativas a big tech criam as suas contas Mastodon.">
							</a>
							<a href="https://fredrocha.net/2025/11/28/collectively-adopting-alternative-tools-to-big-tech/">
								<h2>Collectively adopting alternative tools to Big Tech</h2>
							</a>
							<p>
								Like-minded, wholesome and frankly fun folks gathered at Casa da Achada, in the maze-like streets of Lisbon’s old town, to collectively share strategies for leaving Big Tech behind when the time comes to build community and organise online.
							</p>
							
							<p>
								We discussed RSS (in portuguese) as a battle-tested technology for broadcast communications, such as events happening in your town. We created new Mastodon accounts so we can keep each other in the loop in the Fediverse. We even toyed with the idea of a Linux install party for the next instalment! We spoke about owning your own domain and your own data.
							</p>
						</div>

					</div><!-- #speaking-engagements -->

						
				</div><!-- #main -->

				<br/>
				<br/>

		</div> <?php // end #inner-content ?>

	</div> <?php // end #content ?>

<?php get_footer(); ?>
