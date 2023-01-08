<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listparcel"> <?php echo $this->lang->line('back'); ?></h6></a><br>
    
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data Parcel</h4>
            <p class="card-category"><?php echo $this->lang->line('change'); ?> Data Parcel</p>
          </div>
          <div class="card-body">
            <h4>Data Parcel</h4>
            <hr>
             <?php
             foreach($parcel as $data)
             
            ?>
            <form action="<?php echo base_url() . 'pimpinan/updateparcel'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Parcel<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" id="parcel" required type="text" name="parcel" class="form-control" value="<?=$data->parcel ?>">
                    <input style="padding-bottom: 10px;" id="parcel" required type="hidden" name="idparcel" class="form-control" value="<?=$data->id_parcel ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                     <div class="form-group">
                        <label class="bmd-label-floating"><?php echo $this->lang->line('diagroup'); ?><small class="text-danger">*</small></label>
                        <div class="input-group">
                          <input type="text" class="form-control" value="<?=$data->diagroup?>"  id="diagroup" name="diagroup" readonly required autofocus>
                          <input type="hidden" class="form-control" id="iddiameter" value="<?=$data->id_diameter?>" name="iddiameter" readonly required autofocus>
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
                    <input style="padding-bottom: 10px;" id="carat" value="<?=$data->carat?>" type="text" name="carat" readonly class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('diameterfrom'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" value="<?=$data->diameter_from?>" id="diameterfrom" readonly name="diameterfrom" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('diameterto'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" id="diameterto" value="<?=$data->diameter_to?>" readonly name="diameterto" class="form-control">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                 <div class="col-md-4">
                   <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('clarity'); ?><small class="text-danger">*</small></label>
                    <select  name="idclarity" class="form-control" required >
                        <option value="<?=$data->id_clarity?>"><?php echo $this->lang->line('clarity'); ?> <?php echo $this->lang->line('early'); ?> : <?=$data->clarity?></option>
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
                      <?php foreach ($parcel as $datas) {
                        
                       ?>
                        <option value="<?=$data->id_clarity?>"><?php echo $this->lang->line('shape'); ?> <?php echo $this->lang->line('early'); ?> : <?=$datas->shape?></option>
                      <?php } ?>
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
                        <?php foreach ($parcel as $datass) {
                        
                       ?>
                        <option value="<?=$datass->id_color?>"><?php echo $this->lang->line('color'); ?> <?php echo $this->lang->line('early'); ?> : <?=$datass->color?></option>
                      <?php } ?>
                        <?php
                        foreach($color as $data){
                        ?>
                        <option value="<?=$data->id_color?>"><?=$data->color?> </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <?php foreach ($parcel as $data) 
              ?>
              <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('sellingprice'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="hargajual" class="form-control" value="<?= $data->hargajual?>">
                   
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('purchaseprice'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;"  type="text" name="hargabeli" class="form-control" value="<?= $data->hargabeli?>">
                 
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('createby'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="createby" readonly class="form-control" value="<?= $data->create_by ?>">
                   
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('createdate'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="createdate" readonly class="form-control" value="<?php echo format_indo(date('Y-m-d', strtotime($data->create_date)));?>">
                   
                  </div>
                </div>
                 
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('updateby'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="updateby" readonly class="form-control" value="<?= $user->nama; ?>">
                    <?= form_error('updateby', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('updatedate'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="updatedate" class="form-control" readonly value="<?php echo format_indo(date('Y-m-d'));?>">
                    <?= form_error('updatedate', '<small class="text-danger">', '</small>'); ?>
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
