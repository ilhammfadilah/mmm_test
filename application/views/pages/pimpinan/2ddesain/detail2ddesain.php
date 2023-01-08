<div class="content">
  <div class="container-fluid">
     <form action="<?php echo base_url() . 'pimpinan/update2ddesain'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="background-color: #858796">
            <div class="card-header card-header-info">
                <h5 class="card-title" style=""><?php echo $this->lang->line('transaction2ddesign'); ?></h5>
            </div>
                <div class="card-body">  
          
      <div class="row">
                <form action="<?php echo base_url() . 'pembelian'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                </form> 
      </div>
      <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="col-md-3">
                           <h4 style="margin-top: 10px;margin-bottom: 0px;padding-bottom: 0px;margin-left: 7px;">Header Design</h4>
                  </div>
                  
                  <div class="card-body"> 
                    <?php foreach ($designheader as $data) {
                    
                   ?>

                            <div class="row">
                              
                                <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
                                <div class="col-md-4">
                                        <div class="form-group">
                                          <label class="bmd-label-floating"><?php echo $this->lang->line('number'); ?></label>
                                          <input style="padding-bottom: 10px;width: 230px;" type="text" name="nomor" class="form-control" readonly value="<?=$data->nomor?>" required>
                                           <input style="padding-bottom: 10px;" type="hidden" name="id_header" class="form-control" readonly value="<?=$data->id_header?>">
                                           
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                          <label class="bmd-label-floating"><?php echo $this->lang->line('transactiondate'); ?></label>
                                          <input style="padding-bottom: 10px;" value="<?php echo date('Y-m-d'); ?>" type="date" value="<?=$data->tanggal?>"  name="tanggaltransaksi" id="tanggaltransaksi"  class="form-control"  readonly  required>
                                        </div>
                                </div>
                                
                              </div>
                              <div class="row">
                                
                                  
                                 <div class="col-md-4">
                                    <label style="margin-top: 10px;margin-bottom: 0px;padding-bottom: 0px;">Designer</label>
                                  <div class="input-group">
                                  
                                    <input style="padding-bottom: 10px;width: 160px;" id="nama" required readonly  type="text" value="<?=$data->namakaryawan?>" name="karyawan" class="form-control" >
                                  
                                     <input style="padding-bottom: 10px;width: 160px;" id="idkaryawan"   type="hidden" value="<?=$data->id_karyawan?>" name="idkaryawan" class="form-control" readonly>
                                   </div>
                                </div>
                               <div  class="col-md-3">
                                    
                                 <label  class="bmd-label-floating"><?php echo $this->lang->line('clientname'); ?></label>
                                  <div class="input-group">
                                   <input style="padding-bottom: 10px;width: 160px;" id="idclient" value="<?=$data->id_client?>"   type="hidden" name="idclient" class="form-control" readonly>
                                    <input style="padding-bottom: 10px;" type="text" id="namaklien" value="<?=$data->namaclient?>" readonly name="namaclient" class="form-control" >
                                   </div>
                                </div>
                                
                              </div>
                              <br>
                              <div class="row">
                                 <div class="col-md-12">
                                 <div class="form-group">

                                     <label class="bmd-label-floating" style="font-weight: bold">Memo</label>

                                     <p style="margin: 0"><?=$data->memo?></p>
                                     <!-- <textarea id="summernote" name="memo" readonly class="form-control" >
                                        
                                      </textarea> -->
                                   <!--   <input style="padding-bottom: 10px; height: 55px;" readonly value="<?=$data->memo?>" type="text" name="memo" class="form-control" > -->
                                  </div>
                              </div>
                             
                              </div>
                               <?php } ?>
                      </div>
                   
              </div>
        </div>
    </div><br>
               <?= $this->session->flashdata('message');?> 
      <div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-md-3">
                           <h4 style="margin-top: 10px;margin-bottom: 0px;padding-bottom: 0px;margin-left: 7px;">Detail Design</h4>
                </div>
               
              </div>
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-12">
                      <div class="table-responsive">
                <table class="table table-hover" width="100%"  cellspacing="0">
                                    <thead>
                                        <tr height="20px">
                                           
                                            <th>No</th>
                                            <th>Model</th>
                                            <th ><?php echo $this->lang->line('typedesign'); ?></th>
                                            <th><?php echo $this->lang->line('productcolor'); ?></th>
                                            <th>Material</th>
                                            <th><?php echo $this->lang->line('fee'); ?></th>
                                            <th><?php echo $this->lang->line('pengaturan'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         $no=1;
                                        foreach($detaildesain as $data){
                                       
                                        ?>
                                        <tr>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"  width="5%"><?php echo $no ?></td>
                                          <td><img src="<?= base_url('assets/file/2ddesain/'). $data->gambar1?>" style="width: 200px;height: 100px;"> <br> Model : <?php echo $data->model?><br> Sub Model : <?php echo $data->submodel?> </td>
                                          <td><?php echo $data->tipedesign?></td>
                                          <td><?php echo $data->warnaproduk?></td>
                                          <td><?php echo $data->material?><br> Berat Material : <?php echo $data->beratmaterial?> <?php echo $data->satuan?></td>
                                          <td><?php echo $data->ongkos?></td>
                                          <td>
                                         
                                          <a href="<?= base_url('detaildesain_header/' . $data->id_detail); ?>" class="btn btn-sm btn-secondary" role="button" title="<?php echo $this->lang->line('change'); ?>"><i class="fas fa-fw fa-search"></i> Detail Data</a>
                                        </tr>
                                        <?php 
                                        $no++;
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

          </div>

      </div><br>
      </button> <a href="<?= base_url('list2ddesain'); ?>" class="btn btn-danger"><?php echo $this->lang->line('back'); ?></a>
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

<!--  <script type="text/javascript">    
  <?php echo $ParcelArray; ?>  
  function changeValue(x){  
  document.getElementById('harga').value = prdParcel[x].harga;
  document.getElementById('harga1').value = prdParcel[x].harga_;
  document.getElementById('clarity').value = prdParcel[x].clarity;
  document.getElementById('shape').value = prdParcel[x].shape;
  document.getElementById('color').value = prdParcel[x].color;
  };  
 
</script> -->

 <!-- <script type="text/javascript">    
  <?php echo $ProdukArray; ?>  
  function UbahProduk(x){  
  document.getElementById('hargaproduk').value = prdProduk[x].hargaproduk;
  document.getElementById('hargaproduk1').value = prdProduk[x].hargaproduk_;
  document.getElementById('tipeproduk').value = prdProduk[x].tipeproduk;
  document.getElementById('brand').value = prdProduk[x].brand;
  document.getElementById('etalase').value = prdProduk[x].etalase;
  document.getElementById('kondisi').value = prdProduk[x].kondisi;
  };  
 
</script> -->
