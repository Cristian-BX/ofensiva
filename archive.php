<?php get_header(); ?>
<section id="noticias" class="news news-category container">

        <h1>
          /Noticias_/<?php single_cat_title(); ?>
        </h1>
        <br><hr style="color:white;"><br>
        <div class="row">
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-12 col-md-12 col-lg-6">
              <div id="post" class="body">
                <div class="content">
                  <a href="<?php the_permalink(); ?>">
                    <!-- <?php
                      if( has_post_thumbnail()){
                        the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-fluid' ) );;
                      }
                    ?>
                    <br> -->
                    <?php the_title( '<h2>', '</h2>' ); ?>
                    <?php the_excerpt(); ?>
                    <div class="footer">
                      <span><i class="fas fa-user-astronaut"></i> Por: <?php the_author(); ?></span>
  				            <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date( 'd F Y', get_the_ID() ); ?> </span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <br><hr style="color:white;"><br>
    </section>
<?php get_footer(); ?>
