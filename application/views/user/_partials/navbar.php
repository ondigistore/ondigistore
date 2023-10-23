<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    
  
    <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">
    
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
      
      <a class="navbar-brand text-white" href="<?php echo base_url('user')?>">GameStock</a>

      <!-- Topbar Search -->
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
        <a class="navbar-brand text-white" href="<?php echo base_url('forum')?>">Discussion</a>
        </div>
        
      </form>
      
      

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

      
       <!-- Nav Item - User Information -->
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
              <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
</li>

      </ul>
      
    </nav>
  </div>
</div>
    <!-- End of Topbar -->

    