<div class="content">
  <div class="container-fluid">
   

     <form action="<?php echo base_url() . 'pimpinan/updatecashbankheaeder'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-info">

                <h4 class="card-title" style="">Form Data <?php echo $this->lang->line('cashbank'); ?></h4>
                <h9 class="card-category"><?php echo $this->lang->line('entry'); ?> Data <?php echo $this->lang->line('cashbank'); ?></h9>
            </div>
                <div class="card-body">

          <?= $this->session->flashdata('message');?>
 <div class="row">
                <form action="<?php echo base_url() . 'penjualan'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                </form> 
              </div>
              <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body"> 
            <h4>Data <?php echo $this->lang->line('cbh'); ?></h4>
            <hr>
            <?php foreach ($cashbankheader as $data ) {
              
            ?>
            <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">IN/OUT<small class="text-danger">*</small></label>
                        <input style="padding-bottom: 10px;" type="text" name="id_cashbankheader" class="form-control" readonly value="<?=$data->inout?>">
                        
                        </div>
                </div>
                <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
                <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><?php echo $this->lang->line('transactiondate'); ?></label>
                          <input style="padding-bottom: 10px;" type="date"  name="tanggaltransaksi" readonly value="<?=$data->tanggal?>"  class="form-control" >
                          <?= form_error('tanggaltransaksi', '<small class="text-danger">', '</small>'); ?>
                        </div>
                </div>
                 <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><?php echo $this->lang->line('transactiontype'); ?></label>
                         <input style="padding-bottom: 10px;" type="text" name="id_cashbankheader" class="form-control" readonly value="<?=$data->typetransaksi?>">
                        </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><?php echo $this->lang->line('number'); ?></label>
                          <input style="padding-bottom: 10px;" type="text" name="nomor" class="form-control" readonly value="<?=$data->nomor?>">
                           <input style="padding-bottom: 10px;" type="hidden" name="id_cashbankheader" class="form-control" readonly value="<?=$data->id_cashbankheader?>">
                        </div>
                </div>
                   <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><?php echo $this->lang->line('subaccount'); ?></label>
                          <input style="padding-bottom: 10px;" type="text" name="subaccount" value="<?=$data->subaccount?>"  readonly class="form-control" >
                        </div>
                </div>
             
                 <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo $this->lang->line('currency'); ?></label>
                           <input style="padding-bottom: 10px;" type="text" name="subaccount" value="<?=$data->matauang?>" readonly class="form-control" >
                        </div>
                </div>
              </div>

           <?php } ?>
              <div class="row">
                <?php foreach ($totalcashbankdetail as $tcd) ?>
                <?php foreach ($totalcashbanklawan as $tcl) 
                $total = $tcl->totalnilai + $tcd->totalnilai;

                ?>
                
                   <div class="col-md-4">
               
                   <div class="form-group">
                     <label class="bmd-label-floating">Total</label>
                        <input type="text" class="form-control" style="text-align: right" id="totalcashbankheader" readonly o   name="total"  value="<?=$total?>"  readonly>
                  </div>
                </div>
                 <?php foreach ($cashbankheader as $data ) {
              
                 ?>
                <div class="col-md-4">
                   
                </div>
                 <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Rate</label>
                          <input style="padding-bottom: 10px;" type="text" name="rate" readonly class="form-control" readonly value="<?=$data->rate?>">
                        </div>
                </div>
                 
               
              </div>
              <div class="row">
                 <div class="col-md-12">
                 <div class="form-group">
                     <label class="bmd-label-floating">Memo</label>
                     <input style="padding-bottom: 10px; height: 55px;" type="text" readonly name="memo" value="<?=$data->memo?>" class="form-control" >
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
               <div class="card">
          <div class="card-body">
               <h4>Data <?php echo $this->lang->line('cbd'); ?></h4>
            <div class="table-responsive">
                <table class="table table-hover"   width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                   
                                            <th>Cash-Bank</th>
                                            <th><?php echo $this->lang->line('description'); ?></th>
                                            <th><?php echo $this->lang->line('amount'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        <?php
                                        $no=1;
                                        foreach($cashbankdetail as $data){
                                          
                                        ?>
                                       
                                        <tr>
                                    
                                         <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="30%"><?php echo $data->namaakun?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="30%"><?php echo $data->keterangan?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;text-align: right;" width="20%"><?php echo $data->nilai?></td>
                                         
                                        </tr>
                                        
                                    </tbody>
                                  <?php } ?>
                                    <tfoot>
                                      <?php foreach ($totalcashbankdetail as $t) {
                                        ?>
                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td><input style="padding-bottom: 10px;text-align: right;" onkeyup="hitung()" id="totalnilaicashbankdetail"  type="text" name="totalnilaicashbankdetail" class="form-control" required readonly value="<?php echo $t->totalnilai ?>"></td>
                                        </tr>
                                       <?php 
                                 
                                        } 
                                        ?>
                                    </tfoot>
                                </table>

            </div>
                <div class="table-responsive">
                <table class="table table-hover"   width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                   
                                            <th><?php echo $this->lang->line('account'); ?></th>
                                            <th><?php echo $this->lang->line('description'); ?></th>
                                            <th><?php echo $this->lang->line('amount'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        <?php
                                        $no=1;
                                        foreach($cashbanklawan as $data){
                                          
                                        ?>
                                       
                                        <tr>
                                    
                                         <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="30%"><?php echo $data->namaakun?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="30%"><?php echo $data->keterangan?></td>
                                          <td style="vertical-align: top;border-top: 1px solid #e3e6f0;text-align: right;" width="20%"><?php echo $data->nilai?></td>
                                       
                                        </tr>
                                        
                                    </tbody>
                                  <?php } ?>
                                    <tfoot>
                                      <?php foreach ($totalcashbanklawan as $t) {
                                        ?>
                                        <tr>
                                          <td></td>
                                          <td></td>
                                         <td><input style="padding-bottom: 10px;text-align: right" onkeyup="hitung()" id="totalnilaicashbanklawan" type="text" name="totalnilaicashbanklawan" class="form-control" required readonly value="<?php echo $t->totalnilai ?>"></td>
                                        </tr>
                                       <?php 
                                 
                                        } 
                                        ?>
                                    </tfoot>
                                </table>
                                <a href="<?= base_url('listcashbank'); ?>" class="btn btn-info"><?php echo $this->lang->line('back'); ?></a>

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
  

 
