<script src="<?= base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js')?>"></script>

    <script src="<?= base_url('assets/js/jquery-1.9.1.js')?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-datepicker.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>
    <script src="<?= base_url(); ?>assets/js/script.js"></script>
    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/js/demo/datatables-demo.js')?>"></script>


    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.ubah').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModal").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="subtotal" class="form-control" value='+datanya[5]+'><input style="padding-bottom: 10px;" type="hidden" name="stok" class="form-control" value='+datanya[6]+'> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Barang</label><input style="padding-bottom: 10px;" type="text" name="idbarang" class="form-control" value='+datanya[1]+' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Barang</label><input style="padding-bottom: 10px;" type="text" name="namabarang" class="form-control" value='+datanya[2]+' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Harga Jual</label><input style="padding-bottom: 10px;" type="text" name="hargajual" class="form-control" value='+datanya[3]+' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Beli</label><input style="padding-bottom: 10px;" type="text" name="jumlahbeli" class="form-control" value='+datanya[4]+'><input style="padding-bottom: 10px;" type="hidden" name="jumlahbeliasal" class="form-control" value='+datanya[4]+'></div></div></div> ');
        });
    
    });
</script>
 <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.ubahayamhilang').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModal").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="ayamhilang" class="form-control" value='+datanya[6]+'> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Ayam</label><input style="padding-bottom: 10px;" type="text" name="idayam" class="form-control" value='+datanya[1]+' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Ayam</label><input style="padding-bottom: 10px;" type="text" name="namaayam" class="form-control" value='+datanya[2]+' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Harga Jual</label><input style="padding-bottom: 10px;" type="text" name="hargajual" class="form-control" value='+datanya[3]+' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Stock Awal</label><input style="padding-bottom: 10px;" type="text" name="stockawal" class="form-control" value='+datanya[4]+' readonly></div></div></div> <div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Ayam</label><input style="padding-bottom: 10px;" type="text" name="jumlahayam" class="form-control" value='+datanya[5]+'> <input style="padding-bottom: 10px;" type="hidden" name="jumlahayamasal" class="form-control" value='+datanya[5]+' readonly></div></div></div>');
        });
    
    });
</script>
<script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.hapusayamhilang').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModalHapusAyam").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="idayam" class="form-control" value='+datanya[1]+'><input style="padding-bottom: 10px;" type="hidden" name="ayamhilang" class="form-control" value='+datanya[2]+'><input style="padding-bottom: 10px;" type="hidden" name="jumlahayam" class="form-control" value='+datanya[3]+'> Apakah anda yakin ingin menghapus data ini ?');
        });
    
    });
    </script>

    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.ubahayammati').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModal").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="ayammati" class="form-control" value='+datanya[6]+'> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Ayam</label><input style="padding-bottom: 10px;" type="text" name="idayam" class="form-control" value='+datanya[1]+' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Ayam</label><input style="padding-bottom: 10px;" type="text" name="namaayam" class="form-control" value='+datanya[2]+' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Harga Jual</label><input style="padding-bottom: 10px;" type="text" name="hargajual" class="form-control" value='+datanya[3]+' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Stock Awal</label><input style="padding-bottom: 10px;" type="text" name="stockawal" class="form-control" value='+datanya[4]+' readonly></div></div></div> <div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Ayam</label><input style="padding-bottom: 10px;" type="text" name="jumlahayam" class="form-control" value='+datanya[5]+'> <input style="padding-bottom: 10px;" type="hidden" name="jumlahayamasal" class="form-control" value='+datanya[5]+' readonly></div></div></div>');
        });
    
    });
</script>
 <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.hapusayammati').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModalHapusAyamMati").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'><input style="padding-bottom: 10px;" type="hidden" name="idayam" class="form-control" value='+datanya[1]+'><input style="padding-bottom: 10px;" type="hidden" name="ayammati" class="form-control" value='+datanya[2]+'><input style="padding-bottom: 10px;" type="hidden" name="jumlahayam" class="form-control" value='+datanya[3]+'> Apakah anda yakin ingin menghapus data ini ?');
        });
    
    });
    </script>
    <script>
    $(document).ready(function() {
            // ketika tombol detail ditekan
        $('.change').on("click", function(){
        // ambil nilai id dari link print
        var DataJadwal= this.id;
        var datanya = DataJadwal.split("|");
        $("#IsiModalChange").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value='+datanya[0]+'> <input style="padding-bottom: 10px;" type="hidden" name="subtotal" class="form-control" value='+datanya[5]+'><input style="padding-bottom: 10px;" type="hidden" name="idpenjualan" class="form-control" value='+datanya[7]+'><input style="padding-bottom: 10px;" type="hidden" name="ayamkeluar" class="form-control" value='+datanya[6]+'> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Ayam</label><input style="padding-bottom: 10px;" type="text" name="idayam" class="form-control" value='+datanya[1]+' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Ayam</label><input style="padding-bottom: 10px;" type="text" name="namaayam" class="form-control" value='+datanya[2]+' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Harga Beli</label><input style="padding-bottom: 10px;" type="text" name="hargajual" class="form-control" value='+datanya[3]+' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Beli</label><input style="padding-bottom: 10px;" type="text" name="jumlahbeli" class="form-control" value='+datanya[4]+'><input style="padding-bottom: 10px;" type="hidden" name="jumlahbeliasal" class="form-control" value='+datanya[4]+'></div></div></div> ');
        });
    
    });
</script>
</body>

</html>