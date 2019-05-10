<?php
/**
 * The template for displaying all single posts
 *
 * @package desertdelta
 */

get_header();

while ( have_posts() ) :
the_post(); ?>

<!-- ******************* Hero Content ******************* -->

<div class="content has-hero">

	<?php $heroImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
	
	<div class="hero h75" style="background-image: url(<?php echo $heroImage[0]; ?>);">
	
	    <a href="<?php echo home_url(); ?>" alt="<?php wp_title(''); ?>" title="<?php wp_title(''); ?>" class="hero__brand slide-down">
	        <?php get_template_part('template-parts/logo');?>
	    </a>
	    
	</div><!--hero-->
	
	
<!-- ******************* Hero Content END ******************* -->
	 
	<div class="container-camp">
	
	    <div class="container">
	    
	    	<div class="camp-header">
		        <h1 class="heading heading__lg font700 camp-title"><?php the_title(); ?></h1>
		        
		        <?php 
			        
		        $destination = get_the_terms($post->ID, 'destination')[0];
		        if($destination):
		        
		        ?>
			        
		        <div class="camp-location"><?php echo $destination->name; ?></div>
		        
		        <?php endif;?>
		        
		        <div class="camp-description closed">
			        <?php echo get_field("description"); ?>
		        </div>
		        
		        <div class="read-more">Read More</div>
		        
		        <div class="camp-actions">
			        <div><button name="video" class="active"><i class="fas fa-video"></i>Video</button></div>
			        <div><button name="gallery"><i class="fas fa-camera"></i>Gallery</button></div>
			        <div><button name="data"><i class="fas fa-cogs"></i>Data</button></div>
		        </div>
		    </div>
	        
	    </div>
	    
	    <div class="camp-info">
		    
		    <div class="video hidden">
			    
		    </div>
		    
		    <div class="gallery hidden">
			    
			    <?php 
	
				$images = get_field('gallery');
				
				if( $images ): ?>
			        <?php foreach( $images as $image ): $url = $image['url']; ?>
			        
	                <a href="<?php echo $image['url']; ?>" style='background-image: url(<?php echo $url; ?>)'></a>
	                
			        <?php endforeach; ?>
				<?php endif; ?>
				
		    </div>
		    
		    <div class="data">
			    
			    <div class="container">
				    
				    <?php if( have_rows('data') ): while ( have_rows('data') ) : the_row(); ?>
					
					<div class="row-data mb5">
	
						<h3 class="heading heading__alt-font font700"><?php the_sub_field('info_title'); ?></h3>
						
						<table>
							<colgroup width="25%">
							
							<?php if( have_rows('more_info') ): while ( have_rows('more_info') ) : the_row(); ?>
							
								<tr>
									<th><?php the_sub_field('info_name'); ?></th>
									<td><?php the_sub_field('info_description'); ?></td>
								</tr>
							
							<?php endwhile; endif; ?>
							
						</table>
						
					</div>
					
					<?php endwhile; endif; ?>
				    
			    </div>
			    
		    </div>
		
	    </div>
	    
	    <div class="camp-plant h50"></div>
	
	</div><!--c-->
	
	<?php get_template_part('template-parts/map', 'camps');?>
	
	<?php get_template_part('template-parts/cta', 'itinerary');?>

</div>

<?php endwhile;
	
get_footer();
