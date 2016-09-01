  
    <article>
    	<span class="image">
    		<img src="<?php bloginfo('template_directory'); ?>/images/pic<?php echo(types_render_field('kolorystyka')); ?>.jpg" alt="" />
    	</span>
    	<header class="major">
    		<h3><a href="<?php echo(types_render_field('odnosnik', ['output' => 'raw'])); ?>" class="link"><?php the_title(); ?></a></h3>
    		<p><?php echo(types_render_field('slogan')); ?></p>
    	</header>
    </article>

<!-- po images/pic/wrzucamy sobie odnosnik do naszych otworzonych opcji kolorystyki czyli od 01 do 06 -->
<!-- w odnosniku wklejamy odnosnik  +   the_title();  -->
<!-- w <p> wrzucamy nasz SLOGAN -->



