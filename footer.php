				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
<!--  pkt 11 -->			<?php dynamic_sidebar('footer_widget'); ?>
							
							
<!--  wykasowujemy sobie ( pkt 11 )
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
-->
							</section>
							<section class="split">
							
<!-- 16 wstawiamy sobie taki fragment, aby nam wrzucal nasze pola kontaktowe na dole w stopce -->                           
                            
							    <?php
                                // ustalenie parametrów przekazywanych fukcji WP_Query - mowimy w tym przypadku ze interesują nas własne posty typu pole-kontaktu:
                                    $args = ['post_type' => 'pole-kontaktu'];
                                // wykonuje fukcje WP_Query i pobiera liste tych postów do zmiennej 
                                    $loop = new WP_Query($args);
                                // pętla po wszystkich postach
                                    while($loop->have_posts()) : $loop-> the_post();
                                // pobiera podszablon pole-kontaktu.php i wyswietla 1 post
                                            get_template_part('pole-kontaktu');
                                    endwhile;
                                ?>
							
							
<!-- 16  usuwamy bo mamy juz gotowe te elementy w WP
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
-->
							</section>
						</div>
					</section>
					
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li>
								<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
								
							</ul>
						</div>
						
					</footer>

			</div>

		<!-- Scripts -->
			<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/assets/js/skel.min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
       
        <?php wp_footer(); ?>
	</body>
</html>