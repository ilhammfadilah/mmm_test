$navbar = $(".navbar-customer");
$(window).scroll(function (e) {
  if ($(document).scrollTop() > 0) {
    $navbar.addClass("shadow-sm");
  } else {
    $navbar.removeClass("shadow-sm");
  }
});
function hitungtotal() {
  var totalbayar = document.getElementById('totalbayar').value;
  var bayar = document.getElementById('bayar').value;

  var kembalian = parseInt(bayar) - parseInt(totalbayar);
  if (!isNaN(kembalian)) {
    document.getElementById('kembalian').value = kembalian;
  }
}

function previewfile() {
  const picture = document.querySelector("#file-input");
  const pictureLabel = document.querySelector("#file-label");
  const imgPreview = document.querySelector("#file-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile2() {
  const picture = document.querySelector("#file2-input");
  const pictureLabel = document.querySelector("#file2-label");
  const imgPreview = document.querySelector("#file2-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile3() {
  const picture = document.querySelector("#file3-input");
  const pictureLabel = document.querySelector("#file3-label");
  const imgPreview = document.querySelector("#file3-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile4() {
  const picture = document.querySelector("#file4-input");
  const pictureLabel = document.querySelector("#file4-label");
  const imgPreview = document.querySelector("#file4-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile5() {
  const picture = document.querySelector("#file5-input");
  const pictureLabel = document.querySelector("#file5-label");
  const imgPreview = document.querySelector("#file5-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}



function previewfile6() {
  const picture = document.querySelector("#file6-input");
  const pictureLabel = document.querySelector("#file6-label");
  const imgPreview = document.querySelector("#file6-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile7() {
  const picture = document.querySelector("#file7-input");
  const pictureLabel = document.querySelector("#file7-label");
  const imgPreview = document.querySelector("#file7-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile8() {
  const picture = document.querySelector("#file8-input");
  const pictureLabel = document.querySelector("#file8-label");
  const imgPreview = document.querySelector("#file8-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile9() {
  const picture = document.querySelector("#file9-input");
  const pictureLabel = document.querySelector("#file9-label");
  const imgPreview = document.querySelector("#file9-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}

function previewPassword(elem, id) {
  const iconEye = elem.lastChild;
  // const elmPassword =
  //   elem.parentElement.parentElement.parentElement.firstElementChild;
  const elmPassword = document.getElementById(id);
  if (iconEye.classList.contains("fa-eye-slash")) {
    iconEye.classList.replace("fa-eye-slash", "fa-eye");
    elmPassword.setAttribute("type", "text");
  } else {
    iconEye.classList.replace("fa-eye", "fa-eye-slash");
    elmPassword.setAttribute("type", "password");
  }
}

function openDeleteModal(elem, link) {
  const id = $(elem).data("id");
  $("#valueId").attr("value", id);
  $("#formLinkDelete").attr("action", link);
}

function diametermodal() {
  $(document).on('click', '#diameter', function (e) {
    document.getElementById("iddiameter").value = $(this).attr('data-id');
    document.getElementById("diagroup").value = $(this).attr('data-diagroup');
    document.getElementById("diameterfrom").value = $(this).attr('data-diameterfrom');
    document.getElementById("diameterto").value = $(this).attr('data-diameterto');
    document.getElementById("carat").value = $(this).attr('data-carat');

    $('#modaldiameter').modal('hide');
  });

}

function coasatmdoal() {
  $(document).on('click', '#coasat', function (e) {
    document.getElementById("akun").value = $(this).attr('data-akun');
    document.getElementById("namaakun").value = $(this).attr('data-namaakun');

    $('#modalcoasat').modal('hide');
  });

}

function coaduamdoal() {
  $(document).on('click', '#coadua', function (e) {
    document.getElementById("akundua").value = $(this).attr('data-akun');
    document.getElementById("namaakundua").value = $(this).attr('data-namaakun');

    $('#modalcoadua').modal('hide');
  });

}

function kursmodal() {
  $(document).on('click', '#kurs', function (e) {
    document.getElementById("idmatauang").value = $(this).attr('data-id');
    document.getElementById("kodematauang").value = $(this).attr('data-kodematauang');
    document.getElementById("rate").value = $(this).attr('data-rate');

    $('#modalmatauang').modal('hide');
  });

}
function subaccountmodal() {
  $(document).on('click', '#subaccount', function (e) {
    document.getElementById("subaccount").value = $(this).attr('data-subaccount');
    document.getElementById("nama").value = $(this).attr('data-nama');

    $('#modalsubaccount').modal('hide');
  });

}

function karyawanmodal() {
  $(document).on('click', '#karyawan', function (e) {
    document.getElementById("idkaryawan").value = $(this).attr('data-id');
    document.getElementById("nama").value = $(this).attr('data-nama');
    $('#modalkaryawan').modal('hide');
  });

}

function parcelmodal() {
  $(document).on('click', '#parcel', function (e) {
    document.getElementById("idparcel").value = $(this).attr('data-id');
    document.getElementById("parcel").value = $(this).attr('data-parcel') + '(' + $(this).attr('data-diameterfrom') + '-' + $(this).attr('data-diameterto') + ')';
    document.getElementById("shape").value = $(this).attr('data-shape');
    document.getElementById("color").value = $(this).attr('data-color');
    document.getElementById("clarity").value = $(this).attr('data-clarity');
    document.getElementById("harga").value = $(this).attr('data-harga');
    document.getElementById("carat").value = $(this).attr('data-carat');

    $('#jumlah').attr("readonly", false);
    $('#idheadsetting').attr("disabled", false);
    $('#jumlah').add();
    $('#modalparcel').modal('hide');
    gethargaprongsetting();
  });

}

function clientmodal() {
  $(document).on('click', '#client', function (e) {
    document.getElementById("namaklien").value = $(this).attr('data-namaclient');
    document.getElementById("idclient").value = $(this).attr('data-id');

    $('#modalclient').modal('hide');
  });

}

function materialmodal() {
  $(document).on('click', '#material', function (e) {
    document.getElementById("idmaterial").value = $(this).attr('data-id');
    document.getElementById("material").value = $(this).attr('data-material');
    document.getElementById("satuan").value = $(this).attr('data-satuan');
    document.getElementById("satuanjsfinishing").value = $(this).attr('data-satuan');
    document.getElementById("satuanjspolesrangka").value = $(this).attr('data-satuan');
    document.getElementById("satuanjspasangbatu").value = $(this).attr('data-satuan');
    document.getElementById("satuanjsrakit").value = $(this).attr('data-satuan');
    document.getElementById("satuanjspoleschrome").value = $(this).attr('data-satuan');
    $('#modalmaterial').modal('hide');
  });

}

function tipeprodukmodal() {
  $(document).on('click', '#tipeproduk', function (e) {
    document.getElementById("idtipeproduk").value = $(this).attr('data-id');
    document.getElementById("tipeproduk").value = $(this).attr('data-tipeproduk');
    $('#modaltipeproduk').modal('hide');
  });

}
function finishingmodal() {
  $(document).on('click', '#finishing', function (e) {
    document.getElementById("idfinishing").value = $(this).attr('data-id');
    document.getElementById("finishing").value = $(this).attr('data-finishing');
    $('#modalfinishing').modal('hide');
  });

}
function konsepkepalamodal() {
  $(document).on('click', '#konsepkepala', function (e) {
    document.getElementById("idkonsepkepala").value = $(this).attr('data-id');
    document.getElementById("konsepkepala").value = $(this).attr('data-konsepkepala');
    $('#modalkonsepkepala').modal('hide');
  });

}

function ongkosmodal() {
  $(document).on('click', '#ongkos', function (e) {
    document.getElementById("idongkos").value = $(this).attr('data-id');
    document.getElementById("ongkos").value = $(this).attr('data-ongkos');
    document.getElementById("hargaongkos").value = $(this).attr('data-hargaongkos');
    $('#modalongkos').modal('hide');
  });

}

function warnaprodukmodal() {
  $(document).on('click', '#warnaproduk', function (e) {
    document.getElementById("idwarnaproduk").value = $(this).attr('data-id');
    document.getElementById("warnaproduk").value = $(this).attr('data-warnaproduk');
    $('#modalwarnaproduk').modal('hide');
  });

}

// var nilai1 = document.getElementById("nilai1");
// nilai1.addEventListener("keyup", function(e) {
//   nilai1.value = convertRupiah(this.value);
// });
// nilai1.addEventListener('keydown', function(event) {
//   return isNumberKey(event);
// });

// var nilai2 = document.getElementById("nilai2");
// nilai2.addEventListener("keyup", function(e) {
//   nilai2.value = convertRupiah(this.value);
// });
// nilai2.addEventListener('keydown', function(event) {
//   return isNumberKey(event);
// });

document.querySelectorAll('.js-nilai').forEach(elm => {
  elm.addEventListener("keyup", function (e) {
    elm.value = convertRupiah(elm.value);
  });


})




function convertRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
}

document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}
// function isNumberKey(evt) {
//     key = evt.which || evt.keyCode;
//   if (  key != 188 // Comma
//      && key != 8 // Backspace
//      && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
//      && (key < 48 || key > 57) // Non digit
//     )
//   {
//     evt.preventDefault();
//     return;
//   }
// }

function getdataongkoslainnya(value) {
  $("#hargaongkos").val(value);
}

function hitungberat() {
  // $("#harga").val();
  // var carat = parseInt($('#carat').val()) + 1;
  // console.log(carat);
  // console.log($('#jumlah').val());
  // console.log($('#harga').val());
  // $("#berat").val(Number($("carat").val()) + Number($("#jumlah").val()));
}

function hitungBerat() {
  var jumlah = parseInt($("#jumlah").val());
  var carat = parseInt($('#carat').val()) * jumlah;
  console.log(carat);
  $("#berat").val(carat);
}

$("#jumlah").change(function (e) {
  e.preventDefault();
  hitungBerat()
});

$("#jumlah").keyup(function (e) {
  e.preventDefault();
  hitungBerat();
});

$("#tombolTambahDiamond").click(function (e) {
  e.preventDefault();
  // console.log('tambah diamond clicked');
  // var idparcel = parseInt($("#idparcel").val());
  // var jumlah = parseInt($("#jumlah").val());
  // var berat = parseInt($('#carat').val()) * jumlah;
  // var hargaongkos = parseInt($('#hargaongkos').val());

  // $("#diamond").val("35000");
  // $.ajax({
  //   type: "POST",
  //   url: "hitungDiamond",
  //   data: {
  //     idparcel: idparcel,
  //     jumlah: jumlah,
  //     berat: berat,
  //     hargaongkos: hargaongkos,
  //   },
  //   dataType: "json",
  //   beforeSend: function () {
  //     $('.viewdetaildata').html('<i class="fa fa-spin fa-spinner"></i>');
  //   },
  //   success: function (response) {
  //     if (response.error) {
  //       alert(response.error);
  //       return;
  //     }

  //     alert('berhasil menambahkan diamond');
  //     $("#diamond").val(response.diamond);
  //     $("#total").val(response.total);
  //   },
  //   error: function (xhr, ajaxOptions, throwError) {
  //     alert(xhr.status + '\n' + throwError);
  //   }
  // });
  addsubdetail();
});

function tampilDetailDiamond() {
  var detaildiamond = document.getElementById("addformsubdetail");

  if (detaildiamond.style.display === "none") {
    detaildiamond.style.display = "";
  } else {
    detaildiamond.style.display = "none";
  }
}

function tampilKonsepKepala() {
  var tampilKepala = document.getElementById("tampilkepala");

  if (tampilKepala.style.display === "none") {
    tampilKepala.style.display = "block";
  } else {
    tampilKepala.style.display = "none";
  }
}

function addsubdetail() {
  var id_parcel = parseInt($("#idparcel").val());
  var jumlah = parseInt($("#jumlah").val());
  var berat = parseInt($('#carat').val()) * jumlah;
  var harga = parseInt($('#harga').val());
  var total = parseInt($('#total').val());

  if (isNaN(id_parcel)) {
    alert('pilih parcel terlebih dahulu');
    return;
  }

  if (isNaN(jumlah)) {
    alert('masukan jumlah terlebih dahulu');
    return;
  }

  $.ajax({
    type: "POST",
    url: "addsubdetail",
    data: {
      id_parcel: id_parcel,
      jumlah: jumlah,
      berat: berat,
      harga: harga,
    },
    dataType: "json",
    success: function (response) {
      alert(response.sukses);
      window.location.reload();
    }
  });
}

$('#jumlah').keydown(function (e) {
  console.log(e.key)
  if (e.key == "Enter") {
    alert('enter');
    addsubdetail();
    return;
  }
});

$('.deleteSubDetail').click(function (e) {
  e.preventDefault();
  alert('delete sub detail');
});

$('#modalupdatediamond').click(function (e) {
  e.preventDefault();
  var id_subdetail = $('#modalupdatediamond').attr('data-id');
  console.log(id_subdetail);
  $.ajax({
    type: "POST",
    url: "getSubDetail",
    data: {
      id_subdetail: id_subdetail,
    },
    dataType: "json",
    success: function (response) {
      if (!response) {
        alert('terjadi kesalahan');
      }

      var data = response.data[0]

      $('#updateInputParcel').val(data.parcel);
      $('#updateInputCarat').val(data.carat);
      $('#updateInputHarga').val(data.harga);
      $('#updateInputJumlah').val(data.jumlah);
      $('#updateInputBerat').val(data.berat);
      $('#updatediamondmodal').modal('show');
    }
  });
});

function updateDiamond(id_subdetail) {
  $.ajax({
    type: "POST",
    url: "getSubDetail",
    data: {
      id_subdetail: id_subdetail,
    },
    dataType: "json",
    success: function (response) {
      if (!response) {
        alert('terjadi kesalahan');
      }

      var data = response.data[0]

      $('#updateIdSubdetail').val(data.id_subdetail);
      $('#updateInputParcel').val(data.parcel);
      $('#updateInputCarat').val(data.carat);
      $('#updateInputHarga').val(data.harga);
      $('#updateInputJumlah').val(data.jumlah);
      $('#updateInputBerat').val(data.berat);
      $('#updatediamondmodal').modal('show');
    }
  });
}

function changeInputBerat() {
  var jumlah = parseInt($("#updateInputJumlah").val());
  var carat = parseInt($("#updateInputCarat").val());
  $('#updateInputBerat').val(jumlah * carat);
}