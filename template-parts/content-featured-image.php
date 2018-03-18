<?php

$thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
$blog_thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id( get_option('page_for_posts') ));
$blog_title = get_the_title( get_option('page_for_posts', true) );

?>

<!-- FEATURED IMAGE -->
<?php if(is_home()) { ?>
  <section class="feature-image" style="background: url('<?php echo $blog_thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    <div class="feature-layer">
      <h1><?php echo $blog_title ?></h1>
    </div>
  </section>
<?php } else { if( has_post_thumbnail() ) { ?>

  <section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    <div class="feature-layer">
      <h1><?php the_title(); ?></h1>
    </div>
  </section>

<?php } else { //fallback image ?>

  <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <div class="feature-layer">
      <h1><?php the_title(); ?></h1>
    </div>
  </section>

<?php } }?>
