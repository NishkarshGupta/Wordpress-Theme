<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">
	<title><?php  bloginfo('name');  ?></title>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>

<!--   Site header    -->
<div class="container">

	<header class="site_header">

		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a></h1>

			<h1><?php bloginfo('description');?></h1>

<!-- Navigation Starts -->

<nav class="site-nav">
	
	<?php

		wp_nav_menu(array('theme_location' => 'header'));
	?>
	
</nav>
<!-- Navigation Ends -->
</header>
<!-- Header Ends -->
   
