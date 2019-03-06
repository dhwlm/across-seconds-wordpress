<div class="col-md-4 mb-4">

  <div class="card border-0 shadow">
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <img src="<?php echo $image[0]; ?>" class="w-100">
    <?php endif; ?>
    
    <div class="card-block p-3 pr-4">
      <?php
      $categories = get_the_category();
      foreach ( $categories as $category ) { ?>

      <span class="badge badge-pill badge-<?php echo $category->slug; ?>"><?php echo $category->name; ?></span>
        
      <?php } ?>
        
      <h4 class="card-title mt-2 max-title">
        <a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a>
      </h4>
      <div class="card-text text-muted max-desc mb-4">
        <?php the_excerpt(); ?>
      </div>
      
      <div class="d-flex justify-content-between align-items-center">
        <?php
        foreach ( $categories as $category ) { 
        if ($category->slug == "event") { ?>
          <a href="<?php the_permalink(); ?>" class="btn btn-arrow btn-secondary">RSVP NOW</a>
          <?php	}else{ ?>
          <a href="<?php the_permalink(); ?>" class="text-muted">Read More</a>
          <?php	} } ?>
          <span class="text-muted"><small><i><?php echo get_the_date(); ?></i></small></span>
      </div>
    </div>
  </div>

</div>