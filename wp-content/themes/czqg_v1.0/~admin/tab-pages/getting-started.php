<?php
/**
 * Getting started template
 */
?>
<div id="getting_started" class="CLOUDPRESS-tab-pane active">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="CLOUDPRESS-info-title text-center"><?php echo esc_html__('CLOUDPRESS Theme Configuration','CLOUDPRESS'); ?></h1>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-12">
			    <div class="CLOUDPRESS-page" style="border: none;box-shadow: none;">
					<div class="mockup">
			    		<img src="<?php echo CLOUDPRESS_THEME_URI.'/admin/assets/img/CLOUDPRESS-lite-mockup.png';?>" width="100%">
			    	</div>
				</div>	
			</div>		
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="CLOUDPRESS-page">
					<div class="CLOUDPRESS-page-top"><?php esc_html_e( 'Additional features in CLOUDPRESS PRO', 'CLOUDPRESS' ); ?></div>
					<div class="CLOUDPRESS-page-content">
						<ul class="CLOUDPRESS-page-list-flex">
							<li>
								<?php echo esc_html__('Unlimited slides','CLOUDPRESS'); ?>
							</li>
							<li>
							<?php echo esc_html__('Pricing Table','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Unlimited Service Section','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Boxed layout support','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Portfolio section','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Funfact section','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Google Maps section','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Client section','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Multiple Blog Templates','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Typography','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('WPML Support','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Mulitple Color Schemes','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Drag and drop section orders','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Team section with carousel effect','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Shop section with unlimited items','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Shop section with carousel effect','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Testimonial section with carousel effect','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Homepage sections before/after hooks','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('Latest news section with grid format','CLOUDPRESS'); ?>
							</li>
							<li>
								<?php echo esc_html__('NewsLetter subscription section','CLOUDPRESS'); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="CLOUDPRESS-page">
					<div class="CLOUDPRESS-page-top"><?php esc_html_e( 'Links to Customizer Settings', 'CLOUDPRESS' ); ?></div>
					<div class="CLOUDPRESS-page-content">
						<ul class="CLOUDPRESS-page-list-flex">
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ); ?>" target="_blank"><?php esc_html_e('Site Logo','CLOUDPRESS'); ?></a>
							</li>
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=CLOUDPRESS_theme_panel' ) ); ?>" target="_blank"><?php esc_html_e('Blog and Footer','CLOUDPRESS'); ?></a>
							</li>
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=widgets' ) ); ?>" target="_blank"><?php esc_html_e('Footer Widgets','CLOUDPRESS'); ?></a>
							</li>
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=header_image' ) ); ?>" target="_blank"><?php esc_html_e('Header Image','CLOUDPRESS'); ?></a>
							</li>
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=section_settings' ) ); ?>" target="_blank"><?php esc_html_e('Homepage Sections','CLOUDPRESS'); ?></a>
							</li>
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=theme_style' ) ); ?>" target="_blank"><?php esc_html_e('Custom Color','CLOUDPRESS'); ?></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="CLOUDPRESS-page">
					<div class="CLOUDPRESS-page-top"><?php esc_html_e( 'Useful Links', 'CLOUDPRESS' ); ?></div>
					<div class="CLOUDPRESS-page-content">
						<ul class="CLOUDPRESS-page-list-flex">
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url('https://demo.spicethemes.com/?theme=CLOUDPRESS'); ?>" target="_blank"><?php echo esc_html__('CLOUDPRESS Demo','CLOUDPRESS'); ?></a>
							</li>
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url('https://demo.spicethemes.com/?theme=CLOUDPRESS%20Pro'); ?>" target="_blank"><?php echo esc_html__('CLOUDPRESS Pro Demo','CLOUDPRESS'); ?></a>
							</li>
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/CLOUDPRESS/'); ?>" target="_blank"><?php echo esc_html__('CLOUDPRESS Theme Support','CLOUDPRESS'); ?></a>
							</li>
						    <li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/CLOUDPRESS/reviews/#new-post'); ?>" target="_blank"><?php echo esc_html__('Your feedback is valuable to us','CLOUDPRESS'); ?></a>
							</li>
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/CLOUDPRESS-pro'); ?>" target="_blank"><?php echo esc_html__('CLOUDPRESS Pro Details','CLOUDPRESS'); ?></a>
							</li>
							<li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url('https://helpdoc.spicethemes.com/CLOUDPRESS/CLOUDPRESS-wordpress-theme/'); ?>" target="_blank"><?php echo esc_html__('CLOUDPRESS Documentation','CLOUDPRESS'); ?></a>
							</li>
						    <li>
								<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/contact'); ?>" target="_blank"><?php echo esc_html__('Pre-sales enquiry','CLOUDPRESS'); ?></a>
							</li>
							<li>
							<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/CLOUDPRESS-free-vs-pro/'); ?>" target="_blank"><?php echo esc_html__('Free vs Pro','CLOUDPRESS'); ?></a>
							</li>
							<li>
							<a class="CLOUDPRESS-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/CLOUDPRESS-changelog/'); ?>" target="_blank"><?php echo esc_html__('Changelog','CLOUDPRESS'); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>