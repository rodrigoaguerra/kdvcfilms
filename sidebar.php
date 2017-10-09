<!--// RECENT POST===========-->
<div class="col-lg-4">           
  <div class="widget-sidebar">
    <h2 class="title-widget-sidebar">//POSTS RELACIONADOS</h2>
    <div class="content-widget-sidebar">
    <ul>
      <?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
        if( $related ) foreach( $related as $post ) {
            setup_postdata($post); ?>
        <li class="recent-post">
            <div class="post-img">
              <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
              <?php  
              if(has_post_thumbnail())
                echo get_the_post_thumbnail();
              else
                echo '<img  src="' . get_template_directory_uri() . '/images/kdvcfilms.jpg" class="img-responsive" >';
              ?>
              </a>
            </div> 
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <h5><?php the_title(); ?></h5></a>
            <?php //the_content('Read the rest of this entry &raquo;'); ?>
            <p>
              <small>
                <i class="fa fa-calendar" data-original-title="" title=""></i> 
                <?php the_time('j M, Y') ?>
              </small>
            </p>
            <hr>
        </li> 
    <?php }
    wp_reset_postdata(); ?>
     <!--<li class="recent-post">
        <div class="post-img">
         <img src="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg" class="img-responsive">
         </div>
         <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
        </li>
       
        
        <li class="recent-post">
        <div class="post-img">
         <img src="https://lh3.googleusercontent.com/-ojLI116-Mxk/WM1ZIwdnuwI/AAAAAAAADeo/4K6VpwIPSfgsmlXJB5o0N8scuI3iW4OpwCJoC/w424-h318-n-rw/thumbnail6.jpg" class="img-responsive">
         </div>
         <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
        </li>
        <hr>
        
        <li class="recent-post">
        <div class="post-img">
         <img src="https://lh3.googleusercontent.com/-TrK1csbtHRs/WM1ZI1SIUNI/AAAAAAAADeo/OkiUjuad6skWl9ugxbiIA_436OwsWKBNgCJoC/w424-h318-n-rw/thumbnail3.jpg" class="img-responsive">
         </div>
         <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
        </li>
        <hr>
        
        <li class="recent-post">
        <div class="post-img">
         <img src="https://lh3.googleusercontent.com/-UKfIhJSBW9M/WM1ZI8ou34I/AAAAAAAADeo/vlLGY29147AYLaxUW29ZXJlun115BhkhgCJoC/w424-h318-n-rw/thumbnail7.jpg" class="img-responsive">
         </div>
         <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
        </li>-->
        
        
    </ul>
   </div>
 </div>
             
 <!--<div class="widget-sidebar">
  <h2 class="title-widget-sidebar">// ARCHIVES</h2>
    <div class="last-post">
      <button class="accordion">21/4/2016</button>
       <div class="panel">
         <li class="recent-post">
          <div class="post-img">
           <img src="https://lh3.googleusercontent.com/-13DR8P0-AN4/WM1ZIz1lRNI/AAAAAAAADeo/XMfJ7CM-pQg9qfRuCgSnphzqhaj3SQg6QCJoC/w424-h318-n-rw/thumbnail4.jpg" class="img-responsive">
            </div>
           <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
          <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
        </li>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
     </div>
    </div>                 
     <hr>
     <div class="last-post">
      <button class="accordion">5/7/2016</button>
       <div class="panel">
         <li class="recent-post">
          <div class="post-img">
           <img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" class="img-responsive">
            </div>
           <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
          <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
        </li>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
     </div>
    </div>
     <hr>
     <div class="last-post">
      <button class="accordion">15/9/2016</button>
       <div class="panel">
         <li class="recent-post">
          <div class="post-img">
           <img src="https://lh3.googleusercontent.com/-wRHL_FOH1AU/WM1ZIxQZ3DI/AAAAAAAADeo/lwJr8xndbW4MHI-lOB7CQ-14FJB5f5SWACJoC/w424-h318-n-rw/thumbnail5.jpg" class="img-responsive">
            </div>
           <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
          <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
        </li>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
     </div>
    </div>
     <hr>
     <div class="last-post">
      <button class="accordion">2/3/2017</button>
       <div class="panel">
         <li class="recent-post">
          <div class="post-img">
           <img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" class="img-responsive">
            </div>
           <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
          <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
        </li>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
     </div>
    </div>
 </div> -->
             
  <!--=====================
        CATEGORIES
  ======================-->
  <!--<div class="widget-sidebar">
    <h2 class="title-widget-sidebar">// CATEGORIES</h2>
    <button class="categories-btn">Audio</button>
    <button class="categories-btn">Blog</button>
    <button class="categories-btn">Gallery</button>
    <button class="categories-btn">Images</button>
  </div> -->  
             
  <!--=====================
        NEWSLATTER
 ======================-->
  <!--<div class="widget-sidebar">
    <h2 class="title-widget-sidebar">// NEWSLATTER</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut .</p>  
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <button type="button" class="btn btn-warning">Warning</button>
  </div>-->  
                       
</div>