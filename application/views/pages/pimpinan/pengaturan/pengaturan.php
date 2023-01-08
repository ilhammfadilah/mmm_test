<!-- Begin Page Content -->
<div class="container-fluid">
<?= $this->session->flashdata('message');?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $this->lang->line('pengaturan'); ?> Website</h1>

      <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="bmd-label-floating">Bahasa</label>
                    <select style="width: 150px;" class="form-control" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
                         <option value="indo" <?php if($this->session->userdata('site_lang') == 'indo') echo 'selected="selected"'; ?>>Indonesia</option>
                       <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                      
                       
                    </select>
                  </div>
                </div>
      </div>

      <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="bmd-label-floating">Angka Di Belakang Koma</label>
                    <input type="number" class="form-control" name="koma">
                  </div>
                </div>
      </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->