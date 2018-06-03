<?php
/*
  Template Name: Contact
*/

get_header(); ?>

<?php get_template_part('template-parts/content', 'featured-image'); ?>

<div class="page-wrapper">
<!-- CONTACT -->
<div class="container">
  <h2 class="contact-page-blurb">Leave us a message!</h2>
  <form role="form" class="clearfix" method="POST" action="https://formspree.io/fmkeim@gmail.com" id="contact-form">
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label class="sr-only" for="contact-email">Your email address</label>
          <input class="form-control input-lg" type="email" name="email" placeholder="Your email" id="contact-email">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label class="sr-only" for="contact-message">Your message</label>
          <textarea class="form-control input-lg" name="message" placeholder="Your message" id="contact-message"></textarea>
        </div>
      </div>
    </div>
    <button class="btn btn-danger btn-lg" type="submit">Send</button>
  </form>
</div>
</div>

<?php get_footer(); ?>
