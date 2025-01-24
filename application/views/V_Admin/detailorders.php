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
                                <h5>Detail Orders <?php echo $dataproduct1->kode_transaksi; ?></h5>
                                <a href="<?php echo base_url('admin/orders') ?>">
                                <button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger">Back to Orders
                                </button>
                                </a>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <div class="table-content">
                                        <div class="project-table">
                                            <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>ID Product</th>
                                                        <th>Quantity</th>
                                                        <th>Harga</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($dataproduct as $product){ ?>
                                                    <tr>
                                                        <td><?php echo $product->id_product; ?></td>
                                                        <td><?php echo $product->qty; ?></td>
                                                        <td>Rp<?php echo number_format($product->harga,2,',','.'); ?></td>
                                                        <td>Rp<?php echo number_format($product->total,2,',','.'); ?></td>
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