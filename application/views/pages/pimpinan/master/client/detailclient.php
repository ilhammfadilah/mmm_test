<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listclient"> <?php echo $this->lang->line('back'); ?></h6></a><br>
    
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data <?php echo $this->lang->line('client'); ?></h4>
            <p class="card-category">Detail Data <?php echo $this->lang->line('client'); ?></p>
          </div>
          <div class="card-body">
            <h4>Data <?php echo $this->lang->line('client'); ?></h4>
            <hr>
            <?php 
              foreach ($client as $data) {
                
             ?>
            <form action="<?php echo base_url() . 'pimpinan/updateclient'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('subaccount'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="hidden" name="idclient" class="form-control" value="<?= $data->id_client ?>">
                    <input style="padding-bottom: 10px;" type="text" name="subaccount" class="form-control" readonly value="<?= $data->subaccount ?>">
                  
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('name'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="nama" class="form-control" readonly value="<?= $data->nama ?>">
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('address'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="alamat" class="form-control" readonly value="<?= $data->alamat ?>">
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('city'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="kota" class="form-control" readonly value="<?= $data->kota ?>">
                   
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('province'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="provinsi" class="form-control" readonly value="<?= $data->provinsi ?>">
               
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('postalcode'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="kodepos" class="form-control" readonly value="<?= $data->kodepos ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('phone'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="phone" class="form-control" readonly value="<?= $data->phone ?>">
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('contact'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="kontak" class="form-control" readonly value="<?= $data->kontak ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="email" class="form-control" readonly value="<?= $data->email ?>">
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">NPWP<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="npwp" class="form-control" readonly value="<?= $data->npwp ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('createby'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="createby" readonly class="form-control" value="<?= $user->nama; ?>">
                    <?= form_error('createby', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
             
              
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('createdate'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="createdate" class="form-control" readonly value="<?php echo format_indo(date('Y-m-d'));?>">
                    <?= form_error('createdate', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <?php } ?>
               
           

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
