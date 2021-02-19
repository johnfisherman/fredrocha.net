<?php get_header(); ?>

			<div id="content" class="home">

				<div id="inner-content" class="clearfix">

						<div id="main" class="first clearfix packery-container" role="main">

							<div id="quote">
								<img src="<?php echo get_template_directory_uri(); ?>/img/torrent-L.jpg" alt="A giant wave represents the flow of thoughts that float into the page">
								<p>
									<?php

										$recent_posts = wp_get_recent_posts(array(
												'numberposts' => 1, // Number of recent posts thumbnails to display
												'post_status' => 'publish' // Show only the published posts
										));

										// var_dump ($recent_posts);

										// if all fails, ie, there is nothing to quote, resort to a Zappa's favorite
										$default_quote = "Information is not knowledge. Knowledge is not wisdom. Wisdom is not love. Love is not music. Music is <i>everything</i>.";
										// Is there more text on that quote?
										$there_is_more_text = FALSE;

										$quote_to_display = $default_quote;

										// get the excerpt from fred's most recent post
						 				$most_recent_excerpt = $recent_posts[0]['post_excerpt'];

										// Hmmm,... No excerpt. Maybe it's a tweet?
										if ($most_recent_excerpt == "") {
											// current post in category "tweets"?
											$most_recent_cats = wp_get_post_categories($recent_posts[0]['ID']);

											foreach($most_recent_cats as $c){
											    $cat = get_category( $c );
											    if ($cat->name == "tweets") {
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

									<a href="<?php echo $recent_posts[0]['guid'] ?>">Read all about it</a>.

								<?php

									}
								?>

							</p> <!-- end quote paragraph -->


							</div>

							<div id="meta">
								<p>
									<h1>Welcome to Fred's home on the web, a place displaying what I do and what I endorse. Sometimes these overlap.</h1>
									<p>You can also find me on
										<a href="http://twitter.com/john_fisherman">Twitter</a> <span class="amp">&</span>
										<a href="http://linkedin.com/in/fredrocha/">LinkedIn</a>.
									</p>
								</p>
								<p>
									Drop me a line any time at
									<a href="mailto:john.fisherman@gmail.com">john.fisherman@gmail.com</a>.
								</p>
							</div>

							<div id="video">
								<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/479891413?color=01d4f&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
								<img id="monkey-island-monkey" src="<?php echo get_template_directory_uri(); ?>/img/hangmonk.gif" alt="This is a monkey hanging from the video, taken from the godfather of all graphic adventure games, Monkey Island.">
								<p id="more-videos"><a href="/moving-images">Discover more of my videos</a>.</p>
							</div>

							<div id="photography">
								<a href="/photography">
									<img src="<?php echo get_template_directory_uri(); ?>/img/shed-in-sao-tome.jpg" alt="A fisherman's shed in são tomé e príncipe.">
								</a>
							</div>

						</div> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
