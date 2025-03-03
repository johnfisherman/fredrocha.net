			<?php if(!is_home()):	?>

				<footer class="footer" role="contentinfo">

					<div id="inner-footer" class="wrap clearfix">

						<div id="social">
							<ul class="soc">
						    <li><a class="soc-rss" href="<?php bloginfo('url'); ?>/feed" target="_blank"></a></li>
							<li><a rel="me" href="https://mastodon.social/@john_fisherman" target="_blank">🐘</a></li>
						    <li><a class="soc-github" href="https://www.github.com/johnfisherman" target="_blank"></a></li>
						    <!-- <li><a class="soc-youtube" href="http://www.youtube.com/FredRochaNet" target="_blank"></a></li> -->
						    <li><a class="soc-linkedin" href="https://linkedin.com/in/fredrocha/" target="_blank"></a></li>
						    <li><a class="soc-vimeo" href="https://vimeo.com/fredrocha/" target="_blank"></a></li>
						    <!-- <li><a class="soc-stackoverflow" href="http://stackoverflow.com/users/262073/fred-rocha"></a></li> -->
							<li><a rel="me" href="https://bsky.app/profile/johnfisherman.bsky.social" target="_blank">🦋</a></li>
						    <li><a class="soc-mail soc-icon-last" href="mailto:fred@fredrocha.net" target="_blank"></a></li>
							</ul>
							<div id="css-joy-webring" style="text-align:center">
								<h3>Discover other cool websites that are part of the CSS JOY Webring</h3>
								<div style="display: flex">
									<a style="flex: 1;" href="https://webri.ng/webring/cssjoy/previous?via=https://fredrocha.net">Previous Site</a>
									<a style="flex: 1;" href="https://webri.ng/webring/cssjoy/random?via=https://fredrocha.net">Random Site</a>
									<a style="flex: 1;" href="https://webri.ng/webring/cssjoy/next?via=https://fredrocha.net">Next Site</a>
								</div>
							</div>
						</div>
						<nav role="navigation">
								<?php bones_footer_links(); ?>
						</nav>

						<div class="source-org copyright"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo-s.png" alt="Fred Rocha logo, yeah"></div>

					</div> <?php // end #inner-footer ?>

					<div class="green-disclaimer">
						🌱 This website is hosted using <a href="https://fredrocha.net/2021/04/20/hosting-fredrocha-net-following-the-wordpress-happy-path/">100% renewable energy</a>, as it should.
					</div>

				</footer> <?php // end footer ?>

			<?php endif // /!is_home() ?>

		</div> <?php // end #container ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>
</html> <?php // end page. what a ride! ?>
