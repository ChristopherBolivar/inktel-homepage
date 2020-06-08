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
<style>
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
	.flex {display: flex !important;}
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
	.carousel-btn, .focusarea-btn, .green-btn {
		background: #008161;
		text-decoration: none;
		color: #fff;
		text-transform: uppercase;
		padding: 1rem;
		border-radius: 12px;
	}
	.carousel-btn:hover, .focusarea-btn:hover, .green-btn:hover {
		text-decoration: none;
		color: #fff;
	}
	.carousel-item {
		position: relative;
	}
	.carousel-item div{ 
		align-self: center;
		margin-left: 10%;
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
		background: url('https://www.inktel.com/wp-content/themes/inktel/images/homepage/corporate-1.png') ;
		background-size: cover;
		background-position: top;
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
	.cpg {
		font-size: 1.8rem !important;
		line-height: 1.8rem;
	}
	/* ----------------------------------- CULTURE -----------------------------------*/
	#culture {
		padding: 0 !important;
	}
	
	#culture .left-col {
		background-image: url('<?php echo get_template_directory_uri() ?>/images/homepage/culture.png');
		padding: 25rem;
		background-position: top center;
		background-size: cover;

		height: 600px;
	}
	.culture-blurp {
		height: 600px;
		padding: 5rem 15rem !important;
		color: #fff;
		background: rgb(0,36,93);
		align-self:center;
	    background: linear-gradient(0deg, rgba(0,36,93,1) 0%, rgba(0,129,97,1) 80%);
	}
	.culture-blurp p{
		font-size: 2.2rem;
		margin-top: 3rem;

		margin-bottom: 3.5rem; 
	}
	.culture-blurp h2{
		font-size: 6rem;
		text-transform: uppercase;
	}
	.culture-btn {
		font-size: 2.5rem;
	}
	.culture-blurp div {
		align-self: center;
	}

	/* ----------------------------------- IG Slider -----------------------------------*/
	#instagram-wrapper {
		background: url('https://www.inktel.com/wp-content/themes/inktel/images/homepage/corporate-1.png') ;
		background-size: cover;
		background-position: bottom;
		padding: 5rem;
	}

	/* ----------------------------------- FOOTER -----------------------------------*/

	#footer-wrapper {
		background-color: #00245D !important;
		color: #fff !important;
		margin-top: 0 !important;
	}
	.footer-menu ul li a, a span, .social-media ul li a {
		color: #fff !important;
	}
	.footer-menu {
    border-top: 1px solid #fff;
    border-bottom: 1px solid #fff;
	}

	/* ----------------------------------- RESPONSIVE -----------------------------------*/
	@media screen and (max-width: 1280px){
		.culture-blurp {
			padding: 5rem 10rem !important;
		}
	}
	@media screen and (max-width: 800px){
		.focus-area-tab {
			font-size: 1rem;
			padding: .5rem;
		}
		.cpg{
			font-size: 1rem !important;
			line-height: 1.1em;
			}
		#carouselExampleIndicators	{
			height: 400px !important;
		}
		.carousel-item h1 {
			font-size: 4rem;
			line-height: 4rem !important;
		}
		.carousel-item p, .carousel-btn{
			font-size: 1.5rem;
		}
		#slide-1{
			background: linear-gradient(90deg, rgba(255,255,255,.9) 60%, rgba(255,255,0,0) 81%),url('https://www.inktel.com/wp-content/themes/inktel/images/homepage/slide1.jpg');
			height: 400px;
	}
		#focus-areas h2{
			font-size: 2.8rem;

	}
		#focus-areas p{
			font-size: 1.3rem;
		}
		.focusarea-btn {
			font-size: 1.3rem;
		}
		#culture .left-col, .culture-blurp  {
			padding: 5rem;
			height: 400px;
}
		.culture-blurp {
			padding: 2rem 5rem !important;
}
		.culture-blurp p {
			font-size: 1.5rem;
			margin-top: 1rem;
			margin-bottom: 2.5rem;
		}
		.culture-blurp h2 {
			font-size: 4rem;
		}
		.culture-btn{
			font-size: 1.5rem;
		}
		
	}
	@media screen and (max-width: 500px){
		#focus-areas p {
			font-size: .8rem;
		}
		.focus-area-tab{
			margin-top: 1rem;
			padding: .5rem !important;
		}
		.cpg {

			padding: 1rem !important;
		}
		.focus-area-tab, .cpg {
			font-size: 1.8rem !important;
		}
	}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!--- MAIN CAROUSEL --->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
	    <div id="slide-1" class="carousel-item active flex">
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
		<div class="col-12 col-sm-4 col-md-2">
			 <div class="focus-area-tab">Retail/ECOM</div>
			<div><img class="d-block w-100" src="https://via.placeholder.com/150" alt="Third slide"></div>
		</div>
		<div class="col-12 col-sm-4 col-md-2">
			 <div class="focus-area-tab">Government</div>
			<div><img class="d-block w-100" src="https://via.placeholder.com/150" alt="Third slide"></div>
		</div>
		<div class="col-12 col-sm-4 col-md-2">
			 <div class="focus-area-tab cpg">Consumer Packaged Goods</div>
			<div><img class="d-block w-100" src="https://via.placeholder.com/150" alt="Third slide"></div>
		</div>
		<div class="col-12 col-sm-4 col-md-2">
			 <div class="focus-area-tab">Restaurant</div>
			<div><img class="d-block w-100" src="https://via.placeholder.com/150" alt="Third slide"></div>
		</div>
		<div class="col-12 col-sm-4 col-md-2">
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
		<div class="culture-blurp col-sm-6 flex">
			<div>
			<h2>Culture</h2>
			<p>Inktel has long been built upon the concept that "you can't build a great company without great talent." Our award-winning Human Capital Team is driven by our mission to hire the right people, provide the right training, the right leadership, the right toolset, and the right motivation to achieve the right performance. It's what makes us who we are. Inktel is Where Talent Lives™!
</p>
			<a class="green-btn culture-btn" href="#">
			Explore our culture
			</a>
		</div>
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