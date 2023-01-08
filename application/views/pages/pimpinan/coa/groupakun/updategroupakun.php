<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listgroupakun"> Kembali</h6></a><br>
    
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data Group Akun</h4>
            <p class="card-category">Edit Data Group Akun</p>
          </div>
          <div class="card-body">
            <h4>Data Group Akun</h4>
            <hr>
             <?php
             foreach($groupakun as $data){
             
            ?>
            <form action="<?php echo base_url() . 'pimpinan/updategroupakun'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Group Akun<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="hidden" name="idgroupakun" class="form-control" value="<?= $data->id_groupakun ?>" required>
                    <input style="padding-bottom: 10px;" type="text" name="groupakun" class="form-control" value="<?= $data->groupakun ?>" required>
                   
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Group Akun<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="hidden" name="idgroupakun" class="form-control" value="<?= $data->id_groupakun ?>" required>
                    <input style="padding-bottom: 10px;" type="text" name="nama" class="form-control" value="<?= $data->nama?>" required>
                   
                  </div>
                </div>
              </div>
              <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Create By<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="createby" readonly class="form-control" value="<?= $data->create_by ?>">
                   
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Create Date<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="createdate" readonly class="form-control" value="<?php echo format_indo(date('Y-m-d', strtotime($data->create_date)));?>">
                   
                  </div>
                </div>
              </div>
              <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Update By<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="updateby" readonly class="form-control" value="<?= $user->nama; ?>">
                    <?= form_error('updateby', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Update Date<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="updatedate" class="form-control" readonly value="<?php echo format_indo(date('Y-m-d'));?>">
                    <?= form_error('updatedate', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              
               <?php } ?>
              <button type="submit" class="btn btn-info pull-right">Simpan</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
