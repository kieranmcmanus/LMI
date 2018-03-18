<?php
/*
  Template Name: Instructors

*/

// Advanced Custom Fields
$instructor_1_name   = get_field('instructor_1_name');
$instructor_1_image   = get_field('instructor_1_image');
$instructor_1_info   = get_field('instructor_1_info');

$instructor_2_name   = get_field('instructor_2_name');
$instructor_2_image   = get_field('instructor_2_image');
$instructor_2_info   = get_field('instructor_2_info');

$instructor_3_name   = get_field('instructor_3_name');
$instructor_3_image   = get_field('instructor_3_image');
$instructor_3_info   = get_field('instructor_3_info');

get_header(); ?>

<?php get_template_part('template-parts/content', 'featured-image'); ?>

<div class="page-wrapper">
<!-- THE INSTRUCTORS -->
<div class="container">
  <article class="instructor-container">
    <div class="row">
      <div class="col-sm-4">
        <h3><?php echo $instructor_1_name; ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <!-- If user uploaded an image -->
   			<?php if( !empty($instructor_1_image) ) : ?>
          <img src="<?php echo $instructor_1_image['url']; ?>" alt="<?php echo $instructor_1_image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <div class="col-sm-8">
        <p class="instructor"><?php echo $instructor_1_info; ?></p>
      </div>
    </div>
  </article>
  <hr />
  <article class="instructor-container">
    <div class="row">
      <div class="col-sm-4">
        <h3><?php echo $instructor_2_name; ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <!-- If user uploaded an image -->
   			<?php if( !empty($instructor_2_image) ) : ?>
          <img src="<?php echo $instructor_2_image['url']; ?>" alt="<?php echo $instructor_2_image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <div class="col-sm-8">
        <p class="instructor"><?php echo $instructor_2_info; ?></p>
      </div>
    </div>
  </article>
  <hr />
  <article class="instructor-container">
    <div class="row">
      <div class="col-sm-4">
        <h3><?php echo $instructor_3_name; ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <!-- If user uploaded an image -->
   			<?php if( !empty($instructor_3_image) ) : ?>
          <img src="<?php echo $instructor_3_image['url']; ?>" alt="<?php echo $instructor_3_image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <div class="col-sm-8">
        <p class="instructor"><?php echo $instructor_3_info; ?></p>
      </div>
    </div>
  </article>
</div>
</div>

<?php get_footer(); ?>
