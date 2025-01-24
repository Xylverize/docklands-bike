<?php  include'template-parts/gets.php'; ?>
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
    
    <!-- Main-body start-->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <div class="card bg-success large-widget-card">
                            <div class="card-block-big">
                                <h3><?php echo $jumlah ?></h3>
                                <span class="m-t-10">Users</span>
                                <i class="icofont icofont-ui-user-group"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-linkein">
                                <h3><?php echo $jumlah2 ?></h3>
                                <span class="m-t-10">Product</span>
                                <i class="icofont icofont-social-shopify"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main-body end-->
    
    <!-- Footer -->
        <?php $this->load->view('V_Admin/template-parts/foot'); ?>
    <!-- Footer end -->
</body>

</html>