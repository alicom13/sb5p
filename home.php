<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <?php
            while(have_posts()): the_post();?>
              <div class="row align-items-center rounded mb-4 mt-4">
                <div class="col-md-4">
                  <?php
                    if(has_post_thumbnail()){
                      $thumbnail_url = get_the_post_thumbnail_url();
                    } else {
                      // Ambil cover bawaan
                      $thumbnail_url = 'https://i0.wp.com/wordpress.org/files/2022/08/theme-styles.png?w=960&ssl=1';
                    }
                  ?>
                  <img class="img-fluid rounded archive-thumbnail" src="<?php echo $thumbnail_url; ?>" alt="<?php get_the_title();?>" >
                </div>
                <div class="col-md-8">
                  <div class="p-2">
                    <h2><a class="title-permalink" href="<?php the_permalink(); ?>"> <?php echo get_the_title(); ?></a></h2>
                    <p><?php echo get_the_excerpt();?></p>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
        </div>
        <div class="col-md-4">
          <div class="container-fluid">
            <h2>Cari sesuatu</h2>
            <?php get_search_form( true ); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
