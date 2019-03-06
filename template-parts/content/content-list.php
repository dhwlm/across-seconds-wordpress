<div class="col-12 mb-5">
  <div class="card border-0 shadow">
    <div class="row">
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <div class="col-md d-flex">
        <img src="<?php echo $image[0]; ?>" class="w-100 align-self-center">
      </div>
    <?php endif; ?>
      <div class="col-md px-3 d-flex align-items-center">
        <div class="card-block p-3 pr-4">
        <?php
            $categories = get_the_category();
            foreach ( $categories as $category ) { ?>
                <span class="badge badge-pill badge-<?php echo $category->slug; ?>"><?php echo $category->name; ?></span>
            
            <?php }
        ?>
            
            <h4 class="card-title mt-2">
              <a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a>
            </h4>
            <div class="card-text text-muted">
              <?php the_excerpt(); ?>
            </div>
            <div class="d-flex justify-content-between">
              <a href="<?php the_permalink(); ?>" class="text-muted">Read More</a>
              <span class="text-muted"><small><i><?php echo get_the_date(); ?></i></small></span>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
