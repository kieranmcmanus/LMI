<?php

$map   = get_field('map');
$address   = get_field('address');
$bbb   = get_post_meta( 7, 'bbb', true );
$rates   = get_field('rates');

 ?>

 <!-- MAP & RATES -->
 <section id="about">
   <div class="container">
     <div class="row">
       <div class="col-sm-8" id="map">
         <?php if( !empty($map) ): ?>
         <div class="acf-map">
          <div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
         </div>
         <?php endif; ?>
       </div>
       <div class="col-sm-4" id="info">
           <div id="address">
             <h4><?php echo $address; ?></h4>
           </div>
           <div id="BBB">
             <hr />
             <?php if($bbb = true) { ?>
               <img src="<?bloginfo('stylesheet_directory');?>/assets/img/BBB.png" alt="Better Business Bureau" />
             <?php } ?>
           </div>
           <div id="rates">
             <hr />
             <?php echo $rates; ?>
           </div>
       </div>
     </div>
   </div>
 </section>
 </div>
