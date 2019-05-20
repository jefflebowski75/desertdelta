<?php $heroImage = get_field('hero_background_image');?>

<div class="hero <?php the_field( 'hero_height' );?>" style="background-image: url(<?php echo $heroImage['url']; ?>);">

    <div class="center">
	    
	    <a href="<?php echo home_url(); ?>" alt="<?php wp_title(''); ?>" title="<?php wp_title(''); ?>" class="hero__brand slide-down">
	        <?php get_template_part('template-parts/logo');?>
	    </a>
	    
    </div>
        
    <div class="hero__content">
        
        <?php if($post->post_name == "cares"): ?>
        
        <h3 class="heading heading__sm heading__light center slow-fade"><?php the_field( 'hero_copy' );?></h2>
        
        <?php endif; ?>

        <h2 class="heading heading__xl heading__light center slide-up"><?php the_field( 'hero_heading' );?></h2>

        <h1 class="heading heading__md heading__light heading__title-case center slow-fade brand-dot"><?php the_field( 'hero_sub_heading' );?></h1>
   
    </div>       
    
</div><!--hero-->
