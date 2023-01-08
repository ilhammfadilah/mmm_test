<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-info" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listbarang"> Kembali</h6></a><br>
    
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Form Data Barang</h4>
            <p class="card-category">Detail Data Barang</p>
          </div>
          <div class="card-body">
            <h4>Data Barang</h4>
            <hr>
            <?php
             foreach($barang as $data){
             
            ?>
            <form action="<?php echo base_url() . 'pimpinan/updatebarang'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input style="padding-bottom: 10px;" type="hidden" name="iduser" class="form-control" value="<?= $data->id_barang ?>" required>
                    <label class="bmd-label-floating">Kode Barang<small class="text-danger">*</small></label>
                    <input readonly style="padding-bottom: 10px;" type="text" name="kodebarang" class="form-control" value="<?= $data->kode_barang ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Barang<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="namabarang" readonly class="form-control" value="<?= $data->nama_barang ?>" >
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jenis Barang</label>
                     <input style="padding-bottom: 10px;" type="text" name="jenisbarang" readonly class="form-control" value="<?= $data->jenis_barang ?>" >
                  </div>
                </div> 
              </div>
              <hr>
              <h4>Detail Barang</h4>
             
                <!-- Inputan Detail Jenis Barang Diamond -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Kode Jenis</label>
                    <input class="form-control" type="text" name="kodediamond" readonly value="<?= $data->kode_jenis ?>">
                </div>
                </div>
              </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Sample Satu</label>
                    <input class="form-control" name="samplesatu" type="text" readonly value="<?=$data->samplesatu?>">
                   
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Sample Dua</label>
                    <input class="form-control" name="sampledua" type="text" readonly value="<?=$data->sampledua?>">
                    <?= form_error('sampledua', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
             
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group" >
                    <label>Sample Tiga</label>
                    <input class="form-control" name="sampletiga" readonly value="<?=$data->sampletiga?>" type="text"  >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group" >
                    <label>Sample Empat</label>
                    <input class="form-control" name="sampleempat" readonly value="<?=$data->sampleempat?>" type="text" >
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Sample Lima</label>
                    <input class="form-control" name="samplelima" readonly type="text" value="<?=$data->samplelima?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group" >
                    <label>Sample Enam</label>
                    <input class="form-control" name="sampleenam" readonly type="text" value="<?=$data->sampleenam?>">
                  </div>
                </div>
              </div>
             
              
             

            </form>
             <?php 
              } 
             ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
