<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data <?php echo $this->lang->line('product'); ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active"><a class="text-info"  href="<?php echo base_url()?>listproduk"><?php echo $this->lang->line('product'); ?></a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

     
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
             <?= $this->session->flashdata('message');?>
            <div class="card" >
             
              <!-- /.card-header -->
               <div class="card-body">
                 <div class="card-header">
                
                            <h6 class="m-0 font-weight-bold text-primary"> <a class="text-info" style="text-decoration: none" class="collapse-item" href="<?php echo base_url()?>tambahdataproduk"> <i class="fas fa-fw fa-plus text-info"></i> <?php echo $this->lang->line('add'); ?> Data <?php echo $this->lang->line('product'); ?></h6></a>
                  </div>
                            <div class="table-responsive">
                                <table style="border-collapse: 1;color: #858796;border-bottom: 2px solid #e3e6f0;"  id="dataTable" width="100%" height="1px" cellspacing="0">
                                    <thead>
                                        <tr height="20px">
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('productname'); ?></th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('producttype'); ?></th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Brand</th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Harga Beli</th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Harga Jual</th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('pengaturan'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($read as $data){
                                        ?>
                                        <tr>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"  width="5%"><?php echo $no ?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="15%"><?php echo $data->namaproduk?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="10%"><?php echo $data->tipeproduk?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="10%"><?php echo $data->brand?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="10%"><?php echo number_format($data->hargabeli,2,',','.') ?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="10%"><?php echo number_format($data->hargajual,2,',','.') ?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%">
                                          <a href="<?= base_url('editdataproduk/' . $data->id_produk); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"><i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?> </a>
                                          <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->id_produk; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'pimpinan/deleteproduk')" class="btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
</div>