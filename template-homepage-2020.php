<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Homepage 2020
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inktel
 */

get_header(); ?>
<Style>
	@font-face {
  font-family: Trade-Gothic-LT-Bold;
  src: url('<?php echo get_template_directory_uri() ?>/Trade-Gothic-LT-Bold.ttf');
} 
	@font-face {
  font-family: Trade-Gothic-LT;
  src: url('<?php echo get_template_directory_uri() ?>/Trade-Gothic-LT.ttf');
} 
	body {
		background: #fff !important;
	}
	h1, h2,h3,h4,h5,h6,a{
		font-family:  Trade-Gothic-LT-Bold, sans-serif !important;
	}
	body, p , ul, li {
		font-family:  Trade-Gothic-LT, sans-serif !important;
	}
	/* ----------------------------------- CAROUSEL -----------------------------------*/
	#carouselExampleIndicators {
		height: 600px
	}
	.carousel-indicators{
		margin: 0 auto !important;
	}
	#slide-1 {
		background-image: linear-gradient(90deg, rgba(255,255,255,.8) 39%, rgba(255,255,0,0) 61%),url('<?php echo get_template_directory_uri() ?>/images/homepage/slide1.jpg');
		background-size: cover;
		height: 600px;
	}
	.carousel-btn, .focusarea-btn {
		background: #008161;
		text-decoration: none;
		color: #fff;
		text-transform: uppercase;
		padding: 1rem;
		border-radius: 12px;
	}
	.carousel-btn:hover, .focusarea-btn:hover {
		text-decoration: none;
		color: #fff;
	}
	.carousel-item {
		position: relative;
	}
	.carousel-item div{
		position: absolute;
		top: 25%;
		bottom: 25%;
		left: 10%;
	}
	.carousel-item h1 {
		font-size: 6rem;
		line-height: 5rem;
	}
	.carousel-btn, .carousel-item p {
		
		font-size: 2rem;
	}
	.carousel-item p{
		margin: 2rem 0 3rem 0;
	}
	.carousel-item h1,.carousel-item p {
		color: #00245D;
		text-transform: uppercase;
	}
	/* ----------------------------------- FOCUS AREAS -----------------------------------*/
	#focus-areas h2, #focus-areas p, #focus-areas h3,#focus-areas h1 {
		color: #00245d;
		text-transform: uppercase;
	}
	#focus-areas h2 {
		font-size:  3.5rem;
	}
	#focus-areas p {
		font-size:  1.8rem;
	}
	#focus-areas {
		text-align: center;
		padding: 5rem;
		margin-bottom: 2rem;
	}
	#focus-area-boxes {
		justify-content: center ; 
		margin: 5rem auto ;
	}
	.focus-area-tab {
		background: #00245D;
		color: #fff;
		font-size: 2.5rem;
		line-height: 3rem;
		font-family:  Trade-Gothic-LT-Bold, sans-serif !important;
		padding: 1rem;
		text-transform: uppercase;
	}
	.focusarea-btn{
		font-size: 2rem;
	}
	#culture {
		padding: 0 !important;
		margin-top: 2rem;
	}
	
	#culture .left-col {
		background-image: url('<?php echo get_template_directory_uri() ?>/images/homepage/culture.png');
		height: 100%;
	}
	.culture-blurp {
		padding: 5rem;
	}
	
</Style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!--- MAIN CAROUSEL --->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
	    <div id="slide-1" class="carousel-item active">
		<div>
		<h1>
		  We build<br> world-class <br>customer service
	  	</h1>
		<p>
			Looking to enhance your customer experience? <br>
			We are experts in transforming<br>
			contact center operations.
		</p>
			<a class="carousel-btn" href="#">
				Discover our approach
			</a>
		</div>
    </div>

  </div>
 
</div>

<!--- MAIN CONTENT --->

<main>
	
	<div id="focus-areas" class="container-fluid">
		<h2>focus areas</h2>
		<p>Inktel leverages over twenty years of experience delivering <Br/>
world-class customer service for brands across the following verticals</p>
	
	<div id="focus-area-boxes" class="row">
		<div class="col-2">
			 <div class="focus-area-tab">Retail/ECOM</div>
			<div><img class="d-block w-100" src="https://via.placeholder.com/150" alt="Third slide"></div>
		</div>
		<div class="col-2">
			 <div class="focus-area-tab">Government</div>
			<div><img class="d-block w-100" src="https://via.placeholder.com/150" alt="Third slide"></div>
		</div>
		<div class="col-2">
			 <div style="font-size: 1.8rem !important" class="focus-area-tab">Consumer Packaged Goods</div>
			<div><img class="d-block w-100" src="https://via.placeholder.com/150" alt="Third slide"></div>
		</div>
		<div class="col-2">
			 <div class="focus-area-tab">Restaurant</div>
			<div><img class="d-block w-100" src="https://via.placeholder.com/150" alt="Third slide"></div>
		</div>
		<div class="col-2">
			 <div class="focus-area-tab">education</div>
			<div><img class="d-block w-100" src="https://via.placeholder.com/150" alt="Third slide"></div>
		</div>
	</div>
		<a class="focusarea-btn" href="#">
				view all our case studies
			</a>
		
		</div>
	<div id="culture" class="container-fluid">
		<div class="left-col col-sm-6">
			 &nbsp;
		</div>
		<div class="culture-blurp col-sm-6">
			<h2>Culture</h2>
			<p>Inktel has long been built upon the concept that "you can't build a great company without great talent." Our award-winning Human Capital Team is driven by our mission to hire the right people, provide the right training, the right leadership, the right toolset, and the right motivation to achieve the right performance. It's what makes us who we are. Inktel is Where Talent Lives™!
</p>
			<a href="#">
			Explore our culture
			</a>
		</div>
	</div>
	

	

		<div id="instagram-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="headline-h3">Explore our Culture</h3>


						<div id="instagram-feed">
							<ul id="instagram" class="instafeed">

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

	
</main>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php get_footer(); ?>