<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url()?>admin">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">Distributor Ayam Boiler</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if($this->uri->segment(1)=="admin"){echo "active";}?>">
                <a class="nav-link" href="<?php echo base_url()?>admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
           
               <li class="nav-item <?php if($this->uri->segment(1)=="listayam"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdataayam"){echo "active";}?> <?php if($this->uri->segment(1)=="editdataayam"){echo "active";}?>" >
                <a class="nav-link" href="<?php echo base_url()?>listayam">
                    <i class="fas fa-drumstick-bite"></i>
                    <span>Ayam</span></a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="listpimpinan"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatapimpinan"){echo "active";}?> <?php if($this->uri->segment(1)=="editdatapimpinan"){echo "active";}?>">
                <a class="nav-link " href="<?php echo base_url()?>listpimpinan">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Pimpinan</span></a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="listsupplier"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatasupplier"){echo "active";}?> <?php if($this->uri->segment(1)=="editdatasupplier"){echo "active";}?>" >
                <a class="nav-link" href="<?php echo base_url()?>listsupplier">
                    <i class="fas fa-fw fa-truck"></i>
                    <span>Supplier</span></a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="listagen"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdataagen"){echo "active";}?> <?php if($this->uri->segment(1)=="editdataagen"){echo "active";}?>">
                <a class="nav-link " href="<?php echo base_url()?>listagen">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Agen</span></a>
                </li>
                

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Transaksi
            </div>
            <li class="nav-item <?php if($this->uri->segment(1)=="listayamhilang"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdataayamhilang"){echo "active";}?> <?php if($this->uri->segment(1)=="detaildataayamhilang"){echo "active";}?>">
                <a class="nav-link" href="<?php echo base_url()?>listayamhilang">
                    <i class="fas fa-minus-circle"></i>
                    <span>Ayam Hilang</span></a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(1)=="listayammati"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdataayammati"){echo "active";}?> <?php if($this->uri->segment(1)=="detaildataayammati"){echo "active";}?>">
                <a class="nav-link" href="<?php echo base_url()?>listayammati">
                    <i class="fas fa-times-circle"></i>
                    <span>Ayam Mati</span></a>
           </li>
           <li class="nav-item <?php if($this->uri->segment(1)=="listpenjualan-admin"){echo "active";}?> <?php if($this->uri->segment(1)=="detaildatapenjualan-admin"){echo "active";}?>">
                <a class="nav-link" href="<?php echo base_url()?>listpenjualan-admin">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Penjualan</span></a>
           </li>
           <hr class="sidebar-divider">

           <div class="sidebar-heading">
                Laporan
            </div>
             <!--  <li class="nav-item <?php if($this->uri->segment(1)=="laporanayamhilang"){echo "active";}?>">
                <a class="nav-link" target="_Blank" href="<?php echo base_url()?>laporanayamhilang">
                    <i class="fas fa-file"></i>
                    <span>Ayam Hilang</span></a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(1)=="laporanayammati"){echo "active";}?>">
                <a class="nav-link" target="_Blank" href="<?php echo base_url()?>laporanayammati">
                    <i class="fas fa-file-invoice"></i>
                    <span>Ayam Mati</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
                    aria-expanded="true" aria-controls="collapseTree">
                    <i class="fas fa-file"></i>
                    <span>Ayam Hilang</span>
                </a>
                <div id="collapseTree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php if($this->uri->segment(1)=="laporanayamhilang"){echo "active";}?>" target="_Blank" href="<?php echo base_url()?>laporanayamhilang">Data Keseluruhan</a>
                        <a target="_Blank" class="collapse-item <?php if($this->uri->segment(1)=="laporanayamhilangtigabulan"){echo "active";}?>" href="<?php echo base_url()?>laporanayamhilangtigabulan">Data 3 Bulan Terakhir</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-file"></i>
                    <span>Ayam Mati</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php if($this->uri->segment(1)=="laporanayammati"){echo "active";}?>" target="_Blank" href="<?php echo base_url()?>laporanayammati">Data Keseluruhan</a>
                        <a target="_Blank" class="collapse-item <?php if($this->uri->segment(1)=="laporanayammatitigabulan"){echo "active";}?>" href="<?php echo base_url()?>laporanayammatitigabulan">Data 3 Bulan Terakhir</a>
                    </div>
                </div>
            </li>

           <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Profile
            </div>
            <li class="nav-item <?php if($this->uri->segment(1)=="profile-admin"){echo "active";}?> <?php if($this->uri->segment(2)=="edit"){echo "active";}?> <?php if($this->uri->segment(1)=="ubahpassword-admin"){echo "active";}?>">
                <a class="nav-link" href="<?php echo base_url()?>profile-admin">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('auth/logout')?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
          
            <!-- Heading -->
            
            <!-- Nav Item - Charts -->
            


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>