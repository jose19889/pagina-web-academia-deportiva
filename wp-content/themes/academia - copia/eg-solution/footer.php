<footer class="container">
  <hr/>

	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>

  <div class="row">
    <div class="col">
      <p class="text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
  </div>

</footer>

<script>    $(".dropdown-toggle").on("mouseenter", function () {
        // make sure it is not shown:
        if (!$(this).parent().hasClass("show")) {
            $(this).click();
        }
    });</script>
   
<?php wp_footer(); ?>
</body>
</html>
