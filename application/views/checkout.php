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
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				<form action="checkout/transaksi" method="POST">
					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Customer Details</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $_SESSION['nama']; ?>" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="alamat" placeholder="Alamat" value="<?php echo $_SESSION['alamat']; ?>" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="kota" placeholder="Kota" value="<?php echo $_SESSION['kota']; ?>" required>
							</div>
							<div class="form-group">
								<input class="input" type="number" name="kodepos" placeholder="Kode Pos" value="<?php echo $_SESSION['kode_pos']; ?>" required>
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="telp" placeholder="No Handphone" value="<?php echo $_SESSION['telp']; ?>" required>
							</div>
							<!-- <div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Create Account?
									</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div> -->
						</div>
						<!-- /Billing Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" name="pesan" placeholder="Pesan Anda"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Order Details</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<?php foreach($this->cart->contents() as $items): ?>
								<div class="order-col">
									<div><?php echo $items['qty']; ?>x <?php echo $items['name']; ?></div>
									<div>$<?php echo number_format($items['subtotal'],2,',','.'); ?></div>
								</div>
								<?php endforeach; ?>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$<?php echo number_format($this->cart->total(),2,',','.'); ?></strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1" checked>
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
								</div>
							</div>
						</div>
						<button type="submit" name="checkout_submit" class="primary-btn" style="width: 100%;">Check Out</button>
					</div>
					<!-- /Order Details -->
					</form>
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
