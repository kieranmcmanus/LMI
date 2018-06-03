<?php
/*
  Template Name: Bands

*/

// Advanced Custom Fields
$band_1_name   = get_field('band_1_name');
$band_1_image   = get_field('band_1_image');
$band_1_info   = get_field('band_1_info');

$band_page_info = get_field('band_page_info');

get_header(); ?>

<?php get_template_part('template-parts/content', 'featured-image'); ?>

<div class="page-wrapper">
<div class="container">
  <!-- THE BANDS -->
  <section id="band-intro">
    <div class="container">
      <p><?php echo $band_page_info; ?></p>
    </div>
  </section>
  <hr />
  <article class="band-container">
    <div class="row">
      <div class="col-sm-4">
        <h3><?php echo $band_1_name; ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <!-- If user uploaded an image -->
   			<?php if( !empty($band_1_image) ) : ?>
          <img src="<?php echo $band_1_image['url']; ?>" alt="<?php echo $band_1_image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <div class="col-sm-8">
        <p class="band"><?php echo $band_1_info; ?></p>
      </div>
    </div>
  </article>
  <hr />
</div>
</div>

<?php get_footer(); ?>
