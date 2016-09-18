<?php
/*
Template Name: WebDev
*/
?>

<?php get_header(); ?>

			<div id="content" class="webdev-content clearfix">

				<div id="inner-content"> 

						<div id="main" class="first clearfix" role="main">

							<h1>Web Development</h1>

							<div class="website threecol">
								<a href="http://gustavociria.co" alt="Gustavo Ciríaco is a multi-faceted artist. Performer, dancer, composer, director. Living between Brazil and Portugal." target="_blank"><img src="<?php bloginfo('template_url') ?>/img/webdev-gus-s.jpg"></a>
								<p>
									Gustavo Ciríaco is a multi-faceted artist and his website serves as a display for his work.
								</p>
								<p class="website-url"><a href="http://gustavociria.co" alt="Gustavo Ciríaco is a multi-faceted artist. Performer, dancer, composer, director. Living between Brazil and Portugal." target="_blank">http://gustavociria.co</a></p>
							</div>

							<div class="website threecol">
								<a href="http://clubenavalpovoense.com" alt="Clube Naval Povoense is a natural part of a coastal town where yours truly comes from, Póvoa de Varzim" target="_blank"><img src="<?php bloginfo('template_url') ?>/img/webdev-cnp-s.jpg"></a>
								<p>
									Local Naval Club ordered a refresher on their hub for all different water activities.
								</p>
								<p class="website-url"><a href="http://clubenavalpovoense.com" alt="Clube Naval Povoense is a natural part of a coastal town where yours truly comes from, Póvoa de Varzim." target="_blank">http://clubenavalpovoense.com</a></p>
							</div>

							<div class="website threecol">
								<a href="http://tryangletheband.com" alt="The pioneers of Ambient Rock, all the way from Portugal, now UK-based." target="_blank"><img src="<?php bloginfo('template_url') ?>/img/webdev-try-s.jpg"></a>
								<p>
									TrYangle is a badass rock band, this is a page to showcase their most recent work, Blue.
								</p>
								<p class="website-url"><a href="http://tryangletheband.com" alt="The pioneers of Ambient Rock, all the way from Portugal, now UK-based." target="_blank">http://tryangletheband.com</a></p>
							</div>

							<div class="website threecol">
								<a href="http://varzimlazer.com" alt="A broad organization working in the field of health and well-being." target="_blank"><img src="<?php bloginfo('template_url') ?>/img/webdev-vl-s.jpg"></a>
								<p>
									Varzim Lazer provides their costumers with state-of-the-art health and wellbeing solutions.
								</p>
								<p class="website-url"><a href="http://varzimlazer.com" alt="A broad organization working in the field of health and well-being" target="_blank">http://varzimlazer.com</a></p>
							</div>

							<div class="website threecol">
								<a href="http://oficina-arara.org" alt="Hyper-talented, hyper-charged team of print makers and artists." target="_blank"><img src="<?php bloginfo('template_url') ?>/img/webdev-arara-s.jpg"></a>
								<p>
									Oficina Arara conjures magic through print and needed a place to show and sell their crafts.
								</p>
								<p class="website-url"><a href="http://oficina-arara.org" alt="Hyper-talented, hyper-charged team of print makers and artists." target="_blank">http://oficina-arara.org</a></p>
							</div>

							<div class="website threecol">
								<div id="your-site-here">
									<p><a href="<?php bloginfo(home); ?>/contact">Your Site Here</a></p>
								</div>
								<p>
									Like what you see here and think we could make for a successful team?
								</p>
								<p class="website-url"><a href="<?php bloginfo(home); ?>/contact">Let's Talk!</a></p>
							</div>

						</div> <?php // end #main ?>

						<div>
						
							<div id="mm-folio" class="eightcol row">

								<a name=memeoirs><h2>Memeoirs</h2></a>

								<p>
									I co-founded a startup called Memeoirs and we were <strong>the first people to develop a Email to Book</strong>, fully automatized solution. Anyone who had relevant communications — be it from an intellectual or emotional perspective — could easily go on our website and turn those exchanges into a beautiful book, elegant and ready to be preserved for posterity. Soon Facebook chats and WhatsApp groups ensued, images included.
								</p>
								<p>
									I did most of the work on the front end — from UX / UI to Copy to code implementation —, and these are some examples of how the website used to look like (<strong>all pages were 100% responsive, click leads to image render of html pages</strong>).
								</p>

								<a name=hp><h3>Homepage</h3>

								<p class="mm-sample-page">
									<a href="<?php bloginfo(template_url); ?>/img/mm-folio/HP-full.jpg" title="This page welcomed visitors, and peaked at 23% CR."><img src="<?php bloginfo(template_url); ?>/img/mm-folio/HP-detail.jpg" alt="" /></a>
								</p>

								<a name=lm><h3>Learn More Page</h3>

								<p class="mm-sample-page">
									<a href="<?php bloginfo(template_url); ?>/img/mm-folio/LM-full.jpg" title="This page served to further showcase our product and reveal the details."><img src="<?php bloginfo(template_url); ?>/img/mm-folio/LM-detail.jpg" alt="" /></a>
								</p>


								<a name=ap><h3>Join Our Affiliate Program</h3>

								<p class="mm-sample-page">
									<a href="<?php bloginfo(template_url); ?>/img/mm-folio/AP-full.jpg" title="Partners could join our affiliate program after visiting this page."><img src="<?php bloginfo(template_url); ?>/img/mm-folio/AP-detail.jpg" alt="" /></a>
								</p>

								<a name=b2b><h3>Partnerships Page</h3>

								<p class="mm-sample-page">
									<a href="<?php bloginfo(template_url); ?>/img/mm-folio/B2B-full.jpg" title="This page welcomed visitors, and peaked at 23% CR."><img src="<?php bloginfo(template_url); ?>/img/mm-folio/B2B-detail.jpg" alt="" /></a>
								</p>

								<br/>
								<br/>

								<p>Take a look at <a href="<?php bloginfo(home); ?>/cv">my CV</a> to have a better sense of the technologies used.</p>

							</div>

						</div>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>