<?php
/* pocetna strana */
get_header(); ?>

	<!-- site-content -->
	<div class="site-content clearfix">

			<h2>Dobro dosli na nas sajt.  Ugodan boravak zeli Vam vas Chrystal fashion.</h2>

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>

	</div><!-- /site-content -->

	<?php get_footer();

?>
