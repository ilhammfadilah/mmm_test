<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listbarang"> Kembali</h6></a><br>
    
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data Barang</h4>
            <p class="card-category">Masukkan Data Barang</p>
          </div>
          <div class="card-body">
            <h4>Data Barang</h4>
            <hr>
            <form action="<?php echo base_url() . 'tambahdatabarang'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Kode Barang<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="kodebarang" value="BRG-<?= $kode_barang ?>" class="form-control" readonly>
                    <?= form_error('kodebarang', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Barang<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="namabarang" class="form-control" value="<?= set_value('namabarang') ?>">
                    <?= form_error('namabarang', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jenis Barang</label>
                      <select id="jenis_barang" name="jenisbarang" class="form-control" required >
                        <option value="">======= Jenis Barang =======</option>
                        <option value="Diamond">Diamond</option>
                        <option value="Gold">Gold</option>
                        <option value="Bahan Baku">Bahan Baku</option>
                      </select>
                  </div>
                </div> 
              </div>
              <hr>
              <h4>Detail Barang</h4>
              <!-- Inputan Detail Jenis Barang Diamond -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group" id="kodediamond">
                    <label>Kode Jenis</label>
                    <input class="form-control" type="text" name="kodediamond" readonly value="D<?= $kode_jenis ?>">
                </div>
                </div>
              </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group" id="samplesatu">
                    <label>Sample Satu</label>
                    <input class="form-control" name="samplesatu" type="text" >
                    <?= form_error('samplesatu', '<small class="text-danger">', '</small>'); ?>
                  
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group" id="sampledua">
                    <label>Sample Dua</label>
                    <input class="form-control" name="sampledua" type="text" >
                     <?= form_error('sampledua', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <!-- Inputan Detail Jenis Barang Gold -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group" id="kodegold">
                    <label>Kode Jenis</label>
                    <input class="form-control"  type="text" readonly value="G<?= $kode_jenis ?>" name="kodegold">
                </div>
                </div>
              </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group" id="sampletiga">
                    <label>Sample Tiga</label>
                    <input class="form-control" name="sampletiga" type="text"  >
                     <?= form_error('sampletiga', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group" id="sampleempat">
                    <label>Sample Empat</label>
                    <input class="form-control" name="sampleempat" type="text" >
                     <?= form_error('sampleempat', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>

               <!-- Inputan Detail Jenis Barang Bahan Baku -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group" id="kodebahanbaku">
                    <label>Kode Jenis</label>
                    <input class="form-control" name="kodebahanbaku" type="text" readonly value="BB<?= $kode_jenis ?>">

                </div>
                </div>
              </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group" id="samplelima">
                    <label>Sample Lima</label>
                    <input class="form-control" name="samplelima" type="text" >
                     <?= form_error('samplelima', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group" id="sampleenam">
                    <label>Sample Enam</label>
                    <input class="form-control" name="sampleenam" type="text" >
                     <?= form_error('sampleenam', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
               
              <button type="submit" class="btn btn-info pull-right">Simpan</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
