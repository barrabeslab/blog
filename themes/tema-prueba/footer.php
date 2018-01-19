		<footer class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<img src="<?php bloginfo('template_url'); ?>/img/icon-barrabes.svg">
						<ul class="footer-links">
							<li>
								<a href="legal_notice.html"> <?php _e('Condiciones legales', 'btech' ); ?></a>
							</li>
							<li>
								<a href="cookie-policy.html"><?php _e('Política de cookies', 'btech' ); ?></a>
							</li>
						</ul>

						&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); echo ". ";  _e('Todos los derechos reservados', 'btech' );  echo ".";?>
					</div>
					<div class="col-sm-4">
						<div class="social">
							<ul>
								<li>
									<a href="https://es.linkedin.com/" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/img/icon-linkedin.svg">
									</a>
								</li>
								<li>
									<a href="https://twitter.com" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/img/icon-twitter.svg">
									</a>
								</li>
								<li>
									<a href="https://www.youtube.com" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/img/icon-youtube.svg">
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/img/icon-instagram.svg">
									</a>
								</li>
								<li>
									<a href="https://www.facebook.com" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/img/icon-facebook.svg">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.2.3.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

		<?php wp_footer();?>

	</body>
</html>
