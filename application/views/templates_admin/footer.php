<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                         <span>Copyright &copy; PT.MMM 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div id="modalayamhilang" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <h3 class="modal-title">Pilih Ayam</h3>
          </center>
        </div>
          <div class="modal-body">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Ayam</th>
                                            <th>Nama Ayam</th>
                                            <th>Harga Jual</th>
                                            <th>Stock Awal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($ayam as $data){
                                        ?>
                                        <tr id="ayamhilang" data-id="<?= $data->id_ayam; ?>" data-namaayam="<?= $data->nama; ?>"data-hargajual="<?= $data->harga_jual?>" data-stockawal="<?= $data->persediaan_awal?>"  data-ayamhilang="<?= $data->ayam_hilang?>" onclick="ayamhilangModal()">
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->id_ayam?></td>
                                          <td><?php echo $data->nama ?></td>
                                          <td><?php echo $data->harga_jual ?></td>
                                          <td><?php echo $data->persediaan_awal ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
          </div>  
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </div>
  </div>
  <div id="modalayammati" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <h3 class="modal-title">Pilih Ayam</h3>
          </center>
        </div>
          <div class="modal-body">
            <table class="table table-hover" id="dataTable1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Ayam</th>
                                            <th>Nama Ayam</th>
                                            <th>Harga Jual</th>
                                            <th>Stock Awal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($ayam as $data){
                                        ?>
                                        <tr id="ayammati" data-id="<?= $data->id_ayam; ?>" data-namaayam="<?= $data->nama; ?>"data-hargajual="<?= $data->harga_jual?>" data-stockawal="<?= $data->persediaan_awal?>"  data-ayammati="<?= $data->ayam_mati?>" onclick="ayammatiModal()">
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->id_ayam?></td>
                                          <td><?php echo $data->nama ?></td>
                                          <td><?php echo $data->harga_jual ?></td>
                                          <td><?php echo $data->persediaan_awal ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
          </div>  
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar dari sistem?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan klik "Logout" untuk keluar dari sistem</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-info" href="<?= base_url('auth/logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
     <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutLabel">Konfirmasi Hapus</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                
               
            </div>
            <div class="modal-body">Apakah anda yakin ingin menghapus data ini ?</div>
            <div class="modal-footer">
                <?= form_open('', 'class="d-inline" id="formLinkDelete"') ?>
                <input type="hidden" name="id" id="valueId">
                <button type="submit" class="btn btn-danger"> Ya </button> <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ubahModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Item Keranjang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                     <form action="<?php echo base_url(). 'admin/updatelistkeranjang';?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                      <div class="modal-body" id="IsiModalChange">
                        ...
                      </div>
                      <div class="modal-footer">
                           <button type="submit" class="btn btn-info">Simpan</button>
                        <a class="btn btn-danger" type="button" data-dismiss="modal">Cancel</a>
                      </div>
                      </form>

            </div>
        </div>
    </div>

    <!-- 

 <div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Item Keranjang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                     <form action="<?php echo base_url(). 'penjualan/updatelistbarang';?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                      <div class="modal-body" id="IsiModal">
                        ...
                      </div>
                      <div class="modal-footer">
                           <button type="submit" class="btn btn-info">Simpan</button>
                        <a class="btn btn-danger" type="button" data-dismiss="modal">Cancel</a>
                      </div>
                      </form>

            </div>
        </div>
    </div>
     <div class="modal fade" id="ubahModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Item Keranjang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                     <form action="<?php echo base_url(). 'pembelian/updatelistbarang';?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                      <div class="modal-body" id="IsiModalChange">
                        ...
                      </div>
                      <div class="modal-footer">
                           <button type="submit" class="btn btn-info">Simpan</button>
                        <a class="btn btn-danger" type="button" data-dismiss="modal">Cancel</a>
                      </div>
                      </form>

            </div>
        </div>
    </div>

<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Item Keranjang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
              <form action="<?php echo base_url(). 'penjualan/deletelistbarang';?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="modal-body" id="IsiModalHapus">   
              </div>
              <div class="modal-footer">
                   <button type="submit" class="btn btn-danger">Ya</button>
                <a class="btn btn-info" type="button" data-dismiss="modal">Cancel</a>
              </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal fade" id="ModalHapus1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Item Keranjang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
              <form action="<?php echo base_url(). 'pembelian/deletelistbarang';?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="modal-body" id="IsiModalDelete">   
              </div>
              <div class="modal-footer">
                   <button type="submit" class="btn btn-danger">Ya</button>
                <a class="btn btn-info" type="button" data-dismiss="modal">Cancel</a>
              </div>
              </form>
            </div>
          </div>
        </div>
    
    <div id="modalbarang" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <h3 class="modal-title">Pilih Barang</h3>
          </center>
        </div>
          <div class="modal-body">
            <div class="table-responsive">
               <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Stok</th>
                                            <th>Jenis Barang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($barang as $data){
                                        ?>
                                        <tr id="barang" data-id="<?= $data->id_barang; ?>" data-namabarang="<?= $data->nama_barang; ?>"data-jenisbarang="<?= $data->nama_jenis?>" data-stok="<?= $data->stok?>" data-harga="<?= $data->harga_jual?>" onclick="barangModal()">
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->id_barang?></td>
                                          <td><?php echo $data->nama_barang ?></td>
                                          <td><?php echo $data->harga_jual ?></td>
                                          <td><?php echo $data->stok ?></td>
                                          <td><?php echo $data->nama_jenis ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
            </div>
           
          </div>  
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </div>
  </div>
   <div class="modal fade" id="cetakpenjualanperiode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                     <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Data Penjualan Per Periode</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                     <form action="<?php echo base_url(). 'laporanperperiodepenjualan';?> " enctype="multipart/form-data" target="_blank" method="post" accept-charset="utf-8" aria-hidden="true">
                                        <div class="modal-body">
                                            <div class="row">
                                               <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label class="bmd-label-floating">Dari Tanggal</label>
                                                      <input style="padding-bottom: 10px;" type="date" name="dari"  required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label class="bmd-label-floating">Sampai Tanggal</label>
                                                      <input style="padding-bottom: 10px;" type="date" name="sampai" required class="form-control">
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-info">Cetak</button>
                                        </div>
                                    
                                    </form>
                            </div>
                    </div>
            </div>
            <div class="modal fade" id="cetakpembelianperiode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                     <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Data Pembelian Per Periode</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                     <form action="<?php echo base_url(). 'laporanperperiodepembelian';?> " enctype="multipart/form-data" target="_blank" method="post" accept-charset="utf-8" aria-hidden="true">
                                        <div class="modal-body">
                                            <div class="row">
                                               <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label class="bmd-label-floating">Dari Tanggal</label>
                                                      <input style="padding-bottom: 10px;" type="date" name="dari"  required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label class="bmd-label-floating">Sampai Tanggal</label>
                                                      <input style="padding-bottom: 10px;" type="date" name="sampai" required class="form-control">
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-info">Cetak</button>
                                        </div>
                                    
                                    </form>
                            </div>
                    </div>
            </div>
 -->

  