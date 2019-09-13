<?php
/*
 * Template Name: single-members
 * Template Post Type: post, page, product
 */
 get_header();  ?>
 <div class="margin-adonai" style="margin-top: 12rem;">
<div class="bd-adonai">
   <div class="container bounce" >
     <h3 class=" text-white">
        <?php the_title(); ?>
    </h3>
    <!--Section: Testimonials v.1-->    
  </div> 
</div>
</div>
 <div class="container ">
		 
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header>
      <br> <br>
        <main>
      <h4 ><?php the_content()?></h4>
      
    </main>
     
      <p class="mb-0">
        <em>
          <span class="text-muted author"><?php _e('By', 'b4st'); echo " "; the_author() ?>,</span>
          <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
        </em>
      </p>
      <p class="text-muted" style="margin-bottom: 30px;">
        <i class="fa fa-folder-open"></i>&nbsp;
        <?php the_category(', ') ?><br/>
      </p>
    </header>
  </article>
  
  <?php endwhile; ?>
  <?php else: ?>
  <?php wp_redirect(get_bloginfo('url').'/404', 404); exit; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
