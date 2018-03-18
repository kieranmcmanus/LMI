<?php

// Advanced Custom Fields

$resource_title_1   = get_field('resource_title_1');
$resource_link_1   = get_field('resource_link_1');
$resource_title_2   = get_field('resource_title_2');
$resource_link_2   = get_field('resource_link_2');
$resource_title_3   = get_field('resource_title_3');
$resource_link_3   = get_field('resource_link_3');
$resource_title_4   = get_field('resource_title_4');
$resource_link_4   = get_field('resource_link_4');
$resource_title_5   = get_field('resource_title_5');
$resource_link_5   = get_field('resource_link_5');

$facebook_url   = get_field('facebook_url');

$blog_title = get_the_title( get_option('page_for_posts', true) );

?>

<div id="home" class="page-wrapper">
  <!-- BLOG CONTENT -->
  <div class="container">
    <div class="row" id="primary">
      <main id="content" class="col-sm-8" role="main">
        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
          <h2 id="blogTitle"><?php echo $blog_title; ?></h2>
        </a>
        <hr />
        <?php
          $args = array( 'numberposts' => 5 );
          $lastposts = get_posts( $args );
          foreach($lastposts as $post) : setup_postdata($post); ?>
          	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          	<?php the_excerpt(); ?>
        <?php endforeach; ?>
        <hr />
      </main>

  <!-- SIDEBAR -->
      <aside class="col-sm-4" id="resources">
        <?php if( !empty($resource_title_1 && $resource_link_1) ) : ?>
          <div class="resource">
            <a href="<?php echo $resource_link_1; ?>">
              <button class="btn-danger btn-block btn-lg"><?php echo $resource_title_1; ?></button>
            </a>
          </div>
        <?php endif; ?>
        <?php if( !empty($resource_title_2 && $resource_link_2) ) : ?>
          <div class="resource">
            <a href="<?php echo $resource_link_2; ?>">
              <button class="btn-danger btn-block btn-lg"><?php echo $resource_title_2; ?></button>
            </a>
          </div>
        <?php endif; ?>
        <?php if( !empty($resource_title_3 && $resource_link_3) ) : ?>
          <div class="resource">
            <a href="<?php echo $resource_link_3; ?>">
              <button class="btn-danger btn-block btn-lg"><?php echo $resource_title_3; ?></button>
            </a>
          </div>
        <?php endif; ?>
        <?php if( !empty($resource_title_4 && $resource_link_4) ) : ?>
          <div class="resource">
            <a href="<?php echo $resource_link_4; ?>">
              <button class="btn-danger btn-block btn-lg"><?php echo $resource_title_4; ?></button>
            </a>
          </div>
        <?php endif; ?>
        <?php if( !empty($resource_title_5 && $resource_link_5) ) : ?>
          <div class="resource">
            <a href="<?php bloginfo('stylesheet_directory')?>/Terms_and_conditions.pdf" target="_blank">
              <button class="btn-danger btn-block btn-lg"><?php echo $resource_title_5; ?></button>
            </a>
          </div>
          <hr />
        <?php endif; ?>
        <?php if( !empty($facebook_url) ) : ?>
          <div class="resource" id="facebook">
            <iframe src="https://www.facebook.com/plugins/page.php?href=<?php echo $facebook_url; ?>&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>
        <?php endif; ?>
      </aside>
    </div>
  </div>
</div>
