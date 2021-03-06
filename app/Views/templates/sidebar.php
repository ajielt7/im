<ul class="navbar-nav card shadow-sm bg-white sidebar sidebar-light accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-warehouse"></i>
                </div>
                <div class="sidebar-brand-text mx-3">IMSC <sup>2</sup></div>
            </a>

<?php if(in_groups('admin')) :?>

            <div class="sidebar-heading">
                Menu Admin
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-user-cog"></i>
                    <span>User's Setting</span></a>
            </li>

  <?php endif; ?>

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="/user/index">
                    <i class="far fa-id-card"></i>
                    <span>Profile</span></a>
            </li>
            
            <li class="nav-item">
                            <a class="nav-link" href="/user/bon">
                                <i class="fas fa-hand-holding-water"></i>
                                <span>Form Pengebonan</span></a>
             </li>
             
             <li class="nav-item">
                             <a class="nav-link" href="/user/barang">
                                 <i class="fas fa-boxes"></i>
                                 <span>Form List Barang</span></a>
              </li>
              
              <li class="nav-item">
                              <a class="nav-link" href="/user/supplier">
                                  <i class="fas fa-truck-moving"></i>
                                  <span>Form List Supplier</span></a>
               </li>
               
               <li class="nav-item">
                               <a class="nav-link" href="/user/konsumen">
                                   <i class="fas fa-users"></i>
                                   <span>Data Konsumen</span></a>
              </li>
              
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>