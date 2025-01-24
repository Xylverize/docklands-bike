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
                                <h5>Users</h5>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No Telpon</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0; foreach($datausers as $row){ $i++; ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><img src="<?php echo base_url();?>images/profile/<?php echo $row->image; ?>" style="width: 50px;height: 50px;"></td>
                                                    <td><?php echo $row->nama; ?></td>
                                                    <td><?php echo $row->username; ?></td>
                                                    <td><?php echo $row->jenis_kelamin; ?></td>
                                                    <td><?php echo $row->telp; ?></td>
                                                    <td><?php echo $row->alamat; ?></td>
                                                    <td><?php echo $row->email; ?></td>
                                                    <td><?php echo $row->role; ?></td>
                                                    <td>
                                                        <div class="dropdown-inverse dropdown open">
                                                        <button class="btn btn-inverse dropdown-toggle waves-effect waves-light " type="button" id="dropdown-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Action</button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdown-7" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                        <a class="dropdown-item waves-light waves-effect" href="<?php echo site_url('admin/delete_users/'.$row->id);?>">Hapus</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No Telpon</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>Role</th>
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
