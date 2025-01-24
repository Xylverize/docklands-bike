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
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Data Orders</h5>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Transaksi</th>
                                                <th>ID User</th>
                                                <th>Nama</th>
                                                <th>Pesan</th>
                                                <th>Tanggal Beli</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0; foreach($datatransaksi as $row){ $i++; ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row->kode_transaksi; ?></td>
                                                    <td><?php echo $row->id_user; ?></td>
                                                    <td><?php echo $row->nama_user; ?></td>
                                                    <td><?php echo $row->pesan; ?></td>
                                                    <td><?php echo $row->tanggal; ?></td>
                                                    <td><?php echo 'Rp'.number_format($row->total_bayar,2,',','.'); ?></td>
                                                    <td><?php if($row->status == 0){ echo '<span style="color:orange;">Pending</span>';}else if($row->status == 1){echo '<span style="color:green;">Approved</span>';}else{echo 'Expired';} ?></td>
                                                    <td>
                                                        <div class="dropdown-inverse dropdown open">
                                                        <button class="btn btn-inverse dropdown-toggle waves-effect waves-light " type="button" id="dropdown-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Action</button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdown-7" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                        <?php if($row->status == 0){ ?>
                                                        <a class="dropdown-item waves-light waves-effect btn-primary" href="<?php echo site_url('admin/approve_orders/'.$row->kode_transaksi);?>">Approve</a>
                                                        <?php }else if($row->status == 1){ ?>
                                                        <a class="dropdown-item waves-light waves-effect btn-warning" href="<?php echo site_url('admin/pending_orders/'.$row->kode_transaksi);?>">Pending</a>
                                                        <?php } ?>
                                                        <a class="dropdown-item waves-light waves-effect btn-info" href="<?php echo site_url('admin/detail_orders/'.$row->kode_transaksi);?>">Detail Orders</a>
                                                        <a class="dropdown-item waves-light waves-effect btn-danger" href="<?php echo site_url('admin/delete_orders/'.$row->kode_transaksi);?>">Hapus</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Transaksi</th>
                                                <th>ID User</th>
                                                <th>Nama</th>
                                                <th>Pesan</th>
                                                <th>Tanggal Beli</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Zero config.table end -->
                    </div>
                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->
    
    <?php $this->load->view('V_Admin/template-parts/foot-user'); ?>
</body>

</html>
