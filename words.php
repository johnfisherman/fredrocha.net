<?php
/*
Template Name: Words
*/
?>

<?php get_header(); ?>

			<div id="content" class="words-content clearfix">

				<div id="inner-content">

					<div id="main" class="eightcol first clearfix" role="main">

						<p id="words-intro">
							Keep up with my stream of consciousness via <a href="<?php bloginfo('url'); ?>/feed">RSS</a><sup id="rss-what"><a href="http://powertolivemore.com/productivity/rss-explained/" target="_blank">?</a></sup> or on <a href="http://mastodon.social/@john_fisherman" target="_blank">Mastodon</a>.
						</p>

						<?php

						$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

							$args = array(
								'posts_per_page'=> 25,
             		'paged' => $paged
              );

							$the_query = new WP_Query( $args );

							while ( $the_query->have_posts() ) : $the_query->the_post();

						?>
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

									<?php

										// Twitter is dead, long live Twitter!
										// Display different text depending if it's a microblog
										// current post in category "microblog"?
										$this_is_a_micropost = false;
										
										$post_id = $post->ID;										

										$all_the_categories = wp_get_post_categories($post_id);

										foreach($all_the_categories as $c) {
											$category = get_category( $c );
											if ($category->name == "microblog") {
													// open with the whole tweet
													$this_is_a_micropost = true;
												}
										}


										if (!$this_is_a_micropost) {

									?>

										<header class="article-header">

											<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

										</header> <?php // end article header ?>

									<?php } ?>

									<section class="entry-content clearfix">
										<?php the_content(); ?>
									</section> <?php // end article section ?>

									<p class="byline vcard"><?php
										printf( __( '<a href="%5$s"><time class="updated" datetime="%1$s" pubdate>%2$s</time></a>. Filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '), get_permalink());
									?></p>

									<footer class="article-footer">
										<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

									</footer> <?php // end article footer ?>

									<?php // comments_template(); // uncomment if you want to use them ?>

								</article> <?php // end article ?>

							<?php endwhile; ?>

							<nav id="post-navigation" class="clearfix">
							    <ul>
							        <li><?php previous_posts_link( '&laquo; PREV', $the_query->max_num_pages) ?></li>
							        <li><?php next_posts_link( 'NEXT &raquo;', $the_query->max_num_pages) ?></li>
							    </ul>
							</nav>

						</div> <?php // end #main ?>

						<?php get_sidebar(); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
