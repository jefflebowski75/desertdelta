<div aria-label="breadcrumb">
	
	<ol class="breadcrumb">
		
		<?php if(is_single()): $post = get_page_by_path( get_page_uri(), OBJECT, "post" ); ?>
		
			<li class="breadcrumb-item"><a href="/news">News</a></li>
			
			<li class="breadcrumb-item"><a href="<?php echo get_permalink($post); ?>"><?php echo get_the_title($post); ?></a></li>
		
		<?php elseif(is_page()):
		
		$page_names = explode("/", get_page_uri());
		
		foreach( $page_names as $page_name ):
			
			$page = get_page_by_path( $page_name, OBJECT, "page" ); ?>
				
			<li class="breadcrumb-item"><a href="<?php echo get_permalink($page); ?>"><?php echo get_the_title($page); ?></a></li>
		
		<?php endforeach; endif; ?>
		
	</ol>
	
</div>