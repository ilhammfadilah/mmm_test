<div class="content">
  <div class="container-fluid">
      <?= $this->session->flashdata('message');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data <?php echo $this->lang->line('productmaster'); ?></h4>
            <p style="margin-bottom: 0;padding-bottom: 0" class="card-category"><?php echo $this->lang->line('entry'); ?> Data <?php echo $this->lang->line('productmaster'); ?></p>
          </div>
          <div class="card-body">
            
            <form action="<?php echo base_url() . 'tambahdataproduk'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">          
                      <div class="input-group">
                          <label>SKU Produk<small class="text-danger">*</small></label>
                     <input style="padding-bottom: 10px;max-width: 300px; margin-left: 70px;"  type="text" value="<?= set_value('skuproduk') ?>" name="skuproduk" class="form-control">
                    
                     </div>
                      <?= form_error('skuproduk', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                </div>
              
              </div>
              <div class="row" style="margin-bottom: 20px;">
                  <div class="col-md-6">          
                      <div class="input-group">
                          <label>Barcode<small class="text-danger">*</small></label>
                     <input style="padding-bottom: 10px;max-width: 300px; margin-left: 97px;"  type="text" value="<?= set_value('barcode') ?>" name="barcode" class="form-control">
                     
                     </div>
                     <?= form_error('barcode', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                </div>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                  <div class="col-md-6">          
                      <div class="input-group">
                          <label>Nama Produk<small class="text-danger">*</small></label>
                     <input style="padding-bottom: 10px;max-width: 680px; margin-left: 60px;"  type="text" value="<?= set_value('namaproduk') ?>" name="namaproduk" class="form-control">
                     </div>
                     <?= form_error('namaproduk', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                </div>
              </div>
               <div class="row" style="margin-bottom: 20px;">
                  <div class="col-md-6">          
                      <div class="input-group">
                          <label>Deskripsi Produk<small class="text-danger">*</small></label>
                      <textarea  style="padding-bottom: 10px;max-width: 680px; margin-left: 38px;" name="deskripsiproduk" class="form-control"><?= set_value('deskripsiproduk') ?> </textarea>
                     </div>

                    
                </div>
              </div>
               <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">
                  <div class="input-group">
                    <label>Tipe Produk<small class="text-danger" style="margin-right: 70px;">*</small></label>
                     <input style="padding-bottom: 10px;max-width:200px;" id="tipeproduk" value="<?= set_value('tipeproduk') ?>"   type="text" name="tipeproduk" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idtipeproduk"  value="<?= set_value('idtipeproduk') ?>"   type="hidden" name="idtipeproduk" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modaltipeproduk"><?php echo $this->lang->line('search'); ?></button>
                        </span> 

                    
                     
                  </div>
                </div>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">
                  <div class="input-group">
                    <label>Category<small class="text-danger" style="margin-right: 93px;">*</small></label>
                       <input style="padding-bottom: 10px;max-width:200px;" id="category"  value="<?= set_value('category') ?>"  type="text" name="category" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idcategory"   value="<?= set_value('idcategory') ?>" type="hidden" name="idcategory" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalcategory"><?php echo $this->lang->line('search'); ?></button>
                        </span>   
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group"> 
                      <label style="margin-right: 40px;">Jenis Garansi<small class="text-danger">*</small></label>
                         <input style="padding-bottom: 10px;max-width:200px;" id="jenisgaransi"  value="<?= set_value('jenisgaransi') ?>"  type="text" name="jenisgaransi" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idjenisgaransi"  value="<?= set_value('idjenisgaransi') ?>"  type="hidden" name="idjenisgaransi" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modaljenisgaransi"><?php echo $this->lang->line('search'); ?></button>
                        </span>  
                  </div>
                </div>
              </div>
                <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">
                  <div class="input-group">
                    <label>Brand<small class="text-danger" style="margin-right: 115px;">*</small></label>
                      <input style="padding-bottom: 10px;max-width:200px;" id="brand"  value="<?= set_value('brand') ?>"  type="text" name="brand" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idbrand"   value="<?= set_value('idbrand') ?>" type="hidden" name="idbrand" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalbrand"><?php echo $this->lang->line('search'); ?></button>
                        </span>    
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">  
                      <label style="margin-right: 20px;">Periode Garansi<small class="text-danger">*</small></label>
                       <input style="padding-bottom: 10px;max-width:200px;" id="periodegaransi"  value="<?= set_value('periodegaransi') ?>"  type="text" name="periodegaransi" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idperiodegaransi"   value="<?= set_value('idperiodegaransi') ?>" type="hidden" name="idperiodegaransi" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalperiodegaransi"><?php echo $this->lang->line('search'); ?></button>
                        </span> 
                  </div>
                </div>
              </div>
               <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">
                  <div class="input-group">
                    <label>Etalase<small class="text-danger" style="margin-right: 106px;">*</small></label>
                      <input style="padding-bottom: 10px;max-width:200px;" id="etalase"  value="<?= set_value('etalase') ?>"  type="text" name="etalase" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idetalase"  value="<?= set_value('idetalase') ?>"  type="hidden" name="idetalase" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modaletalase"><?php echo $this->lang->line('search'); ?></button>
                        </span> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group"> 
                      <label style="margin-right: 30px;">Claim Garansi<small class="text-danger">*</small></label>
                        <input style="padding-bottom: 10px;max-width:200px;" id="claimgaransi"  value="<?= set_value('claimgaransi') ?>"  type="text" name="claimgaransi" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idclaimgaransi"  value="<?= set_value('idclaimgaransi') ?>"  type="hidden" name="idclaimgaransi" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalclaimgaransi"><?php echo $this->lang->line('search'); ?></button>
                        </span>
                  </div>
                </div>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">
                  <div class="input-group">
                    <label>Satuan Besar<small class="text-danger" style="margin-right: 62px;">*</small></label>
                        <input style="padding-bottom: 10px;max-width:200px;" id="satuanbesar"  value="<?= set_value('satuanbesar') ?>"  type="text" name="satuanbesar" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idsatuanbesar"  value="<?= set_value('idsatuanbesar') ?>"  type="hidden" name="idsatuanbesar" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalsatuanbesar"><?php echo $this->lang->line('search'); ?></button>
                        </span>  
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="input-group">
                      <label style="margin-right: 42px;">Satuan Kecil<small class="text-danger">*</small></label>
                        <input style="padding-bottom: 10px;max-width:200px;" id="satuankecil"  value="<?= set_value('satuankecil') ?>"  type="text" name="satuankecil" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idsatuankecil"   value="<?= set_value('idsatuankecil') ?>" type="hidden" name="idsatuankecil" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalsatuankecil"><?php echo $this->lang->line('search'); ?></button>
                        </span>  
                  </div>
                </div>
              </div>
               <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">
                  <div class="input-group">
                    <label>Kondisi<small class="text-danger" style="margin-right: 106px;">*</small></label>
                     <input style="padding-bottom: 10px;max-width:200px;" id="kondisi"  value="<?= set_value('kondisi') ?>"  type="text" name="kondisi" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idkondisi"  value="<?= set_value('idkondisi') ?>"  type="hidden" name="idkondisi" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalkondisi"><?php echo $this->lang->line('search'); ?></button>
                        </span> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <label style="margin-right: 53px;">Mata Uang<small class="text-danger" >*</small></label>
                      <input style="padding-bottom: 10px;max-width:200px;" id="matauang"  value="<?= set_value('matauang') ?>"  type="text" name="matauang" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idmatauang"  value="<?= set_value('idmatauang') ?>"  type="hidden" name="idmatauang" class="form-control" readonly>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalmatauang_"><?php echo $this->lang->line('search'); ?></button>
                        </span>    
                     
                  </div>
                </div>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">          
                      <div class="input-group">
                          <label>Harga Jual<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 203px; margin-left: 80px;"  type="number" step="any" value="<?= set_value('hargajual') ?>" name="hargajual" class="form-control js-nilai">
                     </div>
                         
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                           <label>Harga Beli<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 203px; margin-left: 56px;"  type="number" step="any" value="<?= set_value('hargabeli') ?>" name="hargabeli" class="form-control js-nilai"><br>
                     </div>
                </div>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">          
                      <div class="input-group">
                          <label>Berat<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 70px; margin-left: 118px;"  type="number" step="any" value="<?= set_value('berat') ?>" name="berat" class="form-control"><br>
                          <input style="padding-bottom: 10px;max-width: 70px;" readonly type="text" value="Gram" name="satuan" class="form-control">
                         
                     </div>
                     
                </div>
                <dvi class="col-md-6">
                   <div class="input-group">
                           <label >Panjang<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 70px; margin-left: 73px;"  type="number" step="any" value="<?= set_value('panjang') ?>" name="panjang" class="form-control"><br>
                          <input style="padding-bottom: 10px;max-width: 70px;" readonly type="text" value="Cm" name="satuan" class="form-control">
                     </div>
                </dvi>
              </div>
               <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">          
                      <div class="input-group">
                          <label>Lebar<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 70px; margin-left: 118px;"   type="number" step="any" value="<?= set_value('lebar') ?>" name="lebar" class="form-control"><br>
                          <input style="padding-bottom: 10px;max-width: 70px;" readonly type="text" value="Cm" name="satuan" class="form-control">
                     </div>
                         
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                           <label>Tinggi<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 70px; margin-left: 85px;"   type="number" step="any" value="<?= set_value('tinggi') ?>" name="tinggi" class="form-control"><br>
                          <input style="padding-bottom: 10px;max-width: 70px;" readonly type="text" value="Cm" name="satuan" class="form-control">
                         
                     </div>
                </div>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">          
                      <div class="input-group">
                          <label>Konversi Satuan<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 225px; margin-left: 40px;"  type="text" value="<?= set_value('konversisatuan') ?>" name="konversisatuan" class="form-control">
                          
                     </div>
                     <?= form_error('konversisatuan', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                </div>
              </div>
              <div id="gambar" >
                                  <h5> Format gambar .jpg .jpeg .png dan untuk ukuran size maksimal 10 MB</h5>
                                  <div class="row">
                                     <div class="col-md-2" style="margin-right: 56px;">
                                          <div class="drop-zone">
                                            <span class="drop-zone__prompt"><?php echo $this->lang->line('picture'); ?> 1</span>
                                            <input type="file" name="gambar1" class="drop-zone__input">
                                          </div>
                                      </div>

                                    <div class="col-md-2" style="margin-right: 56px;">
                                          <div class="drop-zone">
                                            <span class="drop-zone__prompt"><?php echo $this->lang->line('picture'); ?> 2</span>
                                            <input type="file" name="gambar2" class="drop-zone__input">
                                          </div>
                                      </div>

                                    <div class="col-md-2" style="margin-right: 56px;">
                                          <div class="drop-zone">
                                            <span class="drop-zone__prompt"><?php echo $this->lang->line('picture'); ?> 3</span>
                                            <input type="file" name="gambar3" class="drop-zone__input">
                                          </div>
                                      </div>
                                      <div class="col-md-2" style="margin-right: 56px;">
                                          <div class="drop-zone">
                                            <span class="drop-zone__prompt"><?php echo $this->lang->line('picture'); ?> 4</span>
                                            <input type="file" name="gambar4" class="drop-zone__input">
                                          </div>
                                      </div>
                                       <div class="col-md-2" style="margin-right: 56px;">
                                          <div class="drop-zone">
                                            <span class="drop-zone__prompt"><?php echo $this->lang->line('picture'); ?> 5</span>
                                            <input type="file" name="gambar5" class="drop-zone__input">
                                          </div>
                                      </div>
                                  </div><br>
                                   <h5> Format video .mp4 .mkv .afi .mpg dan untuk size video maksimal 10 MB</h5>
                                   <div class="row">
                                   <div class="col-md-2" style="margin-right: 56px;">
                                          <div class="drop-zone">
                                            <span class="drop-zone__prompt">Video 1</span>
                                            <input type="file" name="video1" class="drop-zone__input">
                                          </div>
                                      </div>
                                   <div class="col-md-2" style="margin-right: 56px;">
                                          <div class="drop-zone">
                                            <span class="drop-zone__prompt">Video 2</span>
                                            <input type="file" name="video2" class="drop-zone__input">
                                          </div>
                                      </div>
                                  </div>
                                </div>
              
               <br>
              <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button> <a href="<?= base_url('listproduk'); ?>" class="btn btn-danger"><?php echo $this->lang->line('cancel'); ?></a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
