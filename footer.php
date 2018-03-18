<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LMI
 */

?>

<?php wp_footer(); ?>

<!-- FOOTER -->

<footer>
  <h6>
    <strong>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></strong>
    <br />
    <small>Site by <a href="http://kieranjmcmanus.com/" target="_blank">Kieran McManus</a></small>
  </h6>
</footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var stylesheet_directory = '<?php bloginfo('stylesheet_directory')?>';
	</script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
