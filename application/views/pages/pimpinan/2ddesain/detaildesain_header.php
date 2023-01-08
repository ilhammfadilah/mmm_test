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
                      <form action="<?php echo base_url() . 'pimpinan/updatedetaildesain'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                   <div class="row">
                                     <div class="col-md-4">
                                        <label>Model<small class="text-danger">*</small></label>
                                      <div class="input-group">
                                        <input style="padding-bottom: 10px;" type="hidden" name="iddetail" class="form-control" value="<?=$data->id_detail?>" readonly> 
                                        <input style="padding-bottom: 10px;max-width: 200px;" type="text" name="model" readonly class="form-control" required value="<?=$data->model?>">
                                        <input style="padding-bottom: 10px;max-width: 100px; margin-left: 5px;" type="text" readonly name="submodel" class="form-control" value="<?=$data->submodel?>" >
                                        
                                       </div>

                                         <?= form_error('model_', '<small class="text-danger" style="margin-left:205px;">', '</small>'); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label class="bmd-label-floating"><?php echo $this->lang->line('transactiondate'); ?></label>
                                          <input style="padding-bottom: 10px;" value="<?php echo date('Y-m-d'); ?>" type="date" value="<?= set_value('tanggaltransaksi') ?>"  name="tanggaltransaksi" readonly id="tanggaltransaksi"  class="form-control"   >
                                        </div>
                                    </div>
                                      
                                    <div class="col-md-4">
                                        <label><?php echo $this->lang->line('producttype'); ?><small class="text-danger">*</small></label>
                                      <div class="input-group">
                                      
                                        <input style="padding-bottom: 10px;width: 160px;" id="tipeproduk"   type="text" name="tipeproduk" class="form-control" required value="<?=$data->tipedesign?>" readonly>
                                      
                                         <input style="padding-bottom: 10px;width: 160px;" id="idtipedesign"   type="hidden" name="idtipedesign" class="form-control" value="<?=$data->id_tipe?>" readonly>
                                       </div>
                                    </div>
                                    

                                    
                                </div>
                                 <div class="row">
                                     <div class="col-md-4">
                                      <label>Material<small class="text-danger">*</small></label>
                                      <div class="input-group">
                                      
                                        <input style="padding-bottom: 10px;width: 10px;" id="material" readonly type="text" name="material" class="form-control" value="<?=$data->material?>" onblur="gethargamaterial()">                                      
                                        <input style="padding-bottom: 10px;width: 160px;" value="<?=$data->id_material?>" id="idmaterial"   type="hidden" name="idmaterial" class="form-control" readonly>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Berat<small class="text-danger">*</small></label>
                                      <div class="input-group">
                                         <input style="padding-bottom: 10px;max-width: 400px;text-align: right;"  value="<?=$data->beratmaterial?>" onkeyup="hitungmaterial()" type="number" readonly step="any" name="beratmaterial" id="beratmaterial" class="form-control" required>
                                         <input style="padding-bottom: 10px;max-width: 100px;background-color: silver" placeholder="Satuan Berat" id="satuan" readonly  type="text" name="satuan" value="<?=$data->satuan?>" class="form-control" required>
                                      </div>
                                      
                                    </div>
                                   

                                     <div class="col-md-4">
                                        <label><?php echo $this->lang->line('headconcept'); ?><small class="text-danger">*</small></label>
                                      <div class="input-group">
                                        
                                        <input style="padding-bottom: 10px;width: 200px;" readonly value="<?=$data->konsepkepala?>" id="konsepkepala"   type="text" name="konsepkepala" class="form-control" required>
                                      
                                         <input style="padding-bottom: 10px;width: 160px;" id="idkonsepkepala" value="<?=$data->id_konsepkepala?>"  type="hidden" name="idkonsepkepala" class="form-control" readonly>
                                       </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                     
                                    <div class="col-md-4">
                                        <label><?php echo $this->lang->line('finishing'); ?><small class="text-danger">*</small></label>
                                      <div class="input-group">
                                      
                                        <input style="padding-bottom: 10px;width: 160px;" readonly id="finishing" value="<?=$data->finishing?>"  type="text" name="finishing" class="form-control" required>
                                      
                                         <input style="padding-bottom: 10px;width: 160px;" id="idfinishing" value="<?=$data->id_finishing?>"  type="hidden" name="idfinishing" class="form-control" readonly>
                                       </div>
                                    </div>
                                     <div class="col-md-4">
                                        <label><?php echo $this->lang->line('productcolor'); ?><small class="text-danger">*</small></label>
                                      <div class="input-group">
                                      
                                        <input style="padding-bottom: 10px;max-width: 400px;" readonly value="<?=$data->warnaproduk?>" id="warnaproduk"   type="text" name="warnaproduk" class="form-control" required>
                                         <input style="padding-bottom: 10px;width: 160px;" id="idwarnaproduk" value="<?=$data->id_warnaproduk?>"  type="hidden" name="idwarnaproduk" class="form-control" readonly>
                                       </div>
                                    </div>


                                    <div class="col-md-4">
                                        <label><?php echo $this->lang->line('fee'); ?><small class="text-danger">*</small></label>
                                      <div class="input-group">
                                      
                                        <input style="padding-bottom: 10px;width: 160px;" readonly id="ongkos" value="<?=$data->ongkos?>" type="text" name="ongkos" class="form-control"  required>
                                         <input style="padding-bottom: 10px;width: 160px;" id="idongkos" value="<?=$data->id_ongkos?>"  type="hidden" name="idongkos" class="form-control" readonly>
                                       </div>
                                    </div>

                                  
                                </div>

                                <div class="row">
                                  <div class="col-md-4">
                                    <label><?php echo $this->lang->line('gender'); ?><small class="text-danger">*</small></label>
                                         <input style="padding-bottom: 10px;width: 160px;" readonly id="ongkos" value="<?=$data->gender?>" type="text" name="ongkos" class="form-control"  required>
                                  </div>
                                  <div class="col-md-4">
                                      <label><?php echo $this->lang->line('size'); ?><small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;width: 300px;text-align: right;" readonly  type="number" step="any" value="<?=$data->ukuran?>" name="ukuran" class="form-control">
                                  </div>
                                   
                                </div><br>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-md-4">
                                      <h4>Jatah Susut</h4>
                                  </div>
                                  <div class="col-md-4"></div>
                                  <div class="col-md-4">
                                    <h4>Estimasi Harga</h4>
                                  </div>
                                </div>
                               <br>
                                 
                                <div class="row">
                                  <div class="col-md-4">
                                      
                                         <div class="input-group">
                                            <label>Finishing<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 260px;  margin-left: 70px;text-align: right;" readonly value="<?=$data->jsfinishing?>" type="number" step="any" name="jsfinishing" class="form-control">
                                         <input style="padding-bottom: 10px;max-width: 100px;background-color: silver" placeholder="Satuan Berat" id="satuanjsfinishing" readonly value="<?=$data->satuan?>"  type="text" name="satuanberat" class="form-control" required>
                                        
                                       </div>
                                  </div>

                                  <div class="col-md-4"></div>
                                  <div class="col-md-4">
                                      
                                         <div class="input-group">
                                          <label>Material<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:  43px;" id="hargamaterial"  type="hidden" value="<?php echo $data->hargamaterial ?>" name="hargamaterial" readonly class="form-control">
                                         <input style="padding-bottom: 10px;max-width: 300px; margin-left: 43px;text-align: right;" readonly  type="text" readonly id="hargamaterial_" id="hargamaterial_" name="hargamaterial_" placeholder="<?php echo number_format($data->hargamaterial,0,',','.') ?>" class="form-control">
                                        
                                       </div>
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="col-md-4">
                                      
                                         <div class="input-group">
                                          <label>Poles Rangka<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 260px; margin-left: 37px;text-align: right;" value="<?=$data->jspolesrangka?>" type="number" step="any" name="jspolesrangka" class="form-control" readonly>
                                         <input style="padding-bottom: 10px;max-width: 100px;background-color: silver" placeholder="Satuan Berat" readonly id="satuanjspolesrangka" value="<?=$data->satuan?>" readonly  type="text" name="satuanberat" class="form-control" required>
                                       </div>
                                  </div>

                                  <div class="col-md-4"></div>
                                  <div class="col-md-4">
                                         <div class="input-group">
                                          <label>Diamond<small class="text-danger">*</small></label>
                                         
                                           <input style="padding-bottom: 10px;max-width: 300px; margin-left: 37px;text-align: right;" readonly id="hargadiamond"  type="hidden" name="hargadiamond" value="<?php echo $data->hargadiamond ?>" readonly class="form-control">
                                           <input style="padding-bottom: 10px;max-width: 300px; margin-left: 37px;text-align: right;" id="hargadiamond_"  type="text" name="hargadiamond" value="<?php echo number_format($data->hargadiamond,0,',','.') ?>" readonly class="form-control">
                                            <input style="padding-bottom: 10px;max-width: 300px; margin-left: 37px;"  type="hidden" name="totaljumlah" value="<?=$data->totaljumlah?>" readonly class="form-control">
                                             <input style="padding-bottom: 10px;max-width: 300px; margin-left: 37px;"  type="hidden" name="totalberat" value="<?=$data->totalberat?>" readonly class="form-control">
                                      
                                        
                                       </div>
                                  </div>
                                </div><br>
                                 <div class="row">
                                  <div class="col-md-4">
                                      
                                         <div class="input-group">
                                          <label>Pasang Batu<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 260px; margin-left: 44px;text-align: right;" readonly type="number" step="any" name="jspasangbatu" value="<?=$data->jspasangbatu?>" class="form-control">
                                         <input style="padding-bottom: 10px;max-width: 100px;background-color: silver" placeholder="Satuan Berat" id="satuanjspasangbatu" value="<?=$data->satuan?>" readonly  type="text" name="satuanberat" class="form-control" required>
                                        
                                       </div>
                                  </div>

                                  <div class="col-md-4"></div>
                                  <div class="col-md-4">
                                      
                                         <div class="input-group">
                                          <label>Kepala<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:53px;text-align: right;"  readonly value="<?php echo $data->hargakepala ?>" type="hidden" id="kepala" name="hargakepala" class="form-control">
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:53px;text-align: right;"  readonly value="<?php echo number_format($data->hargakepala,0,',','.') ?>" type="text" id="kepala_" name="hargakepala" class="form-control">
                                        
                                  </div>
                                  </div>
                                 
                                </div>
                                <br>
                                 <div class="row">
                                  <div class="col-md-4">
                                      
                                         <div class="input-group">
                                          <label>Rakit<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 260px; margin-left: 95px;text-align: right;" readonly  type="number" step="any" name="jspolesrakit" class="form-control" value="<?=$data->jsrakit?>">
                                         <input style="padding-bottom: 10px;max-width: 100px;background-color: silver" placeholder="Satuan Berat" id="satuanjsrakit"  value="<?=$data->satuan?>" readonly  type="text" name="satuanberat" class="form-control" required>
                                        
                                       </div>
                                  </div>
                                  <div class="col-md-4"></div>
                                  <div class="col-md-4">
                                      
                                         <div class="input-group">
                                          <label>Ongkos<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:48px;text-align: right;" id="hargaongkos" type="hidden" name="hargaongkos" value="<?php echo $data->hargaongkos ?>" readonly class="form-control">
                                        
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:48px;text-align: right;" id="hargaongkos_" type="text" name="hargaongkos_" value="<?php echo number_format($data->hargaongkos,0,',','.') ?>" readonly class="form-control">

                                       </div>
                                  </div>
                                 
                                </div><br>
                                 <div class="row">
                                  <div class="col-md-4">
                                      
                                         <div class="input-group">
                                          <label>Poles Chrome<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 260px; margin-left:30px;text-align: right;" readonly  type="number" step="any" name="jspoleschrome" class="form-control" value="<?=$data->jspoleschrome?>" >
                                         <input style="padding-bottom: 10px;max-width: 100px;background-color: silver" placeholder="Satuan Berat" id="satuanjspoleschrome" readonly value="<?=$data->satuan?>"  type="text" name="satuanberat" class="form-control" required>
                                        
                                       </div>
                                  </div>

                                  <div class="col-md-4"></div>
                                     <div class="col-md-4">
                                      
                                         <div class="input-group">
                                          <label>Total<small class="text-danger">*</small></label>
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:67px;text-align: right;display: none" id="total" readonly value="<?php echo number_format($data->totalharga,0,',','.') ?>" type="text" name="total" class="form-control">
                                        <input style="padding-bottom: 10px;max-width: 300px; margin-left:67px;text-align: right;" id="total_" readonly value="<?php echo number_format($data->totalharga,0,',','.') ?>" type="text" name="total_" class="form-control">
                                        
                                       </div>
                                  </div>
                                 
                                </div><br>
                              <?php } ?>

                                <div class="card">
                                  <div class="card-body">
                                    <h3 class="text-primary">Detail Diamond</h3>
                               <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                              <table class="table table-hover" width="100%"  cellspacing="0">
                                                  <thead>
                                                      <tr height="20px">
                                                         
                                                          <th>Parcel</th>
                                                          <th>Harga</th>
                                                          <th>Clarity</th>
                                                          <th>Shape</th>
                                                          <th>Color</th>
                                                          <th>Jumlah</th>
                                                          <th>Berat</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php
                                                      foreach($duaddesainsubdetail as $data){
                                                      ?>
                                                      <tr >
                                                        
                                                        <td style="width: 250px"><input readonly style="padding-bottom: 10px;width: 250px;" value="<?php echo $data->id_subdetail?>" id="idsubdetail" type="hidden" name="idsubdetail" class="form-control" > <input  style="padding-bottom: 10px;width: 250px;" readonly value="<?php echo $data->parcel?>" id="parcel" type="text" name="parcel" class="form-control" ><input readonly style="padding-bottom: 10px;width: 250px;" value="<?php echo $data->id_parcel?>" id="idparcel" type="hidden" name="idparcel" class="form-control" ></td>
                                                         <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;text-align:right;" value="<?php echo number_format($data->hargadiamond,0,',','.') ?>" id="harga_" type="text" name="hargadetail" class="form-control" ><input readonly style="padding-bottom: 10px;width: 150px;text-align:right;" value="<?php echo $data->hargadiamond ?>" id="harga_" type="hidden" name="hargadetail_" class="form-control" ></td>
                                                         <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?php echo $data->clarity?>" id="clarity_" type="text" name="clarity" class="form-control" ></td>
                                                         <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?php echo $data->shape?>" id="shape_" type="text" name="shape" class="form-control" ></td>
                                                         <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?php echo $data->color?>" id="color_" type="text" name="color" class="form-control" ></td>
                                                         <td style="width: 150px"><input style="padding-bottom: 10px;width: 150px;text-align:right" value="<?php echo $data->jumlah?>" id="jumlah_" type="number" readonly  name="jumlah" class="form-control" ></td>
                                                         <td style="width: 150px"><input  style="padding-bottom: 10px;width: 150px;text-align:right" value="<?php echo $data->berat?>" id="berat_" type="number" readonly step="any" name="berat" class="updatesubdetail form-control" ></td>
                                                        
                                                       
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
                                  </div>
                                </div>
                                 
                              <br>
                              <div class="card">
                                <div class="card-body">
                                  <h3 class="text-primary">Detail Kepala</h3>
                               <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                              <table class="table table-hover" width="100%"  cellspacing="0">
                                                  <thead>
                                                      <tr height="20px">
                                                         
                                                          <th>Nama Produk</th>
                                                          <th>Tipe Produk</th>
                                                          <th>Brand</th>
                                                          <th>Etalase</th>
                                                          <th>Kondisi</th>
                                                          <th>Harga</th>
                                                          <th>Jumlah</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                                  <?php
                                                                  foreach($desainkepala as $data){
                                                                  ?>
                                                                  <tr>
                                                                       <td style="width: 250px"> <input readonly  style="padding-bottom: 10px;width: 250px;" value="<?=$data->namaproduk?>" id="produk_" type="text" name="produk" class="form-control" ><input style="padding-bottom: 10px;width: 10px;" value="<?=$data->id_produk?>" id="idproduk_" type="hidden" name="idbarang" class="form-control" ><input style="padding-bottom: 10px;width: 110px;" value="<?=$data->id_subdetailkepala?>" id="idsubdetailkepala_" type="hidden" name="idsubdetailkepala" class="form-control" ><input style="padding-bottom: 10px;width: 10px;" value="<?=$data->id_detail?>" id="iddetail" type="hidden" name="iddetail" class="form-control" ></td>
                                                                       <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?=$data->tipeproduk?>" id="tipeproduk_" type="text" name="tipeproduk" class="form-control" ></td>
                                                                       <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?=$data->brand?>" id="brand_" type="text" name="brand" class="form-control" ></td>
                                                                       <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;text-align:right" value="<?=$data->etalase?>" id="etalase_" type="text" name="etalase" class="form-control" ></td>
                                                                       <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?=$data->kondisi?>" id="kondisi_" type="text" name="kondisi" class="form-control" ></td>
                                                                       <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;text-align:right" value='<?php echo number_format($data->hargaproduk,0,',','.') ?>' id="hargaproduk_" type="text" name="hargaproduk" class="form-control" ><input readonly style="padding-bottom: 10px;width: 150px;text-align:right" value='<?php echo $data->hargaproduk ?>' id="hargaprodukdetail_" type="hidden" name="hargaproduk_" class="form-control" ></td>
                                                                       <td style="width: 150px"><input  style="padding-bottom: 10px;width: 150px;text-align:right" value="<?=$data->jumlah?>" id="jumlah_" step="any" type="number" readonly name="jumlah" class="form-control" ></td>
                                                                   
                                                                  </tr>
                                                                  <?php 
                                                                  } 
                                                                  ?>
                                                                      </tr>
                                                              </tbody>             
                                              </table>
                                       </div>
                                </div>
                              </div>
                                </div>
                              </div>
                              
                                <br><br>
                                  <?php foreach ($detaildesain as $data) {
                      
                                 ?>
                                 <div id="gambar" >
                                  <h5> Format gambar .jpg .jpeg .png dan untuk ukuran size maksimal 10 MB</h5>
                                  <div class="row">
                                    
                                       
                                        
                                       <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 1</label>
                                           <img src="<?= base_url('assets/file/2ddesain/'). $data->gambar1?>" alt="" class="img-thumbnail  img-preview">
                                      </div>
                                      <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 2</label>
                                          <img src="<?= base_url('assets/file/2ddesain/'). $data->gambar2?>" alt="" class="img-thumbnail  img-preview">
                                      </div>
                                   

                                    <div class="col-md-2" style="margin-right: 56px;">
                                        <label><?php echo $this->lang->line('picture'); ?> 3</label>
                                          <img src="<?= base_url('assets/file/2ddesain/'). $data->gambar3?>" alt="" class="img-thumbnail  img-preview">
                                      </div>
                                        <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 4</label>
                                          <img src="<?= base_url('assets/file/2ddesain/'). $data->gambar4?>" alt="" class="img-thumbnail  img-preview">
                                      </div>
                                      <div class="col-md-2" style="margin-right: 56px;">
                                          <label><?php echo $this->lang->line('picture'); ?> 5</label>
                                           <img src="<?= base_url('assets/file/2ddesain/'). $data->gambar5?>" alt="" class="img-thumbnail  img-preview">
                                      </div>
                                  </div><br>
                                   <h5> Format video .mp4 .mkv .afi .mpg dan untuk size video maksimal 10 MB</h5>
                                   <div class="row">
                                   <div class="col-md-2" style="margin-right: 56px;">
                                          <label>Video 1</label>
                                          <video controls>
                                            <source src="<?= base_url('assets/file/2ddesain/'). $data->video1?>" type="video/webm" />
                                            Browsermu tidak mendukung 
                                          </video>
                                      </div>
                                       <div class="col-md-2" style="margin-right: 56px;">
                                          <label>Video 2</label>
                                            <video controls>
                                            <source src="<?= base_url('assets/file/2ddesain/'). $data->video2?>" type="video/webm" />
                                            Browsermu tidak mendukung 
                                          </video> 
                                      </div>
                                    <div class="col-md-2" style="margin-right: 56px;">
                                          <label>Video 3</label>
                                         <video controls>
                                            <source src="<?= base_url('assets/file/2ddesain/'). $data->video3?>" type="video/webm" />
                                            Browsermu tidak mendukung                                           
                                          </video> 
                                     
                                  </div>

                                </div>
                                <br>
                              <?php } ?>
                             
                              <div class="row">
                                  <div class="col-md-12">
                                      <a href="<?= base_url("list2ddesain"); ?>" class="btn btn-danger"><?php echo $this->lang->line('back'); ?></a>
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

 