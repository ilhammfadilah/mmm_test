<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>




<!-- Page level plugins -->
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>assets/js/script.js"></script>

<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>


<script>
  $("select[id=typetransaksi]").on("change", function() {
    if ($(this).val() == "Reguler") {
      $("div[id=subakun] ").hide();
      $("div[id=namasubakun] ").hide();
    } else if ($(this).val() == "Down Payment") {
      $("div[id=subakun] ").show();
      $("div[id=namasubakun] ").show();
    } else if ($(this).val() == "Invoice") {
      $("div[id=subakun] ").show();
      $("div[id=namasubakun] ").show();

    } else if ($(this).val() == "Cancel Down Payment") {
      $("div[id=subakun] ").show();
      $("div[id=namasubakun] ").show();
    }
  });
  $("select[id=typetransaksi]").trigger("change");
</script>
<script>
  $("select[id=typeclient]").on("change", function() {
    if ($(this).val() == "New Design") {
      $("div[id=client] ").hide();
      $("div[id=namaclient] ").hide();
    } else if ($(this).val() == "Client Order") {
      $("div[id=client] ").show();
      $("div[id=namaclient] ").show();
    }
  });
  $("select[id=typeclient]").trigger("change");
</script>
<script>
  if ($("#totalnilaicashbankdetail").val() == "0,00") {
    $("#shadow").hide();
  } else {
    $("#shadow").show();
  }
</script>
<script>
  if ($("#totalnilaicashbanklawan").val() == "0,00") {
    $("#shadow1").hide();
  } else {
    $("#shadow1").show();
  }
</script>
<script>
  $("#addbutton").click(function() {
    $("#addform").show();
    $("#shadow").show();
  });
</script>
<script>
  $("#addpicture").click(function() {
    $("div[id=gambar] ").show();
  });
</script>
<script>
  $("#adddetail").click(function() {
    $("div[id=detaildesigner] ").show();
  });
</script>
<script>
  $("#addbutton1").click(function() {
    $("#addform1").show();
    $("#shadow1").show();

  });
</script>
<script type='text/javascript'>
  $(document).ready(function() {

    $("#material").autocomplete({
      source: function(request, response) {
        // Fetch data
        $.ajax({
          url: "<?= base_url() ?>Pimpinan/get_material",
          type: 'post',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      select: function(event, ui) {
        // Set selection
        $('#material').val(ui.item.label); // display the selected text
        $('#idmaterial').val(ui.item.value);
        $('#satuan').val(ui.item.labelsatuan);
        $('#satuanjsfinishing').val(ui.item.labelsatuan);
        $('#satuanjspolesrangka').val(ui.item.labelsatuan);
        $('#satuanjspasangbatu').val(ui.item.labelsatuan);
        $('#satuanjsrakit').val(ui.item.labelsatuan);
        $('#satuanjspoleschrome').val(ui.item.labelsatuan); // save selected fullname to input
        return false;
      },
      focus: function(event, ui) {
        $("#material").val(ui.item.label);
        $("#idmaterial").val(ui.item.value);
        $('#satuan').val(ui.item.labelsatuan);
        $('#satuanjsfinishing').val(ui.item.labelsatuan);
        $('#satuanjspolesrangka').val(ui.item.labelsatuan);
        $('#satuanjspasangbatu').val(ui.item.labelsatuan);
        $('#satuanjsrakit').val(ui.item.labelsatuan);
        $('#satuanjspoleschrome').val(ui.item.labelsatuan);
        return false;
      },
    });

  });
</script>

<script type='text/javascript'>
  $(document).ready(function() {

    $("#warnaproduk").autocomplete({
      source: function(request, response) {
        // Fetch data
        $.ajax({
          url: "<?= base_url() ?>Pimpinan/get_warnaproduk",
          type: 'post',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      select: function(event, ui) {
        // Set selection
        $('#warnaproduk').val(ui.item.label); // display the selected text
        $('#idwarnaproduk').val(ui.item.value); // save selected fullname to input
        return false;
      },
      focus: function(event, ui) {
        $("#warnaproduk").val(ui.item.label);
        $("#idwarnaproduk").val(ui.item.value);
        return false;
      },
    });

  });
</script>
<script type='text/javascript'>
  $(document).ready(function() {

    $("#ongkos").autocomplete({
      source: function(request, response) {
        // Fetch data
        $.ajax({
          url: "<?= base_url() ?>Pimpinan/get_ongkos",
          type: 'post',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      select: function(event, ui) {
        // Set selection
        $('#ongkos').val(ui.item.label); // display the selected text
        $('#idongkos').val(ui.item.value); // display the selected text
        $('#hargaongkos').val(ui.item.labelharga); // save selected fullname to input
        return false;
      },
      focus: function(event, ui) {
        $("#ongkos").val(ui.item.label);
        $("#idongkos").val(ui.item.value); // display the selected text
        $('#hargaongkos').val(ui.item.labelharga);
        return false;
      },
    });

  });
</script>
<script type='text/javascript'>
  $(document).ready(function() {

    $("#finishing").autocomplete({
      source: function(request, response) {
        // Fetch data
        $.ajax({
          url: "<?= base_url() ?>Pimpinan/get_finishing",
          type: 'post',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      select: function(event, ui) {
        // Set selection
        $('#finishing').val(ui.item.label); // display the selected text
        $('#idfinishing').val(ui.item.value); // save selected fullname to input
        return false;
      },
      focus: function(event, ui) {
        $("#finishing").val(ui.item.label);
        $("#idfinishing").val(ui.item.value);
        return false;
      },
    });

  });
</script>
<script type='text/javascript'>
  $(document).ready(function() {

    $("#tipeproduk").autocomplete({
      source: function(request, response) {
        // Fetch data
        $.ajax({
          url: "<?= base_url() ?>Pimpinan/get_tipeproduk",
          type: 'post',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      select: function(event, ui) {
        // Set selection
        $('#tipeproduk').val(ui.item.label); // display the selected text
        $('#idtipeproduk').val(ui.item.value); // save selected fullname to input
        return false;
      },
      focus: function(event, ui) {
        $("#tipeproduk").val(ui.item.label);
        $("#idtipeproduk").val(ui.item.value);
        return false;
      },
    });

  });
</script>
<script type='text/javascript'>
  $(document).ready(function() {

    $("#konsepkepala").autocomplete({
      source: function(request, response) {
        // Fetch data
        $.ajax({
          url: "<?= base_url() ?>Pimpinan/get_konsepkepala",
          type: 'post',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      select: function(event, ui) {
        // Set selection
        $('#konsepkepala').val(ui.item.label); // display the selected text
        $('#idkonsepkepala').val(ui.item.value); // save selected fullname to input
        return false;
      },
      focus: function(event, ui) {
        $("#konsepkepala").val(ui.item.label);
        $("#idkonsepkepala").val(ui.item.value);
        return false;
      },
    });

  });
</script>

<script type='text/javascript'>
  $(document).ready(function() {

    $("#akun").autocomplete({
      source: function(request, response) {
        // Fetch data
        $.ajax({
          url: "<?= base_url() ?>Pimpinan/get_akuncoasatu",
          type: 'post',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      select: function(event, ui) {
        // Set selection
        $('#akun').val(ui.item.label); // display the selected text
        $('#namaakun').val(ui.item.value); // save selected fullname to input
        return false;
      },
      focus: function(event, ui) {
        $("#akun").val(ui.item.label);
        $("#namaakun").val(ui.item.value);
        return false;
      },
    });

  });
</script>
<script type='text/javascript'>
  $(document).ready(function() {

    $("#akun3").autocomplete({
      source: function(request, response) {
        // Fetch data
        $.ajax({
          url: "<?= base_url() ?>Pimpinan/get_akuncoasatu",
          type: 'post',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      select: function(event, ui) {
        // Set selection
        $('#akun3').val(ui.item.label); // display the selected text
        $('#keterangan').val(ui.item.value); // save selected fullname to input
        return false;
      },
      focus: function(event, ui) {
        $("#akun").val(ui.item.label);
        $("#keterangan").val(ui.item.value);
        return false;
      },
    });

  });
</script>
<script type='text/javascript'>
  $(document).ready(function() {

    $("#akundua").autocomplete({
      source: function(request, response) {
        // Fetch data
        $.ajax({
          url: "<?= base_url() ?>Pimpinan/get_akuncoadua",
          type: 'post',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      select: function(event, ui) {
        // Set selection
        $('#akundua').val(ui.item.label); // display the selected text
        $('#namaakundua').val(ui.item.value); // save selected fullname to input
        return false;
      },
      focus: function(event, ui) {
        $("#akundua").val(ui.item.label);
        $("#namaakundua").val(ui.item.value);
        return false;
      },
    });

  });
</script>
<script type='text/javascript'>
  $(document).ready(function() {

    $("#akun4").autocomplete({
      source: function(request, response) {
        // Fetch data
        $.ajax({
          url: "<?= base_url() ?>Pimpinan/get_akuncoadua",
          type: 'post',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      select: function(event, ui) {
        // Set selection
        $('#akun4').val(ui.item.label); // display the selected text
        $('#keterangan4').val(ui.item.value); // save selected fullname to input
        return false;
      },
      focus: function(event, ui) {
        $("#akundua").val(ui.item.label);
        $("#keterangan4").val(ui.item.value);
        return false;
      },
    });

  });
</script>
<!-- <script type="text/javascript">
            $(document).ready(function() {
                //Ajax kabupaten/kota insert
                $("#akun").focus();
                $("#akun").on("input", function() {
                    var akun = {
                        akun: $(this).val()
                    };
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url() . 'pimpinan/get_akun'; ?>",
                        data: akun,
                        success: function(msg) {
                            $('#detailakun').html(msg);
                        }
                    });
                });

                $("#akun").keypress(function(e) {
                    if (e.which == 13) {
                        $("#jumlah").focus();
                    }
                });
            });
      </script> -->

<script>
  const myform = document.getElementById("formsubdetail");

  myform.addEventListener("submit", (e) => {
    e.preventDefault();
    var idparcel = $('#idparcel').val();
    var jumlah = $('#jumlah').val();
    var harga = $('#harga').val();
    var berat = $('#berat').val();
    var data = $('#formsubdetail').serialize();
    $.ajax({

      url: "<?php echo base_url("pimpinan/addsubdetail"); ?>",
      type: "POST",

      data: data,
      success: function() {
        $('.tampildata').load("tampil.php");
        $('#ModalTambahsubdetail').modal('hide');

      }
    });
  });
</script>
<script>
  $("select[id=inout]").on("change", function() {
    if ($(this).val() == "I") {
      document.getElementById("detail1").innerHTML = "<?php echo $this->lang->line('debit'); ?>";
      document.getElementById("detail2").innerHTML = "<?php echo $this->lang->line('credit'); ?>";
    } else if ($(this).val() == "O") {
      document.getElementById("detail1").innerHTML = "<?php echo $this->lang->line('credit'); ?>";
      document.getElementById("detail2").innerHTML = "<?php echo $this->lang->line('debit'); ?>";
    }
  });
  $("select[id=inout]").trigger("change");
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.editsubdetail').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#isimodaledit").html('<input style="padding-bottom: 10px;" type="hidden" name="idsubdetail" class="form-control" value=' + datanya[0] + '> <input style="padding-bottom: 10px;" type="hidden" name="iddetail" class="form-control" value=' + datanya[1] + '><div class="row"><div class="col-md-6"><div class="form-group"> <label class="bmd-label-floating">Jumlah <small class="text-danger">*</small></label><input type="text" name="jumlah" value=' + datanya[2] + ' id="jumlah" class="form-control"></div> </div><div class="col-md-6"> <div class="form-group">  <label class="bmd-label-floating">Berat <small class="text-danger">*</small></label><input type="text" name="berat" id="berat" value=' + datanya[3] + ' class="form-control"> </div> </div></div>');
    });

  });
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.hapussubdetaildesain').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#isimodalhapussubdetail").html('<input style="padding-bottom: 10px;" type="hidden" name="idsubdetail" class="form-control" value=' + datanya[0] + '> <input style="padding-bottom: 10px;" type="hidden" name="iddetail" class="form-control" value=' + datanya[1] + '> <?php echo $this->lang->line('confirmdelete'); ?>');
    });

  });
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.hapus').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#isimodal").html('<input style="padding-bottom: 10px;" type="hidden" name="akun" class="form-control" value=' + datanya[0] + '> <input style="padding-bottom: 10px;" type="hidden" name="kode" class="form-control" value=' + datanya[1] + '> <input style="padding-bottom: 10px;" type="hidden" name="headerdetail" class="form-control" value=' + datanya[2] + '><?php echo $this->lang->line('confirmdelete'); ?>');
    });

  });
</script>
<script>
  let input = document.querySelectorAll("tbody#updatedetail .js-nilai");
  input.forEach(elm => {
    elm.addEventListener("blur", function(event) {
      let akun = document.querySelector(`tr#${event.target.parentNode.parentNode.id} input[name=akun]`);
      let keterangan = document.querySelector(`tr#${event.target.parentNode.parentNode.id} input[name=keterangan]`);
      let nilai = document.querySelector(`tr#${event.target.parentNode.parentNode.id} input[name=nilai]`);
      let idcashbankdetail = document.querySelector(`tr#${event.target.parentNode.parentNode.id} input[name=idcashbankdetail]`);
      let idcashbankheader = document.querySelector(`tr#${event.target.parentNode.parentNode.id} input[name=idcashbankheader]`);

      $.ajax({
        url: "<?php echo base_url("pimpinan/updatedetailcashbank"); ?>",
        type: "POST",
        data: {
          idcashbankdetail: idcashbankdetail.value,
          idcashbankheader: idcashbankheader.value,
          akun: akun.value,
          keterangan: keterangan.value,
          nilai: nilai.value.replaceAll('.', '')
        },
        success: function(msg) {
          location.reload();
          //console.log(idcashbankdetail, idcashbankheader, akun, nilai, keterangan);
        }
      });
      //         

    });
  })
</script>
<script>
  let inputa = document.querySelectorAll("tbody#updatedetaillawan .js-nilai");
  inputa.forEach(elm => {
    elm.addEventListener("blur", function(event) {
      let akun = document.querySelector(`tr#${event.target.parentNode.parentNode.id} input[name=akun]`);
      let keterangan = document.querySelector(`tr#${event.target.parentNode.parentNode.id} input[name=keterangan]`);
      let nilai = document.querySelector(`tr#${event.target.parentNode.parentNode.id} input[name=nilai]`);
      let idcashbanklawan = document.querySelector(`tr#${event.target.parentNode.parentNode.id} input[name=idcashbanklawan]`);
      let idcashbankheader = document.querySelector(`tr#${event.target.parentNode.parentNode.id} input[name=idcashbankheader]`);

      $.ajax({
        url: "<?php echo base_url("pimpinan/updatedetailcashbanklawan"); ?>",
        type: "POST",
        data: {
          idcashbanklawan: idcashbanklawan.value,
          idcashbankheader: idcashbankheader.value,
          akun: akun.value,
          keterangan: keterangan.value,
          nilai: nilai.value.replaceAll('.', '')
        },
        success: function(msg) {
          location.reload();

        }
      });
      //         

    });
  })
</script>
<script type="text/javascript">
  function onblurfunctionlawan() {


    var akun = $('#akundua').val();
    var keterangan = $('#namaakundua').val();
    var nilai = $('#nilai1').val();

    $.ajax({
      url: "<?php echo base_url("pimpinan/addcashlawan"); ?>",
      type: "POST",
      data: {
        akun: akun,
        keterangan: keterangan,
        nilai: nilai.replaceAll('.', '')
      },
      success: function(msg) {
        // location.reload();

      }
    });

  }

  // function onblurfunctionubahlawan()
  // {



  // }

  function onblurfunctiondetail() {


    var akun = $('#akun').val();
    var keterangan = $('#namaakun').val();
    var nilai = $('#nilai2').val();

    $.ajax({
      url: "<?php echo base_url("pimpinan/addcashdetail"); ?>",
      type: "POST",
      data: {
        akun: akun,
        keterangan: keterangan,
        nilai: nilai.replaceAll('.', '')
      },
      success: function(msg) {
        location.reload();

      }
    });

  }
  // function onblurfunctionubahdetail()
  // {

  //     var akun = $('#akun3').val();
  //     var keterangan = $('#keterangan').val();
  //     var nilai = $('#nilai').val();
  //     var idcashbankdetail = $('#idcashbankdetail').val();
  //     var idcashbankheader = $('#idcashbankheader').val();


  //     $.ajax({
  //         url: "<?php echo base_url("pimpinan/updatedetailcashbank"); ?>",
  //         type: "POST",
  //         data: {
  //           idcashbankdetail: idcashbankdetail,
  //           idcashbankheader: idcashbankheader,
  //           akun: akun,
  //           keterangan: keterangan,
  //           nilai: nilai.replaceAll('.','')
  //         },
  //         success: function(msg){
  //         location.reload();
  //          //console.log(idcashbankdetail, idcashbankheader, akun, nilai, keterangan);
  //         }
  //       });

  // }
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.hapusdetailcashbank').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#isimodalhapus").html('<input style="padding-bottom: 10px;" type="hidden" name="id_cashbankdetail" class="form-control" value=' + datanya[0] + '> <input style="padding-bottom: 10px;" type="hidden" name="id_cashbankheader" class="form-control" value=' + datanya[1] + '><?php echo $this->lang->line('confirmdelete'); ?>');
    });

  });
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.hapuscashbanklawan').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#isimodalhapus1").html('<input style="padding-bottom: 10px;" type="hidden" name="id_cashbanklawan" class="form-control" value=' + datanya[0] + '> <input style="padding-bottom: 10px;" type="hidden" name="id_cashbankheader" class="form-control" value=' + datanya[1] + '><?php echo $this->lang->line('confirmdelete'); ?>');
    });

  });
</script>

<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.hapusdetaildesain').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#isimodalhapusdesaindetail").html('<input style="padding-bottom: 10px;" type="hidden" name="id_detail" class="form-control" value=' + datanya[0] + '> <input style="padding-bottom: 10px;" type="hidden" name="id_header" class="form-control" value=' + datanya[1] + '><input style="padding-bottom: 10px;" type="hidden" name="gambar1" class="form-control" value=' + datanya[2] + '><input style="padding-bottom: 10px;" type="hidden" name="gambar2" class="form-control" value=' + datanya[3] + '><input style="padding-bottom: 10px;" type="hidden" name="gambar3" class="form-control" value=' + datanya[4] + '><input style="padding-bottom: 10px;" type="hidden" name="gambar4" class="form-control" value=' + datanya[5] + '><input style="padding-bottom: 10px;" type="hidden" name="gambar5" class="form-control" value=' + datanya[6] + '><input style="padding-bottom: 10px;" type="hidden" name="video1" class="form-control" value=' + datanya[7] + '><input style="padding-bottom: 10px;" type="hidden" name="video2" class="form-control" value=' + datanya[8] + '><input style="padding-bottom: 10px;" type="hidden" name="video3" class="form-control" value=' + datanya[9] + '><?php echo $this->lang->line('confirmdelete'); ?>');
    });

  });
</script>

<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.addsubdetail').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#isimodalsubdetail").html('<div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Detail</label><input style="padding-bottom: 10px;" type="text" name="iddetail" class="form-control" value=' + datanya[0] + ' readonly> </div></div></div>');
    });

  });
</script>

<!--     <script>
        function hitung(value) {
              var totalcashbankdetail = document.getElementById('totalnilaicashbankdetail').value;
              var totalcashbanklawawn = document.getElementById('totalnilaicashbanklawan').value;
              var result = (totalcashbankdetail) + parseInt(totalcashbanklawawn);
              if (!isNaN(result)) {
                 document.getElementById('totalcashbankheader').value = result;
              }
        }
    </script> -->
<script>
  $("select[id=headerdetail]").on("change", function() {
    if ($(this).val() == "") {
      $("div[id=groupakun] ").hide();

    } else if ($(this).val() == "H") {
      $("div[id=groupakun] ").hide();

    } else if ($(this).val() == "D") {
      $("div[id=groupakun] ").show();
    }
  });
  $("select[id=headerdetail]").trigger("change");
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.ubah').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#IsiModal").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value=' + datanya[0] + '><input style="padding-bottom: 10px;" type="hidden" name="subtotal" class="form-control" value=' + datanya[5] + '><input style="padding-bottom: 10px;" type="hidden" name="stok" class="form-control" value=' + datanya[6] + '> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Barang</label><input style="padding-bottom: 10px;" type="text" name="idbarang" class="form-control" value=' + datanya[1] + ' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Barang</label><input style="padding-bottom: 10px;" type="text" name="namabarang" class="form-control" value=' + datanya[2] + ' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Harga Jual</label><input style="padding-bottom: 10px;" type="text" name="hargajual" class="form-control" value=' + datanya[3] + ' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Beli</label><input style="padding-bottom: 10px;" type="text" name="jumlahbeli" class="form-control" value=' + datanya[4] + '><input style="padding-bottom: 10px;" type="hidden" name="jumlahbeliasal" class="form-control" value=' + datanya[4] + '></div></div></div> ');
    });

  });
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.change').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");

      console.log(datanya);
      $("#IsiModalChange").html('<input style="padding-bottom: 10px;" type="hidden" name="idcashbanklawan" class="form-control" value=' + datanya[0] + '><input style="padding-bottom: 10px;" type="hidden" name="idcashbankheader" class="form-control" value=' + datanya[1] + '><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Cash Bank</label><input style="padding-bottom: 10px;" type="text" name="akun" class="form-control" value=' + datanya[2] + ' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Keterangan</label><input style="padding-bottom: 10px;" type="text" name="keterangan" class="form-control" value="' + datanya[3] + '"> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Amount</label><input style="padding-bottom: 10px;" type="text" name="nilai" class="form-control" value=' + datanya[4] + '></div></div> ');
    });

  });
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.change2').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");

      console.log(datanya);
      $("#IsiModalChange2").html('<input style="padding-bottom: 10px;" type="hidden" name="idcashbankdetail" class="form-control" value=' + datanya[0] + '><input style="padding-bottom: 10px;" type="hidden" name="idcashbankheader" class="form-control" value=' + datanya[1] + '><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Cash Bank</label><input style="padding-bottom: 10px;" type="text" name="akun" class="form-control" value=' + datanya[2] + ' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Keterangan</label><input style="padding-bottom: 10px;" type="text" name="keterangan" class="form-control" value="' + datanya[3] + '"> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Amount</label><input style="padding-bottom: 10px;" type="text" name="nilai" class="form-control" value=' + datanya[4] + '></div></div> ');
    });

  });
</script>
<!-- <script>
    $(document).ready(function() {
        
        $('.change').on("click", function(){
        
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");

        console.log(datanya);
        $("#IsiModalChange").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Cash Bank</label><input style="padding-bottom: 10px;" type="text" name="akun" class="form-control" value='+datanya[2]+' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Keterangan</label><input style="padding-bottom: 10px;" type="text" name="keterangan" class="form-control" value='+datanya[3]+';> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Amount</label><input style="padding-bottom: 10px;" type="text" name="nilai" class="form-control" value='+datanya[4]+'></div></div> ');
        });
    
    });
</script> -->
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.delete').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#IsiModalDelete").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value=' + datanya[0] + '><input style="padding-bottom: 10px;" type="hidden" name="idbarang" class="form-control" value=' + datanya[1] + '><input style="padding-bottom: 10px;" type="hidden" name="jumlahbeli" class="form-control" value=' + datanya[2] + '> <input style="padding-bottom: 10px;" type="hidden" name="stok" class="form-control" value=' + datanya[3] + '> Apakah anda yakin ingin menghapus data ini ?');
    });

  });
</script>

<script src="<?= base_url('assets/vendor/summernote/summernote-bs4.min.js') ?>"></script>
<script>
  $(document).ready(function() {
    $('#memo').summernote({
      height: 300,
    });
  });
</script>

<script src="<?= base_url('assets/vendor/select2/js/select2.full.min.js') ?>"></script>
<script>
  $(function() {
    $('.select2').select2()
  })
</script>

</body>

</html>