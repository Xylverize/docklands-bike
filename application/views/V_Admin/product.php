<?php require_once('application/views/V_Admin/template-parts/gets.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('V_Admin/template-parts/head'); ?>
</head>

<body class="menu-static">

    <!-- Menu header start -->
        <?php $this->load->view('V_Admin/template-parts/header-menu'); ?>
    <!-- Menu header end -->

    <!-- Menu aside start -->
    <div class="main-menu">
        <?php $this->load->view('V_Admin/template-parts/menu-aside'); ?>
    </div>
    <!-- Menu aside end -->

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Product list card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Product List</h5>
                                <button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Tambah Product
                                </button>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <div class="table-content">
                                        <div class="project-table">
                                            <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Foto</th>
                                                        <th>Nama Produk</th>
                                                        <th>Supplier</th>
                                                        <th>Status</th>
                                                        <th>Stok</th>
                                                        <th>Harga</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i=0; foreach($dataproduct as $product){ $i++; ?>
                                                    <tr>
                                                        <td><b><?php echo $i; ?></b></td>
                                                        <td class="pro-list-img">
                                                            <img src="<?php echo base_url();?>images/product/<?php echo $product->image; ?>" style="width: 125px;height: 125px;">
                                                        </td>
                                                        <td class="pro-name">
                                                            <h6><?php echo $product->nama_product; ?></h6>
                                                            <div style="width: 100px;"><?php echo substr($product->deskripsi, 0, 35);echo'...'; ?></div>
                                                        </td>
                                                        <td><?php echo $product->kategori; ?></td>
                                                        <td><?php echo $product->status_stok; ?></td>
                                                        <td><?php echo $product->stok; ?></td>
                                                        <td>Rp<?php echo number_format($product->harga,2,',','.'); ?></td>
                                                        <td class="action-icon">
                                                            <a href="#" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                            <a href="<?php echo site_url('admin/delete_product/'.$product->id_product);?>" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product list card end -->
                    </div>
                </div>
                <!-- Add Contact Start Model start-->
                <?php echo form_open_multipart('admin/simpan_product');?>
                <div class="md-modal md-effect-13 addcontact" id="modal-13">
                    <div class="md-content">
                        <h3 class="f-26">Tambah Product</h3>
                        <div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span> 
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input type="text" class="form-control" name="nama_product" placeholder="Nama Produk" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" rows="3" required></textarea>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <select id="hello-single" class="form-control" name="kategori">
                                    <option value=" ">---- Choose Supplier ----</option>
                                    <option value="Specialized">Specialized</option>
                                    <option value="Cannondale">Cannondale</option>
                                    <option value="Trek">Trek</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <select id="hello-single" class="form-control" name="status_stok">
                                    <option value=" ">---- Choose Status ----</option>
                                    <option value="In Stock">In Stock</option>
                                    <option value="Out of Stock">Out of Stock</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input type="text" class="form-control" name="stok" placeholder="Stock" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                <input type="text" class="form-control" name="harga" placeholder="Harga" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="product_sumbit" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Save</button>
                                <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-overlay"></div>
                <?php echo form_close(); ?>
                <!-- Add Contact Ends Model end-->
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
    
    <!-- Footer -->
        <?php $this->load->view('V_Admin/template-parts/foot'); ?>
    <!-- Footer end -->
</body>
</html>