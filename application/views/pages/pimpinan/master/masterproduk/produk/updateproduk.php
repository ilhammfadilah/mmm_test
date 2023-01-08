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
            
            <form action="<?php echo base_url() . 'pimpinan/updateproduk'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <?php foreach ($produk as $data) 
                
               ?>
              <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">          
                      <div class="input-group">
                          <label>SKU Produk<small class="text-danger">*</small></label>
                     <input style="padding-bottom: 10px;max-width: 300px; margin-left: 70px;"  type="text" value="<?= $data->skuproduk ?>" name="skuproduk" class="form-control" required>
                       <input style="padding-bottom: 10px;max-width: 300px; margin-left: 70px;"  type="hidden" value="<?= $data->id_produk ?>" name="idproduk" class="form-control" required>
                    
                     </div>
                </div>
              
              </div>
              <div class="row" style="margin-bottom: 20px;">
                  <div class="col-md-6">          
                      <div class="input-group">
                          <label>Barcode<small class="text-danger">*</small></label>
                     <input style="padding-bottom: 10px;max-width: 300px; margin-left: 97px;"  type="text" name="barcode" class="form-control" value="<?= $data->barcode ?>">
                     
                     </div>
                     <?= form_error('barcode', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                </div>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                  <div class="col-md-6">          
                      <div class="input-group">
                          <label>Nama Produk<small class="text-danger">*</small></label>
                     <input style="padding-bottom: 10px;max-width: 680px; margin-left: 60px;"  type="text" value="<?= $data->namaproduk ?>" name="namaproduk" class="form-control">
                     </div>
                     <?= form_error('namaproduk', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                </div>
              </div>
               <div class="row" style="margin-bottom: 20px;">
                  <div class="col-md-6">          
                      <div class="input-group">
                          <label>Deskripsi Produk<small class="text-danger">*</small></label>
                      <textarea  style="padding-bottom: 10px;max-width: 680px; margin-left: 38px;" name="deskripsiproduk" class="form-control"><?= $data->deskripsiproduk ?> </textarea>
                     </div>

                     <?= form_error('deskripsiproduk', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                </div>
              </div>
               <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">
                  <div class="input-group">
                    <label>Tipe Produk<small class="text-danger" style="margin-right: 70px;">*</small></label>
                     <input style="padding-bottom: 10px;max-width:200px;" id="tipeproduk" value="<?= $data->tipeproduk ?>"  type="text" name="tipeproduk" class="form-control" required>
                          <input style="padding-bottom: 10px;width: 160px;" id="idtipeproduk"  value="<?= $data->idtipeproduk ?>"  type="hidden" name="idtipeproduk" class="form-control" readonly>

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
                         <input style="padding-bottom: 10px;max-width:200px;" id="category" value="<?= $data->category ?>"    type="text" name="category" class="form-control" required>
                            <input style="padding-bottom: 10px;width: 160px;" id="idcategory" value="<?= $data->idcategory ?>"    type="hidden" name="idcategory" class="form-control" readonly>

                          <span class="input-group-btn">
                            <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalcategory"><?php echo $this->lang->line('search'); ?></button>
                          </span>   
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group"> 
                        <label style="margin-right: 40px;">Jenis Garansi<small class="text-danger">*</small></label>
                           <input style="padding-bottom: 10px;max-width:200px;" id="jenisgaransi"  value="<?= $data->jenisgaransi ?>"   type="text" name="jenisgaransi" class="form-control" required>
                            <input style="padding-bottom: 10px;width: 160px;" id="idjenisgaransi" value="<?= $data->idjenisgaransi ?>"    type="hidden" name="idjenisgaransi" class="form-control" readonly>

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
                        <input style="padding-bottom: 10px;max-width:200px;" id="brand" value="<?= $data->brand ?>"   type="text" name="brand" class="form-control" required>
                            <input style="padding-bottom: 10px;width: 160px;" id="idbrand" value="<?= $data->idbrand ?>"    type="hidden" name="idbrand" class="form-control" readonly>

                          <span class="input-group-btn">
                            <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalbrand"><?php echo $this->lang->line('search'); ?></button>
                          </span>    
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="input-group">   
                        <label style="margin-right: 20px;">Periode Garansi<small class="text-danger">*</small></label>
                         <input style="padding-bottom: 10px;max-width:200px;" id="periodegaransi" value="<?= $data->periodegaransi ?>"   type="text" name="periodegaransi" class="form-control" required>
                            <input style="padding-bottom: 10px;width: 160px;" id="idperiodegaransi"  value="<?= $data->idperiodegaransi ?>"   type="hidden" name="idperiodegaransi" class="form-control" readonly>

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
                        <input style="padding-bottom: 10px;max-width:200px;" id="etalase" value="<?= $data->etalase ?>"    type="text" name="etalase" class="form-control" required>
                            <input style="padding-bottom: 10px;width: 160px;" id="idetalase"  value="<?= $data->idetalase ?>"   type="hidden" name="idetalase" class="form-control" readonly>

                          <span class="input-group-btn">
                            <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modaletalase"><?php echo $this->lang->line('search'); ?></button>
                          </span>   
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group"> 
                        <label style="margin-right: 30px;">Claim Garansi<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width:200px;" id="claimgaransi"  value="<?= $data->claimgaransi ?>"   type="text" name="claimgaransi" class="form-control" required>
                            <input style="padding-bottom: 10px;width: 160px;" id="idclaimgaransi" value="<?= $data->idclaimgaransi ?>"    type="hidden" name="idclaimgaransi" class="form-control" readonly>

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
                          <input style="padding-bottom: 10px;max-width:200px;" id="satuanbesar" value="<?= $data->satuanbesar ?>"   type="text" name="satuanbesar" class="form-control" required>
                            <input style="padding-bottom: 10px;width: 160px;" id="idsatuanbesar" value="<?= $data->idsatuanbesar ?>"   type="hidden" name="idsatuanbesar" class="form-control" readonly>

                          <span class="input-group-btn">
                            <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalsatuanbesar"><?php echo $this->lang->line('search'); ?></button>
                          </span>   
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                        <label style="margin-right: 42px;">Satuan Kecil<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width:200px;" id="satuankecil" value="<?= $data->satuankecil ?>"    type="text" name="satuankecil" class="form-control" required>
                            <input style="padding-bottom: 10px;width: 160px;" id="idsatuankecil" value="<?= $data->idsatuankecil ?>"    type="hidden" name="idsatuankecil" class="form-control" readonly>

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
                       <input style="padding-bottom: 10px;max-width:200px;" id="kondisi" value="<?= $data->kondisi ?>"   type="text" name="kondisi" class="form-control" required>
                            <input style="padding-bottom: 10px;width: 160px;" id="idkondisi" value="<?= $data->idkondisi ?>"    type="hidden" name="idkondisi" class="form-control" readonly>

                          <span class="input-group-btn">
                            <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalkondisi"><?php echo $this->lang->line('search'); ?></button>
                          </span>                        
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                      <label style="margin-right: 53px;">Mata Uang<small class="text-danger" >*</small></label>
                        <input style="padding-bottom: 10px;max-width:200px;" id="matauang" value="<?= $data->kodematauang ?>"    type="text" name="matauang" class="form-control" required>
                            <input style="padding-bottom: 10px;width: 160px;" id="idmatauang" value="<?= $data->id_matauang ?>"   type="hidden" name="idmatauang" class="form-control" readonly>

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
                          <input style="padding-bottom: 10px;max-width: 225px; margin-left: 80px;"  type="number" step="any" value="<?php echo number_format($data->hargajual,0,',','.') ?>" name="hargajual" class="form-control js-nilai" required ><br>

                     </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                           <label>Harga Beli<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 225px; margin-left: 53px;"  type="number" step="any" value="<?php echo number_format($data->hargabeli,0,',','.') ?>" name="hargabeli" class="form-control js-nilai" required><br>
                          <?= form_error('hargabeli', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                     </div>
                </div>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">          
                      <div class="input-group">
                          <label>Berat<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 70px; margin-left: 118px;"  type="number" step="any" value="<?= $data->berat ?>" required name="berat" class="form-control"><br>
                          <input style="padding-bottom: 10px;max-width: 70px;" readonly type="text" value="Gram" name="satuan" class="form-control">
                          <?= form_error('berat', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                     </div>
                </div>
                <div class="col-md-6">
                   <div class="input-group">
                           <label>Panjang<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 70px; margin-left: 70px;"  type="number" step="any" value="<?= $data->panjang ?>" required name="panjang" class="form-control"><br>
                          <input style="padding-bottom: 10px;max-width: 70px;" readonly type="text" value="Cm" name="satuan" class="form-control">
                          <?= form_error('panjang', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                     </div>
                </div>
              </div>
               <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">          
                      <div class="input-group">
                          <label>Lebar<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 70px; margin-left: 118px;"  type="number" step="any" value="<?= $data->lebar ?>" required name="lebar" class="form-control"><br>
                          <input style="padding-bottom: 10px;max-width: 70px;" readonly type="text" value="Cm" name="satuan" class="form-control">
                          <?= form_error('lebar', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                     </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                           <label>Tinggi<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 70px; margin-left: 80px;"  type="number" step="any" value="<?= $data->tinggi ?>" required name="tinggi" class="form-control"><br>
                          <input style="padding-bottom: 10px;max-width: 70px;" readonly type="text" value="Cm" name="satuan" class="form-control">
                          <?= form_error('panjang', '<small class="text-danger" style="margin-left:162px;">', '</small>'); ?>
                     </div>
                </div>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                 <div class="col-md-6">          
                      <div class="input-group">
                          <label>Konversi Satuan<small class="text-danger">*</small></label>
                          <input style="padding-bottom: 10px;max-width: 225px; margin-left: 40px;" value="<?= $data->konversisatuan ?>" required  type="text" value="<?= set_value('konversisatuan') ?>" name="konversisatuan" class="form-control">
                          <?= form_error('konversisatuan', '<small class="text-danger">', '</small>'); ?>
                     </div>
                </div>
              </div>
              <div id="gambar" >
                                  <h5> Format gambar .jpg .jpeg .png dan untuk ukuran size maksimal 10 MB</h5>
                                  <div class="row">
                                     <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 1</label>
                                         <input type="hidden" class="form-control"   name="gambar1_" value="<?=$data->gambar1?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->gambar1?>">
                                               <img src="<?= base_url('assets/file/masterproduk/'). $data->gambar1?>" alt="" id="img-thumbnail" class="img-thumbnail" >
                                            </div>
                                            <input type="file" name="gambar1" class="drop-zone__input">
                                          </div>
                                      </div>

                                    <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 2</label>
                                         <input type="hidden" class="form-control"   name="gambar2_" value="<?=$data->gambar2?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->gambar2?>">
                                               <img src="<?= base_url('assets/file/masterproduk/'). $data->gambar2?>" alt="" id="img-thumbnail" class="img-thumbnail" >
                                            </div>
                                            <input type="file" name="gambar2" class="drop-zone__input">
                                          </div>
                                      </div>

                                 <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 3</label>
                                         <input type="hidden" class="form-control"   name="gambar3_" value="<?=$data->gambar3?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->gambar3?>">
                                               <img src="<?= base_url('assets/file/masterproduk/'). $data->gambar3?>" alt="" id="img-thumbnail" class="img-thumbnail" >
                                            </div>
                                            <input type="file" name="gambar3" class="drop-zone__input">
                                          </div>
                                      </div>
                                      <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 4</label>
                                         <input type="hidden" class="form-control"   name="gambar4_" value="<?=$data->gambar4?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->gambar4?>">
                                               <img src="<?= base_url('assets/file/masterproduk/'). $data->gambar4?>" alt="" id="img-thumbnail" class="img-thumbnail" >
                                            </div>
                                            <input type="file" name="gambar4" class="drop-zone__input">
                                          </div>
                                      </div>
                                       <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 5</label>
                                         <input type="hidden" class="form-control"   name="gambar5_" value="<?=$data->gambar5?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->gambar5?>">
                                               <img src="<?= base_url('assets/file/masterproduk/'). $data->gambar5?>" alt="" id="img-thumbnail" class="img-thumbnail" >
                                            </div>
                                            <input type="file" name="gambar5" class="drop-zone__input">
                                          </div>
                                      </div>
                                  </div><br>
                                   <h5> Format video .mp4 .mkv .afi .mpg dan untuk size video maksimal 10 MB</h5>
                                   <div class="row">
                                  <div class="col-md-2" style="margin-right: 56px;">
                                          <label>Video 1</label>
                                         <input type="hidden" class="form-control"   name="video1_" value="<?=$data->video1?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->video1?>">
                                               <img src="<?= base_url('assets/file/masterproduk/'). $data->video1?>" alt="" id="img-thumbnail" class="img-thumbnail" >
                                            </div>
                                            <input type="file" name="video1" class="drop-zone__input">
                                          </div>
                                      </div>
                                   <div class="col-md-2" style="margin-right: 56px;">
                                          <label>Video 2</label>
                                         <input type="hidden" class="form-control"   name="video2_" value="<?=$data->video2?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->video2?>">
                                               <img src="<?= base_url('assets/file/masterproduk/'). $data->video2?>" alt="" id="img-thumbnail" class="img-thumbnail" >
                                            </div>
                                            <input type="file" name="video1" class="drop-zone__input">
                                          </div>
                                      </div>
                                  </div>
                                </div>
              
               <br>
              <button type="submit" class="btn btn-info pull-right">Update</button> <a href="<?= base_url('listproduk'); ?>" class="btn btn-danger"><?php echo $this->lang->line('cancel'); ?></a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
