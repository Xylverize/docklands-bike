			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="<?php echo $this->uri->segment(1) == '' ? 'active': '' ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
						<li class="<?php echo $this->uri->segment(1) == 'allproducts' ? 'active': '' ?>"><a href="<?php echo base_url('allproducts'); ?>">All Products</a></li>
						<li class="<?php echo $this->uri->segment(1) == 'aboutus' ? 'active': '' ?>"><a href="<?php echo base_url('aboutus'); ?>">About Us</a></li>
						<li class="<?php echo $this->uri->segment(1) == 'contactus' ? 'active': '' ?>"><a href="<?php echo base_url('contactus'); ?>">Contact Us</a></li>
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->