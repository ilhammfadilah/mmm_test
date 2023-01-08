     <table class="table table-hover" width="100%"  cellspacing="0">
                                                              <thead id="headdetailkepala">
                                                                  <tr height="20px">
                                                                     
                                                                      <th>Nama Produk</th>
                                                                      <th>Tipe Produk</th>
                                                                      <th>Brand</th>
                                                                      <th>Etalase</th>
                                                                      <th>Kondisi</th>
                                                                      <th>Harga</th>
                                                                      <th>Jumlah</th>
                                                                      <th>Pengaturan</th>
                                                                    
                                                                  </tr>
                                                              </thead>
                                                              <thead id="headdetailkepala_" style="display: none">
                                                                  <tr height="20px">
                                                                     
                                                                      <th>Nama Produk</th>
                                                                      <th>Tipe Produk</th>
                                                                      <th>Brand</th>
                                                                      <th>Etalase</th>
                                                                      <th>Kondisi</th>
                                                                      <th>Harga</th>
                                                                      <th>Jumlah</th>
                                                                      <th>Pengaturan</th>
                                                                    
                                                                  </tr>
                                                              </thead>
                                                              <tbody>
                                                                  <?php
                                                                  foreach($desainkepala as $data){
                                                                  ?>
                                                                  <tr >
                                                                   
                                                                  
                                                                    <td style="width: 250px"> <input  style="padding-bottom: 10px;width: 250px;" value="<?php echo $data->namaproduk?>" id="produk_" type="text" name="produk" class="form-control" ><input style="padding-bottom: 10px;width: 10px;" value="<?php echo $data->id_produk?>" id="idproduk_" type="hidden" name="idproduk" class="form-control" ></td>
                                                                    <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?php echo $data->tipeproduk?>" id="tipeproduk_" type="text" name="tipeproduk" class="form-control" ></td>
                                                                    <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?php echo $data->brand?>" id="brand_" type="text" name="brand" class="form-control" ></td>
                                                                    <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?php echo $data->etalase?>" id="etalase_" type="text" name="etalase" class="form-control" ></td>
                                                                    <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?php echo $data->kondisi?>" id="kondisi_" type="text" name="kondisi" class="form-control" ></td>
                                                                    <td style="width: 150px"><input readonly style="padding-bottom: 10px;width: 150px;" value="<?php echo number_format($data->harga,2,',','.') ?>" id="harga_" type="text" name="harga" class="form-control" ></td>
                                                                    <td style="width: 150px"><input  style="padding-bottom: 10px;width: 150px;" value="<?php echo $data->jumlah?>" id="jumlah_" type="text" name="jumlah" class="form-control" ></td>
                                                                    <td>
                                                                   <!--  <a href="#" data-toggle="modal" data-target="#ModalprodukdetailEdit" id="<?=$data->id_subdetailkepala?>|<?=$data->id_detail?>|<?=$data->jumlah?>|<?=$data->harga?>"    class="editprodukdetail btn btn-sm btn-success" role="button" title="<?php echo $this->lang->line('change'); ?>">  <i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?> </a> -->
                                                                    <a href="#" data-toggle="modal" data-target="#ModalHapusdetailproduk" id="<?=$data->id_subdetailkepala?>|<?=$data->id_detail?>"    class="hapusdetailproduk btn btn-sm btn-danger" role="button" title="<?php echo $this->lang->line('delete'); ?>">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>
                                                                  </td>
                                                                  </tr>
                                                                  <?php 
                                                                  } 
                                                                  ?>
                                                                      </tr>
                                                              </tbody>     

                                                                      
                                                    </table>
                                                   
    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.editprodukdetail').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#isimodaleditprodukdetail").html('<input style="padding-bottom: 10px;" type="hidden" name="idsubdetailkepala" id="idsubdetailkepala" class="form-control" value='+datanya[0]+'> <input style="padding-bottom: 10px;" type="hidden" name="iddetail" class="form-control" value='+datanya[1]+'><div class="row"><div class="col-md-6"><div class="form-group"> <label class="bmd-label-floating">Jumlah <small class="text-danger">*</small></label><input type="text" name="jumlah" value='+datanya[2]+' id="jumlah" class="form-control"></div> </div><div class="col-md-6"> <div class="form-group">  <label class="bmd-label-floating">Harga <small class="text-danger">*</small></label><input type="text" name="hargaproduk" id="hargaproduk_" value='+datanya[3]+' class="form-control"> </div> </div></div>');
        });
    });
    </script>
    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.hapusdetailproduk').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#isimodalhapusdetailproduk").html('<input style="padding-bottom: 10px;" type="hidden" name="idsubdetailkepala" class="form-control" value='+datanya[0]+'> <input style="padding-bottom: 10px;" type="hidden" name="iddetail" class="form-control" value='+datanya[1]+'> <?php echo $this->lang->line('confirmdelete'); ?>');
        });
    
    });
    </script>
 
     <script type='text/javascript'>
        $(document).ready(function(){
        
           $( "#produk_" ).autocomplete({
            source: function( request, response ) {
             // Fetch data
             $.ajax({
              url: "<?=base_url()?>Pimpinan/get_barang",
              type: 'post',
              dataType: "json",
              data: {
               search: request.term
              },
              success: function( data ) {
               response( data );
              }
             });
            },
            select: function (event, ui) {
             // Set selection
              $('#produk_').val(ui.item.label); // display the selected text
              $('#idbarang_').val(ui.item.value); // display the selected text
              $('#tipeproduk_').val(ui.item.labeltipeproduk); // display the selected text
              $('#brand_').val(ui.item.labelbrand); // display the selected text
              $('#etalase_').val(ui.item.labeletalase); // display the selected text
              $('#kondisi_').val(ui.item.labelkondisi); // display the selected text
              $('#harga_').val(ui.item.labelharga_);
            
             return false;
            },
            focus: function(event, ui){
               $('#produk_').val(ui.item.label); // display the selected text
              $('#idbarang_').val(ui.item.value); // display the selected text
              $('#tipeproduk_').val(ui.item.labeltipeproduk); // display the selected text
              $('#brand_').val(ui.item.labelbrand); // display the selected text
              $('#etalase_').val(ui.item.labeletalase); // display the selected text
              $('#kondisi_').val(ui.item.labelkondisi); // display the selected text
              $('#harga_').val(ui.item.labelharga_);
             
               return false;
             },
           });
      });

          
        </script>
<!-- <script>
         
        const a = document.getElementById("formubahsubdetail");

        a.addEventListener("submit", function(e){
          e.preventDefault();
          var idparcel = $('#idparcel').val();
          var jumlah = $('#jumlah').val();
          var harga = $('#harga').val();
          var berat = $('#berat').val();
           var data = $('#formubahsubdetail').serialize();

      
          $.ajax({

              url: "<?php echo base_url("pimpinan/editesubdetail");?>",
              type: "POST",
              data: data,
              success: function(){
                   $('#ModalsubdetailEdit').modal('hide');
                   tampildata();
              }
            });
              document.getElementById("jumlah").value = "";
              document.getElementById("harga").value = "";
              document.getElementById("berat").value = "";
              document.getElementById("jumlah").value = "";
              document.getElementById("color").value = "";
              document.getElementById("clarity").value = "";
              document.getElementById("shape").value = "";
              document.getElementById("idparcel").value = "";
           
              
              return false;
        });

          function tampildata() {
                $.ajax({
                    url: '<?php echo base_url("pimpinan/getdetaildiamond");?>',
                    type: 'get',
                    success: function(data) {
                        $('#tampil').html(data);
                    }
                });

            }

        function updateharga() {
                $.ajax({
                    url: '<?php echo base_url("pimpinan/gethargadiamond");?>',
                    type: 'get',
                    success: function(data) {
                        $('#tampilharga').html(data);
                    }
                });

            }
    </script> -->
       
        

