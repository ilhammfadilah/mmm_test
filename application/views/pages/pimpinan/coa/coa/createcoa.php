<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listcoa"> <?php echo $this->lang->line('back'); ?></h6></a><br>
    
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data COA</h4>
            <p class="card-category"><?php echo $this->lang->line('add'); ?> Data COA</p>
          </div>
          <div class="card-body">
            <h4>Data COA</h4>
            <hr>
            <?php foreach ($coa as $data) {
              
              ?>
            <form action="<?php echo base_url() . 'pimpinan/createcoa'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
               <input style="padding-bottom: 10px;" type="hidden" name="idcoa" class="form-control" value="<?=$data->id_coa?>">  
               <div class="row">
                  <input style="padding-bottom: 10px;" type="hidden" name="idcoa" class="form-control" readonly value="<?=$data->id_coa?>">
                    <input style="padding-bottom: 10px;" type="hidden" name="code" class="form-control" readonly value="<?=$data->kode?>">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('account'); ?></label>
                    <input style="padding-bottom: 10px;" type="text" name="akunbaru" value="<?=$data->akun?>" class="form-control">
                    <?= form_error('akunbaru', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('accountname'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="namaakun" class="form-control" value="<?= set_value('namaakun') ?>">
                  </div>
                </div>
               </div>
             <?php } ?>
              <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Header/Detail<small class="text-danger">*</small></label>
                    <select name="headerdetail" id="headerdetail" required class="form-control" >
                       <option value="">======= <?php echo $this->lang->line('pleasechoice'); ?> =======</option>
                      <option value="H">H </option>
                      <option value="D">D </option>
                    </select>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div id="groupakun" class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('accountgroup'); ?></label>
                    <select name="idgroupakun" class="form-control" >
                       <option value="">======= <?php echo $this->lang->line('pleasechoice'); ?> =======</option>
                       <?php foreach ($groupakun as $data) {
                        ?>
                      <option value="<?=$data->id_groupakun?>"><?=$data->groupakun?> </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
               
              </div>
              <?php foreach ($coa as $data) {
                ?>
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
               
              <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
