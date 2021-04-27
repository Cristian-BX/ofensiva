<section id="noticias" class="news container">

        <h1>
          <span class="material-icons md-48 md-light">
          feed
          </span>
          /Noticias_
        </h1>

        <?php
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $args = array(
              'post_type'              => 'post',
              'orderby'                => 'date',
              'order'                  => 'DESC',
              'showposts'              => 9,
              'no_rows_found'          => true,
              'update_post_meta_cache' => false,
              'update_post_term_cache' => false,
              'paged' => $paged
            );
          $custom_loop = new WP_Query($args);
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $args = array(
              'category_name'          => 'Destacado',
              'post_type'              => 'post',
              'orderby'                => 'date',
              'order'                  => 'DESC',
              'showposts'              => 2,
              'no_rows_found'          => true ,
              'update_post_meta_cache' => false,
              'update_post_term_cache' => false,
              'paged' => $paged
            );
          $custom_loop_cat = new WP_Query($args);
        ?>
        <div class="row" style="padding: 10px !important; ">
          <?php while ( $custom_loop_cat->have_posts() ) : $custom_loop_cat->the_post(); ?>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="body">
                <div class="content" style="
                      background-image:
                        linear-gradient(to bottom, rgba(0,0,0,.9), rgba(0,0,0,.7), rgba(0,0,0,.5), rgba(0,0,0,.95), rgba(0,0,0,1)),
                        url('<?php echo get_the_post_thumbnail_url(); ?>');
                    background-size: 100% 100%;
                    background-repeat: no-repeat;
                ">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title( '<h2>', '</h2>' ); ?>
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
        <div class="row" style="padding: 10px !important; ">
          <?php while ( $custom_loop->have_posts() ) : $custom_loop->the_post(); ?>
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="body">
                <div class="content" style="
                      background-image:
                        linear-gradient(to bottom, rgba(0,0,0,.9), rgba(0,0,0,.7), rgba(0,0,0,.5), rgba(0,0,0,.95), rgba(0,0,0,1)),
                        url('<?php echo get_the_post_thumbnail_url(); ?>');
                    background-size: 100% 100%;
                    background-repeat: no-repeat;
                ">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title( '<h2">', '</h2>' ); ?>
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
        <button type="button" name="button">Ver Más</button>
    </section>
