		</main>
			<footer class="page-footer">			
				<nav class="navbar navbar-default navbar-fixed-bottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-md-6 footer-nav-container">
								<?php
									wp_nav_menu( array(
										'container' => false,
										'menu' => 'FooterMenu',
										'menu_class' => 'footer-menu',
										'menu_id' => 'footer-menu',
										'link_before' => '',
										'link_after' => '',
										'walker' => '',
									));
								?>	
							</div>
							<div class="col-xs-12 col-md-6 footer-sm-link-container">
								<a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank">
									<span class="<?php the_field('facebook_icon', 'option'); ?>"></span>
								</a>
								<a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank" >
									<span class="<?php the_field('twitter_icon', 'option'); ?>"></span>
								</a>
								<a href="<?php the_field('pinterest_link', 'option'); ?>" target="_blank">
									<span class="<?php the_field('pinterest_icon', 'option'); ?>"></span>
								</a>
							</div>
						</div>						
					</div>
				</nav>
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>
