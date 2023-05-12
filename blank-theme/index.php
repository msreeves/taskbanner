<?php get_header(); ?>
		
		<div>
			
			<section>   
         <?php 	
      $args = array(
        'post_type' => 'promo',
        'posts_per_page' => -1,
      );
      $all_partners = new WP_Query( $args );		
      ?>

      <?php if ( $all_partners->have_posts() ) : ?>
        <div class="container">
            <div class="row">
          <?php while ( $all_partners->have_posts() ) : $all_partners->the_post(); ?>	
     <?php get_template_part('inc/components/banner'); ?>
          <?php endwhile; ?>
          <?php wp_reset_query() ?>
      </div>
      </div>
      <?php endif; ?>
</section>			