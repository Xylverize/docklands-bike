			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +61-405-928-762</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> admin@docklands.com</a></li>
					</ul>
					<ul class="header-links pull-right">
					<?php if($this->session->userdata('role') == 'Member'){ ?>
						<li><a href="<?php echo base_url(''); ?>"><i class="fa fa-user-o"></i><?php echo $_SESSION['nama'];?></a>
						<li><a href="<?php echo site_url('auth/logout'); ?>"><i class="ti-layout-sidebar-left"></i> Logout </a></li>
						</li>
					<?php }else if ($this->session->userdata('role') == 'Administrator') { ?>
						<li><a href="<?php echo base_url('admin/profile'); ?>"><i class="fa fa-user-o"></i><?php echo $_SESSION['nama'];?></a></li>
						<li><a href="<?php echo site_url('auth/logout'); ?>"><i class="ti-layout-sidebar-left"></i> Logout </a></li>
					<?php }else{ ?>
						<li><a href="<?php echo base_url('auth'); ?>"><i class="fa fa-user-o"></i>Login/Register</a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="<?php echo base_url(); ?>" class="logo">
								<img src="<?php echo base_url(); ?>assets/img/logo1.png"  width="150" height="80" alt="">
					
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="<?php echo base_url('welcome/search');?>" method="POST">
									<select class="input-select">
										<option>All Categories</option>
									</select>
									<input type="text" name="search_home" class="input" placeholder="Search here">
									<button type="submit" name="search_submit" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<?php $total_qty=0; foreach($this->cart->contents() as $items): $total_qty += $items['qty']; endforeach; ?>
										<div class="qty"><?php echo $total_qty; ?></div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
										<?php $total_qty=0; foreach($this->cart->contents() as $items): $total_qty += $items['qty'];?>
											<div class="product-widget">
												<div class="product-img">
													<img src="<?php echo base_url(); ?>images/product/<?php echo $items['gambar']; ?>" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#"><?php echo $items['name']; ?></a></h3>
													<h4 class="product-price"><span class="qty"><?php echo $items['qty'];?>x</span>Rp<?php echo number_format($items['price'],2,',','.'); ?></h4>
													<h4 class="product-price"><span class="qty">==</span>Rp<?php echo number_format($items['subtotal'],2,',','.'); ?></h4>
												</div>
												<button class="delete" id="<?php echo $items['rowid']; ?>"><i class="fa fa-close"></i></button>
											</div>
										<?php endforeach; ?>
										</div>
										<div class="cart-summary">
											<small><?php echo $total_qty; ?> Item(s) selected</small>
											<h5>SUBTOTAL: Rp<?php echo number_format($this->cart->total(),2,',','.'); ?></h5>
										</div>
										<div class="cart-btns">
											<a href="<?php echo base_url('checkout'); ?>">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->