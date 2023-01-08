<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listkurs"> <?php echo $this->lang->line('back'); ?></h6></a><br>
    
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data <?php echo $this->lang->line('kurs'); ?></h4>
            <p class="card-category"><?php echo $this->lang->line('change'); ?> Data <?php echo $this->lang->line('kurs'); ?></p>
          </div>
          <div class="card-body">
            <h4>Data <?php echo $this->lang->line('kurs'); ?></h4>
            <hr>
             <?php
             foreach($kurs as $data){
             
            ?>
            <form action="<?php echo base_url() . 'pimpinan/updatekurs'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('kurs'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="hidden" name="idkurs" class="form-control" value="<?= $data->id_kurs ?>" required>
                    <input style="padding-bottom: 10px;" type="number" name="rate" class="form-control" value="<?= $data->rate ?>" required>
                   
                  </div>
                </div>
               <div class="col-md-6">
                   <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('codecurrency'); ?><small class="text-danger">*</small></label>
                    <select  name="idmatauang" class="form-control" required >
                        <option value="<?=$data->id_matauang?>"><?php echo $this->lang->line('currency'); ?> <?php echo $this->lang->line('early'); ?> : <?=$data->kodematauang?>(<?=$data->namamatauang?>)</option>
                        <?php
                        foreach($matauang as $data){
                        ?>
                        <option value="<?=$data->id_matauang?>"><?=$data->kodematauang?>(<?=$data->namamatauang?>) </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

              </div>
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
              
               <?php } ?>
              <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
