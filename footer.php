			<?php if(!is_home()):	?>
		
				<footer class="footer" role="contentinfo">

					<div id="inner-footer" class="wrap clearfix">

						<div id="social">
							<ul class="soc">
						    <li><a class="soc-twitter" href="http://www.twitter.com/john_fisherman" target="_blank"></a></li>
						    <li><a class="soc-rss" href="<?php bloginfo('url'); ?>/feed" target="_blank"></a></li>
						    <li><a class="soc-github" href="http://www.github.com/johnfisherman" target="_blank"></a></li>
						    <li><a class="soc-linkedin" href="http://linkedin.com/in/fredrocha/" target="_blank"></a></li>
						    <li><a class="soc-stackoverflow" href="http://stackoverflow.com/users/262073/fred-rocha"></a></li>
						    <li><a class="soc-mail soc-icon-last" href="mailto:john.fisherman@gmail.com" target="_blank"></a></li>
							</ul>
						</div>
						<nav role="navigation">
								<?php bones_footer_links(); ?>
						</nav>

						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

					</div> <?php // end #inner-footer ?>

				</footer> <?php // end footer ?>

			<?php endif // /!is_home() ?>

		</div> <?php // end #container ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <?php // end page. what a ride! ?>
