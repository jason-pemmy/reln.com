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
									<div class="footer-logo-container">
										<a href="#" >
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/canadian-tire-footer.png" alt="canadian tire logo"/>
										</a>	
									</div>									
									<div class="footer-logo-container">
										<a href="#" >
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-depot-footer.png" alt="home depot logo"/>
										</a>
									</div>
									<div class="footer-logo-container">
										<a href="#" >
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/coop-footer.png" alt="co-op logo"/>
										</a>
									</div>
									<div class="footer-logo-container">
										<a href="#" >
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reno-depot-footer.png" alt="reno depot"/>
										</a>
									</div>
									<div class="footer-logo-container rona-logo">
										<a href="#" >
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rona.png" alt="rona logo"/>
										</a>
									</div>
									<div class="footer-logo-container">
										<a href="#" >
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lowes.png" alt="lowes logo"/>
										</a>
									</div>
								</div>							
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 footer-nav-container">
								<h4>What's Happening at RELN: </h4>
								<div class="whats-happening">
									<h5>April 12, 2016</h5>
									<span>Aliquam Tincidunt Mauris</span>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh urna</p>
								</div>								
							</div>	
						</div>						
					</div>
				</nav>
				<div class="container bottom-footer">
					<div class="row">
						<div class="col-xs-12 col-sm-6 tbk-link">
							<p> Copyright © 2016 <strong>Reln Pty Ltd</strong>. All rights reserved. <a href='#'>Privacy & Terms</a><br/>
							<span><a href="#">tbk Creative | Web Design & Digital Marketing</a></span></p>	
						</div>
						<div class="col-xs-12 col-sm-6 aoda-link">
							<p><a href="#"><span class="icon-aoda-online"></span></a></p>
						</div>
					</div>					
				</div>
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>
