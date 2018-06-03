<?php
/*
  Template Name: Registration
*/

get_header(); ?>

<?php get_template_part('template-parts/content', 'featured-image'); ?>

<div class="page-wrapper">
<!-- REGISTRATION -->
<div class="container">
  <div class="row">

    <div id="register-form" class="col-sm-12">

      <section class="main-content">
        <p class="lead">
          Register your child today for the best musical experience I can give!
        </p>

        <form role="form" class="clearfix" method="POST" action="https://formspree.io/fmkeim@gmail.com">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label class="sr-only" for="register-name">Name</label>
              <input type="text" class="form-control input-lg" id="register-name" placeholder="Your name" name="Name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label class="sr-only" for="register-email">Email</label>
              <input type="text" class="form-control input-lg" id="register-email" placeholder="Your email" name="Email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label class="sr-only" for="register-address">Street address</label>
              <input type="text" class="form-control input-lg" id="register-address" placeholder="Your street address" name="Street">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="sr-only" for="register-city">City/Town</label>
              <input type="text" class="form-control input-lg" id="register-city" placeholder="Your city/town" name="City/Town">
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label class="sr-only" for="register-state">State</label>
              <select class="form-control input-lg" id="register-state" name="State">
                <option>State</option>
                <option>VA</option>
                <option>MD</option>
                <option>WV</option>
                <option>DC</option>
              </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="sr-only" for="register-zip">Zip</label>
              <input type="text" class="form-control input-lg" id="register-zip" placeholder="Your zip code" name="Zip Code">
              </div>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label class="sr-only" for="register-student-name">Student Name</label>
              <input type="text" class="form-control input-lg" id="register-student-name" placeholder="Student's name" name="Student Name">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="sr-only" for="register-age">Student Age</label>
              <input type="text" class="form-control input-lg" id="register-age" placeholder="Student's age" name="Student Age">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="sr-only" for="register-instruction">Instruction you are interested in</label>
              <select class="form-control input-lg" id="register-instruction" name="Instruction">
                <option>Type of instruction</option>
                <option>Guitar</option>
                <option>Bass Guitar</option>
                <option>Drums</option>
                <option>Piano</option>
                <option>Organ</option>
                <option>Vocal Instruction</option>
              </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="register-day">Preferred day of the week</label>
              <fieldset id="register-day">
                <input type="checkbox" value="Monday" id="monday" name="Day">
                <label for="monday">Monday</label>
                <input type="checkbox" value="Tuesday" id="tuesday" name="Day">
                <label for="tuesday">Tuesday</label>
                <input type="checkbox" value="Wednesday" id="wednesday" name="Day">
                <label for="wednesday">Wednesday</label>
                <input type="checkbox" value="Thursday" id="thursday" name="Day">
                <label for="thursday">Thursday</label>
                <input type="checkbox" value="Friday" id="friday" name="Day">
                <label for="friday">Friday</label>
              </fieldset>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="register-time">Preferred time of day</label>
                <fieldset id="register-time">
                  <input type="checkbox" value="9AM-11AM" id="9AM-11AM" name="Time">
                  <label for="9AM-11AM">9AM-11AM</label>
                  <input type="checkbox" value="11AM-1PM" id="11AM-1PM" name="Time">
                  <label for="11AM-1PM">11AM-1PM</label>
                  <input type="checkbox" value="1PM-3PM" id="1PM-3PM" name="Time">
                  <label for="1PM-3PM">1PM-3PM</label>
                  <input type="checkbox" value="3PM-5PM" id="3PM-5PM" name="Time">
                  <label for="3PM-5PM">3PM-5PM</label>
                  <input type="checkbox" value="5PM-7PM" id="5PM-7PM" name="Time">
                  <label for="5PM-7PM">5PM-7PM</label>
                </fieldset>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label class="sr-only" for="register-comments">Comments</label>
              <textarea class="form-control input-lg" id="register-comments" placeholder="Comments" name="Comments"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label class="sr-only" for="register-phone">Daytime Phone Number</label>
              <input type="text" class="form-control input-lg" id="register-phone" placeholder="Your phone number" name="Phone">
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-danger btn-lg" value="Submit">
        </form>

      </section>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>
