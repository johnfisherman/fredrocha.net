<?php get_header(); ?>

<?php $templateURL = get_bloginfo('template_url'); ?>

			<div id="content" class="home">

				<div id="inner-content" class="clearfix">

						<div id="main" class="first clearfix" role="main">

							<div id="quote">
								<img src="<?php echo get_template_directory_uri(); ?>/img/torrent-L.jpg" alt="A giant wave represents the flow of thoughts that float into the page">
								<article>
									<?php

										$recent_posts = wp_get_recent_posts(array(
												'numberposts' => 1, // Number of recent posts thumbnails to display
												'post_status' => 'publish' // Show only the published posts
										));

										// if all fails, ie, there is nothing to quote, resort to a Zappa's favorite
										$default_quote = "Information is not knowledge. Knowledge is not wisdom. Wisdom is not love. Love is not music. Music is <i>everything</i>.";
										// Is there more text on that quote?
										$there_is_more_text = FALSE;

										$quote_to_display = $default_quote;

										// get the excerpt from fred's most recent post
						 				$most_recent_excerpt = $recent_posts[0]['post_excerpt'];
						 				$most_recent_ID = $recent_posts[0]['ID'];
										$post_permalink = get_permalink($most_recent_ID);

										// Hmmm,... No excerpt. Maybe it's a micro post?
										if ($most_recent_excerpt == "") {
											// current post in category "microblog"?
											$most_recent_cats = wp_get_post_categories($recent_posts[0]['ID']);

											foreach($most_recent_cats as $c) {
											    $cat = get_category( $c );
											    if ($cat->name == "microblog") {
														// open with the whole tweet
														$quote_to_display = $recent_posts[0]['post_content'];
													}
											}

										// There's an excerpt, use it and link to whole post
										} else {
											$quote_to_display = $most_recent_excerpt;
											$there_is_more_text = TRUE;
										}

										echo $quote_to_display;

	 								?>
								<?php

									if ($there_is_more_text) {
								?>

									<a href="<?php echo $post_permalink; ?>">Read all about it</a>.

								<?php

							} else {
								?>

								<a href="/words">Read on</a>.

							<?php } ?>

						</article> <!-- end quote paragraph -->


							</div>

							<div id="meta">
								<p>
									<h1>Welcome to Fred's home on the web, a place displaying what I do and what I endorse. Sometimes these overlap.</h1>
									<p>You can also find me on
										<!-- <a href="https://twitter.com/john_fisherman" target="_blank">Twitter</a> <span class="amp">&</span> -->
										<a rel="me" href="https://mastodon.social/@john_fisherman" target="_blank">Mastodon</a> <span class="amp">&</span>
										<a rel="me" href="https://linkedin.com/in/fredrocha/" target="_blank">LinkedIn</a>.
									</p>
								</p>
								<p>
									Drop me a line any time at
									<a href="mailto:fred@fredrocha.net"  target="_blank">fred@fredrocha.net</a>.
								</p>
							</div>

							<div id="now">
								<div>
									<p>Currently, I'm reflecting on the role that the <a href="https://fredrocha.net/2025/05/21/small-web-is-beautiful?utm_source=home_now">"small web"</a> can have in our online lives.</p>
									<p>I am also kindling an <a href="https://openingquot.es?utm_source=fredrocha.net" target="_blank">ever-growing online database with the greatest quotes in the world</a>, aka, epigraphs, called Opening Quotes. You can see how relevant names in literature honour each other.</p>
								</div>
								<div>
									<a href="https://openingquot.es?utm_source=fredrocha.net" target="_blank">
										<img src="<?php echo $templateURL; ?>/img/webdeb-oqes-s.jpg" alt="Logo for the web application openingquot.es.">
									</a>
								</div>
							</div>

							<div id="video">
								<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/702529770?color=01d4f&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
								<a href="/category/games/">
									<img id="monkey-island-monkey" src="<?php echo get_template_directory_uri(); ?>/img/hangmonk.gif" alt="This is a monkey hanging from the video, taken from the godfather of all graphic adventure games, Monkey Island.">
								</a>
								<p id="more-videos"><a href="/videos">Discover more of my videos</a>.</p>
							</div>

							<div id="photography">
								<a href="/photography">
									<img src="<?php echo get_template_directory_uri(); ?>/img/shed-in-sao-tome.jpg" alt="A fisherman's shed in são tomé e príncipe.">
								</a>
							</div>

							<div id="inverted-mountain">
								<a href="/memes">
									<img src="<?php echo get_template_directory_uri(); ?>/img/the-uncounscious-as-an-upside-mountain.jpg" alt="An inverted mountain in fog meant to represent the unconscious that is real, present, strong, influential yet burried underneath.">
								</a>
								<p>After having watched Carlos Reygada's "Post Tenebras Lux", I went on to read "The Red House" by Mark Haddon. Since then I can't stop listening to "Fungar Pt. 2" by Tubax. <a href="/memes">Know what I meme?</a> </p>
							</div>

						</div> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
