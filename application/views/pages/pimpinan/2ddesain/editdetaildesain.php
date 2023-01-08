<div class="content">
  <div class="container-fluid">
     
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-info">
                <h5 class="card-title" style=""><?php echo $this->lang->line('transaction2ddesign'); ?></h5>
            </div>
                <div class="card-body">  
         
      <div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-md-3">
                           <h4 style="margin-top: 10px;margin-bottom: 0px;padding-bottom: 0px;margin-left: 7px;">Detail Designer</h4>
                </div>
              </div>
               
                <div>
                  <div class="card-body">
                     <?php foreach ($detaildesain as $data) {
                      
                      ?>
                      <form action="<?php echo base_url() . 'pimpinan/adddetaildesain'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                   <div class="row">
                                     <div class="col-md-4">
                                        <label>Model<small class="text-danger">*</small></label>
                                      <div class="input-group">
                                        <input style="padding-bottom: 10px;" type="hidden" name="iddetail" class="form-control" value="<?=$data->id_detail?>" readonly> 
                                        <input style="padding-bottom: 10px;max-width: 200px;" type="text" name="model" class="form-control" required value="<?=$data->model?>">
                                         
                                        <input style="padding-bottom: 10px;max-width: 100px; margin-left: 5px;" type="text" name="submodel" class="form-control" value="<?=$data->submodel?>" >
                                        
                                       </div>
                                    </div>
                                     <div class="col-md-4">
                                      
                                    </div>  
                                      
                                    <div class="col-md-4">
                                        <label><?php echo $this->lang->line('producttype'); ?><small class="text-danger">*</small></label>
                                      <div class="input-group">
                                      
                                        <input style="padding-bottom: 10px;width: 160px;" id="tipeproduk"   type="text" name="tipeproduk" class="form-control" required value="<?=$data->tipeproduk?>">
                                      
                                         <input style="padding-bottom: 10px;width: 160px;" id="idtipeproduk"   type="hidden" name="idtipeproduk" class="form-control" value="<?=$data->id_tipe?>" readonly>

                                        <span class="input-group-btn">
                                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modaltipeproduk"><?php echo $this->lang->line('search'); ?></button>
                                        </span> 
                                       </div>
                                    </div>
                                    

                                    
                                </div>
                                 <div class="row">
                                     <div class="col-md-4">
                                      <label>Material<small class="text-danger">*</small></label>
                                      <div class="input-group">
                                      
                                        <input style="padding-bottom: 10px;width: 10px;" id="material" type="text" name="material" class="form-control" value="<?=$data->material?>">                                      
                                        <input style="padding-bottom: 10px;width: 160px;" value="<?=$data->id_material?>" id="idmaterial"   type="hidden" name="idmaterial" class="form-control" readonly>
                                       

                                        <span class="input-group-btn">
                                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalmaterial"><?php echo $this->lang->line('search'); ?></button>
                                        </span> 
                                        
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Berat<small class="text-danger">*</small></label>
                                      <div class="input-group">
                                         <input style="padding-bottom: 10px;max-width: 400px;"  value="<?=$data->beratmaterial?>"  type="text" name="beratmaterial" class="form-control" required>
                                         <input style="padding-bottom: 10px;max-width: 200px;margin-left: 5px;" placeholder="Satuan Berat" id="satuan" readonly  type="text" name="satuan" value="<?=$data->satuan?>" class="form-control" required>
                                      </div>
                                      
                                    </div>
                                   

                                     <div class="col-md-4">
                                        <label><?php echo $this->lang->line('headconcept'); ?><small class="text-danger">*</small></label>
                                      <div class="input-group">
                                        
                                        <input style="padding-bottom: 10px;width: 200px;" value="<?=$data->konsepkepala?>" id="konsepkepala"   type="text" name="konsepkepala" class="form-control" required>
                                      
                                         <input style="padding-bottom: 10px;width: 160px;" id="idkonsepkepala" value="<?=$data->id_konsepkepala?>"  type="hidden" name="idkonsepkepala" class="form-control" readonly>

                                        <span class="input-group-btn">
                                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalkonsepkepala"><?php echo $this->lang->line('search'); ?></button>
                                        </span> 
                                       </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                     
                                    <div class="col-md-4">
                                        <label><?php echo $this->lang->line('finishing'); ?><small class="text-danger">*</small></label>
                                      <div class="input-group">
                                      
                                        <input style="padding-bottom: 10px;width: 160px;" id="finishing" value="<?=$data->finishing?>"  type="text" name="finishing" class="form-control" required>
                                      
                                         <input style="padding-bottom: 10px;width: 160px;" id="idfinishing" value="<?=$data->id_finishing?>"  type="hidden" name="idfinishing" class="form-control" readonly>

                                        <span class="input-group-btn">
                                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalfinishing"><?php echo $this->lang->line('search'); ?></button>
                                        </span> 
                                       </div>
                                    </div>
                                     <div class="col-md-4">
                                        <label><?php echo $this->lang->line('productcolor'); ?><small class="text-danger">*</small></label>
                                      <div class="input-group">
                                      
                                        <input style="padding-bottom: 10px;width: 160px;" value="<?=$data->warnaproduk?>" id="warnaproduk"   type="text" name="warnaproduk" class="form-control" required>
                                      
                                         <input style="padding-bottom: 10px;width: 160px;" id="idwarnaproduk" value="<?=$data->id_warnaproduk?>"  type="hidden" name="idwarnaproduk" class="form-control" readonly>

                                        <span class="input-group-btn">
                                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalwarnaproduk"><?php echo $this->lang->line('search'); ?></button>
                                        </span> 
                                       </div>
                                    </div>


                                    <div class="col-md-4">
                                        <label><?php echo $this->lang->line('fee'); ?><small class="text-danger">*</small></label>
                                      <div class="input-group">
                                      
                                        <input style="padding-bottom: 10px;width: 160px;" id="ongkos" value="<?=$data->ongkos?>" type="text" name="ongkos" class="form-control"  required>
                                      
                                         <input style="padding-bottom: 10px;width: 160px;" id="idongkos" value="<?=$data->id_ongkos?>"  type="hidden" name="idongkos" class="form-control" readonly>

                                        <span class="input-group-btn">
                                          <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalongkos"><?php echo $this->lang->line('search'); ?></button>
                                        </span> 
                                       </div>
                                    </div>

                                  
                                </div>

                                <div class="row">
                                  <div class="col-md-4">
                                    <label><?php echo $this->lang->line('gender'); ?><small class="text-danger">*</small></label>
                                        <select class="form-control" style="width: 485px;" name="jeniskelamin">
                                          <option value="Laki-Laki">Laki-Laki</option>
                                          <option value="Perempuan">Perempuan</option>
                                        </select>
                                  </div>
                                  <div class="col-md-4">
                                      <label><?php echo $this->lang->line('size'); ?><small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;width: 300px;"  type="text" value="<?=$data->ukuran?>" name="ukuran" class="form-control">
                                  </div>
                                   
                                </div><br>
                                <div class="row" style="margin-top: 10px;margin-left: 200px;">
                                  <div class="col-md-6">
                                      <h4>Jatah Susut</h4>
                                  </div>
                                  <div class="col-md-6">
                                    <h4>Estimasi Harga</h4>
                                  </div>
                                </div>
                               <br>
                                 
                                <div class="row" style="margin-left: 200px;">
                                  <div class="col-md-6">
                                      
                                         <div class="input-group">
                                            <label>Finishing<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px;  margin-left: 70px;" value="<?=$data->jsfinishing?>" type="text" name="jsfinishing" class="form-control">
                                         <input style="padding-bottom: 10px;max-width: 200px;margin-left: 30px;" placeholder="Satuan Berat" id="satuanjsfinishing" readonly value="<?=$data->satuan?>"  type="text" name="beratmaterial" class="form-control" required>
                                        
                                       </div>
                                  </div>

                                  <div class="col-md-6">
                                      
                                         <div class="input-group">
                                          <label>Material<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left: 43px;"   type="text" name="material" class="form-control">
                                        
                                       </div>
                                  </div>
                                </div><br>
                                <div class="row" style="margin-left: 200px;">
                                  <div class="col-md-6">
                                      
                                         <div class="input-group">
                                          <label>Poles Rangka<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left: 37px;" value="<?=$data->jspolesrangka?>" type="text" name="jspolesrangka" class="form-control">
                                         <input style="padding-bottom: 10px;max-width: 200px;margin-left: 30px;" placeholder="Satuan Berat" id="satuanjspolesrangka" value="<?=$data->satuan?>" readonly  type="text" name="beratmaterial" class="form-control" required>
                                        
                                       </div>
                                  </div>
                                  <div class="col-md-6">
                                         <div class="input-group">
                                          <label>Diamond<small class="text-danger">*</small></label>
                                         
                                           <input style="padding-bottom: 10px;max-width: 300px; margin-left: 37px;"  type="text" name="diamond" value="<?=$data->hargadiamond?>" readonly class="form-control">
                                            <input style="padding-bottom: 10px;max-width: 300px; margin-left: 37px;"  type="hidden" name="totaljumlah" value="<?=$data->totaljumlah?>" readonly class="form-control">
                                             <input style="padding-bottom: 10px;max-width: 300px; margin-left: 37px;"  type="hidden" name="totalberat" value="<?=$data->totalberat?>" readonly class="form-control">
                                      
                                        
                                       </div>
                                  </div>
                                </div><br>
                                 <div class="row" style="margin-left: 200px;">
                                  <div class="col-md-6">
                                      
                                         <div class="input-group">
                                          <label>Pasang Batu<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left: 44px;"  type="text" name="jspasangbatu" value="<?=$data->jspasangbatu?>" class="form-control">
                                         <input style="padding-bottom: 10px;max-width: 200px;margin-left: 30px;" placeholder="Satuan Berat" id="satuanjspasangbatu" value="<?=$data->satuan?>" readonly  type="text" name="beratmaterial" class="form-control" required>
                                        
                                       </div>
                                  </div>
                                  <div class="col-md-6">
                                      
                                         <div class="input-group">
                                          <label>Kepala<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:53px;"  type="text" name="kepala" class="form-control">
                                        
                                  </div>
                                  </div>
                                 
                                </div>
                                <br>
                                 <div class="row" style="margin-left: 200px;">
                                  <div class="col-md-6">
                                      
                                         <div class="input-group">
                                          <label>Rakit<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left: 95px;"  type="text" name="jspolesrakit" class="form-control" value="<?=$data->jsrakit?>">
                                         <input style="padding-bottom: 10px;max-width: 200px;margin-left: 30px;" placeholder="Satuan Berat" id="satuanjsrakit"  value="<?=$data->satuan?>" readonly  type="text" name="beratmaterial" class="form-control" required>
                                        
                                       </div>
                                  </div>
                                  <div class="col-md-6">
                                      
                                         <div class="input-group">
                                          <label>Ongkos<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:48px;" id="hargaongkos" type="text" name="ongkos" value="<?=$data->hargaongkos?>" readonly class="form-control">
                                        
                                       </div>
                                  </div>
                                 
                                </div><br>
                                 <div class="row" style="margin-left: 200px;">
                                  <div class="col-md-6">
                                      
                                         <div class="input-group">
                                          <label>Poles Chrome<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:30px;"  type="text" name="jspoleschrome" class="form-control" value="<?=$data->jspoleschrome?>" >
                                         <input style="padding-bottom: 10px;max-width: 200px;margin-left: 30px;" placeholder="Satuan Berat" id="satuanjspoleschrome" readonly value="<?=$data->satuan?>"  type="text" name="beratmaterial" class="form-control" required>
                                        
                                       </div>
                                  </div>
                                     <div class="col-md-6">
                                      
                                         <div class="input-group">
                                          <label>Total<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:67px;"  type="text" name="total" class="form-control">
                                        
                                       </div>
                                  </div>
                                 
                                </div>
                                
                                <br><br>
                                 <div id="gambar" >
                                  <h5> Format gambar .jpg .jpeg .png dan untuk ukuran size maksimal 10 MB</h5>
                                  <div class="row">
                                    
                                       
                                        
                                       <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 1</label>
                                         <input type="hidden" class="form-control"   name="gambar1_" value="<?=$data->gambar1?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->gambar1?>">
                                               <img src="<?= base_url('assets/file/2ddesain/'). $data->gambar1?>" alt="" class="img-thumbnail  img-preview">
                                            </div>
                                            <input type="file" name="gambar1" class="drop-zone__input">
                                          </div>
                                      </div>
                                      <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 2</label>
                                          <input type="hidden" class="form-control"   name="gambar2_" value="<?=$data->gambar2?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->gambar2?>">
                                               <img src="<?= base_url('assets/file/2ddesain/'). $data->gambar2?>" alt="" class="img-thumbnail  img-preview">
                                            </div>
                                            <input type="file" name="gambar2" class="drop-zone__input">
                                          </div>
                                      </div>
                                   

                                    <div class="col-md-2" style="margin-right: 56px;">
                                        <label><?php echo $this->lang->line('picture'); ?> 3</label>
                                          <input type="hidden" class="form-control"   name="gambar3_" value="<?=$data->gambar3?>">

                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->gambar3?>">
                                               <img src="<?= base_url('assets/file/2ddesain/'). $data->gambar3?>" alt="" class="img-thumbnail  img-preview">
                                            </div>
                                            <input type="file" name="gambar3" class="drop-zone__input">
                                          </div>
                                      </div>
                                        <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 4</label>
                                         <input type="hidden" class="form-control"   name="gambar4_" value="<?=$data->gambar4?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->gambar4?>">
                                               <img src="<?= base_url('assets/file/2ddesain/'). $data->gambar4?>" alt="" class="img-thumbnail  img-preview">
                                            </div>
                                            <input type="file" name="gambar4" class="drop-zone__input">
                                          </div>
                                      </div>
                                      <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 5</label>
                                         <input type="hidden" class="form-control"   name="gambar5_" value="<?=$data->gambar4?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->gambar4?>">
                                               <img src="<?= base_url('assets/file/2ddesain/'). $data->gambar5?>" alt="" class="img-thumbnail  img-preview">
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
                                               <img src="<?= base_url('assets/file/2ddesain/'). $data->video1?>" alt="" class="img-thumbnail  img-preview">
                                            </div>
                                            <input type="file" name="video1" class="drop-zone__input">
                                          </div>
                                      </div>
                                       <div class="col-md-2" style="margin-right: 56px;">
                                          <label>Video 2</label>
                                         <input type="hidden" class="form-control"   name="video2_" value="<?=$data->video2?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->video2?>">
                                               <img src="<?= base_url('assets/file/2ddesain/'). $data->video2?>" alt="" class="img-thumbnail  img-preview">
                                            </div>
                                            <input type="file" name="video2" class="drop-zone__input">
                                          </div>
                                      </div>
                                    <div class="col-md-2" style="margin-right: 56px;">
                                          <label>Video 3</label>
                                         <input type="hidden" class="form-control"   name="video1_" value="<?=$data->video3?>">
                                          <div class="drop-zone">
                                            <div class="drop-zone__thumb" data-label="<?=$data->video3?>">
                                               <img src="<?= base_url('assets/file/2ddesain/'). $data->video3?>" alt="" class="img-thumbnail  img-preview">
                                            </div>
                                            <input type="file" name="video3" class="drop-zone__input">
                                          </div>
                                      </div>
                                     
                                  </div>

                                </div>
                                <br>
                              <?php } ?>
                              <h3>Detail Diamond</h3>
                               <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                              <table class="table table-hover" width="100%"  cellspacing="0">
                                                  <thead>
                                                      <tr height="20px">
                                                         
                                                          <th>Parcel</th>
                                                          <th>Jumlah</th>
                                                          <th>Berat</th>
                                                          <th><?php echo $this->lang->line('pengaturan'); ?></th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php
                                                      foreach($duaddesainsubdetail as $data){
                                                      ?>
                                                      <tr>
                                                        
                                                        <td><?php echo $data->parcel?></td>
                                                        <td><?php echo $data->jumlah?></td>
                                                        <td><?php echo $data->berat?></td>
                                                        <td>
                                                        <a href="#" data-toggle="modal" data-target="#ModalsubdetailEdit" id="<?=$data->id_subdetail?>|<?=$data->id_detail?>|<?=$data->berat?>|<?=$data->jumlah?>"    class="editsubdetail btn btn-sm btn-success" role="button" title="<?php echo $this->lang->line('change'); ?>">  <i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?> </a>
                                                        <a href="#" data-toggle="modal" data-target="#ModalHapussubdetaildesain" id="<?=$data->id_subdetail?>|<?=$data->id_detail?>"    class="hapussubdetaildesain btn btn-sm btn-danger" role="button" title="<?php echo $this->lang->line('delete'); ?>">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>
                                                      </td>
                                                      </tr>
                                                      <?php 
                                                      } 
                                                      ?>
                                                  </tbody>                  
                                              </table>
                                       </div>
                                </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                   <button type="submit" class="btn btn-info"><?php echo $this->lang->line('save'); ?></button> <a href="<?= base_url('tambahdata2ddesain'); ?>" class="btn btn-danger"><?php echo $this->lang->line('back'); ?></a>
                                </div>

                                </div>
                                
                               
                  </form>

                  
                </div>
                </div><br>
                
                
        </div>

          </div>

      </div>
                </div>
            </div>

        </div>

    </div>

    </form>
    
       
      </div>
    </div>
    </div>
    <br>
    <br>

 