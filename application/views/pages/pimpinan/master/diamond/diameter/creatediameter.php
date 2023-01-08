<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listdiameter"> <?php echo $this->lang->line('back'); ?></h6></a><br>
    
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data Diameter</h4>
            <p class="card-category"><?php echo $this->lang->line('entry'); ?> Data Diameter</p>
          </div>
          <div class="card-body">
            <h4>Data Diameter</h4>
            <hr>
            <form action="<?php echo base_url() . 'tambahdatadiameter'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('diagroup'); ?><small class="text-danger">*</small></label>
                    <select  name="diagroup" class="form-control" required >
                        <option value="">======= <?php echo $this->lang->line('pleasechoice'); ?> <?php echo $this->lang->line('diagroup'); ?> =======</option>
                        <?php
                        foreach($diagroup as $data){
                        ?>
                        <option value="<?=$data->id_diagroup?>"><?=$data->diagroup?> </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('carat'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="carat" class="form-control" value="<?= set_value('carat') ?>">
                    <?= form_error('carat', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('diameterfrom'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="diameterfrom" class="form-control" value="<?= set_value('diameterfrom') ?>">
                    <?= form_error('diameterfrom', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('diameterto'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="diameterto" class="form-control" value="<?= set_value('diameterto') ?>">
                    <?= form_error('diameterto', '<small class="text-danger">', '</small>'); ?>
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
              
               
              <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
