		</main>
			<footer class="page-footer">			
				<nav class="navbar navbar-default navbar-fixed-bottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 footer-nav-container-secondary">
								<h4>About Us</h4>
								<?php
									wp_nav_menu( array(
										'container' => false,
										'menu' => 'SecondaryFooterMenu',
										'menu_class' => 'footer-menu',
										'menu_id' => 'secondary-footer-menu',
										'link_before' => '',
										'link_after' => '',
										'walker' => '',
									));
								?>									
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 footer-nav-container">
								<h4>Products</h4>
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
							<div class="col-xs-12 col-sm-6 col-md-3 footer-nav-container">
								<h4>Where to Buy:</h4>
								<div class="where-to-buy">
									logos	
								</div>							
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 footer-nav-container">
								<h4>What's Happening at RELN: </h4>
								<div class="whats-happening">
									<span>April 12, 2016</span>	
								</div>								
							</div>	
						</div>						
					</div>
				</nav>
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>
