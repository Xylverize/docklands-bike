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

					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Top selling</h3>
							<?php $break=0; foreach (array_reverse($dataproduct) as $product) { $break++;?>
							<div class="product-widget">
								<a href="<?php echo base_url('details/index/'.$product->id_product); ?>">
								<div class="product-img">
									<img src="<?php echo base_url();?>images/product/<?php echo $product->image; ?>" alt="">
								</div>
								</a>
								<div class="product-body">
									<p class="product-category"><?php echo $product->kategori; ?></p>
									<h3 class="product-name"><a href="<?php echo base_url('details/index/'.$product->id_product); ?>"><?php echo $product->nama_product; ?></a></h3>
									<h4 class="product-price">Rp<?php echo number_format($product->harga,2,',','.'); ?></h4>
								</div>
							</div>
							<?php if($break >= 5){break;} } ?>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<!-- <label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label> -->
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
<!-- 								<li><a href="#"><i class="fa fa-th-list"></i></a></li> -->
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							
							<!-- product -->
							<?php $break=0; $i=0; foreach (array_reverse($dataproduct) as $product) { $break++; if($product->kategori == 'Alat Musik'){ $i++; ?>
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="<?php echo base_url('details/index/'.$product->id_product); ?>">
										<div class="product-img">
											<img src="<?php echo base_url();?>images/product/<?php echo $product->image; ?>" alt="">
										</div>
									</a>
									<div class="product-body">
										<p class="product-category"><?php echo $product->kategori; ?></p>
										<h3 class="product-name"><a href="<?php echo base_url('details/index/'.$product->id_product); ?>"><?php echo $product->nama_product; ?></a></h3>
										<h4 class="product-price">Rp<?php echo number_format($product->harga,2,',','.'); ?></h4>
										<div class="product-rating">
										</div>
										<input type="hidden" name="quantity" id="<?php echo $product->id_product;?>" value="1" class="quantity form-control">
										<div class="product-btns">
											<button class="quick-view"><a href="<?php echo base_url('details/index/'.$product->id_product); ?>"><i class="fa fa-eye"></i><span class="tooltipp">Detail Product</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn" data-produkid="<?php echo $product->id_product;?>" data-produknama="<?php echo $product->nama_product;?>" data-produkharga="<?php echo $product->harga;?>" data-gambar="<?php echo $product->image;?>"><i class="fa fa-shopping-cart"></i>Add To Cart</button>
									</div>
								</div>
							</div>
							<?php if($break >= 9){break;} } } ?>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>


							<div class="clearfix visible-lg visible-md"></div>

						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing <?php echo $i; ?> products</span>
							<!-- <ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul> -->
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		<!-- FOOTER -->
			<?php $this->load->view('template-parts-out/home/footer'); ?>
		<!-- /FOOTER -->


	</body>
</html>
