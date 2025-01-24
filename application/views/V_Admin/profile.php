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

    <!-- Main body start -->
    <div class="main-body user-profile">
        <div class="page-wrapper">
            
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- tab content start -->
                        <div class="tab-content">
                            <!-- tab panel personal start -->
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Profile</h5>
                                        <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                            <i class="icofont icofont-edit"></i>
                                        </button>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-6">
                                                                <table class="table m-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center"><img src="<?php echo base_url('images/profile/'.$row->image);?>" alt="User-Profile-Image" style="width:200px;height: 250px;"></td>
                                                                        </tr>
                                                                        <?php echo form_open_multipart('admin/do_upload');?>
                                                                        <tr>
                                                                                <td >
                                                                                    <input type="file" name="image">
                                                                                    <button type="submit" class="btn btn-info">Update Gambar</button>
                                                                                </td>
                                                                        </tr>
                                                                        <?php echo form_close(); ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-12 col-xl-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Nama Lengkap</th>
                                                                            <td><?php echo $row->nama; ?></td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <th scope="row">Jenis Kelamin</th>
                                                                            <td><?php echo $row->jenis_kelamin; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Email</th>
                                                                            <td><a href="#!"><?php echo $row->email; ?></a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Nomor HP</th>
                                                                            <td><?php echo $row->telp; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Alamat</th>
                                                                            <td><?php echo $row->alamat; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of general info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of view-info -->
                                        <div class="edit-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form action="<?php echo site_url('admin/proses_edit_profile');?>" method="POST">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                                    <input type="text" name="nama" class="form-control" value="<?php echo $row->nama; ?>" placeholder="Nama Lengkap">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-radio">
                                                                                    <div class="group-add-on">
                                                                                        <div class="radio radiofill radio-inline">
                                                                                            <label>
                                                                                                <input type="radio" name="jenis_kelamin" value="laki-laki" <?php if($row->jenis_kelamin=='laki-laki'){echo 'checked';}?>><i class="helper"></i>
                                                                                                laki-laki
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill radio-inline">
                                                                                            <label>
                                                                                                <input type="radio" name="jenis_kelamin" value="perempuan" <?php if($row->jenis_kelamin=='perempuan'){echo 'checked';}?>><i class="helper"></i>
                                                                                                perempuan
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                                                                    <input type="text" name="email" class="form-control" value="<?php echo $row->email; ?>" placeholder="Email">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                                    <input type="text" name="telp" class="form-control" placeholder="Nomor Telp" value="<?php echo $row->telp;?>">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                                    <textarea type="text" name="alamat" class="form-control" placeholder="Alamat" rows="4"><?php echo $row->alamat;?></textarea>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-info">Update</button>
                                                            <a href="#!" id="edit-cancel" class="btn btn-danger waves-effect">Cancel</a>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    <!-- end of edit info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of edit-info -->
                                    </div>
                                    <!-- end of card-block -->
                                </div>
                                <!-- personal card end-->
                            </div>
                            <!-- tab pane personal end -->
                            
                        </div>
                        <!-- tab content end -->
                    </div>
                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main body end -->
    
    <!-- Footer -->
        <?php $this->load->view('V_Admin/template-parts/foot'); ?>
    <!-- Footer end -->
</body>
</html>