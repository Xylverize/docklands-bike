<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-phone"></i>0405928762</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>admin@docklands.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Supplier</h3>
								<ul class="footer-links">
									<li><a href="#">Specialized</a></li>
									<li><a href="#">Trek</a></li>
									<li><a href="#">Cannondale</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->


		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.zoom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
		<script type="text/javascript">
		    $(document).ready(function(){
		        $('.add-to-cart-btn').click(function(){
		            var id_product    = $(this).data("produkid");
		            var nama_product  = $(this).data("produknama");
		            var harga = $(this).data("produkharga");
		            var gambar = $(this).data("gambar");
		            var quantity     = $('#' + id_product).val();
		            $.ajax({
		                url : "<?php echo base_url();?>cart/add",
		                method : "POST",
		                data : {id_product: id_product, nama_product: nama_product, harga: harga, gambar: gambar, quantity: quantity},
		                success: function(data){
		                    // $('#detail_cart').html(data);
		                    location.reload();
		                }
		            });
		        });
		 
		        // Load shopping cart
		        $('#detail_cart').load("<?php echo base_url();?>cart/load_cart");
		 
		        //Hapus Item Cart
		        $('.delete').click(function(){
		            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
		            $.ajax({
		                url : "<?php echo base_url();?>cart/remove",
		                method : "POST",
		                data : {row_id : row_id},
		                success :function(data){
		                    // $('#detail_cart').html(data);
		                    location.reload();
		                }
		            });
		        });
		    });
		</script>