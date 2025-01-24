<?php include'gets.php'; ?>
<div class="main-menu-header">
            <img class="img-40" src="<?php echo base_url();?>images/profile/<?php echo $row->image; ?>" style="border-radius: 50%;width: 50px;height: 50px;">
            <div class="user-details">
                <span><?php echo $row->nama; ?></span>
                <span><?php echo $row->role; ?></span>
            </div>
        </div>
        <div class="main-menu-content">
            <ul class="main-navigation">
                <!-- <li class="more-details">
                    <a href="</?php echo base_url('admin/profile');?>"><i class="ti-user"></i>View Profile</a>
                    <a href="</?php echo site_url('auth/logout'); ?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
                </li> -->
                <li class="nav-title" data-i18n="nav.category.navigation">
                    <i class="ti-line-dashed"></i>
                    <span>Navigation</span>
                </li>
                <li class="nav-item single-item <?php echo $this->uri->segment(2) == '' ? 'has-class': '' ?>">
                    <a href="<?php echo base_url('admin'); ?>">
                        <i class="ti-home"></i>
                        <span data-i18n="nav.dash.main">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item single-item <?php echo $this->uri->segment(2) == 'product' ? 'has-class': '' ?>">
                    <a href="<?php echo base_url('admin/product'); ?>">
                        <i class="ti-shopping-cart"></i>
                        <span data-i18n="nav.e-commerce.main">Product</span>
                    </a>
                </li>
                <li class="nav-item single-item <?php echo $this->uri->segment(2) == 'orders' ? 'has-class': '' ?>">
                    <a href="<?php echo base_url('admin/orders'); ?>">
                        <i class="fa fa-first-order"></i>
                        <span data-i18n="nav.e-commerce.main">Orders</span>
                    </a>
                </li>
                <li class="nav-item single-item <?php echo $this->uri->segment(2) == 'users' ? 'has-class': '' ?>">
                    <a href="<?php echo base_url('admin/users'); ?>">
                        <i class="ti-user"></i>
                        <span data-i18n="nav.dash.main">Users</span>
                    </a>
                </li>
                <?php echo $this->uri->segment(2) == 'product' ? '<li style="height: 1500px;"></li>': '' ?>
                <?php echo $this->uri->segment(2) == 'users' ? '<li style="height: 900px;"></li>': '' ?>
            </ul>
</div>