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
	