<?php

// Advanced Custom Fields
$slide_1   = get_field('slide_1');
$slide_2   = get_field('slide_2');
$slide_3   = get_field('slide_3');
$slide_4   = get_field('slide_4');
$slide_5   = get_field('slide_5');
$slide_6   = get_field('slide_6');

?>

<!-- CAROUSEL -->
<section id="carousel">
  <div id="carousel-home" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <!-- If user uploaded an image -->
   			<?php if( !empty($slide_1) ) : ?>
          <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo $slide_1['url']; ?>" alt="<?php echo $slide_1['alt']; ?>" />
          </div>
        <?php endif; ?>
        <!-- If user uploaded an image -->
   			<?php if( !empty($slide_2) ) : ?>
          <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $slide_2['url']; ?>" alt="<?php echo $slide_2['alt']; ?>" />
          </div>
        <?php endif; ?>
        <!-- If user uploaded an image -->
   			<?php if( !empty($slide_3) ) : ?>
          <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $slide_3['url']; ?>" alt="<?php echo $slide_3['alt']; ?>" />
          </div>
        <?php endif; ?>
        <!-- If user uploaded an image -->
   			<?php if( !empty($slide_4) ) : ?>
          <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $slide_4['url']; ?>" alt="<?php echo $slide_4['alt']; ?>" />
          </div>
        <?php endif; ?>
        <!-- If user uploaded an image -->
   			<?php if( !empty($slide_5) ) : ?>
          <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $slide_5['url']; ?>" alt="<?php echo $slide_5['alt']; ?>" />
          </div>
        <?php endif; ?>
        <!-- If user uploaded an image -->
   			<?php if( !empty($slide_6) ) : ?>
          <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $slide_6['url']; ?>" alt="<?php echo $slide_6['alt']; ?>" />
          </div>
        <?php endif; ?>
    </div>
    <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
