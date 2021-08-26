<?php get_header(); ?>
<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>

<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <article class="blog-post">
          <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="blog-post-meta"><?php the_date(); ?></p>
          <?php if (is_single()) : the_content(); else : the_excerpt(); endif; ?>
        </article>
<?php    endwhile; 
endif; 
?>

    </div>

<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>