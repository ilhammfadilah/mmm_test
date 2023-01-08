<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listparcel"> <?php echo $this->lang->line('back'); ?></h6></a><br>
    
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data Parcel</h4>
            <p class="card-category"><?php echo $this->lang->line('entry'); ?> Data Parcel</p>
          </div>
          <div class="card-body">
            <h4>Data Parcel</h4>
            <hr>
            <form action="<?php echo base_url() . 'tambahdataparcel'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Parcel<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" id="parcel" type="text" name="parcel" class="form-control" value="<?= set_value('parcel') ?>">
                    <?= form_error('parcel', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                     <div class="form-group">
                        <label class="bmd-label-floating"><?php echo $this->lang->line('diagroup'); ?><small class="text-danger">*</small></label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="diagroup" name="diagroup" readonly required autofocus>
                          <input type="hidden" class="form-control" id="iddiameter" name="iddiameter" readonly required autofocus>
                          <input style="padding-bottom: 10px;" type="hidden" name="iduser" class="form-control" value="<?= $user->id_user ?>">
                          <span class="input-group-btn" >
                            <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modaldiameter"><?php echo $this->lang->line('search'); ?> Data</button>
                          </span>

                        </div>
                   </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('carat'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" id="carat" type="text" name="carat" readonly class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('diameterfrom'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" id="diameterfrom" readonly name="diameterfrom" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('diameterto'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" id="diameterto" readonly name="diameterto" class="form-control">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                 <div class="col-md-4">
                   <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('clarity'); ?><small class="text-danger">*</small></label>
                    <select  name="idclarity" class="form-control" required >
                        <option value="">======= <?php echo $this->lang->line('pleasechoice'); ?> <?php echo $this->lang->line('clarity'); ?> =======</option>
                        <?php
                        foreach($clarity as $data){
                        ?>
                        <option value="<?=$data->id_clarity?>"><?=$data->clarity?> </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('shape'); ?><small class="text-danger">*</small></label>
                    <select  name="idshape" class="form-control" required >
                        <option value="">======= <?php echo $this->lang->line('pleasechoice'); ?> <?php echo $this->lang->line('shape'); ?> =======</option>
                        <?php
                        foreach($shape as $data){
                        ?>
                        <option value="<?=$data->id_shape?>"><?=$data->shape?> </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('color'); ?><small class="text-danger">*</small></label>
                    <select  name="idcolor" class="form-control" required >
                        <option value="">======= <?php echo $this->lang->line('pleasechoice'); ?> <?php echo $this->lang->line('color'); ?> =======</option>
                        <?php
                        foreach($color as $data){
                        ?>
                        <option value="<?=$data->id_color?>"><?=$data->color?> </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('sellingprice'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="hargabeli" class="form-control" value="<?= set_value('hargabeli') ?>">
                    <?= form_error('hargabeli', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('purchaseprice'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;"  type="text" name="hargajual" class="form-control" value="<?= set_value('hargajual') ?>">
                    <?= form_error('hargajual', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <hr>
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
