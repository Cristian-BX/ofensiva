<?php get_header(); ?>


<section id="only-new" class="only-new container-fluid">
  <div class="text-white" style="padding-top: 150px;">
    <div class="row">
      <?php
            while ( have_posts() ) : the_post();
      ?>
      <div class="container col-12 col-md-9">
        <?php
                get_template_part( 'template-parts/content', get_post_type() );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                  comments_template();
                endif;
        ?>
      </div>
      <?php
          endwhile;
      ?>
        <?php
          get_sidebar();
        ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
