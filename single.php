<?php get_header();?>
<main>
  <section>
    <div class="container">
      <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" >
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </section>
</main>
<?php get_footer();?>
