	<footer class="site-footer">

		<!-- footer-widgets -->
		<div class="footer-widgets clearfix">


			<?php if (is_active_sidebar('footer1')) : ?>

				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer1'); ?>

				</div>

			<?php endif; ?>


			<?php if (is_active_sidebar('footer2')) : ?>

				<div class="footer-widget-area">

					<?php dynamic_sidebar('footer2'); ?>

				</div>

			<?php endif; ?>

			<?php if (is_active_sidebar('footer3')) : ?>

				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer3'); ?>

				</div>

			<?php endif; ?>

						<div class="comment-form">
									<h2 class="comments-wrapper-heading"> Upisite svoj komentar o nama </h2>
							 <form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
									 <div class="commentform-element">
										 <label class="hide" for="author"></label>
										<input class="input-fields" id="author" name="author" type="text" placeholder="Ime i prezime" value=""/>
											</div>
											 <div class="commentform-element">
												<label class="hide" for="author"></label>
										 <input class="input-fields" id="email" name="email" type="text" placeholder="Email" value="" />
											</div>
											 <div class="commentform-element">
												<label class="hide" for="comment"></label>
										<textarea id="comment" class="input-fields" placeholder="Unesi poruku" name="comment" cols="30" rows="5"></textarea>
											</div>
										<input name="submit" class="form-submit-button"  type="submit" id="submit-comment" value="Posalji">
										 <input type="hidden" name="comment_post_ID" value="22" id="comment_post_ID">
									 <input type="hidden" name="comment_parent" id="comment_parent" value="0">
										 </form>
						 </div>

			<?php if (is_active_sidebar('footer4')) : ?>

				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer4'); ?>

				</div>

			<?php endif; ?>
			<div class="kartice">
			<img src=" https://www.paypalobjects.com/webstatic/en_US/btn/btn_buynow_cc_171x47.png" alt="Buy Now Button with Credit Cards"  />
			<!--		<a href="https://newsroom.mastercard.com/photos/masterpass-logo/" title="MasterPass Logo"><img width="222" height="61" src="https://newsroom.mastercard.com/wp-content/uploads/2014/02/MasterPass-Logo-featured.png" class="attachment-flickr-large wp-post-image" alt="MasterPass Logo featured"></a> -->
			</div>
		</div><!-- /footer-widgets -->

		<nav class="site-nav">
			<?php

			$args = array(
				'theme_location' => 'footer'
			);

			?>

			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
				<a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
				<a href="https://www.instagram.com/?hl=en" class="fa fa-instagram"></a>


			<?php wp_nav_menu(  $args ); ?>
		</nav>

		<h2> &copy; <?php echo date('Y') . " " . "Copyrights  Dusan";?></h2>

	</footer>

</div><!-- container -->

<?php wp_footer(); ?>
</body>
</html>
