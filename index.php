<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage maanch
 * @since 1.0.0
 */

get_header();
?>

<main role="main" class="overflow-hidden">

	<section class="content-section" id="about">
		<div class="container">
			<div class="row" >
				<div class="col">

					<div class="p-4">
						<h2 class="mb-4 site-heading"><span>About</span></h2>
						
						<p>
							Across Seconds is Dhawal Mehta, Karan Mehta, Kiran Kadadekar and Swar Joshi. Formed in 2016 in Mumbai, India, they decided to move beyond the clemency of spoken word and let their instruments speak for themselves. Ever since its inception, Across Seconds has always aimed at creating beautifully structured pieces of music that seem like a variegated dance between dreams and reality and take their listeners on a journey from oblivion to tranquility.
						</p>
						
						<p>
							Their debut album ‘Four lightyears from Home’, released in September 2018. It is a concept album built around a human attempt to surpass the bounds of atmosphere and explore the universe to find an alternate; the alternate planet fit to sustain life, a solution to their impending doom. But were they really onto the path that would set years of human exploitation of nature straight or were they just Four Lightyears from Home? The record exhibits every ounce of catharsis, self-reflection, oneirism and fond hope that the people on the mission would have felt throughout their journey for greater good.
						</p>
						
						<p>
							Across Seconds have captured these echoes of thought and converted it into a 7-track album which will leave you asking for more. Though fairly new, they have left no stone unturned to establish their existence in the Indian independent circuit. With their audio-audio-visual approach, they will take you on an introspective journey filled with myriad of emotions, that can not only move the toughest of hearts but also make you feel weightless, floating at times, right before all breaks loose as things come down crashing through the massive wall of sound that they create.
						</p>
						
						<p>
							Though instrumental in its actuality, Across Seconds find themselves straddling the fence between Post Rock and Progressive Rock. The ever-expanding scope of sound and the varied experience and interest fuels the sui generis and adds a sense of adventure to their sound. Filled with utmost determination and grit, Across Seconds is here to stay and paint the walls of the human mind with positivity, kindness and hope; the hope that makes you walk the extra mile to see the light at the end of the tunnel. They are enroute their goal, one album at a time, and are definitely ones to watch out for.
						</p>
						
						<p>Their debut album ‘Four Lightyears from Home’ is out now! </p>
						
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<section class="content-section bg-light" id="music">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Music</h2>
					<p class="lead">Check out previews of our album 'Four Lightyears from Home'</p>

					<div class="row mt-4">
						<div class="col-md text-center mb-4">
							<div class="song-preview ">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/album/as-tminus10.jpg" alt="t minus 10" class="img-fluid">
								<div class="overlay"></div>
								<audio src="<?php bloginfo('stylesheet_directory');?>/assets/audio/tminus10.mp3">
									Your browser isn't invited for super fun audio time.
								</audio>
							</div>
						</div>
						<div class="col-md text-center mb-4">
							<div class="song-preview ">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/album/as-astral-drift.jpg" alt="astral drift" class="img-fluid">
								<div class="overlay"></div>
								<audio src="<?php bloginfo('stylesheet_directory');?>/assets/audio/astraldrift.mp3">
									Your browser isn't invited for super fun audio time.
								</audio>
							</div>
						</div>
						<div class="col-md text-center mb-4">
							<div class="song-preview ">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/album/as-mayday.jpg" alt="mayday" class="img-fluid">
								<div class="overlay"></div>
								<audio src="<?php bloginfo('stylesheet_directory');?>/assets/audio/mayday.mp3">
									Your browser isn't invited for super fun audio time.
								</audio>
							</div>
						</div>
						<div class="col-md text-center mb-4">
							<div class="song-preview ">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/album/as-a-perfect-world.jpg" alt="mayday" class="img-fluid">
								<div class="overlay"></div>
								<audio src="<?php bloginfo('stylesheet_directory');?>/assets/audio/aperfectworld.mp3">
									Your browser isn't invited for super fun audio time.
								</audio>
							</div>
						</div>
						<div class="col-md text-center mb-4">
							<div class="song-preview ">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/album/as-four-lightyears-from-home.jpg" alt="mayday" class="img-fluid">
								<div class="overlay"></div>
								<audio src="<?php bloginfo('stylesheet_directory');?>/assets/audio/fourlightyearsfromhome.mp3">
									Your browser isn't invited for super fun audio time.
								</audio>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
		
	<section class="content-section bg-white" id="store">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Store</h2>
					<p class="lead mb-5">You can buy the bands latest album and other merchandise</p>

					<h4>Four Lightyears from Home - Now Available</h4>
					<div class="row text-center my-5 align-items-center scroll-reveal__sequence-container">
						<div class="col-sm mb-4 scroll-reveal--sequenced">
							<h4>
								<a href="https://itunes.apple.com/in/album/four-light-years-from-home/1437466273">
									<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/store/apple.svg" alt="" width="100">
								</a>
							</h4>
						</div>
						<div class="col-sm mb-4 scroll-reveal--sequenced">
							<h4>
								<a href="https://play.google.com/store/music/album/Across_Seconds_Four_Light_Years_from_Home?id=Bnmefli5mej3eitp7en3vdn7jda">
									<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/store/g-play.png" alt="" width="150">
								</a>
							</h4>
						</div>
						<div class="col-sm mb-4 scroll-reveal--sequenced">
							<h4>
								<a href="https://open.spotify.com/album/6oLE1RxWhC6G9TRCQI9YtK">
									<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/store/spotify.svg" alt="" width="130">
								</a>
							</h4>
						</div>
						<div class="col-sm mb-4 scroll-reveal--sequenced">
							<h4>
								<a href="https://music.amazon.in/albums/B07HP7FV7H">
									<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/store/amazon-music.svg" alt="" width="90">
								</a>
							</h4>
						</div>
						<div class="col-sm mb-4 scroll-reveal--sequenced">
							<h4>
								<a href="https://www.saavn.com/s/album/english/Four-Light-Years-from-Home-2018/wv7sfaq-FVo_">
									<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/store/solid-saavn.svg" alt="" width="130">
								</a>
							</h4>
						</div>
						<div class="col-sm mb-4 scroll-reveal--sequenced">
							<h4>
								<a href="https://acrossseconds.bandcamp.com/releases">
									<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/store/bandcamp.png" alt="" width="150">
								</a>
							</h4>
						</div>

					</div>

					<hr class="my-5">
					
					<div class="row justify-content-center">
						<div class="col-sm-12 col-md-10 col-lg-7 text-center">
							
							<h6>Download Concept Artworks:</h6>
							<form action="https://docs.google.com/forms/u/3/d/e/1FAIpQLSe9geKVw6NR29dfJliibqpj-wnNB00H6p__svZ5h2VN3DgAIw/formResponse" id="concept-artwork">
								<div class="input-group">
									<input type="email" name="entry.45109339" id="email" class="form-control" placeholder="Enter Email to Download Concept Artworks" autocomplete="off" required>
									<div class="input-group-append">
										<button type="submit" class="btn btn-dark text-uppercase">Download Now</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<hr class="my-5">

					<div class="row">
						<div class="col-sm-4 mb-4" >
							<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/as-tee.jpg" alt="" class="img-fluid">
						</div>
						<div class="col">
							<p>
								This design is one of the 5 concept arts that Across Seconds have for their debut album - Four Lightyears from Home'. Designed by Aaron Pinto this design is an exclusive design for their track 'A Perfect World'. A utopian world which transcends the line between reality and space and is the bearer of good fortune and success to every inhabitant. A perfect path to unparalleled victory to all. Or is it?
							</p>
							<p><a href="https://www.redwolf.in/across-seconds-a-perfect-world-t-shirt-india" class="btn btn-dark">BUY NOW!</a></p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="content-section text-white text-center" style="background:rgba(0,0,0,.8)">
		<div class="container">
			<div class="row">
				<div class="col">
						<?php echo do_shortcode("[rotatingtweets screen_name='across_seconds']"); ?>
				</div>
			</div>
		</div>
	</section>
	 

	<?php echo do_shortcode('[instashow columns="5"]'); ?>


</main>

<?php
get_footer();
