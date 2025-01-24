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
					<?php if($this->cart->total() != 0){ ?>
					<div align="center" style="border:2px solid #E4E7ED; padding:25px;">
						<h4>Jumlah Tagihan:</h4>
						<h3 style="color: #D10024;">Rp<?php echo number_format($total_bayar,0,',','.'); ?></h3>
						<h4>Nomor Rekening Virtual Account BCA:</h4>
						<h3 style="color: #D10024;">80008192823827493</h3>
						<h4>Nomor Tagihan:</h4>
						<h3 style="color: #D10024;"><?php echo $kode_transaksi; ?></h3>
					</div>
					<?php }else{ ?>
					<div align="center" style="border:2px solid #E4E7ED; padding:25px;">
						<h3 style="color: #D10024;">Anda belum melakukan checkout!</h3>
					</div>
					<?php } ?>
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
