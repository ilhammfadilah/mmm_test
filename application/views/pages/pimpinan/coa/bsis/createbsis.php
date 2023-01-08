<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listbsis"> <?php echo $this->lang->line('back'); ?></h6></a><br>
    
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data BSIS</h4>
            <p class="card-category"><?php echo $this->lang->line('entry'); ?> Data BSIS</p>
          </div>
          <div class="card-body">
            <h4>Data BSIS</h4>
            <hr>
            <form action="<?php echo base_url() . 'tambahdatabsis'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('accountname'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="namaakun" class="form-control" value="<?= set_value('namaakun') ?>">
                    <?= form_error('namaakun', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Normal<small class="text-danger">*</small></label>
                    <select name="normal" required class="form-control" >
                       <option value="">======= <?php echo $this->lang->line('pleasechoice'); ?> =======</option>
                      <option value="D">D </option>
                      <option value="C">C </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('subtractor'); ?><small class="text-danger">*</small></label>
                    <select name="pengurang" required class="form-control" >
                       <option value="">======= <?php echo $this->lang->line('pleasechoice'); ?> =======</option>
                      <option value="Y">Y </option>
                      <option value="N">N </option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">BSIS<small class="text-danger">*</small></label>
                    <select name="bsis" required class="form-control" >
                       <option value="">======= <?php echo $this->lang->line('pleasechoice'); ?> =======</option>
                      <option value="B">B </option>
                      <option value="I">I </option>
                    </select>
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('account'); ?><small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="number" name="akun" class="form-control" value="<?= set_value('akun') ?>">
                    <?= form_error('akun', '<small class="text-danger">', '</small>'); ?>
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
