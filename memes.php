<?php
/*
Template Name: Memes
*/
?>

<?php get_header(); ?>

<?php

	// This is where the (mono)log lives
	$logPath = get_template_directory() . '/logs/app.log';

	// Init monolog
	$log = new Monolog\Logger('name');
	$log->pushHandler(new Monolog\Handler\StreamHandler($logPath, Monolog\Logger::WARNING));
	// $log->addWarning('Checking out the Memes page, dawg.');

	// Smarter interact with an API
	use GuzzleHttp\Client;

	// $lastfmClient = new Client([
	//     // Base URI is used with relative requests
	//     'base_uri' => 'http://ws.audioscrobbler.com/2.0/',
	//     // You can set any number of default request options.
	//     'timeout'  => 10.0,
	// ]);
	//
	// $nrOfLovedTracks = 6;
	//
	// // Fetch loved tracks from Last.fm using my provate API key
	// $lastfmResponse = $lastfmClient->request('GET', '?method=user.getlovedtracks&user=johnfisherman&api_key=' . LASTFM_KEY . '&format=json&limit=' . $nrOfLovedTracks);
	// $lastfmResponseCode = $lastfmResponse->getStatusCode();
	//
	// if ($lastfmResponseCode == 200) {
	// 	$lastfmBodyJson = $lastfmResponse->getBody();
	// 	$lastfmBodyArray = json_decode($lastfmBodyJson, true);
	// 	// var_dump($lastfmBodyArray["lovedtracks"]["track"]);
	// 	$lovedTracksArray = $lastfmBodyArray["lovedtracks"]["track"];
	// }
	//
	//
	// $log->addWarning('API lastfmResponse code: ' . $lastfmResponseCode);


	// Query goodreads.com
	// $goodreadsClient = new Client([
	//     'base_uri' => 'https://www.goodreads.com/',
	//     'timeout'  => 10.0,
	// ]);
	//
	// $goodreadsResponse = $goodreadsClient->request('GET', 'review/list/4470505.xml?key=' . GOODREADS_KEY . '&v=2&shelf=currently-reading');
	// $goodreadsResponseCode = $goodreadsResponse->getStatusCode();
	//
	// $log->addWarning('API GRResponse code: ' . $goodreadsResponseCode);
	//
	// $goodreadsBodyXml = simplexml_load_string($goodreadsResponse->getBody(), "SimpleXMLElement", LIBXML_NOCDATA);
	// $goodreadsBodyJson = json_encode($goodreadsBodyXml);
	// $goodreadsBodyArray = json_decode($goodreadsBodyJson, TRUE);
	// // Perusable array containing currently reading books
	// $currentlyReadingBooks = $goodreadsBodyArray["reviews"]["review"];


	// Query criticker.com
	// $critickerClient = new Client([
	//     'base_uri' => 'https://www.criticker.com/',
	//     'timeout'  => 10.0,
	// ]);
	//
	// $critickerResponse = $critickerClient->request('GET', 'resource/recent/33340_xml.xml');
	// $critickerResponseCode = $critickerResponse->getStatusCode();
	//
	// $log->addWarning('API Criticker Response code: ' . $critickerResponseCode);
	//
	// $critickerBodyXml = simplexml_load_string($critickerResponse->getBody(), "SimpleXMLElement", LIBXML_NOCDATA);
	// $critickerBodyJson = json_encode($critickerBodyXml);
	// $critickerBodyArray = json_decode($critickerBodyJson, TRUE);
	// // Perusable array containing recently watched movies
	// $recentlyWatchedMovies = $critickerBodyArray["film"];

?>

			<div id="content" class="memes-content clearfix">

				<div id="inner-content">

					<div id="main" class="eightcol first clearfix" role="main">

						<p><b>MEME</b> <br/> <i>noun, masculine</i>. <br/><br/>Not an internet meme. Basic unit of thought, idea, that is propagated in minds via culture. Read about it <a href="https://en.wikipedia.org/wiki/Memetics" target="_blank">on Wikipedia</a>, it's fascinatingg stuff.</p>

						<h2>Movies</h2>
						<p>
							I've watched these movies recently, and they made their mark. List powered by <a href="http://www.letterboxd.com" target="_blank">Letterboxd</a>.
						</p>

						<ul class="clearfix" id="movies">

							<?php

								// $displayedMovies = 0;
								// $i = 0;
								//
								// // For a movie to be displayed, I must've liked it. This means its Tier needs to be > 2
								// while ($displayedMovies < 6):
								//
								// 	$recentlyWatchedMovie = 			$recentlyWatchedMovies[$i];
								// 	$i++;
								// 	$recentlyWatchedMovieTier = 	$recentlyWatchedMovie["tier"];
								//
								// 	if ($recentlyWatchedMovieTier > 2):
								// 		$recentlyWatchedTitle = 	$recentlyWatchedMovie["filmname"];
								// 		$recentlyWatchedYear = $recentlyWatchedMovie["filmyear"];
								// 		$recentlyWatchedUrl =		$recentlyWatchedMovie["filmlink"];
								// 		$recentlyWatchedUrlParts = explode("/", $recentlyWatchedUrl);
								// 		$recentlyWatchedSlug = $recentlyWatchedUrlParts[4];
								//
								// 		$recentlyWatchedImg = "https://www.criticker.com/img/films/posters/" . $recentlyWatchedSlug . ".jpg";
								//
								// 		$displayedMovies++;


								$moviestreamXML = simplexml_load_file("https://letterboxd.com/johnfisherman/rss/");

								// var_dump ($moviestreamXML);
								// $items = $moviestreamXML->item;


								// var_dump ($allMovies);

								// var_dump((string) $moviestreamXML->channel->item->title);

								// var_dump ($items->title);

								$allMovies = $moviestreamXML->channel;

								$m = 0;
								foreach ($allMovies->item as $movie) {

									?>

									<li class="col-12">
										<h2><a href="<?php echo $movie->link; ?>" target="_blank"><?php echo $movie->title; ?></a></h2>
										<div class="movie-description">

											<?php echo $movie->description ?>

										</div>
									</li>

							<?php

									// display a limited amount of results
									if ($m == 7) {
										break;
									} else {
										$m++;
									}
								}

							?>

							<li>
								<div class="movie-wrapper">
									<a href="<?php // echo $recentlyWatchedUrl; ?>" target="_blank">
										<img src="<?php // echo $recentlyWatchedImg; ?>" />
									</a>
								</div>
								<!-- <div class="movie-title"><a href="<?php // echo $recentlyWatchedUrl; ?>" target="_blank"><?php // echo $recentlyWatchedTitle; ?></a> (<?php // echo $recentlyWatchedYear; ?>)</div> -->
							</li>

							<?php

								// 	endif;
								// endwhile;

							?>

						</ul>


						<!-- <h2>Books</h2>
						<p>
							Books I am currently reading. List powered by <a href="http://www.goodreads.com" target="_blank">goodreads.com</a>.
						</p> -->

						<ul class="clearfix" id="books">

							<?php

						//		$nrOfBooks = count($currentlyReadingBooks);

								// Snatch meta for each cr book
								// for ($i = 0; $i < $nrOfBooks; $i++):
								// 	$nowReading = 			$currentlyReadingBooks[$i];
								// 	$nowReadingBook = 	$nowReading["book"];
								// 	$nowReadingTitle = 	$nowReadingBook["title"];
								// 	$nowReadingAuthor = $nowReadingBook["authors"]["author"]["name"];
								// 	$nowReadingUrl =		$nowReadingBook["link"];
								// 	$nowReadingImg =		$nowReadingBook["image_url"];

							?>

							<li>
								<div class="book-wrapper">
									<a href="<?php // echo $nowReadingUrl; ?>" target="_blank">
										<img src="<?php // echo $nowReadingImg; ?>">
									</a>
								</div>
									<!-- <a href="<?php // echo $nowReadingUrl; ?>" target="_blank"><?php // echo $nowReadingTitle; ?></a><br/>by <?php // echo $nowReadingAuthor; ?>. -->
							</li>

							<?php
							//	endfor;
							?>

						</ul>


					</div> <?php // end #main ?>

					<?php // get_sidebar(); ?>

			</div> <?php // end #inner-content ?>

		</div> <?php // end #content ?>

<?php get_footer(); ?>
