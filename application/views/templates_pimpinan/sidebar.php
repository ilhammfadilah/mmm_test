<body id="page-top">


    <div id="wrapper">

 
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      
            <a style="padding: 5px 1rem;" class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url()?>pimpinan">
              
                <div class="sidebar-brand-text mx-3">PT MMM</div>
            </a>


            <hr class="sidebar-divider my-0">


            <li class="nav-item <?php if($this->uri->segment(1)=="pimpinan"){echo "active";}?>">
                <a style="padding: 0.5rem 1rem; padding-bottom: 10px;" class="nav-link" href="<?php echo base_url()?>pimpinan">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span><?php echo $this->lang->line('dashboard'); ?></span></a>
            </li>


            <hr class="sidebar-divider" style="padding-bottom: 5px;">

           <div class="sidebar-heading">
                Master Produk
            </div>
            
                <li class="nav-item">
                <a class="nav-link collapsed" style="padding: 5px 1rem;" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseTwo">
                     <i class="fas fa-fw fa-box"></i>
                    <span><?php echo $this->lang->line('diamond'); ?></span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <a  style="padding: 5px 1rem;" class="collapse-item <?php if($this->uri->segment(1)=="tambahdataclarity"){echo "active";}?><?php if($this->uri->segment(1)=="listclarity"){echo "active";}?><?php if($this->uri->segment(1)=="editdataclarity"){echo "active";}?>" href="<?php echo base_url()?>listclarity" ><?php echo $this->lang->line('clarity'); ?></a>  
                         <a style="padding: 5px 1rem;" class="collapse-item <?php if($this->uri->segment(1)=="tambahdatashape"){echo "active";}?><?php if($this->uri->segment(1)=="listshape"){echo "active";}?> <?php if($this->uri->segment(1)=="editdatashape"){echo "active";}?>" href="<?php echo base_url()?>listshape" ><?php echo $this->lang->line('shape'); ?></a> 
                         <a style="padding: 5px 1rem;" class="collapse-item <?php if($this->uri->segment(1)=="tambahdatacolor"){echo "active";}?><?php if($this->uri->segment(1)=="listcolor"){echo "active";}?> <?php if($this->uri->segment(1)=="editdatacolor"){echo "active";}?>" href="<?php echo base_url()?>listcolor" ><?php echo $this->lang->line('color'); ?></a> 
                          <a style="padding: 5px 1rem;" class="collapse-item <?php if($this->uri->segment(1)=="tambahdatadiagroup"){echo "active";}?><?php if($this->uri->segment(1)=="listdiagroup"){echo "active";}?> <?php if($this->uri->segment(1)=="editdatadiagroup"){echo "active";}?>" href="<?php echo base_url()?>listdiagroup" ><?php echo $this->lang->line('diagroup'); ?></a>   
                           <a style="padding: 5px 1rem;"  class="collapse-item <?php if($this->uri->segment(1)=="tambahdatadiameter"){echo "active";}?><?php if($this->uri->segment(1)=="listdiameter"){echo "active";}?> <?php if($this->uri->segment(1)=="editdatadiameter"){echo "active";}?>" href="<?php echo base_url()?>listdiameter" >Diameter</a>   
                            <a style="padding: 5px 1rem;"  class="collapse-item <?php if($this->uri->segment(1)=="tambahdataparcel"){echo "active";}?><?php if($this->uri->segment(1)=="listparcel"){echo "active";}?> <?php if($this->uri->segment(1)=="editdataparcel"){echo "active";}?>" href="<?php echo base_url()?>listparcel" >Parcel</a> 
                    </div>
                </div>
                </li>
                <li  class="nav-item <?php if($this->uri->segment(1)=="listmaterial"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatamaterial"){echo "active";}?><?php if($this->uri->segment(1)=="editdatamaterial"){echo "active";}?>">
                <a style="padding: 5px 1rem;" class="nav-link" href="<?php echo base_url()?>listmaterial">
                    <i class="fas fa-fw fa-box"></i>
                    <span><?php echo $this->lang->line('material'); ?></span></a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="listbahanbaku"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatabahanbaku"){echo "active";}?><?php if($this->uri->segment(1)=="editdatabahanbaku"){echo "active";}?>">
                <a style="padding: 5px 1rem;" class="nav-link" href="<?php echo base_url()?>listbahanbaku">
                    <i class="fas fa-fw fa-box"></i>
                    <span><?php echo $this->lang->line('rawmaterial'); ?></span></a>
                </li>
                <li class="nav-item">
                <a style="padding:5px 1rem; padding-bottom: 10px;" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseTwo">
                     <i class="fas fa-fw fa-box"></i>
                    <span><?php echo $this->lang->line('others'); ?></span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <a  class="collapse-item <?php if($this->uri->segment(1)=="tambahdatatipeproduk"){echo "active";}?><?php if($this->uri->segment(1)=="listtipeproduk"){echo "active";}?><?php if($this->uri->segment(1)=="editdatatipeproduk"){echo "active";}?>" href="<?php echo base_url()?>listtipeproduk" ><?php echo $this->lang->line('producttype'); ?></a>  
                         <a  class="collapse-item <?php if($this->uri->segment(1)=="tambahdatafinishing"){echo "active";}?><?php if($this->uri->segment(1)=="listfinishing"){echo "active";}?> <?php if($this->uri->segment(1)=="editdatafinishing"){echo "active";}?>" href="<?php echo base_url()?>listfinishing" ><?php echo $this->lang->line('finishing'); ?></a> 
                         <a  class="collapse-item <?php if($this->uri->segment(1)=="tambahdatawarnaproduk"){echo "active";}?><?php if($this->uri->segment(1)=="listwarnaproduk"){echo "active";}?> <?php if($this->uri->segment(1)=="editdatawarnaproduk"){echo "active";}?>" href="<?php echo base_url()?>listwarnaproduk" ><?php echo $this->lang->line('productcolor'); ?></a> 
                         <a  class="collapse-item <?php if($this->uri->segment(1)=="tambahdatakonsepkepala"){echo "active";}?><?php if($this->uri->segment(1)=="listkonsepkepala"){echo "active";}?> <?php if($this->uri->segment(1)=="editdatakonsepkepala"){echo "active";}?>" href="<?php echo base_url()?>listkonsepkepala" ><?php echo $this->lang->line('headconcept'); ?></a> 
                          <a  class="collapse-item <?php if($this->uri->segment(1)=="tambahdataongkos"){echo "active";}?><?php if($this->uri->segment(1)=="listongkos"){echo "active";}?> <?php if($this->uri->segment(1)=="editdataongkos"){echo "active";}?>" href="<?php echo base_url()?>listongkos" ><?php echo $this->lang->line('fee'); ?></a> 
                    </div>
                </div>
                </li>

            <hr class="sidebar-divider" style=" padding-bottom: 5px;">
            <div class="sidebar-heading">
                <?php echo $this->lang->line('currencymaster'); ?>
            </div>
                <li class="nav-item <?php if($this->uri->segment(1)=="listmatauang"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatamatauang"){echo "active";}?><?php if($this->uri->segment(1)=="editdatamatauang"){echo "active";}?>">
                <a style="padding: 5px 1rem;" class="nav-link" href="<?php echo base_url()?>listmatauang">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span><?php echo $this->lang->line('currency'); ?></span></a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="listkurs"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatakurs"){echo "active";}?><?php if($this->uri->segment(1)=="editdatakurs"){echo "active";}?>">
                <a style="padding: 5px 1rem; padding-bottom: 10px;" class="nav-link" href="<?php echo base_url()?>listkurs">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span><?php echo $this->lang->line('kurs'); ?></span></a>
                </li>
            <hr class="sidebar-divider" style="padding-bottom: 5px;">
            <div class="sidebar-heading">
                <?php echo $this->lang->line('masterclient'); ?>
            </div>
                <li class="nav-item <?php if($this->uri->segment(1)=="listclient"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdataclient"){echo "active";}?><?php if($this->uri->segment(1)=="editdataclient"){echo "active";}?><?php if($this->uri->segment(1)=="detaildataclient"){echo "active";}?>">
                <a style="padding:5px 1rem; padding-bottom: 10px;" class="nav-link" href="<?php echo base_url()?>listclient">
                    <i class="fas fa-fw fa-box"></i>
                    <span><?php echo $this->lang->line('client'); ?></span></a>
                </li>

            <hr class="sidebar-divider" style="padding-bottom: 5px;">
            <div class="sidebar-heading">
               <?php echo $this->lang->line('employeemaster'); ?>
            </div>
                <li class="nav-item <?php if($this->uri->segment(1)=="listkaryawan"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatakaryawan"){echo "active";}?><?php if($this->uri->segment(1)=="editdatakaryawan"){echo "active";}?><?php if($this->uri->segment(1)=="detaildatakaryawan"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>listkaryawan">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span><?php echo $this->lang->line('employee'); ?></span></a>
                </li>
                  <li class="nav-item <?php if($this->uri->segment(1)=="listbagian"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatabagian"){echo "active";}?><?php if($this->uri->segment(1)=="editdatabagian"){echo "active";}?><?php if($this->uri->segment(1)=="detaildatabagian"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>listbagian">
                    <i class="fas fa-fw fa-book"></i>
                    <span><?php echo $this->lang->line('part'); ?></span></a>
                </li>

            <hr class="sidebar-divider" style="padding-bottom: 5px;">
            <div class="sidebar-heading">
                COA
            </div>
                <li class="nav-item <?php if($this->uri->segment(1)=="listbsis"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatabsis"){echo "active";}?><?php if($this->uri->segment(1)=="editdatabsis"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>listbsis">
                    <i class="fas fa-fw fa-file"></i>
                    <span>BSIS</span></a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="listcoa"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatacoa"){echo "active";}?><?php if($this->uri->segment(1)=="editdatacoa"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>listcoa">
                    <i class="fas fa-fw fa-file"></i>
                    <span>COA</span></a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="listcostcenter"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatacostcenter"){echo "active";}?><?php if($this->uri->segment(1)=="editdatacostcenter"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>listcostcenter">
                    <i class="fas fa-fw fa-file"></i>
                    <span><?php echo $this->lang->line('costcenter'); ?></span></a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="listgroupakun"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatagroupakun"){echo "active";}?><?php if($this->uri->segment(1)=="editdatagroupakun"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>listgroupakun">
                    <i class="fas fa-fw fa-file"></i>
                    <span><?php echo $this->lang->line('groupaccount'); ?></span></a>
                </li>

             <hr class="sidebar-divider" style="padding-bottom: 5px;">
            <div class="sidebar-heading">
                <?php echo $this->lang->line('cashbank'); ?>
            </div>
                <li class="nav-item <?php if($this->uri->segment(1)=="listcashbank"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdatacashbank"){echo "active";}?><?php if($this->uri->segment(1)=="editdatacashbank"){echo "active";}?><?php if($this->uri->segment(1)=="editdetailcashbank"){echo "active";}?><?php if($this->uri->segment(1)=="detaildatacashbank"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>listcashbank">
                    <i class="fas fa-fw fa-file"></i>
                    <span><?php echo $this->lang->line('cashbank'); ?></span></a>
                </li>

            <hr class="sidebar-divider" style="padding-bottom: 5px;">
            <div class="sidebar-heading">
                <?php echo $this->lang->line('2ddesign'); ?>
            </div>
                <li class="nav-item <?php if($this->uri->segment(1)=="list2ddesain"){echo "active";}?><?php if($this->uri->segment(1)=="tambahdata2ddesain"){echo "active";}?><?php if($this->uri->segment(1)=="editdata2ddesain"){echo "active";}?><?php if($this->uri->segment(1)=="editdetail2ddesain"){echo "active";}?><?php if($this->uri->segment(1)=="detaildata2ddesain"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>list2ddesain">
                    <i class="fas fa-fw fa-file"></i>
                    <span><?php echo $this->lang->line('2ddesign'); ?></span></a>
                </li>
                
<!-- 
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Transaksi
            </div>
            <li class="nav-item <?php if($this->uri->segment(1)=="listpenjualan-pimpinan"){echo "active";}?> <?php if($this->uri->segment(1)=="detaildatapenjualan-pimpinan"){echo "active";}?>">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Penjualan</span></a>
                </li>
            <li class="nav-item <?php if($this->uri->segment(1)=="listpenjualan-pimpinan"){echo "active";}?> <?php if($this->uri->segment(1)=="detaildatapenjualan-pimpinan"){echo "active";}?>">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Pembelian</span></a>
                </li>
           </li> -->
           
            <!-- <li class="nav-item <?php echo active_menu('laporan')?>">
                <a class="nav-link" href="<?php echo base_url()?>laporan">
                    <i class="fas fa-fw fa-file-pdf"></i>
                    <span>Laporan</span></a>
                </li>
           </li> -->

          <hr class="sidebar-divider" style="padding-bottom: 5px;">
            <div class="sidebar-heading">
                <?php echo $this->lang->line('profil'); ?>
            </div>
            <li class="nav-item <?php if($this->uri->segment(1)=="profile"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>profile">
                    <i class="fas fa-fw fa-user"></i>
                    <span><?php echo $this->lang->line('profil'); ?></span></a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(1)=="editprofile"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link " href="<?php echo base_url()?>editprofile">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span><?php echo $this->lang->line('editprofil'); ?></span></a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(1)=="ubahpassword"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>ubahpassword">
                    <i class="fas fa-fw fa-key"></i>
                    <span><?php echo $this->lang->line('ubahpassword'); ?></span></a>
            </li>

            <hr class="sidebar-divider" style="padding-bottom: 5px;">
            <div class="sidebar-heading">
                <?php echo $this->lang->line('pengaturan'); ?>
            </div>
            <li class="nav-item <?php if($this->uri->segment(1)=="pengaturan"){echo "active";}?>">
                <a style="padding:5px 1rem;" class="nav-link" href="<?php echo base_url()?>pengaturan">
                    <i class="fas fa-hammer"></i>
                    <span><?php echo $this->lang->line('pengaturan'); ?></span></a>
            </li>
         
            <hr class="sidebar-divider" style="padding-bottom: 5px;">
            <div class="sidebar-heading">
                <?php echo $this->lang->line('logout'); ?>
            </div>
            <li class="nav-item">
                <a style="padding:5px 1rem;" class="nav-link" href="<?=base_url('auth/logout')?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span><?php echo $this->lang->line('logout'); ?></span></a>
            </li>
          



      
            <hr class="sidebar-divider d-none d-md-block" style="padding-bottom: 5px;">

       
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>