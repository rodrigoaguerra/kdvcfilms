<?php get_header(); ?>
  <?php 
    $all_posts = array();
    while ( $wp_query->have_posts() ) : $wp_query->the_post();
      $post_carrosel['post_title'] = the_title('', '', FALSE);
      $post_carrosel['post_video_link'] = get_post_meta(get_the_ID(),'video-link',true);
      if(has_post_thumbnail())
        $post_carrosel['post_thumbnail'] = get_the_post_thumbnail();
      else 
        $post_carrosel['post_thumbnail'] ='<img  src="' . get_template_directory_uri() . '/images/kdvcfilms.jpg">';                    
      array_push($all_posts, $post_carrosel);
    endwhile;

    if( $wp_query->have_posts() ) {
      echo '<script> var posts_index =' . json_encode($all_posts) . '</script>';
    }  
  ?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!--<div class="loader">
      <div class="coast">
        <div class="wave-rel-wrap">
          <div class="wave"></div>
        </div>
      </div>
      <div class="coast delay">
        <div class="wave-rel-wrap">
          <div class="wave delay"></div>
        </div>
      </div>
      <div class="text text-w">K</div>
      <div class="text text-a">D</div>
      <div class="text text-v">V</div>
      <div class="text text-e">C</div>
    </div>-->
    <ol class="carousel-indicators"></ol>
               
    <!-- Carousel items -->
    <div class="carousel-inner" role="listbox"></div><!--/carousel-inner-->           
    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>  
  </div><!--/myCarousel-->   
  <!-- Modal -->
  <div class="modal fade" id="showVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <!--<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>-->
        <div class="modal-body">
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            	<iframe id="view-video" class="embed-responsive-item" src="#"></iframe>
          </div>
        </div>
        <div class="modal-footer text-center">
        </div>
      </div>
    </div>
  </div><!-- ./ modal -->
<?php get_footer(); ?>	

