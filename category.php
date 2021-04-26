<?php get_header(); ?>
<section id="noticias" class="news news-category container">

        <h1>
          <!-- <span class="material-icons md-48 md-light">
          feed
          </span> -->

          /Noticias_/<?php single_cat_title(); ?>
        </h1>

        <?php
          $categories = get_the_category();
          $category_id = $categories[0]->cat_ID;
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $args = array(
              'cat'                    => $category_id,
              'post_type'              => 'post',
              'orderby'                => 'date',
              'order'                  => 'DESC',
              'showposts'              => 8,
              'no_rows_found'          => true,
              'update_post_meta_cache' => false,
              'update_post_term_cache' => false,
              'paged' => $paged
            );
          $custom_loop_cat = new WP_Query($args);
        ?>
        <br><hr style="color:white;"><br>
        <div class="row">
          <?php while ( $custom_loop_cat->have_posts() ) : $custom_loop_cat->the_post(); ?>
            <div class="col-12 col-md-12 col-lg-6">
              <div id="post" class="body"
              style="
                    background-image:
                      linear-gradient(to bottom, rgba(0,0,0,.9), rgba(0,0,0,.7), rgba(0,0,0,.5), rgba(0,0,0,.95), rgba(0,0,0,1)),
                      url('<?php echo get_the_post_thumbnail_url(); ?>');
                  background-size: 100% 100%;
                  background-repeat: no-repeat;
              ">
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
