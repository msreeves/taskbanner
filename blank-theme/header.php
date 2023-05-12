<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
	<head>
		
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mystyle.css?version=<?php echo time();?>">
		
	</head>
	<body <?php body_class(); ?>>
		
		<div class="wrap">
			
			<div class="header">
				<div class="logo"><?php the_custom_logo(); ?></div>
				<?php get_template_part( 'template-parts/header/nav' ); ?>
			</div>