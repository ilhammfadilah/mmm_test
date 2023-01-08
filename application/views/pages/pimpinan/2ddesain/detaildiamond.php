   
     <table class="table table-hover" width="100%"  cellspacing="0">
                                                              <thead id="headdetaildiamond">
                                                                  <tr height="20px">
                                                                     
                                                                      <th>Parcel</th>
                                                                      <th>Harga</th>
                                                                      <th>Clarity</th>
                                                                      <th>Shape</th>
                                                                      <th>Color</th>
                                                                      <th>Jumlah</th>
                                                                      <th>Berat</th>
                                                                      <th><?php echo $this->lang->line('pengaturan'); ?></th>
                                                                  </tr>
                                                              </thead>
                                                              <thead id="headdetaildiamond_" style="display: none">
                                                                  <tr height="20px">
                                                                     
                                                                      <th>Parcel</th>
                                                                      <th>Harga</th>
                                                                      <th>Clarity</th>
                                                                      <th>Shape</th>
                                                                      <th>Color</th>
                                                                      <th>Jumlah</th>
                                                                      <th>Berat</th>
                                                                      <th><?php echo $this->lang->line('pengaturan'); ?></th>
                                                                  </tr>
                                                              </thead>
                                                              <tbody id="updatesubdetai">

                                                                  <?php
                                                                  foreach($duaddesainsubdetail as $data){
                                                                  ?>
                                                                  <tr id="user<?= $data->id_subdetail ?>">

                                                                      <form action="<?php echo base_url() . 'pimpinan/updatedetailcashbank'; ?> "  id="formeditsubdetail"  enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">   
                                                                        <td style="width: 250px"><input type="text" name="parcel" required  id="parcel_" class="form-control" value="<?php echo $data->parcel?>"><input type="hidden" name="idparcel"  id="idparcel_" class="form-control" value="<?php echo $data->id_parcel?>"><input type="hidden" name="idsubdetail"  id="idsubdetail_" class="form-control" value="<?php echo $data->id_subdetail?>"><input type="hidden" name="iddetail"  id="iddetail_" class="form-control" value="<?php echo $data->id_detail?>"></td>
                                                                        <td style="width: 150px"><input type="text" readonly name="harga"  id="harga_" class="form-control " value="<?php echo number_format($data->harga,2,',','.') ?>"> </td>
                                                                        <td style="width: 150px"><input type="text" readonly name="clarity_"  id="clarity_" class="form-control" value="<?php echo $data->clarity?>"></td>
                                                                        <td style="width: 150px"><input type="text" readonly name="shape"  id="shape_" class="form-control" value="<?php echo $data->shape?>"></td>
                                                                        <td style="width: 150px"><input type="text" readonly name="color"  id="color_" class="form-control" value="<?php echo $data->color?>"></td>
                                                                        <td style="width: 150px"><input type="text" name="jumlah"  id="jumlah_" class="form-control" value="<?php echo $data->jumlah?>"></td>
                                                                        <td style="width: 150px"><input type="text" name="berat"  id="berat_" class="form-control subdetail" value="<?php echo $data->berat?>" ></td>
                                                                        <td>
                                                                      <!--   <a href="#" data-toggle="modal" data-target="#ModalsubdetailEdit" id="<?=$data->id_subdetail?>|<?=$data->id_detail?>|<?=$data->jumlah?>|<?=$data->berat?>"    class="editsubdetail btn btn-sm btn-success" role="button" title="<?php echo $this->lang->line('change'); ?>">  <i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?> </a> -->
                                                                        <a href="#" data-toggle="modal" data-target="#ModalHapussubdetaildesain" id="<?=$data->id_subdetail?>|<?=$data->id_detail?>"    class="hapussubdetaildesain btn btn-sm btn-danger" role="button" title="<?php echo $this->lang->line('delete'); ?>">  <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>

                                                                      </td>
                                                                    </form>
                                                                  </tr>
                                                                  <?php 
                                                                  } 
                                                                  ?>

                                                                      </tr>

                                                              </tbody>     

                                                                      
                                                    </table>
                                                   
  <script type='text/javascript'>
        $(document).ready(function(){
        
           $( "#parcel_" ).autocomplete({
            source: function( request, response ) {
             // Fetch data
             $.ajax({
              url: "<?=base_url()?>Pimpinan/get_parcel",
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
              $('#parcel_').val(ui.item.label); // display the selected text
              $('#idparcel_').val(ui.item.value);
              $('#clarity_').val(ui.item.labelclarity);
               $('#shape_').val(ui.item.labelshape);
               $('#color_').val(ui.item.labelcolor);
               $('#harga_').val(ui.item.labelharga);
            
             return false;
            },
            focus: function(event, ui){
               $( "#parcel_" ).val( ui.item.label );
               $( "#idparcel_" ).val( ui.item.value );
               $('#clarity_').val(ui.item.labelclarity);
               $('#shape_').val(ui.item.labelshape);
               $('#color_').val(ui.item.labelcolor);
               $('#harga_').val(ui.item.labelharga);
             
               return false;
             },
           });

        });
        </script>
    
    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.hapussubdetaildesain').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#isimodalhapussubdetail").html('<input style="padding-bottom: 10px;" type="hidden" name="idsubdetail" class="form-control" value='+datanya[0]+'> <input style="padding-bottom: 10px;" type="hidden" name="iddetail" class="form-control" value='+datanya[1]+'> <?php echo $this->lang->line('confirmdelete'); ?>');
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
       