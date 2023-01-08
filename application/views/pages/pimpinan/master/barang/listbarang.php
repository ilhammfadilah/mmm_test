<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active"><a class="text-info"  href="<?php echo base_url()?>listbarang">Barang</a></li>
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
                
                            <h6 class="m-0 font-weight-bold text-primary"> <a class="text-info" style="text-decoration: none" class="collapse-item" href="<?php echo base_url()?>tambahdatabarang"> <i class="fas fa-fw fa-plus text-info"></i> Tambah Data Barang</h6></a>
                  </div>
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode barang</th>
                                            <th>Nama barang</th>
                                            <th>Jenis Barang</th>

                                            <th>Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($read as $data){
                                        ?>
                                        <tr>
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->kode_barang?></td>
                                          <td><?php echo $data->nama_barang?></td>
                                          <td><?php echo $data->jenis_barang ?></td>
                                          <td width="30%">
                                          <a href="<?= base_url('editdatabarang/' . $data->kode_barang); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"><i class="fas fa-fw fa-pencil-alt"></i> Ubah </a>
                                          <a href="<?= base_url('detaildatabarang/' . $data->kode_barang); ?>" class="btn btn-sm btn-primary" role="button" title="Detail"> <i class="fas fa-fw fa-search"></i> Detail </a>
                                          <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->kode_barang; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'pimpinan/deletebarang')" class="btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> Hapus </a></td>
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