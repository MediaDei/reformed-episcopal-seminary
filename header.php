<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset='<?php bloginfo('charset') ?>'>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php }?>
	<meta name="viewport" content="width=device-width">
	<!-- link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css" type="text/css" -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">

	<meta property="og:url"           content="<?php echo get_the_permalink(); ?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?php echo the_title_attribute(); ?>" />
	<meta property="og:description"   content="Website description here." />
	<meta property="og:image"         content="<?php echo the_post_thumbnail_url( 'large'); ?>" />

	<title>
		<?php 
			if(is_home()) { 
				echo " Blog | ";
				echo bloginfo("name");
			} 
			else { 
				echo wp_title(" | ", false, 'right');
				echo bloginfo("name");
			} 
		?>
	</title>

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<header>
		<span class="anchor" id="menu"></span><!--used to close/opon nav menu and show/hide menu buttons-->

		<nav class="grid clear">
			<div class="buttons-left">
				<a href="<?php echo get_site_url() ?>/heritage/">
					<div class="button">Heritage</div>
				</a>
				<a href="<?php echo get_site_url() ?>/programs/">
					<div class="button">Programs</div>
				</a>
				<a href="<?php echo get_site_url() ?>/admissions/">
					<div class="button">Admissions</div>
				</a>
				<a href="<?php echo get_site_url() ?>/students/">
					<div class="button">Students</div>
				</a>
			</div>

			<a href="<?php echo get_site_url() ?>/" class="logo">
				<h1 class="smallcaps">Reformed</h1>
				<h1 class="smallcaps">Episcopal</h1>
				<h1 class="smallcaps">Seminary</h1>
			</a>

			<div class="buttons-right">
				<a href="<?php echo get_site_url() ?>/news/">
					<div class="button">News</div>
				</a>
				<a href="<?php echo get_site_url() ?>/apply/">
					<div class="button">Apply</div>
				</a>
				<a href="<?php echo get_site_url() ?>/contact/">
					<div class="button">Contact</div>
				</a>
				<a href="<?php echo get_site_url() ?>/give/">
					<div class="button">Give</div>
				</a>
				<a class="menu open" href="#menu">
					<div class="button fa fa-bars"></div>
				</a>
				<a class="menu close" href="#">
					<div class="button fa fa-bars"></div>
				</a>
			</div>
		</nav>
		<div class="hero-overlay">
			<h1 class="header-title">
			<?php 
				if(is_page('home')){ 
					echo 'Reformed Episcopal Seminary';				
				}
				if(is_page('heritage')){
						echo 'Our Heritage';	
				}
				if(is_page('programs')){
						echo 'Programs';	
				}
				if(is_page('admissions')){
						echo 'Admissions';	
				}
				if(is_page('students')){
						echo 'Students';	
				}

				if(is_home()){ //wordpress does not have a conditional function/tag for blog page (i.e., is_home)
						echo 'News';	
				}
				if(is_page('apply')){
						echo 'Apply';	
				}
				if(is_page('contact')){
						echo 'Contact';	
				}
				if(is_page('give')){
						echo 'Give';	
				}
			?>
			</h1>
			<div class="gold-line"></div>
			<h2 class="header-subtitle">
			<?php 
				if(is_page('home')){ 
					echo 'The future lorem ipsum dolor virumque.';				
				}

				if(is_page('heritage')){
						echo 'Lorem ipsum dolor sit amet. Arma virumque cano vergilius sum.';	
				}
				if(is_page('programs')){
						echo 'Lorem ipsum dolor sit amet. Arma virumque cano vergilius sum.';	
				}
				if(is_page('admissions')){
						echo 'Lorem ipsum dolor sit amet. Arma virumque cano vergilius sum.';	
				}
				if(is_page('students')){
						echo 'Lorem ipsum dolor sit amet. Arma virumque cano vergilius sum.';	
				}

				if(is_home()){
						echo 'Lorem ipsum dolor sit amet. Arma virumque cano vergilius sum.';	
				}
				if(is_page('apply')){
						echo 'Lorem ipsum dolor sit amet. Arma virumque cano vergilius sum.';	
				}
				if(is_page('contact')){
						echo 'Lorem ipsum dolor sit amet. Arma virumque cano vergilius sum.';	
				}
				if(is_page('give')){
						echo 'Lorem ipsum dolor sit amet. Arma virumque cano vergilius sum.';	
				}
			?>
			</h2>
		</div>





		<?php
			/*PHP for Custom Page Featured Images; not used currently, but may want later

			//get hero for index.php and also apply it to archive.php
			if(is_home() || is_archive()) { 
				$page_for_posts = get_option( 'page_for_posts' );
				echo '<div class="hero-img" role="image">';
				include(TEMPLATEPATH."/global-parts/navigation-menu.php");
				get_the_post_thumbnail($page_for_posts, 'large');
				echo '</div>';
			}
			//get hero for all pages except index.php, archive.php, and single.php
			if ( has_post_thumbnail() && !is_single()) {
				echo '<div class="hero-img" role="image">';
				include(TEMPLATEPATH."/global-parts/navigation-menu.php");
				if(is_page('home')){
					the_post();
				}
				the_post_thumbnail();
				echo '</div>';
				
			}
			if(is_single()){
				echo '<div class="hero-img single-post" role="image">';
				include(TEMPLATEPATH."/global-parts/navigation-menu.php");
					the_post_thumbnail();
				echo '</div>';
			}	
			*/
			?>
	</header>
