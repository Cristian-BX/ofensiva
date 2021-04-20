<section id="noticias" class="news container">
        <h1>/Noticias_</h1>

        <?php
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $args = array(
              'post_type'              => 'post',
              'orderby'                => 'date',
              'order'                  => 'DESC',
              'showposts'              => 3,
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
              'no_rows_found'          => true,
              'update_post_meta_cache' => false,
              'update_post_term_cache' => false,
              'paged' => $paged
            );
          $custom_loop_cat = new WP_Query($args);
        ?>
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
          <!-- <?php if ($custom_loop_cat->max_num_pages > 1) { ?>
            <br>
            <nav class="prev-next-posts">
              <div class="prev-posts-link">
                <?php echo get_next_posts_link( 'NOTICIAS ANTERIORES', $custom_loop_cat->max_num_pages );?>
              </div>
              <div class="next-posts-link">
                <?php echo get_previous_posts_link( 'NOTICIAS NUEVAS' ); ?>
              </div>
            </nav>
          <?php } ?> -->
          <?php wp_reset_postdata(); ?>
        </div>
        <br><hr style="color:white;"><br>
        <div class="row">
          <?php while ( $custom_loop->have_posts() ) : $custom_loop->the_post(); ?>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="body"style="
                    background-image:
                      linear-gradient(to bottom, rgba(0,0,0,1), rgba(0,0,0,.5), rgba(0,0,0,.1), rgba(0,0,0,.5), rgba(0,0,0,1)),
                      url('<?php echo get_the_post_thumbnail_url(); ?>');
                  background-size: 100% 100%;
                  background-repeat: no-repeat;
              ">
                <div class="content">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title( '<h2>', '</h2>' ); ?>
                    <?php the_excerpt(); ?>
                    <div class="footer">
                      <!-- <small class="">Por: <?php the_author(); ?></small> -->
                      <small class=""><?php echo get_the_date( 'd F Y', get_the_ID() ); ?></small>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <!-- <?php if ($custom_loop->max_num_pages > 1) { ?>
            <br>
            <nav class="prev-next-posts">
              <div class="prev-posts-link">
                <?php echo get_next_posts_link( 'NOTICIAS ANTERIORES', $custom_loop->max_num_pages );?>
              </div>
              <div class="next-posts-link">
                <?php echo get_previous_posts_link( 'NOTICIAS NUEVAS' ); ?>
              </div>
            </nav>
          <?php } ?> -->
          <?php wp_reset_postdata(); ?>
        </div>
    </section>
