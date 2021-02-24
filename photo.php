<?php
/*
Template Name: Photo
*/
?>

<?php get_header(); ?>

			<div id="content" class="photo-content clearfix">

				<div id="inner-content" class="packery-container">

						<div id="main" class="first clearfix" role="main">

							<?php

								// use GuzzleHttp\Client;
								//
								// $pexelsClient = new Client([
								//     // Base URI is used with relative requests
								//     'base_uri' => 'http://httpbin.org',
								//     // You can set any number of default request options.
								//     'timeout'  => 2.0,
								// ]);

								// IDs come in a can, they were put there by a man, in a factory downtown
								// https://www.pexels.com/photo/landscape-red-kitchen-fruit-6876155/
								$photoIDs = array(6876154, 6768035, 6768036, 6876155);

								foreach ($photoIDs as $currentPhoto) {

							 ?>

							 	<img class="freds-photo" src="https://images.pexels.com/photos/<?php echo $currentPhoto; ?>/pexels-photo-<?php echo $currentPhoto; ?>.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Photo by Fred Rocha, taken from Pexels">

					 		 <?php } ?>

							 <p id="photo-colophon">
								 
								 Photos by Fred Rocha, hosted on

								 <a href="https://www.pexels.com" target="_blank">
									 <img src="https://images.pexels.com/lib/api/pexels-white.png" />
								 </a>

						 	</p>

						</div> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
