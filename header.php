<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
	//grabs the page slug and appends it as a GET variable to mark which pages users have come from
	getPageSource();

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="page" class="site">

<!-- Site Header -->
<header id="masthead" role="banner" class="background--black">

	<!-- Navigation and Sidenav -->
	<?php include_once 'inc/components/navigation.php' ?>

	<div class="container">
		<div class="row mt-5">

			<div class="col-12 col-lg-6 color--white">
				<h1 class="extra-bold mb-2">Short term cash loans</h1>
				<h2 class="light">We've got you covered.</h2>
				
				<div class="row mt-4 d-none d-lg-flex">

					<div class="col-6 d-flex">
						<div class="d-inline my-auto p-3">
							<?php echo file_get_contents(get_stylesheet_directory_uri() . "/assets/images/icons/icon-stopwatch.svg"); ?>
						</div>
						<div class="d-inline my-auto">
							<p class="bold mb-1">Simple and Fast</p>
							<p class="ts-6 light mb-0">Let's have a nice tree right here. No worries. No cares.</p>
						</div>
					</div>

					<div class="col-6 d-flex">
						<div class="d-inline my-auto p-3">
							<?php echo file_get_contents(get_stylesheet_directory_uri() . "/assets/images/icons/icon-thumbsup.svg"); ?>
						</div>
						<div class="d-inline my-auto">
							<p class="bold mb-1">No Hassle, No Fuss</p>
							<p class="ts-6 light mb-0">Let's have a nice tree right here. No worries. No cares.</p>
						</div>
					</div>

					<div class="col-6 d-flex mt-3">
						<div class="d-inline my-auto p-3">
							<?php echo file_get_contents(get_stylesheet_directory_uri() . "/assets/images/icons/icon-phone.svg"); ?>
						</div>
						<div class="d-inline my-auto">
							<p class="bold mb-1">100% Online</p>
							<p class="ts-6 light mb-0">Let's have a nice tree right here. No worries. No cares.</p>
						</div>
					</div>

					<div class="col-6 d-flex mt-3">
						<div class="d-inline my-auto p-3">
							<?php echo file_get_contents(get_stylesheet_directory_uri() . "/assets/images/icons/icon-fist.svg"); ?>
						</div>
						<div class="d-inline my-auto">
							<p class="bold mb-1">Lorem Ipsum Dolor</p>
							<p class="ts-6 light mb-0">Let's have a nice tree right here. No worries. No cares.</p>
						</div>
					</div>

				</div>
			
			</div>
	
			<div class="col-12 col-lg-6 ">
				<div class="background--white p-4">
					<?php include_once 'inc/components/loancalculator.php'?>
				</div>
				<div class="p-2 color--white">
					<p class="disclaimer" id="loan-disclaimer">ⓘ Loan Disclaimer</p>
				</div>
			</div>

		</div>
	</div>


</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
