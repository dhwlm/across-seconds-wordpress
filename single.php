<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage maanch
 * @since 1.0.0
 */

get_header();
?>

<main role="main">

	<!-- Header -->
	<header class="masthead d-flex bg-light-50">
		<div class="container my-auto text-block">


		</div>
		<div class="overlay">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/branding/mask.svg" alt="">
		</div>
	</header>

	<section class="pb-5">
	
    <div class="container">

    <div class="row justify-content-center">
      <div class="col-md-10">


      
      <?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();
							?>
            <div class="row featured">
							<div class="col-md-12 mb-5">

                  <?php if (has_post_thumbnail( $post->ID ) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <img src="<?php echo $image[0]; ?>" class="w-100">
                  <?php endif; ?>
                  
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <?php
                  $categories = get_the_category();
                  foreach ( $categories as $category ) { ?>
                    <span class="badge badge-pill badge-<?php echo $category->slug; ?>"><?php echo $category->name; ?></span>
                  
                  <?php }
                ?>

                <div class="d-flex justify-content-between mb-4">
                  <div>
                    <h4 class="card-title mt-2"><?php the_title(); ?></h4>
                    <h6><small><i><span class="mr-2 d-inline-block align-middle rounded-circle overflow-hidden"><?php echo get_avatar( get_the_author_meta('user_email'), $size = '35'); ?></span><?php echo the_author_meta( 'display_name' ); ?></i></small></h6>
                  </div>
                  <div>
                    <?php echo do_shortcode('[Sassy_Social_Share]'); ?> 
                    <span class="text-muted"><small><i><?php echo get_the_date(); ?></i></small></span>
                  </div>
                </div>
												
                
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="post-content">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>

             <div class="row">
              <div class="col-md-12 text-gray">
                  <?php foreach ( $categories as $category ) { 
                      if ($category->slug == 'event') { ?>
                       
                        <a href="mailto:info@maanch.com" class="btn btn-secondary btn-arrow text-uppercase">Rsvp Now</a>

                     <?php }
                    ?>
                  <?php } ?>
              </div>
            </div>



          </div>
          
          <?php
								endwhile; 
              endif;?>

        </div>
      </div>

		</div> 

	</div>
</section>

<hr>

<section class="py-5">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-md">


        <?php
        $post_categories = wp_get_post_categories( $post->ID );
        $category = get_category( $post_categories[0] );
        ?>
        

          <?php
          $related = new WP_Query(
            array(
              'category__in'   => wp_get_post_categories( $post->ID ),
              'posts_per_page' => 3,
              'post__not_in'   => array( $post->ID )
              )
            );
            
            if( $related->have_posts() ) { ?>
              <?php strtolower($category->name) != 'blog'? $category = $category->name.'s':$category = $category->name; ?>
              <h4 class="mb-4">
                Other <?php echo $category; ?>
                </h4>
              <div class="row">

              <?php while( $related->have_posts() ) { 
                $related->the_post(); 
                
                ?>

                <div class="col-md-4 mb-4">
                  <div class="card">

                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                      <img src="<?php echo $image[0]; ?>" class="w-100">
                    <?php endif; ?>
  
                    <div class="card-block p-3 pr-4">
                      <?php
                        $categories = get_the_category();
                        foreach ( $categories as $category ) { ?>
                          <span class="badge badge-pill badge-<?php echo $category->slug; ?>"><?php echo $category->name; ?></span>
                        
                        <?php }
                      ?>
                        
                        <h4 class="card-title mt-2 max-title"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h4>
                        <div class="card-text text-muted max-desc mb-4">
                          <?php the_excerpt(); ?>
                        </div>
  
                        <div class="d-flex justify-content-between">
                          <a href="<?php the_permalink(); ?>" class="text-muted">Read More</a>
                          <span class="text-muted"><small><i><?php echo get_the_date(); ?></i></small></span>
                        </div>
                      </div>
                  </div>
                </div>


                <?php
                /*  whatever you want to output*/
              } ?>
              
                </div>
              </div>

              <?php
              
              wp_reset_postdata();
            }
            ?>
          
        </div>


      

  </div>
</section>

</main>

<?php
get_footer();

