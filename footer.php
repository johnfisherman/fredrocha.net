			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
				<div id="social">
					<a href="<?php bloginfo('url'); ?>/feed">RSS</a>
				</div>
					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<!-- <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p> -->

				</div> <?php // end #inner-footer ?>

			</footer> <?php // end footer ?>

		</div> <?php // end #container ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <?php // end page. what a ride! ?>
