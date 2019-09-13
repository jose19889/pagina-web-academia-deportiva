<?php get_header(); ?>

<?php get_template_part('loops/slider');?>
<div class="container">
  <div class="row">
    
    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-12<?php endif; ?>">
      <div id="content" role="main">
        <?php //get_template_part('loops/content', get_post_format()); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-sm-4" id="sidebar" role="navigation">
       <?php //get_sidebar(); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->
<?php get_template_part('loops/sobre-nosotros');?>
<?php get_template_part('loops/servicios');?>
<?php get_template_part('loops/noticias');?>
<?php get_template_part('loops/porfolio');?>
<?php get_footer(); ?>
