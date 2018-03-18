<?php
/*
  Template Name: Testimonials
*/

// Advanced Custom Fields
$section_1   = get_field('section_1');
$section_2   = get_field('section_2');
$map   = get_field('map');
$address   = get_field('address');
$bbb   = get_post_meta( 7, 'bbb', true );
$rates   = get_field('rates');

get_header(); ?>

<?php get_template_part('template-parts/content', 'featured-image'); ?>

<div class="page-wrapper">
  <div class="container">
    <!-- TESTIMONIALS -->
    <section id="testimonials">
      <div class="row testimonial">
        <div class="col-sm-12">
          <blockquote>
            <i class="fa fa-quote-left"></i>
            <strong>LMI gives students a great experience</strong><br />
            All four of my kids have studied music with Frank. They always came out of their lessons in a better mood, and loved the chance to play in a band, an opportunity you don't get with most instructors. The most valuable thing is they've developed a skill they enjoy and will be able to pursue their entire lives. Frank instills a lifelong love of music in his students, and very few (if any) ever give up playing!
            <i class="fa fa-quote-right"></i>
            <br />
            <cite>&mdash; Martha D. April 25, 2013 </cite>
          </blockquote>
        </div>
      </div>
      <div class="row testimonial">
        <div class="col-sm-12">
          <blockquote>
            <i class="fa fa-quote-left"></i>
            <strong>Fantastic music instruction!</strong><br />
            Frank has taught all three of my kids, and I have only fantastic things to say about the instruction they have received! They have learned so much, have been inspired to challenge themselves, and have further developed their love of music!
            <i class="fa fa-quote-right"></i>
            <br />
            <cite>&mdash; Ellen B. April 24, 2013</cite>
          </blockquote>
        </div>
      </div>
      <div class="row testimonial">
        <div class="col-sm-12">
          <blockquote>
            <i class="fa fa-quote-left"></i>
            <strong>Best there is.</strong><br />
            Been taking my child to Frank for about 3 years for guitar and now for drums. Frank is professional, easy going, knowledgeable and experienced in teaching piano, guitar, drums and singing. Frank's positive energy is very magnetic; he relates wonderfully to students and parents as well.
            <i class="fa fa-quote-right"></i>
            <br />
            <cite>&mdash; Tindi R. April 18, 2013</cite>
          </blockquote>
        </div>
      </div>
      <div class="row testimonial">
        <div class="col-sm-12">
          <blockquote>
            <i class="fa fa-quote-left"></i>
            <strong>A Music School That Isn't Just Instruction, It's Inspiring!</strong><br />
            My 2 daughters have only been taking guitar with Frank Keim for 7 months, but the progress they have made is incredible. Unlike other music teachers, he has encouraged their love of music and helped them to move in new directions. After their first recital, my oldest was so inspired by Mr. Frank and his other students that she requested to add more instruments to her instruction. I foresee many years of LMI in our future!
            <i class="fa fa-quote-right"></i>
            <br />
            <cite>&mdash; J W. April 17, 2013</cite>
          </blockquote>
        </div>
      </div>
      <div class="row testimonial">
        <div class="col-sm-12">
          <blockquote>
            <i class="fa fa-quote-left"></i>
            <strong>Just the best music school...</strong><br />
            ...and most energetic and positive music instructor in Loudoun county, I'm sure. Hey, get on his waiting list. I mean it. Seriously. He's the best.
            <i class="fa fa-quote-right"></i>
            <br />
            <cite>&mdash; Haig E. February 07, 2009</cite>
          </blockquote>
        </div>
      </div>
      <div class="row testimonial">
        <div class="col-sm-12">
          <blockquote>
            <i class="fa fa-quote-left"></i>
            <strong>Frank Rocks!</strong><br />
            Frank is a phenomenal music teacher. He is passionate about what he does, he clearly loves music and teaching it. He obviously enjoys every lesson, I don't know who has more fun, me or him. He explains the lesson clearly and simply and then we do it.

            Frank is encouraging, upbeat and positive, he really believes in his students and their abilities and he gets them to believe in themselves--I went to several recitals before beginning lessons, and it's amazing what his students accomplish.

            He's a true gem. I can't imagine a better music teacher.
            <i class="fa fa-quote-right"></i>
            <br />
            <cite>&mdash; Ellen Z. April 03, 2008 </cite>
          </blockquote>
        </div>
      </div>
    </section>
  </div>

<?php get_footer(); ?>
