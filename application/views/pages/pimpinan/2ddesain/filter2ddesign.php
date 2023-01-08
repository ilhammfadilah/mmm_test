<div class="container-fluid">

     
        <div class="row">
          <div class="col-12" id="data">
            <!-- /.card -->
            <?= $this->session->flashdata('message');?>
            <?php foreach ($read as $data) { ?>
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-3">
                    <h6>Nomor : <?php echo $data->nomor?></h6>   <h6>Designer : <?php echo $data->namakaryawan?></h6> <h6>Client : <?php echo $data->nama?></h6>
                  </div>
                  <div class="col-md-5"></div>
                  <div class="col-md-4">
                    <h6 style="text-align: right;">Tanggal : <?php echo $data->tanggal?></h6>
                  </div>
                </div>
              </div>
              <div class="card-body"  id="id<?php echo $data->id_header?>">
                  <div class="row">
                    <div class="col-md-3">
                      <p style="margin: 0">Memo : <?=$data->memo?></p>
                       
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3" style="text-align: right;">
                         <a href="<?= base_url('editdata2ddesain/' . $data->id_header); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"><i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?> </a>  <a href="#" data-toggle="modal" data-target="#ModalHapusDesain2D" id="<?=$data->id_header?>"   title="Hapus" class="hapusdetail2ddesain btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>
                    </div>
                  </div>
                
                  <input style="padding-bottom: 10px;" type="hidden" id="id_header" name="idheader" class="form-control" value="<?php echo $data->id_header?>" readonly>
                  <div class="card">
                    <div class="card-header">
                      <h5>Model Design</h5>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table table-hover" width="100%"  cellspacing="0" id="a<?php echo $data->id_header?>">
                              <thead>
                                <tr height="20px">
                                   <th>Model</th>
                                   <th >Keterangan</th>
                                   <th><?php echo $this->lang->line('pengaturan'); ?></th>
                                </tr>
                              </thead>
                          
                               <tbody>
                                        <?php
                                        foreach($detaildesain as $datas){
                                        ?>
                                        <?php if ($data->id_header == $datas->id_header): ?>
                                           <tr>
                                          <td style="width: 20%;"><img src="<?= base_url('assets/file/2ddesain/'). $datas->gambar1?>" style="width: 200px;height: 100px;"> <br> Model : <?php echo $datas->model?><br> Sub Model : <?php echo $datas->submodel?> </td>
                                          <td style="width: 40%;">Tipe Design : <?php echo $datas->tipedesign?> | Warna Produk : <?php echo $datas->warnaproduk?> <br> Material : <?php echo $datas->material?> | Berat Material : <?php echo $datas->beratmaterial?> <?php echo $datas->satuan?> <br> Konsep Kepala : <?=$datas->konsepkepala?> | Finishing : <?=$datas->finishing?> | Ongkos : <?=$datas->ongkos?> <br> Gender : <?=$datas->gender?> <br> Ukuran : <?=$datas->ukuran?></td>
                                          <td style="width: 40%;">
                                           <a href="<?= base_url('detaildesain_header/' . $datas->id_detail); ?>"  class="btn btn-sm btn-secondary" role="button" title="<?php echo $this->lang->line('change'); ?>"><i class="fas fa-fw fa-search"></i> Detail Data</a>
                                          </td>
                                        </tr>
                                        <?php endif ?>
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
              </div>
            </div>
            <br><?php } ?>
          </div>
        </div>
      </div>