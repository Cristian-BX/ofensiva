<?php

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-12 col-md-3">
  <aside class="aside">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </aside>
</div>
