<?php include_once('count.php'); ?>
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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
		
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="<?php echo base_url();?>images/product/<?php echo $dataproduct->image; ?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="<?php echo base_url();?>images/product/<?php echo $dataproduct->image; ?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->
					
					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $dataproduct->nama_product ?></h2>
							<!-- <div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div> -->
							<div>
								<h3 class="product-price">$<?php echo number_format($dataproduct->harga,2,',','.'); ?></h3>
								<!-- <span class="product-available">In Stock</span> -->
							</div>

							<p><?php echo $dataproduct->deskripsi; ?></p>

							<div class="product-options">
								<div class="col-md-4" style="margin-left: -15px;">
									<h5>View:</h5>
									<span><i class="fa fa-eye"></i></span>
									<label  style="color: #D10024; display: inline-block; font-weight:700;"><?php echo $dataproduct->hit_count+1; ?> Times</label>
								</div>
								<div>
									<h5>Availability:</h5>
									<span><i class="fa fa-dropbox"></i></span>
									<label  style="color: #D10024; display: inline-block; font-weight:700;"><?php echo $dataproduct->status_stok; ?></label>
								</div>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Quantity
									<div class="input-number">
										<input type="number" name="quantity" id="<?php echo $dataproduct->id_product;?>" value="1" class="quantity form-control">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn" data-produkid="<?php echo $dataproduct->id_product;?>" data-produknama="<?php echo $dataproduct->nama_product;?>" data-produkharga="<?php echo $dataproduct->harga;?>" data-gambar="<?php echo $dataproduct->image;?>"><i class="fa fa-shopping-cart"></i>Add To Cart</button>
							</div>

<!-- 							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
							</ul> -->

							<ul class="product-links">
								<li>Supplier:</li>
								<li><a href="<?php if($dataproduct->kategori == 'Sound System'){echo base_url('soundsystem');}else if($dataproduct->kategori == 'Alat Musik'){echo base_url('alatmusik');}else{echo base_url('aksesoris');} ?>"><?php echo $dataproduct->kategori; ?></a></li>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Deskripsi</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p><?php echo $dataproduct->deskripsi; ?></p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<h3><?php echo $dataproduct->nama_product ?></h3>
											<h5>Price: $<?php echo number_format($dataproduct->harga,2,',','.'); ?></h5>
											<h5>Availability: <?php echo $dataproduct->status_stok; ?></h5>
											<h5>Supplier: <?php echo $dataproduct->kategori; ?></h5>
											<h5>Stock: <?php echo $dataproduct->stok; ?></h5>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Product Terkait</h3>
						</div>
					</div>

					<!-- product -->
					<?php $break=0; foreach (array_reverse($allproduct) as $product) { if($product->kategori == $dataproduct->kategori){ $break++;?>
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?php echo base_url();?>images/product/<?php echo $product->image; ?>" alt="">
							</div>
							<div class="product-body">
								<p class="product-category"><?php echo $product->kategori; ?></p>
								<h3 class="product-name"><a href="<?php echo base_url('details/index/'.$product->id_product); ?>"><?php echo $product->nama_product ?></a></h3>
								<h4 class="product-price">$<?php echo number_format($product->harga,2,',','.'); ?></h4>
								<div class="product-rating">
								</div>
								<input type="hidden" name="quantity" id="<?php echo $product->id_product;?>" value="1" class="quantity form-control">
								<div class="product-btns">
									<button class="quick-view"><a href="<?php echo base_url('details/index/'.$product->id_product); ?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn" data-produkid="<?php echo $product->id_product;?>" data-produknama="<?php echo $product->nama_product;?>" data-produkharga="<?php echo $product->harga;?>" data-gambar="<?php echo $product->image;?>"><i class="fa fa-shopping-cart"></i>Add To Cart</button>
							</div>
						</div>
					</div>
					<?php if($break >= 4){break;} } } ?>
					<!-- /product -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- FOOTER -->
			<?php $this->load->view('template-parts-out/home/footer'); ?>
		<!-- END FOOTER -->
	</body>
</html>
