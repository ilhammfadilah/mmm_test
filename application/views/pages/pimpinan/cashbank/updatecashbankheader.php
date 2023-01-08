<div class="content">
  <div class="container-fluid">
   

     <form action="<?php echo base_url() . 'pimpinan/updatecashbankheader'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-info">

                <h5 class="card-title" style=""><?php echo $this->lang->line('cbt'); ?></h5>
            </div>
                <div class="card-body">

      
 <div class="row">
                <form action="<?php echo base_url() . 'penjualan'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                </form> 
              </div>
              <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body"> 
            <?php foreach ($cashbankheader as $data ) {
              
            ?>
            <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">IN/OUT<small class="text-danger">*</small></label>
                        <select style="padding-bottom: 10px;width: 150px;" id="inout" name="inout" class="form-control" required>
                          <option value="<?=$data->inout?>">Data Asal : <?=$data->inout?></option>
                          <option value="I">IN</option>
                          <option value="O">OUT</option>
                        </select> 
                        
                        </div>
                </div>
                <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
                <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><?php echo $this->lang->line('transactiondate'); ?></label>
                          <input style="padding-bottom: 10px;" placeholder="<?=$data->tanggal?>" type="date"  name="tanggaltransaksi"  class="form-control" value="<?=$data->tanggal?>">
                          <?= form_error('tanggaltransaksi', '<small class="text-danger">', '</small>'); ?>
                        </div>
                </div>
                 <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><?php echo $this->lang->line('transactiontype'); ?></label>
                          <select style="padding-bottom: 10px;width: 330px;" id="typetransaksi"  name="typetransaksi" class="form-control" required>
                          <option value="<?=$data->typetransaksi?>">Type Transaksi Asal : <?=$data->typetransaksi?></option>
                          <option value="Reguler">Reguler</option>
                          <option value="Down Payment">Down Payment</option>
                          <option value="Invoice,Cancel Down Payment">Invoice</option>
                          <option value="Cancel Down Payment">Cancel Down Payment</option>
                        </select>
                        </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><?php echo $this->lang->line('number'); ?></label>
                          <input style="padding-bottom: 10px;" type="text" name="nomor" class="form-control" readonly value="<?=$data->nomor?>">
                           <input style="padding-bottom: 10px;" type="hidden" name="idcashbankheader" class="form-control" readonly value="<?=$data->id_cashbankheader?>">
                        </div>
                </div>
                 <div class="col-md-4">
                   <label><?php echo $this->lang->line('currency'); ?></label>
                  <div class="input-group">
                   
                    <input style="padding-bottom: 10px;width: 160px;" id="kodematauang"  type="text" name="matauang" class="form-control" readonly value="<?=$data->kodematauang?>">
                     <input style="padding-bottom: 10px;width: 160px;" id="idmatauang" value="<?=$data->id_matauang?>" type="hidden" name="idmatauang" class="form-control" readonly >
                    <span class="input-group-btn" >
                      <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalmatauang"><?php echo $this->lang->line('search'); ?></button>
                    </span> 
                   </div>
                       <!--  <div class="form-group">
                          <label>Mata Uang</label>
                          <select  name="idmatauang" class="form-control" required >
                              <option value="<?=$data->id_matauang?>">Mata Uang Asal : <?=$data->namamatauang?>(<?=$data->kodematauang?>)</option>
                              <?php
                              foreach($matauang as $data){
                              ?>
                              <option value="<?=$data->id_matauang?>"><?=$data->namamatauang?>(<?=$data->kodematauang?>)  </option>
                            <?php } ?>
                          </select>
                        </div> -->
                </div>
              <?php } ?>
              <?php foreach ($cashbankheader as $data ) {
              
            ?> <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Rate</label>
                          <input style="padding-bottom: 10px;width: 150px;text-align: right" type="text" id="rate" name="rate" class="form-control" readonly value="<?=$data->rate?>">
                        </div>
                </div>
              </div>
              <div class="row">
                  <!--  <div class="col-md-4">
                        <div id="subakun" class="form-group">
                          <label class="bmd-label-floating">Sub Akun</label>
                          <input style="padding-bottom: 10px;" type="text" name="subakun" value="<?=$data->subaccount?>" class="form-control" >
                        </div>
                </div> -->
                 <div id="subakun" class="col-md-3">
                    <label class="bmd-label-floating"><?php echo $this->lang->line('subaccount'); ?></label>
                  <div  class="input-group">
                 
                    <input style="padding-bottom: 10px;width: 160px;" id="subaccount" value="<?=$data->subaccount?>"   type="text" name="subaccount" class="form-control" readonly>
                    <span class="input-group-btn" >
                      <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalsubaccount"><?php echo $this->lang->line('search'); ?></button>
                    </span> 
                   </div>
                      <!--   <div id="subakun" class="form-group">
                         
                          <input style="padding-bottom: 10px;width: 270px;" type="text" name="subakun" class="form-control" >
                        </div> -->
                </div>
                <div id="namasubakun" class="col-md-5">
                        <label class="bmd-label-floating"><?php echo $this->lang->line('subaccountname'); ?></label>
                        <div  class="form-group">
                          
                          <input style="padding-bottom: 10px;" id="nama" type="text" name="subakun" value="<?=$data->nama?>" class="form-control" >
                        </div>
                </div>
                <div class="col-md-4">
                     <?php foreach ($totalcashbankdetail as $tcd) ?>
                     <?php foreach ($totalcashbanklawan as $tcl) 
                      $total = $tcl->totalnilai + $tcd->totalnilai;

                     ?>

                   <div  class="form-group">
                     <label class="bmd-label-floating">Total</label>
                        <input type="text" style="padding-bottom: 10px;width: 150px;text-align: right" placeholder="0" class="form-control" id="totalcashbankheader"    name="total"  value="<?php echo number_format($total,2,',','.') ?>"  readonly>
                  </div>
             
                </div>
                             
              </div>
             
              <div class="row">
                 <div class="col-md-12">
                 <div class="form-group">
                     <label class="bmd-label-floating">Memo</label>
                     <input style="padding-bottom: 10px; height: 55px;" type="text" name="memo" value="<?=$data->memo?>" class="form-control" >
                  </div>
              </div>
             
              </div>
             
           <?php } ?>

      </div>
  </div>
</div>
</div>
              
       <div class="row">

          <div class="col-md-12">
                <?= $this->session->flashdata('message');?>
               <div class="card">
          <div class="card-body">
                <h4  id="detail1"></h4>
            <div class="table-responsive">
                <table class="table table-hover"   width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                   
                                            <th>Cash-Bank</th>
                                            <th><?php echo $this->lang->line('description'); ?></th>
                                            <th><?php echo $this->lang->line('amount'); ?></th>
                                            <th><?php echo $this->lang->line('pengaturan'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <!--  <form action="<?php echo base_url() . 'pimpinan/addcashdetail'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">                                       
                                          <tr>
                                          
                                          <td><input style="padding-bottom: 10px;" id="namaakun" type="text" name="namaakun" class="form-control" readonly></td><input style="padding-bottom: 10px;" id="akun" type="hidden" name="akun" class="form-control" readonly></td>
                                          <td> <input style="padding-bottom: 10px;"  type="text" name="keterangan" class="form-control" ></td>
                                          <td> <input style="padding-bottom: 10px;"  type="number" name="nilai" class="form-control" required ></td>
                                          <td>
                                              <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalcoasat">Cari</button>
                                              <button type="submit" class="btn btn-info">Tambah</button>
                                            </td>

                                         
                                        </tr>
                                      </form> -->
                                        <?php
                                        $no=1;
                                        foreach($cashbankdetail as $data){
                                          
                                        ?>
                                       
                                        <tr>
                                    
                                          <form action="<?php echo base_url() . 'pimpinan/updatedetailcashbank'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                                             <td><input style="padding-bottom: 10px;width: 160px;"  type="text" value="<?php echo $data->akun?>" name="akun" class="form-control" >  <input style="padding-bottom: 10px;" type="hidden" name="idcashbankdetail" class="form-control" value="<?= $data->id_cashbankdetail ?>" required>
                                             <input style="padding-bottom: 10px;" type="hidden" name="idcashbankheader" class="form-control" value="<?= $data->id_cashbankheader ?>" required> </td>
                                             <td><input style="padding-bottom: 10px;width: 590px;" value="<?php echo $data->keterangan?>" type="text" name="keterangan" class="form-control" ></td>
                                             <td> 
                                               <input style="padding-bottom: 10px;width: 250px;text-align: right;" onblur="onblurfunctionubahdetail()" id="nilai" value="<?php echo number_format($data->nilai,2,',','.') ?>" type="text" name="nilai" class="form-control js-nilai1" required >
                                              
                                              </td>
                                         
                                        <!--  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data->namaakun?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" ><?php echo $data->keterangan?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data->nilai?></td> -->
                                          <td>
                                             
                                             <button style="margin-left: 3px;display: none;" type="submit" class="btn btn-success btn-sm"><i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?></button>
                                           </form>
                                            <!-- <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->id_cashbankdetail; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'pimpinan/deletecashbankdetail')" class="btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a></td> -->
                                            <a href="#" data-toggle="modal" data-target="#ModalHapuscashbank" id="<?=$data->id_cashbankdetail?>|<?=$data->id_cashbankheader?>"   title="Hapus" class="hapusdetailcashbank btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>
                                        </tr>
                                        
                                    </tbody>
                                  <?php } ?>
                                    <tfoot>
                                      <?php foreach ($totalcashbankdetail as $t) {
                                        ?>
                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td><input style="padding-bottom: 10px;text-align: right;width: 250px;" onkeyup="hitung()" id="totalnilaicashbankdetail"  type="text" name="totalnilaicashbankdetail" class="form-control js-nilai1" required readonly value="<?php echo number_format($t->totalnilai,2,',','.') ?>"></td>
                                        </tr>
                                       <?php 
                                 
                                        } 
                                        ?>
                                    </tfoot>
                                </table>

            </div>
                <div class="table-responsive">
                   <h4  id="detail2"></h4>
                <table class="table table-hover"   width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                   
                                            <th><?php echo $this->lang->line('account'); ?></th>
                                            <th><?php echo $this->lang->line('description'); ?></th>
                                            <th><?php echo $this->lang->line('amount'); ?></th>
                                            <th><?php echo $this->lang->line('pengaturan'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                        <?php
                                        $no=1;
                                        foreach($cashbanklawan as $data){
                                          
                                        ?>
                                       
                                        <tr>
                                    
                                      <form action="<?php echo base_url() . 'pimpinan/updatedetailcashbanklawan'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                                             <td><input style="padding-bottom: 10px;width: 160px;"  type="text" value="<?php echo $data->akun?>" name="akun" class="form-control" >  <input style="padding-bottom: 10px;" type="hidden" name="idcashbanklawan" class="form-control" value="<?= $data->id_cashbanklawan ?>" required>
                                             <input style="padding-bottom: 10px;" type="hidden" name="idcashbankheader" class="form-control" value="<?= $data->id_cashbankheader ?>" required> </td>
                                             <td><input style="padding-bottom: 10px;width: 590px;" value="<?php echo $data->keterangan?>" type="text" name="keterangan" class="form-control" ></td>
                                             <td> 
                                               <input style="padding-bottom: 10px;width: 250px;text-align: right;" id="nilai4" value="<?php echo number_format($data->nilai,2,',','.') ?>" type="text" name="nilai" class="form-control js-nilai1" required >
                                              
                                              </td>
                                         
                                        <!--  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data->namaakun?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" ><?php echo $data->keterangan?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data->nilai?></td> -->
                                          <td>
                                             
                                             <button style="margin-left: 3px;display: none;" type="submit" class="btn btn-success btn-sm"><i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?></button>
                                           </form>
                                           <!--  <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->id_cashbanklawan; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'pimpinan/deletecashbanklawan')" class="btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a> -->
                                           <a href="#" data-toggle="modal" data-target="#ModalHapuscashbanklawan" id="<?=$data->id_cashbanklawan?>|<?=$data->id_cashbankheader?>"   title="Hapus" class="hapuscashbanklawan btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>
                                          </td>
                                        </tr>
                                        
                                    </tbody>
                                  <?php } ?>
                                    <tfoot>
                                      <?php foreach ($totalcashbanklawan as $t) {
                                        ?>
                                        <tr>
                                          <td></td>
                                          <td></td>
                                         <td><input style="padding-bottom: 10px;text-align: right;width: 250px;"  id="totalnilaicashbanklawan" type="text" name="totalnilaicashbanklawan" class="form-control js-nilai1" required readonly value="<?php echo number_format($t->totalnilai,2,',','.') ?>"></td>
                                        </tr>
                                       <?php 
                                 
                                        } 
                                        ?>
                                    </tfoot>
                                </table>

            <button type="submit" class="btn btn-info"><?php echo $this->lang->line('save'); ?></button> <a href="<?= base_url('listcashbank'); ?>" class="btn btn-danger"><?php echo $this->lang->line('cancel'); ?></a>
            </div>
              
          </div>

        </div>
          </div> 

      </div>
      
                </div>
            </div>

        </div>

    </div>

    </form>
    
       </div></div>
      </div>
  

 
