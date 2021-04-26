<article id="post-<?php the_ID(); ?>" class="data-new">
	<header class="entry-header" style="
                    background-image:
                      linear-gradient(to bottom, rgba(0,0,0,.6), rgba(0,0,0,.7), rgba(0,0,0,.8), rgba(0,0,0,.9), rgba(0,0,0,1), rgba(0,0,0,1)),
                      url('<?php echo get_the_post_thumbnail_url(); ?>');
                  background-size: 100% 100%;
                  background-repeat: no-repeat;
              ">
		<div class="thumb" >
			<h2><?php the_category(); ?></h2>
			<h1 class="title-new"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>
			<div class="data-new">
				<span><i class="fas fa-user-astronaut"></i> Por: <?php the_author(); ?></span><br>
				<span><i class="far fa-calendar-alt"></i> <?php echo get_the_date( 'd F Y', get_the_ID() ); ?> </span><br>
				<span class="tags"><i class="fas fa-tags"></i> <?php the_tags(); ?></span>
			</div>

	</header>
	<div class="entry-content">
		<div class="content">
		<?php the_content(); ?>
		</div>
	</div>
</article>
