<?php get_header(); ?>
<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
    <?php
      // WP_Query arguments
      $featured_args = array(
        'posts_per_page'         => '1',
        'meta_query' => array(
          array(
            'key'     => 'featured_post',
            'value'   => 1,
          ),
        ),
      );
      
      // The Query
      $featured_query = new WP_Query( $featured_args );
      
      if ( $featured_query->have_posts() ) {
        while ( $featured_query->have_posts() ) {
          $featured_query->the_post();
    ?>
    <h2><?php the_title(); ?></h2>
    <?php the_excerpt(); ?>
    <?php
      }} else {
        //no posts found//
      }
      wp_reset_postdata();
    ?>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
        <?php
        // WP_Query arguments
        $args = array(
          'posts_per_page'         => '1',
          'order'                  => 'DESC',
          'orderby'                => 'date',
          'category_name'          => 'dogs',
        );
        
        // The Query
        $dog_query = new WP_Query( $args );
        
        // The Loop
        if ( $dog_query->have_posts() ) {
          while ( $dog_query->have_posts() ) {
            $dog_query->the_post();
            // do something
        ?>
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php the_category(); ?></strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
          <div class="mb-1 text-muted"><?php the_date(); ?></div>
          <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
        <?php
          }
        } else {
          // no posts found
        }
        
        // Restore original Post Data
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
      <?php
      // WP_Query arguments
      $args_dog = array(
        'posts_per_page'         => '1',
        'order'                  => 'DESC',
        'orderby'                => 'date',
        'category_name'          => 'cats',
      );
      
      // The Query
      $cat_query = new WP_Query( $args_dog );
      
      // The Loop
      if ( $cat_query->have_posts() ) {
        while ( $cat_query->have_posts() ) {
        $cat_query->the_post();
        // do something
      ?>
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary"><?php the_category(); ?></strong>
        <h3 class="mb-0"><?php the_title(); ?></h3>
        <div class="mb-1 text-muted"><?php the_date(); ?></div>
        <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
      </div>
      <?php
        }
      } else {
        // no posts found
      }
      
      // Restore original Post Data
      wp_reset_postdata();
      ?>
      </div>
    </div>
  </div>


</main>
<?php get_footer(); ?>





