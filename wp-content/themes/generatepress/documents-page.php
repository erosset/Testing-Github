


<?php 
/**
* Template Name: Documents
*/


get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="panel">

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    	</div>
				<?php endwhile; ?>	

			   	<?php endif; wp_reset_postdata(); ?>

			    <?php $document = new WP_Query(array('post_type' => 'document')); ?>
			    <?php while($document->have_posts()) : $document->the_post(); ?>

			    	
			    <div class="large-4 medium-4 columns">
			    	<div class="panel">
			    		<div class="thumbtitle group">
			    			<div class="thumbnail">
			    				<?php the_post_thumbnail('thumbnail'); ?>
			    			</div>
			    			<h5><?php the_title(); ?></h5>
			    			<p>
			    				Year: <?php $date = DateTime::createFromFormat('Ymd', get_field('year'));
			    				echo $date->format('Y'); ?>
			    				</p>
			    			<p>Target Audience: <?php the_field('target_audience'); ?></p>
			    			<p>Theme: <?php the_field('theme'); ?></p>
			    			<p>Language: <?php the_field('language'); ?></p>
			    			<p><a href="<?php the_field('pdf_or_jpg'); ?>" target='_blank'>Download Resource</a></p>

			    			

			    		</div><!-- thumbtitle -->
			    	</div>	<!-- end panel -->
			    </div>	<!-- end large-6 -->
			    <?php endwhile; ?>		
			    					
			</main> <!-- end #main -->

		    <?php //get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->


<?php get_footer(); ?>