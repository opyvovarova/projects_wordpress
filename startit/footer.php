<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Start_It
 */

?>

</div><!-- End Main Wrapper-->

<footer id="footer" class="footer">
	<div class="footer-bottom">
		<div class="container">
			<div class="copyright">
			<?=get_field('copyright_title'); ?>
			</div>
		</div>
	</div>
</footer>



<?php wp_footer(); ?>

</body>
</html>
