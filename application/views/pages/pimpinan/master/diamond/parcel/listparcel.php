  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Parcel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active"><a class="text-info"  href="<?php echo base_url()?>listparcel">Parcel</a></li>
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
            <div class="card">
             
              <!-- /.card-header -->
               <div class="card-body">
                 <div class="card-header">
                
                            <h6 class="m-0 font-weight-bold text-primary"> <a class="text-info" style="text-decoration: none" class="collapse-item" href="<?php echo base_url()?>tambahdataparcel"> <i class="fas fa-fw fa-plus text-info"></i> <?php echo $this->lang->line('add'); ?> Data Parcel</h6></a>
                  </div>
                            <div class="table-responsive">
                                <table style="border-collapse: 1;color: #858796;border-bottom: 2px solid #e3e6f0;" id="dataTable" width="100%" height="10px;" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('diagroup'); ?></th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Parcel</th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('diameterfrom'); ?></th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('diameterto'); ?></th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('carat'); ?></th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('sellingprice'); ?></th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('purchaseprice'); ?></th>
                                            <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('pengaturan'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($read as $data){
                                        ?>
                                        <tr>
                                          <td style=" border-top: 1px solid #e3e6f0;"  style=" border-top: 1px solid #e3e6f0;"><?php echo $no ?></td>
                                          <td style=" border-top: 1px solid #e3e6f0;"><?php echo $data->diagroup?></td>
                                          <td style=" border-top: 1px solid #e3e6f0;"><?php echo $data->parcel?></td>
                                          <td style=" border-top: 1px solid #e3e6f0;"><?php echo $data->diameter_from?></td>
                                          <td style=" border-top: 1px solid #e3e6f0;"><?php echo $data->diameter_to?></td>
                                          <td style=" border-top: 1px solid #e3e6f0;"><?php echo $data->carat?></td>
                                          <td style=" border-top: 1px solid #e3e6f0;"><?php echo $data->hargajual?></td>
                                          <td style=" border-top: 1px solid #e3e6f0;"><?php echo $data->hargabeli?></td>
                                          <td style=" border-top: 1px solid #e3e6f0;">
                                          <a href="<?= base_url('editdataparcel/' . $data->id_parcel); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"><i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?> </a> 
                                          <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->id_diameter; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'pimpinan/deleteparcel')" class="btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>
                                          </td>
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