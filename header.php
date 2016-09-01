<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php wp_title(); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ie8.css" /><![endif]-->
		
		<?php wp_head(); ?>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo">
						<?php 
                            // Pobierz tytul do zmiennej, nie wyswietlaj!
                            
                            $title = wp_title('&raquo', false); 
                            
                            // Rozdziel napis na dwa elementy: /1/ pierwszy to nazwa strony  /2/ drugi to tytul podstrony
                                // we wtyczce Yoast SEO wybralismy rozdzielanie tytulu i podtytulu przy pomocy " - " wiec ponizej rozdzielamy tym myslnikiem
                            
                            $titleparts = explode('-', $title);
                            // i ponizej wykorzystujemy czesci rozdzielone poprzez indexowanie [0] i [1]
                            ?>
						<strong><?php echo($titleparts[0]); ?></strong> <span><?php echo($titleparts[1]); ?></span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				        <!-- Menu -->
					        <nav id="menu">
						        <ul class="links">
  <!-- tutaj do pkt 10 -->         <?php wp_nav_menu(array(           
    
                                                'theme_location' => 'header-menu',
                                                'menu_class' => 'links'
                                                
                                                    )); ?>     
						
<!--
							<li><a href="index.html">Home</a></li>
							<li><a href="landing.html">Landing</a></li>
							<li><a href="generic.html">Generic</a></li>
							<li><a href="elements.html">Elements</a></li>
-->
						</ul>
						
<!-- usuwamy z menu niepotrzebne opcje  
						<ul class="actions vertical">
							<li><a href="#" class="button special fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>
-->
					</nav>