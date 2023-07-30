<?php get_header(); ?>
<?php
$cari=get_search_query();
$args = array(
  's' => $cari
);
$search_query = new WP_Query( $args );
// Jika Ada
if ( $search_query->have_posts() ) {
  _e("<h2>Hasil pencarian ".get_query_var('s')."</h2>");
  while ( $search_query->have_posts() ) {
    $search_query->the_post();
    ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php
  } else {
    ?>
    <h2>Hasil Kosong</h2>
    <div class="alert alert-info">Artikel yang panjenengan cari mboten wonten</div>
<?php
  }
}
<?php get_footer(); ?>
