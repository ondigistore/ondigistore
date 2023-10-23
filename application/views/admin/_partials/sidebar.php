<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <i class="fab fa-black-tie"></i>
      
    </div>
    <div class="sidebar-brand-text mx-3"></div>
  </a>

 

  <!-- Divider -->
  <hr class="sidebar-divider">
  
  <!-- Heading -->
  <div class="sidebar-heading">
  <a class="navbar-brand text-white" href="<?php echo site_url('admin')?>">GameStock</a>
  </div>

  <li class="nav-item">
    <a class="nav-link active" href="<?php echo site_url('forum')?>">Discussion</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="<?php echo site_url('admin/products')?>">Products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/users')?>">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/game')?>">Game</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/transaksi')?>">Laporan</a>
  </li>
  
  <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-white-800"><?php $this->session->userdata('full_name');
                                                                          echo $this->session->userdata('full_name');?></span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo base_url('auth/reset_password')?>">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Reset Password
             </a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
        </li>
</ul>
<!-- End of Sidebar -->