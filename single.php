<?php get_header(); ?>	
	<section id="blog-section" >
     <div class="container-fluid">
       <div class="row">
        <div class="col-lg-12">
           <div class="row">
				<div class="col-lg-8 col-md-8">		
		    		<h1 id="page-title"><?php the_title();?></h1>
					<!-- 16:9 aspect ratio -->
		            <div class="embed-responsive embed-responsive-16by9">
		              <iframe class="embed-responsive-item" src="<?php echo get_post_meta($post->ID,'video-link',true);?>"></iframe>
		            </div>
		            <hr/>
		            <?php
						echo apply_filters( 'the_content', $post->post_content );;
					?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
		</div>
	</div>
	</section>

<?php get_footer('single'); ?>	