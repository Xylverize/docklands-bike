<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $this->load->view('template-parts-out/home/head'); ?>
    </head>
	<body>
		<!-- HEADER -->
		<header>
			<?php $this->load->view('template-parts-out/home/header'); ?>
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<?php $this->load->view('template-parts-out/home/nav'); ?>
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url(); ?>assets/img/s1.png"  width="200" height="170"halt="">
							</div>
							<div class="shop-body">
								<h4 style= "color:white">Specialized</h4>
								<a href="<?php echo base_url('allproducts'); ?>" class="cta-btn">Shop now<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url(); ?>assets/img/trek1.png"  width="200" height="170"alt="">
							</div>
							<div class="shop-body">
								<h4 style= "color:white">Trek</h4>
								<a href="<?php echo base_url('allproducts'); ?>" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url(); ?>assets/img/can1.png"  width="200" height="170"alt="">
							</div>
							<div class="shop-body">
								<h4 style= "color:white">Cannondale</h4>
								<a href="<?php echo base_url('allproducts'); ?>" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<?php $break=0; foreach (array_reverse($dataproduct) as $product) { $break++;?>
										<div class="product">
											<a href="<?php echo base_url('details/index/'.$product->id_product); ?>">
											<div class="product-img">
												<img src="<?php echo base_url();?>images/product/<?php echo $product->image; ?>" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											</a>
											<div class="product-body">
												<p class="product-supplier"><?php echo $product->kategori; ?></p>
												<h3 class="product-name"><a href="<?php echo base_url('details/index/'.$product->id_product); ?>"><?php echo $product->nama_product; ?></a></h3>
												<h4 class="product-price">$<?php echo number_format($product->harga,2,',',','); ?></h4>
												<div class="product-rating">
												</div>
												<input type="hidden" name="quantity" id="<?php echo $product->id_product;?>" value="1" class="quantity form-control">
												<div class="product-btns">
													<button class="quick-view"><a href="<?php echo base_url('details/index/'.$product->id_product); ?>"><i class="fa fa-eye"></i><span class="tooltipp">Details Product</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" data-produkid="<?php echo $product->id_product;?>" data-produknama="<?php echo $product->nama_product;?>" data-produkharga="<?php echo $product->harga;?>" data-gambar="<?php echo $product->image;?>"><i class="fa fa-shopping-cart"></i>Add To Cart</button>
											</div>
										</div>
										<?php if($break >= 5){break;} } ?>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">

										<!-- product -->
										<?php $break=0; foreach (array_reverse($dataproduct) as $product) { $break++;?>
										<div class="product">
											<a href="<?php echo base_url('details/index/'.$product->id_product); ?>">
											<div class="product-img">
												<img src="<?php echo base_url();?>images/product/<?php echo $product->image; ?>" alt="">
											</div>
											</a>
											<div class="product-body">
												<p class="product-supplier"> <?php echo $product->kategori; ?> </p>
												<h3 class="product-name"><a href="#"><?php echo $product->nama_product; ?></a></h3>
												<h4 class="product-price">$<?php echo number_format($product->harga,2,',','.'); ?></h4>
												<div class="product-rating">
												</div>
												<input type="hidden" name="quantity" id="<?php echo $product->id_product;?>" value="1" class="quantity form-control">
												<div class="product-btns">
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Details Product</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" data-produkid="<?php echo $product->id_product;?>" data-produknama="<?php echo $product->nama_product;?>" data-produkharga="<?php echo $product->harga;?>" data-gambar="<?php echo $product->image;?>"><i class="fa fa-shopping-cart"></i>Add To Cart</button>
											</div>
										</div>
										<?php if($break >= 5){break;} } ?>
										<!-- /product -->

									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
		<!-- FOOTER -->		
			<?php $this->load->view('template-parts-out/home/footer'); ?>
		<!-- FOOTER END -->
	</body>
</html>