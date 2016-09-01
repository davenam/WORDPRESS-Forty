<?php
    get_header();
?>
				

												<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Hi, my name is Forty</h1>
							</header>
							<div class="content">
								<p>A responsive site template designed by HTML5 UP<br />
								and released under the Creative Commons.</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
							     <?php
                                // ustalenie parametrów przekazywanych fukcji WP_Query - mowimy w tym przypadku ze interesują nas własne posty typu pole-kontaktu:
                                    $args = ['post_type' => 'kafelek'];
                                // wykonuje fukcje WP_Query i pobiera liste tych postów do zmiennej 
                                    $loop = new WP_Query($args);
                                // pętla po wszystkich postach
                                    while($loop->have_posts()) : $loop-> the_post();
                                // pobiera podszablon pole-kontaktu.php i wyswietla 1 post
                                            get_template_part('kafelek');
                                    endwhile;
                                ?>
							
<!-- 17  usuwamy 
								<article>
									<span class="image">
										<img src="<?php bloginfo('template_directory'); ?>/images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Aliquam</a></h3>
										<p>Ipsum dolor sit amet</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="<?php bloginfo('template_directory'); ?>/images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Tempus</a></h3>
										<p>feugiat amet tempus</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="<?php bloginfo('template_directory'); ?>/images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Magna</a></h3>
										<p>Lorem etiam nullam</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="<?php bloginfo('template_directory'); ?>/images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Ipsum</a></h3>
										<p>Nisl sed aliquam</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="<?php bloginfo('template_directory'); ?>/images/pic05.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Consequat</a></h3>
										<p>Ipsum dolor sit amet</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="<?php bloginfo('template_directory'); ?>/images/pic06.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Etiam</a></h3>
										<p>Feugiat amet tempus</p>
									</header>
								</article>
-->
							</section>

						<!-- Two -->
							<section id="two">
							
                        <!-- 9. tutaj wrzucamy sobie pęlę --> 
                        
							<?php if ( have_posts() ) : ?>
                            <?php /* The loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                         
													
							
								<div class="inner">
									<header class="major">
										<h2><?php the_title(); ?></h2>   <!-- 9. a tutaj the_title  -->   
									</header>
									
								<!-- 9. a tutaj the_content  -->   	
									<?php the_content(); ?>
									
									
									<ul class="actions">
										<li><a href="<?php the_permalink(); ?>" class="button next">Czytaj dalej</a></li>    <!-- 9. a tutaj the_permalik  -->   
									</ul>
                                </div>
                                
                     <!-- 9. a tutaj ją kończymy -->     
                            
				            <?php endwhile; ?>
                            <?php endif; ?>
								
							</section>
					</div>

<?php
    get_footer();
?>