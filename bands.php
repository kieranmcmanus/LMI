<?php
/*
  Template Name: Bands

*/

// Advanced Custom Fields
$band_1_name   = get_field('band_1_name');
$band_1_image   = get_field('band_1_image');
$band_1_info   = get_field('band_1_info');

$band_2_name   = get_field('band_2_name');
$band_2_image   = get_field('band_2_image');
$band_2_info   = get_field('band_2_info');

$band_3_name   = get_field('band_3_name');
$band_3_image   = get_field('band_3_image');
$band_3_info   = get_field('band_3_info');

get_header(); ?>

<?php get_template_part('template-parts/content', 'featured-image'); ?>

<div class="page-wrapper">
<!-- THE BANDS -->
<div class="container">
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
  <article class="band-container">
    <div class="row">
      <div class="col-sm-4">
        <h3><?php echo $band_2_name; ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <!-- If user uploaded an image -->
   			<?php if( !empty($band_2_image) ) : ?>
          <img src="<?php echo $band_2_image['url']; ?>" alt="<?php echo $band_2_image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <div class="col-sm-8">
        <p class="band"><?php echo $band_2_info; ?></p>
      </div>
    </div>
  </article>
  <hr />
  <article class="band-container">
    <div class="row">
      <div class="col-sm-4">
        <h3><?php echo $band_3_name; ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <!-- If user uploaded an image -->
   			<?php if( !empty($band_3_image) ) : ?>
          <img src="<?php echo $band_3_image['url']; ?>" alt="<?php echo $band_3_image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <div class="col-sm-8">
        <p class="band"><?php echo $band_3_info; ?></p>
      </div>
    </div>
  </article>
</div>
</div>

<?php get_footer(); ?>
