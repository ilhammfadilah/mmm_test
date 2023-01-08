<div class="content">
  <div class="container-fluid">
   

     <form action="<?php echo base_url() . 'tambahdatacashbank'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="background-color: #858796">
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
            <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">IN/OUT<small class="text-danger">*</small></label>
                        <select style="padding-bottom: 10px;width: 100px;" id="inout" name="inout" class="form-control" required>
                          <option value="I">IN</option>
                          <option value="O">OUT</option>
                        </select> 
                        
                        </div>
                </div>
                <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
                <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><?php echo $this->lang->line('transactiondate'); ?></label>
                          <input style="padding-bottom: 10px;" value="<?php echo date('Y-m-d') ?>" type="date"  name="tanggaltransaksi"  class="form-control" >
                          <?= form_error('tanggaltransaksi', '<small class="text-danger">', '</small>'); ?>
                        </div>
                </div>
                 <div class="col-md-4">
                        <div  class="form-group">
                          <label class="bmd-label-floating"><?php echo $this->lang->line('transactiontype'); ?></label>
                          <select style="padding-bottom: 10px;width: 230px;" id="typetransaksi" name="typetransaksi" class="form-control" required>
                          <option value="Reguler">Reguler</option>
                          <option value="Down Payment">Down Payment</option>
                          <option value="Invoice">Invoice</option>
                          <option value="Cancel Down Payment">Cancel Down Payment</option>
                        </select>
                        </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><?php echo $this->lang->line('number'); ?></label>
                          <input style="padding-bottom: 10px;" type="text" name="nomor" class="form-control" readonly value="<?=$nomor?>">
                           <input style="padding-bottom: 10px;" type="hidden" name="id_cashbankheader" class="form-control" readonly value="<?=$id_cashbankheader?>">
                        </div>
                </div>
                  
                 <div class="col-md-4">
                    <label><?php echo $this->lang->line('currency'); ?></label>
                  <div class="input-group">
                  
                    <input style="padding-bottom: 10px;width: 160px;" id="kodematauang"  placeholder="IDR" type="text" name="matauang" class="form-control" readonly>
                     <input style="padding-bottom: 10px;width: 160px;" id="idmatauang" value="4"  type="hidden" name="idmatauang" class="form-control" readonly>
                    <span class="input-group-btn" >
                      <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalmatauang"><?php echo $this->lang->line('search'); ?></button>
                    </span> 
                   </div>

                        <!-- <div class="form-group">
                          <label>Mata Uang</label>
                      
                         <select  name="idmatauang" class="form-control" required onchange="changeValue(this.value)">
                              
                              <?php
                              foreach($matauang as $data){
                              ?>
                              <option value="<?=$data->id_matauang?>"><?=$data->namamatauang?>(<?=$data->kodematauang?>)  </option>
                            <?php } ?>
                          </select> 
                        </div> -->
                </div>
                 <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Rate</label>
                          <input style="padding-bottom: 10px;width: 150px;text-align: right;" id="rate" type="text" name="rate" class="form-control" readonly value="1.00">
                        </div>
                </div>
              </div>
              <div class="row">
             
                 <div id="subakun"  class="col-md-3">
                    
                 <label  class="bmd-label-floating"><?php echo $this->lang->line('subaccount'); ?></label>
                  <div class="input-group">
                    <input style="padding-bottom: 10px;width: 160px;" id="subaccount" value="1234567891"  type="text" name="subaccount" class="form-control" readonly>
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
                        <div   class="form-group">
                          <input style="padding-bottom: 10px;" type="text" id="nama" name="subakun" class="form-control" >
                        </div>
                </div>
                
                   <div class="col-md-4">
                     <?php foreach ($totalcashbankdetail as $tcd) ?>
                    <!--  <?php foreach ($totalcashbanklawan as $tcl) 
                      $total = $tcl->totalnilai + $tcd->totalnilai;
                     
                     ?> -->

                   <div  class="form-group">
                     <label class="bmd-label-floating">Total</label>
                        <input type="text" style="padding-bottom: 10px;width: 150px;text-align: right"  class="form-control js-nilai" id="totalcashbankheader"    name="total"  value="<?php echo number_format($tcd->totalnilai,2,',','.') ?>"  readonly>
                  </div>
             
                </div>
                <div class="col-md-4">
                   
                </div>
                
                 
               
              </div>
              <div class="row">
                 <div class="col-md-12">
                 <div class="form-group">
                     <label class="bmd-label-floating">Memo</label>
                     <input style="padding-bottom: 10px; height: 55px;" type="text" name="memo" class="form-control" >
                  </div>
              </div>
             
              </div>
             
           


      </div>
  </div>
</div>
</div>
       <br>       
      <div class="row">

         <div class="col-md-12">

          <?= $this->session->flashdata('message');?>
               <div class="card" >
          <div class="card-body">
            <div class="row" >
              <div class="col-md-3">
                 <h4  id="detail1"></h4>
              </div>
              <div class="col-md-9" >
                
                 <h6  style="text-align: right" class="m-0 font-weight-bold text-primary"> <a id="addbutton" class="text-info" style="text-decoration: none" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1"  href="#"> <i class="fas fa-fw fa-plus text-info"></i> <?php echo $this->lang->line('add'); ?></h6></a>
              </div>
            </div>
              <br>
            <div  class="table-responsive">
                <table class="table table-hover"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                   
                                            <th width="240px;">Cash-Bank</th>
                                            <th><?php echo $this->lang->line('description'); ?></th>
                                            <th><?php echo $this->lang->line('amount'); ?></th>
                                            <th><?php echo $this->lang->line('pengaturan'); ?></th>
                                        </tr>
                                    </thead>
                                    <!--  <div id="detailakun">
                                             
                                          </div> -->
                                    <tbody id="updatedetail">
                                      
                                        <?php
                                        $no=1;
                                        foreach($cashbankdetail as $data){


                                          
                                        ?>
                                       
                                        <tr id="user<?= $data->id_cashbankdetail ?>">
                                         <form  action="<?php echo base_url() . 'pimpinan/updatedetailcashbank'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                                         
                                             <td><input style="padding-bottom: 10px;width: 160px;"  type="text" id="akun3" value="<?php echo $data->akun?>" name="akun" class="form-control js-akun" > 
                                              <input style="padding-bottom: 10px;" type="hidden" id="idcashbankdetail" name="idcashbankdetail" class="form-control idcashbankdetail" value="<?= $data->id_cashbankdetail ?>" required>
                                             <input style="padding-bottom: 10px;" type="hidden" name="idcashbankheader" id="idcashbankheader" class="form-control" value="<?= $data->id_cashbankheader ?>" required>
                                              </td>
                                             <td><input style="padding-bottom: 10px;width: 590px;" id="keterangan" value="<?php echo $data->keterangan?>" type="text" name="keterangan" class="form-control js-keterangan" ></td>
                                             <td> 
                                               <input style="padding-bottom: 10px;width: 250px;text-align: right;"  id="nilai" value="<?php echo number_format($data->nilai,2,',','.') ?>" type="text" name="nilai" class="form-control js-nilai" required >
                                              
                                              </td>
                                     
                                            
                                         
                                  
                                          <td>
                                             
                                             <button style="margin-left: 3px;display: none;" type="submit" class="btn btn-success btn-sm"><i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?></button>
                                           </form>
                                         
                                           <a href="#" data-toggle="modal" data-target="#ModalHapuscashbank" id="<?=$data->id_cashbankdetail?>|<?=$data->id_cashbankheader?>"   title="Hapus" class="hapusdetailcashbank btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>
                                          </td>
                                        </tr>
                                         <?php } ?>
                                         
                                        <tr id="addform" style="display: none">
                                        <form   action="<?php echo base_url() . 'pimpinan/addcashdetail'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">                                       
                                          
                                          
                                          <td>
                                              <div class="input-group" >
                                              <input style="padding-bottom: 10px;width: 10px;" id="akun" type="text" name="akun" class="form-control">
                                              <span class="input-group-btn" >
                                                <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalcoasat"><?php echo $this->lang->line('search'); ?></button>
                                              </span>

                                              </div>
                                          </td>
                                         

                                         <td> <input style="padding-bottom: 10px;width: 590px;" id="namaakun" type="text" name="keterangan" class="form-control" ></td>
                                          <td> <input style="padding-bottom: 10px;width: 250px;text-align: right;" onblur="onblurfunctiondetail()" type="text" id="nilai2" name="nilai" class="form-control js-nilai" required ></td>
                                          <td style="display: none">
                                              <button type="submit" class="btn btn-info"><i class="fas fa-fw fa-plus"></i> <?php echo $this->lang->line('add'); ?></button>
                                          </td>
                                       
                                        </form>
                                         </tr>
                                        <?php foreach ($totalcashbankdetail as $t) {
                                        ?>
                                        <tr id="shadow" style="display: none">
                                          <td></td>
                                          <td align="right">Total </td>
                                          <td><input style="padding-bottom: 10px;width: 250px;text-align: right;" id="totalnilaicashbankdetail"  type="text" name="totalnilaicashbankdetail" class="form-control js-nilai" required readonly value="<?php echo number_format($t->totalnilai,2,',','.') ?>"></td>
                                        </tr>

                                       
                                       <?php 
                                 
                                        } 
                                        ?>
                                     
                                    </tbody>                     
                                </table>
            </div>
            <br>
            <div class="row">
                 <div class="col-md-3">
                     <h4 id="detail2"></h4>
                    </div>
                    <div class="col-md-9">
                        <h6  style="text-align: right" class="m-0 font-weight-bold text-primary"> <a id="addbutton1" class="text-info" style="text-decoration: none" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1"  href="#"> <i class="fas fa-fw fa-plus text-info"></i> <?php echo $this->lang->line('add'); ?></h6></a><br>
                    </div>
            </div>
                <div class="table-responsive">
                  <table class="table table-hover"   width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                   
                                            <th width="240px;"><?php echo $this->lang->line('account'); ?></th>
                                            <th><?php echo $this->lang->line('description'); ?></th>
                                            <th><?php echo $this->lang->line('amount'); ?></th>
                                            <th><?php echo $this->lang->line('pengaturan'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody id="updatedetaillawan">
                                       <?php
                                        $no=1;
                                        foreach($cashbanklawan as $data){
                                          
                                        ?>
                                       
                                        <tr>
                                         <form action="<?php echo base_url() . 'pimpinan/updatedetailcashbanklawan'; ?> "  method="post">                                       
                                          <tr id="user<?= $data->id_cashbanklawan ?>">
                                          
                                          <td>

                                            <input style="padding-bottom: 10px;" type="hidden" id="idcashbanklawan4" name="idcashbanklawan" class="form-control" value="<?= $data->id_cashbanklawan ?>">
                                            <input style="padding-bottom: 10px;width: 160px;" value="<?php echo $data->akun?>" id="akun4" type="text" name="akun" class="form-control" required> 
                                            <input style="padding-bottom: 10px;" id="idcashbankheader4" type="hidden" name="idcashbankheader" class="form-control" value="<?= $data->id_cashbankheader ?>" required>
                                          </td>
                                          <td>
                                          <input style="padding-bottom: 10px;width: 590px;" value="<?php echo $data->keterangan?>" type="text" id="keterangan4" name="keterangan" class="form-control"></td>
                                          <td><input style="padding-bottom: 10px;width: 250px;text-align: right;"  value="<?php echo number_format($data->nilai,2,',','.') ?>" type="text" id="nilai4" name="nilai" class="form-control js-nilai" required ></td>
                                       
                                        
                                     
                                        <!--  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" ><?php echo $data->namaakun?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" ><?php echo $data->keterangan?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $data->nilai?></td>-->
                                          <td> 
                                             
                                           <button  style="margin-left: 3px;display: none;" type="submit" class="btn btn-success btn-sm"><i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?></button>
                                          </form>
                                           <!--  <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->id_cashbanklawan; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'pimpinan/deletecashbanklawan')" class="btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a> -->
                                           <a href="#" data-toggle="modal" data-target="#ModalHapuscashbanklawan" id="<?=$data->id_cashbanklawan?>|<?=$data->id_cashbankheader?>"   title="Hapus" class="hapuscashbanklawan btn btn-sm btn-danger" role="button" title="Hapus">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>
                                          </td>
                                        </tr>
                                          <?php } ?>
                                        
                                                                    
                                          <tr id="addform1" style="display: none">
                                           <form id="myForm" action="<?php echo base_url() . 'pimpinan/addcashlawan'; ?> "  method="post">        
                                          <td>
                                            <div class="input-group">
                                              <input style="padding-bottom: 10px;width: 100px;" id="akundua" type="text" name="akun" required class="form-control" >
                                              <span class="input-group-btn" >
                                                 <button style="margin-left: 3px;" type="button" class="btn btn-success btn-flat"  data-toggle="modal"  data-target="#modalcoadua" ><?php echo $this->lang->line('search'); ?></button>
                                              </span>

                                              </div>
                                            </td>
                                          <td>
                                          <input style="padding-bottom: 10px;width: 590px;" id="namaakundua" type="text" name="keterangan" required class="form-control"></td>
                                          <td> <input style="padding-bottom: 10px;width: 250px;text-align: right;" id="nilai1" required  type="text" name="nilai" onblur="onblurfunctionlawan()" class="form-control js-nilai" required ></td>
                                          <td style="display: none">
                                             
                                              <button type="submit" class="btn btn-info"><?php echo $this->lang->line('add'); ?></button>
                                            </td>

                                           </form>
                                        </tr>
                                        <?php foreach ($totalcashbanklawan as $t) {
                                        ?>
                                        <tr id="shadow1" style="display: none">
                                         <td></td>
                                         <td align="right">Total </td>
                                         <td><input style="padding-bottom: 10px;width: 250px;text-align: right;"  id="totalnilaicashbanklawan" type="text" name="totalnilaicashbanklawan" class="form-control" required readonly value="<?php echo number_format($t->totalnilai,2,',','.') ?>"></td>
                                        </tr>
                                       <?php 
                                 
                                        } 
                                        ?>
                                       
                                    </tbody>
                                
                                    
                                </table>
                

            </div><br>
               <button type="submit" class="btn btn-info"><?php echo $this->lang->line('save'); ?></button> <a href="<?= base_url('listcashbank'); ?>" class="btn btn-danger"><?php echo $this->lang->line('cancel'); ?></a>
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
  

 