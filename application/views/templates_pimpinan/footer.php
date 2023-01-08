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

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('confirmlogout'); ?></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body"><?php echo $this->lang->line('messagelogout'); ?></div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
        <a class="btn btn-info" href="<?= base_url('auth/logout') ?>"><?php echo $this->lang->line('logout'); ?></a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutLabel"><?php echo $this->lang->line('headconfirmdelete'); ?></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>


      </div>
      <div class="modal-body"><?php echo $this->lang->line('confirmdelete'); ?></div>
      <div class="modal-footer">
        <?= form_open('', 'class="d-inline" id="formLinkDelete"') ?>
        <input type="hidden" name="id" id="valueId">
        <button type="submit" class="btn btn-danger"> <?php echo $this->lang->line('yes'); ?> </button> <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo $this->lang->line('no'); ?></button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ubahModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Cash Bank Lawan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo base_url() . 'pimpinan/updatedetailcashbanklawan'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
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
<div class="modal fade" id="ubahModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Cash Bank Detail</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo base_url() . 'pimpinan/updatedetailcashbank'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body" id="IsiModalChange2">
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
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('delete'); ?> Data</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo base_url() . 'pimpinan/deletecoa'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body" id="isimodal">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger"><?php echo $this->lang->line('yes'); ?></button>
          <a class="btn btn-info" type="button" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></a>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="ModalHapuscashbank" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('delete'); ?> Data</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo base_url() . 'pimpinan/deletecashbankdetail'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body" id="isimodalhapus">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger"><?php echo $this->lang->line('yes'); ?></button>
          <a class="btn btn-info" type="button" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></a>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalHapusdetaildesain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('delete'); ?> Data</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo base_url() . 'pimpinan/deletedetaildesain'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body" id="isimodalhapusdesaindetail">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger"><?php echo $this->lang->line('yes'); ?></button>
          <a class="btn btn-info" type="button" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></a>
        </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="ModalHapuscashbanklawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('delete'); ?> Data</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo base_url() . 'pimpinan/deletecashbanklawan'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body" id="isimodalhapus1">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger"><?php echo $this->lang->line('yes'); ?></button>
          <a class="btn btn-info" type="button" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></a>
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
      <form action="<?php echo base_url() . 'pembelian/deletelistbarang'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
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
<div id="modalmatauang" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('sc'); ?></h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable1" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th><?php echo $this->lang->line('number'); ?></th>
                <th><?php echo $this->lang->line('cn'); ?></th>
                <th>Rate</th>
                <th><?php echo $this->lang->line('date'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($kurs as $data) {
              ?>
                <tr id="kurs" data-id="<?= $data->id_matauang; ?>" data-kodematauang="<?= $data->kodematauang; ?>" data-namamatauang="<?= $data->namamatauang; ?>" data-rate="<?= $data->rate ?>" onclick="kursmodal()">
                  <td align="center"><?php echo $no ?></td>
                  <td><?php echo $data->namamatauang ?>(<?php echo $data->kodematauang ?>)</td>
                  <td><?php echo $data->rate ?></td>
                  <td><?php echo $data->tanggal ?></td>

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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>
<div id="modalmaterial" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('sm'); ?></h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable4" width="100%" cellspacing="0">
            <thead>
              <tr height="20px">
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('material'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('unit'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($material as $data) {
              ?>
                <tr id="material" data-id="<?= $data->id_material; ?>" data-material="<?= $data->material; ?>" data-satuan="<?= $data->satuan; ?>" onclick="materialmodal()">
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="5%"><?php echo $no ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->material ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->satuan ?></td>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>

<div id="modaltipeproduk" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('sm'); ?></h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable5" width="100%" cellspacing="0">
            <thead>
              <tr height="20px">
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('producttype'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($tipeproduk as $data) {
              ?>
                <tr id="tipeproduk" data-id="<?= $data->id_tipe; ?>" data-tipeproduk="<?= $data->tipeproduk; ?>" onclick="tipeprodukmodal()">
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="5%"><?php echo $no ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->tipeproduk ?></td>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>
<div id="modalfinishing" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('sm'); ?></h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable6" width="100%" height="1px" cellspacing="0">
            <thead>
              <tr height="20px">
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Finishing</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($finishing as $data) {
              ?>
                <tr id="finishing" data-id="<?= $data->id_finishing; ?>" data-finishing="<?= $data->finishing; ?>" onclick="finishingmodal()">
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="5%"><?php echo $no ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->finishing ?></td>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>
<div id="modalkonsepkepala" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('shc'); ?></h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable7" width="100%" height="1px" cellspacing="0">
            <thead>
              <tr height="20px">
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('headconcept'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($konsepkepala as $data) {
              ?>
                <tr id="konsepkepala" data-id="<?= $data->id_konsepkepala; ?>" data-konsepkepala="<?= $data->konsepkepala; ?>" onclick="konsepkepalamodal()">
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="5%"><?php echo $no ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->konsepkepala ?></td>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>
<div id="modalongkos" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('sm'); ?></h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable8" width="100%" height="1px" cellspacing="0">
            <thead>
              <tr height="20px">
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('fee'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('price'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($ongkos as $data) {
              ?>
                <tr id="ongkos" data-id="<?= $data->id_ongkos; ?>" data-ongkos="<?= $data->ongkos; ?>" data-hargaongkos="<?= $data->harga; ?>" onclick="ongkosmodal()">
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="5%"><?php echo $no ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->ongkos ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->harga ?></td>

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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>
<div id="modalwarnaproduk" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('sm'); ?></h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable9" width="100%" height="1px" cellspacing="0">
            <thead>
              <tr height="20px">
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('productcolor'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($warnaproduk as $data) {
              ?>
                <tr id="warnaproduk" data-id="<?= $data->id_warnaproduk; ?>" data-warnaproduk="<?= $data->warnaproduk; ?>" onclick="warnaprodukmodal()">
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="5%"><?php echo $no ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->warnaproduk ?></td>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>
<div id="modalkaryawan" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('se'); ?></h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable3" width="100%" cellspacing="0">
            <thead>
              <tr height="20px">
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('number'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('name'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('address'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('city'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('contact'); ?></th>
                <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;"><?php echo $this->lang->line('part'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($karyawan as $data) {
              ?>
                <tr id="karyawan" data-id="<?= $data->id_karyawan; ?>" data-nama="<?= $data->nama; ?>" onclick="karyawanmodal()">
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="7%"><?php echo $no ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->nama ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->alamat ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="15%"><?php echo $data->kota ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="15%"><?php echo $data->kontak ?></td>
                  <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="15%"><?php echo $data->bagian ?></td>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>
<div id="modalsubaccount" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('sc'); ?></h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable2" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th><?php echo $this->lang->line('number'); ?></th>
                <th><?php echo $this->lang->line('subaccount'); ?></th>
                <th><?php echo $this->lang->line('name'); ?></th>
                <th><?php echo $this->lang->line('address'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($subaccount as $data) {
              ?>
                <tr id="subaccount" data-subaccount="<?= $data->subaccount; ?>" data-nama="<?= $data->nama; ?>" onclick="subaccountmodal()">
                  <td align="center"><?php echo $no ?></td>
                  <td><?php echo $data->subaccount ?></td>
                  <td><?php echo $data->nama ?></td>
                  <td><?php echo $data->alamat ?></td>

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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>

<div id="modalclient" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('sc'); ?></h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable5" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th><?php echo $this->lang->line('number'); ?></th>
                <th><?php echo $this->lang->line('subaccount'); ?></th>
                <th><?php echo $this->lang->line('name'); ?></th>
                <th><?php echo $this->lang->line('address'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($subaccount as $data) {
              ?>
                <tr id="client" data-id="<?= $data->id_client; ?>" data-namaclient="<?= $data->nama; ?>" onclick="clientmodal()">
                  <td align="center"><?php echo $no ?></td>
                  <td><?php echo $data->subaccount ?></td>
                  <td><?php echo $data->nama ?></td>
                  <td><?php echo $data->alamat ?></td>

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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>

<div id="modaldiameter" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('choice'); ?> Diameter</h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th><?php echo $this->lang->line('number'); ?></th>
                <th><?php echo $this->lang->line('diagroup'); ?></th>
                <th><?php echo $this->lang->line('diameterfrom'); ?></th>
                <th><?php echo $this->lang->line('diameterto'); ?></th>
                <th><?php echo $this->lang->line('carat'); ?></th>
                <th><?php echo $this->lang->line('createby'); ?></th>
                <th><?php echo $this->lang->line('createdate'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($diameter as $data) {
              ?>
                <tr id="diameter" data-id="<?= $data->id_diameter; ?>" data-diagroup="<?= $data->diagroup; ?>" data-diameterfrom="<?= $data->diameter_from; ?>" data-diameterto="<?= $data->diameter_to ?>" data-carat="<?= $data->carat ?>" onclick="diametermodal()">
                  <td align="center"><?php echo $no ?></td>
                  <td><?php echo $data->diagroup ?></td>
                  <td><?php echo $data->diameter_from ?></td>
                  <td><?php echo $data->diameter_to ?></td>
                  <td><?php echo $data->carat ?></td>
                  <td><?php echo $data->create_by ?></td>
                  <td><?php echo format_indo(date('Y-m-d', strtotime($data->create_date))); ?></td>

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

<div id="modalcoasat" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('select'); ?> Data</h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable3" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th><?php echo $this->lang->line('account'); ?></th>
                <th><?php echo $this->lang->line('accountname'); ?></th>
                <th>Header Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($coasat as $data) {
              ?>
                <tr id="coasat" data-akun="<?= $data->akun; ?>" data-namaakun="<?= $data->namaakun; ?>" onclick="coasatmdoal()">
                  <!--  <td style="display: none;"><?php echo $data->kode ?></td> -->
                  <td><?php echo $data->akun ?></td>
                  <td><?php echo $data->namaakun ?></td>
                  <td><?php echo $data->headerdetail ?></td>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
      </div>
    </div>
  </div>
</div>

<div id="modalcoadua" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('select'); ?> Data</h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable4" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th><?php echo $this->lang->line('account'); ?></th>
                <th><?php echo $this->lang->line('accountname'); ?></th>
                <th>Header Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($coadua as $data) {
              ?>
                <tr id="coadua" data-akun="<?= $data->akun; ?>" data-namaakun="<?= $data->namaakun; ?>" onclick="coaduamdoal()">
                  <!-- <td style="display: none;"><?php echo $data->kode ?></td> -->
                  <td><?php echo $data->akun ?></td>
                  <td><?php echo $data->namaakun ?></td>
                  <td><?php echo $data->headerdetail ?></td>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
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

      <form action="<?php echo base_url() . 'laporanperperiodepenjualan'; ?> " enctype="multipart/form-data" target="_blank" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Dari Tanggal</label>
                <input style="padding-bottom: 10px;" type="date" name="dari" required class="form-control">
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

      <form action="<?php echo base_url() . 'laporanperperiodepembelian'; ?> " enctype="multipart/form-data" target="_blank" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Dari Tanggal</label>
                <input style="padding-bottom: 10px;" type="date" name="dari" required class="form-control">
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
<div class="modal fade" id="cetakpenjualankeseluruhan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Data Penjualan Keseluruhan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <form action="<?php echo base_url() . 'laporanpenjualan'; ?> " enctype="multipart/form-data" target="_blank" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Status Transaksi</label>
                <select class="form-control" name="status">
                  <option value="Semua">Semua</option>
                  <option value="0">Diproses</option>
                  <option value="1">Sudah Dikonfirmasi Admin</option>
                  <option value="2">Sudah Upload Struk</option>
                  <option value="3">Sudah Dikirim</option>
                </select>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Cetak</button>
        </div>

      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="cetakpenjualanhariini" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Data Penjualan Hari Ini</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <form action="<?php echo base_url() . 'laporanpenjualanhariini'; ?> " enctype="multipart/form-data" target="_blank" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Status Transaksi</label>
                <select class="form-control" name="status">
                  <option value="Semua">Semua</option>
                  <option value="0">Diproses</option>
                  <option value="1">Sudah Dikonfirmasi Admin</option>
                  <option value="2">Sudah Upload Struk</option>
                  <option value="3">Sudah Dikirim</option>
                </select>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Cetak</button>
        </div>

      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="cetakpenjualantigabulan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Data Penjualan Hari Ini</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <form action="<?php echo base_url() . 'laporanpenjualantigabulan'; ?> " enctype="multipart/form-data" target="_blank" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Status Transaksi</label>
                <select class="form-control" name="status">
                  <option value="Semua">Semua</option>
                  <option value="0">Diproses</option>
                  <option value="1">Sudah Dikonfirmasi Admin</option>
                  <option value="2">Sudah Upload Struk</option>
                  <option value="3">Sudah Dikirim</option>
                </select>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Cetak</button>
        </div>

      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalHapussubdetaildesain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('delete'); ?> Data</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo base_url() . 'pimpinan/deletesubdetail'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body" id="isimodalhapussubdetail">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger"><?php echo $this->lang->line('yes'); ?></button>
          <a class="btn btn-info" type="button" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- update subdetail -->
<div class="modal fade" id="ModalsubdetailEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('change'); ?> Sub Detail</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo base_url("pimpinan/updatesubdetail"); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true" class="form-user">
        <div class="modal-body">
          <!-- <div id="isimodalsubdetail"></div> -->
          <div id="isimodaledit">
          </div>
          <div class="row">

            <div class="col-md-6">

              <input style="padding-bottom: 10px;" type="hidden" name="iduser" class="form-control" value="$this->session->userdata('id_user')" readonly>

              <div class="form-group">
                <label class="bmd-label-floating">Parcel<small class="text-danger">*</small></label>
                <select name="idparcel" id="idparcel" class="form-control" required onchange="changeValue(this.value)">
                  <option value=""><?php echo $this->lang->line('pleasechoice'); ?> Parcel</option>
                  <?php
                  $jsArray = "var prdHarga = new Array();\n";
                  foreach ($parcel as $data) {
                    echo '<option value="' . $data->id_parcel . '">' . $data->parcel . '</option> ';
                    $jsArray .= "prdHarga['" . $data->id_parcel . "'] = {harga:'" . addslashes($data->hargabeli) . "'};\n";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Harga<small class="text-danger">*</small></label>
                <input type="text" name="harga" id="harga" class="form-control">
              </div>
            </div>
          </div>
          <!--  <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Jumlah <small class="text-danger">*</small></label>
                      <input type="text" name="jumlah" id="jumlah" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Berat <small class="text-danger">*</small></label>
                      <input type="text" name="berat" id="berat" class="form-control">
                    </div>
                  </div>
                </div> -->

        </div>
        <div class="modal-footer">
          <button type="submit" id="btn_save" name="save" class="save btn btn-danger"><?php echo $this->lang->line('save'); ?></button>
          <a class="btn btn-info" type="button" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- modal parcel -->
<div id="modalparcel" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title">Pilih Parcel</h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <div id="dataTable8_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="dataTable8_length"><label>Show <select name="dataTable8_length" aria-controls="dataTable8" class="custom-select custom-select-sm form-control form-control-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select> entries</label></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div id="dataTable8_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable8"></label></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-hover dataTable no-footer" id="dataTable8" width="100%" height="1px" cellspacing="0" role="grid" aria-describedby="dataTable8_info" style="width: 100%;">
                  <thead>
                    <tr height="20px" role="row">
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting_asc" tabindex="0" aria-controls="dataTable8" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="dataTable8" rowspan="1" colspan="1" aria-label="Parcel: activate to sort column ascending">Parcel</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="dataTable8" rowspan="1" colspan="1" aria-label="Diameter: activate to sort column ascending">Diameter</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="dataTable8" rowspan="1" colspan="1" aria-label="Carat: activate to sort column ascending">Carat</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="dataTable8" rowspan="1" colspan="1" aria-label="Harga: activate to sort column ascending">Harga</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="dataTable8" rowspan="1" colspan="1" aria-label="Kejernihan: activate to sort column ascending">Kejernihan</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="dataTable8" rowspan="1" colspan="1" aria-label="Bentuk: activate to sort column ascending">Bentuk</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="dataTable8" rowspan="1" colspan="1" aria-label="Warna: activate to sort column ascending">Warna</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($parcel as $data) {
                    ?>
                      <tr id="parcel" data-id="<?= $data->id_parcel; ?>" data-parcel="<?= $data->parcel; ?>" data-carat="<?= $data->carat; ?>" data-harga="<?= $data->hargajual; ?>" data-clarity="<?= $data->clarity; ?>" data-shape="<?= $data->shape; ?>" data-diameterfrom="<?= $data->diameter_from; ?>" data-diameterto="<?= $data->diameter_to; ?>" data-color="<?= $data->color; ?>" onclick="parcelmodal()">
                        <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="7%"><?php echo $no ?></td>
                        <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->parcel ?></td>
                        <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="20%"><?php echo $data->diameter_from ?> - <?php echo $data->diameter_to ?></td>
                        <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="15%"><?php echo $data->carat ?></td>
                        <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="15%"><?php echo $data->hargajual ?></td>
                        <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="15%"><?php echo $data->clarity ?></td>
                        <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="15%"><?php echo $data->shape ?></td>
                        <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="15%"><?php echo $data->color ?></td>
                      </tr>
                    <?php
                      $no++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="dataTable8_info" role="status" aria-live="polite">Showing 11 to 20 of 272 entries</div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

<!-- modal produk -->
<div id="modalproduk" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title">Pilih Produk</h3>
        </center>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <div id="tableproduk_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="tableproduk_length"><label>Show <select name="tableproduk_length" aria-controls="tableproduk" class="custom-select custom-select-sm form-control form-control-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select> entries</label></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div id="tableproduk_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="tableproduk"></label></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-hover dataTable no-footer" id="tableproduk" width="100%" height="1px" cellspacing="0" role="grid" aria-describedby="tableproduk_info" style="width: 100%;">
                  <thead>
                    <tr height="20px" role="row">
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting_asc" tabindex="0" aria-controls="tableproduk" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="tableproduk" rowspan="1" colspan="1" aria-label="Nama Produk: activate to sort column ascending">Nama Produk</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="tableproduk" rowspan="1" colspan="1" aria-label="Tipe Produk: activate to sort column ascending">Tipe Produk</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="tableproduk" rowspan="1" colspan="1" aria-label="Brand: activate to sort column ascending">Brand</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="tableproduk" rowspan="1" colspan="1" aria-label="Kondisi: activate to sort column ascending">Kondisi</th>
                      <th style="padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(227, 230, 240); width: 0px;" class="sorting" tabindex="0" aria-controls="tableproduk" rowspan="1" colspan="1" aria-label="Harga Beli: activate to sort column ascending">Harga Beli</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr id="produk" data-id="2" data-produk="ini adalah contoh" data-tipeproduk="Konsep Kepala" data-brand="LG" data-etalase="0125" data-kondisi="Baru" data-harga="900.000,00" data-harga_="900.000" onclick="produkmodal()" role="row" class="odd">
                      <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="5%" class="sorting_1">1</td>
                      <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="15%">ini adalah contoh</td>
                      <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="10%">Konsep Kepala</td>
                      <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="10%">LG</td>
                      <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="10%">Baru</td>
                      <td style="vertical-align: top;border-top: 1px solid #e3e6f0;" width="10%">900.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="tableproduk_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
              </div>
              <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="tableproduk_paginate">
                  <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="tableproduk_previous"><a href="http://localhost:8080/mmm/tambahdata2ddesain#" aria-controls="tableproduk" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                    <li class="paginate_button page-item active"><a href="http://localhost:8080/mmm/tambahdata2ddesain#" aria-controls="tableproduk" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item next disabled" id="tableproduk_next"><a href="http://localhost:8080/mmm/tambahdata2ddesain#" aria-controls="tableproduk" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

<!-- update diamond -->
<div class="modal fade" id="modalupdatediamond" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('change'); ?> Detail Diamond</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo base_url("pimpinan/updatesubdetail"); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true" class="form-user">
        <div class="modal-body">
          <!-- <div id="isimodalsubdetail"></div> -->
          <div id="isimodaledit">
          </div>
          <div class="row">
            <div class="col-md-6">
              <input style="padding-bottom: 10px;" type="hidden" name="iduser" class="form-control" value="$this->session->userdata('id_user')" readonly>
              <div class="form-group">
                <label class="bmd-label-floating">Parcel<small class="text-danger">*</small></label>
                <select name="idparcel" id="idparcel" class="form-control" required onchange="changeValue(this.value)">
                  <option value=""><?php echo $this->lang->line('pleasechoice'); ?> Parcel</option>
                  <?php
                  $jsArray = "var prdHarga = new Array();\n";
                  foreach ($parcel as $data) {
                    echo '<option value="' . $data->id_parcel . '">' . $data->parcel . '</option> ';
                    $jsArray .= "prdHarga['" . $data->id_parcel . "'] = {harga:'" . addslashes($data->hargabeli) . "'};\n";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Harga<small class="text-danger">*</small></label>
                <input type="text" name="harga" id="harga" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Jumlah <small class="text-danger">*</small></label>
                <input type="text" name="jumlah" id="jumlah" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Berat <small class="text-danger">*</small></label>
                <input type="text" name="berat" id="berat" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="btn_save" name="save" class="save btn btn-danger"><?php echo $this->lang->line('save'); ?></button>
          <a class="btn btn-info" type="button" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></a>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="updatediamondmodal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title"><?php echo $this->lang->line('change'); ?> Detail Diamond</h3>
        </center>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url() . 'pimpinan/updatedetaildiamond'; ?>" method="POST">
          <input type="hidden" id="updateIdSubdetail" name="updateIdSubdetail">
          <div class="form-group">
            <label for="">Parcel</label>
            <input type="text" class="form-control" id="updateInputParcel" readonly>
          </div>
          <div class="form-group">
            <label for="">Carat</label>
            <input type="number" class="form-control" id="updateInputCarat" readonly>
          </div>
          <div class="form-group">
            <label for="">Harga</label>
            <input type="text" class="form-control" id="updateInputHarga" readonly>
          </div>
          <div class="form-group">
            <label for="">Jumlah</label>
            <input type="number" class="form-control" id="updateInputJumlah" onchange="changeInputBerat()" onkeyup="changeInputBerat()" name="updateInputJumlah">
          </div>
          <div class="form-group">
            <label for="">Berat</label>
            <input type="number" class="form-control" id="updateInputBerat" name="updateInputBerat" readonly>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
      </div>
      </form>
    </div>
  </div>
</div>



<script type="text/javascript">
  <?php echo $jsArray; ?>

  function changeValue(x) {
    document.getElementById('harga').value = prdHarga[x].harga;
  };
</script>