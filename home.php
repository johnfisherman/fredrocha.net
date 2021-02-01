<?php get_header(); ?>

			<div id="content" class="home">

				<div id="inner-content" class="clearfix">

						<div id="main" class="first clearfix packery-container" role="main">


							<div id="quote" class="area">
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
								</p>
								<?php

									if ($there_is_more_text) {
								?>

									<p><a href="<?php echo $recent_posts[0]['guid'] ?>">Read all about it</a>.</p>

								<?php

									}
								?>
							</div>

							<div id="meta" class="area">
									<p>
										Welcome to Fred's home on the web. Stay a while.
									</p>
									<p>
										You can also find me on
									</p>
									<p>
										<a href="http://twitter.com/john_fisherman">Twitter</a> <span class="amp">&</span>
										<a href="http://linkedin.com/in/fredrocha/">LinkedIn</a>
									</p>
									<p>
										Drop me a line any time at
									</p>
									<p>
										<a href="mailto:john.fisherman@gmail.com">john.fisherman@gmail.com</a>
									</p>

							</div>

							<div id="video" class="area">
									<p>TrYangle's All</p>

							</div>

						</div> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
