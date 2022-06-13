<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agencylangerandfriends
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
	<header class="bg-header">

		<div class="">
			<div class="row">
				<div class="col col-lg-6 col-sm-12 align-right">
					<a class="navbar-brand bg-text" href="#">GET HAIRED!</a>
					<a class="navbar-brand mg-l" href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
					hello@langerandfriends.de</a>
				</div>
				<div class="col col-lg-6 col-sm-12 pf-20">
					<a c href="#">
						<img src="/assets/img/ryte_solution_partner.png" width="100px" />
					</a>
					<a  href="#">
						<img src="/assets/img/shopify-plus-partner-logo.png" width="100px" />
					</a>
					<a  href="#">
							<img src="/assets/img/ryte_solution_partner.png" width="100px" />
					</a>
					<a href="#">
						<img src="/assets/img/instagram.png" width="32px" />
					</a>
					<a  href="#">
						<img src="/assets/img/linkedin.png" width="32px" />

					</a>
				</div>


			</div>
		</div>
	</header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
		<a class="navbar-brand" href="#">LONGER AND FRIENDS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">TEAM <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">SHOPIFY</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">JTL</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="#">METAVERSE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="#">SEO</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">SOCIAL MEDIA</a>
				</li>
			</ul>
		</div>
	</nav>
	<header>
		<div class="rechteck2">
			<div class="col col-lg-10 offset-lg-2">
				<h2 class="text-white ">
					THIS IS A <br/>
					HEADLINE ABOUT <br/>
					A NEW POST
				</h2>
			</div>
		</div>
	</header>