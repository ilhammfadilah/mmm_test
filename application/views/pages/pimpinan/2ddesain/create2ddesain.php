<div class="content">
  <div class="container-fluid">
    <h1>2D Design</h1>
    <form action="<?php echo base_url() . 'pembelian/createpembelian'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
      <?= $this->session->flashdata('message'); ?>
      <div class="row">
        <form action="<?php echo base_url() . 'pembelian'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
        </form>
      </div>
      <div class="card mb-4">
        <div class="col-md-3">
          <h4 style="margin-top: 10px;margin-bottom: 0px;padding-bottom: 0px;margin-left: 7px;">Header Designer</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control">
            <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating"><?php echo $this->lang->line('number'); ?></label>
                <input type="text" name="nomor" class="form-control" readonly value="<?= $nomor2ddesain ?>">
                <input type="hidden" name="id_2ddesignheader" class="form-control" readonly value="<?= $id_header ?>">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating"><?php echo $this->lang->line('transactiondate'); ?></label>
                <input value="<?php echo date('Y-m-d') ?>" type="date" name="tanggaltransaksi" class="form-control">
                <?= form_error('tanggaltransaksi', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating"><?php echo $this->lang->line('client'); ?></label>
                <select id="typeclient" name="typeclient" class="form-control" required>
                  <option value="New Design">New Design</option>
                  <option value="Client Order">Client Order</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Designer</label>
              <div class="input-group">
                <input id="idkaryawan" type="hidden" name="idkaryawan" class="form-control" readonly>

                <div class="input-group">
                  <input id="nama" type="text" placeholder="Nama Karyawan" name="karyawan" class="form-control" readonly>
                  <div class="input-group-append">
                    <button type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalkaryawan"><?php echo $this->lang->line('search'); ?></button>
                  </div>

                </div>
              </div>
            </div>
            <div id="client" class="col-md-4">

              <label class="bmd-label-floating"><?php echo $this->lang->line('clientname'); ?></label>
              <div class="input-group">
                <input style="padding-bottom: 10px;" id="idclient" type="hidden" name="idclient" class="form-control" readonly>
                <input style="padding-bottom: 10px;" type="text" id="namaklien" name="namaclient" class="form-control">
                <div class="input-group-append">
                  <button type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalclient"><?php echo $this->lang->line('search'); ?></button>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Memo</label>
                <!-- <input style="padding-bottom: 10px; height: 55px;" type="text" name="memo" class="form-control"> -->
                <textarea name="memo" id="memo" cols="30"></textarea>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card mb-4">
            <div class="row">
              <div class="col-md-3">
                <h4 style="margin-top: 10px;margin-bottom: 0px;padding-bottom: 0px;margin-left: 7px;">Detail Designer</h4>
              </div>

              <div class="col-md-9">
                <h6 style="margin-top: 10px;margin-bottom: 0px;padding-bottom: 0px;margin-right: 7px;text-align: right;"><a id="adddetail" class="text-info" style="text-decoration: none" href="#"> <i class="fas fa-fw fa-plus text-info"></i> <?php echo $this->lang->line('ad'); ?></h6></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <?= form_error('model', '<small class="text-danger" style="margin-left:5px;font-size:15px;">', '</small>'); ?>
              </div>
            </div>


            <div id="detaildesigner">
              <div class="card-body">
                <div class="table-responsive mb-5" style="display: none;">
                  <table style="border-collapse: 1;color: #858796;border-bottom: 2px solid #e3e6f0;" id="dataTable" width="100%" height="1px" cellspacing="0">
                    <thead>
                      <tr height="20px">
                        <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">No</th>
                        <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Model</th>
                        <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Keterangan</th>
                        <th style=" padding: 0.75rem;vertical-align: top;border-top: 1px solid #e3e6f0;">Pengaturan</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>

                <form action="<?php echo base_url() . 'pimpinan/adddetaildesain'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true" class="mt-4 mb-4">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Model<small class="text-danger">*</small></label>
                      <div class="input-group">
                        <input style="padding-bottom: 10px;" type="hidden" name="iddetail" class="form-control" value="<?= $id_detail ?>" readonly>
                        <input style="padding-bottom: 10px;max-width: 200px;" type="text" name="model" class="form-control" required value="<?= set_value('model') ?>">

                        <input style="margin-left: 5px;" type="text" name="submodel" class="form-control">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>Jumlah Komponen</label>
                      <input style="padding-bottom: 10px;text-align: right;" type="number" step="any" name="jumlahkomponen" class="form-control">
                    </div>

                    <div class="col-md-2">
                      <label>Tipe Design<small class="text-danger">*</small></label>
                      <div class="input-group">

                        <input style="padding-bottom: 10px;" id="tipeproduk" type="text" name="tipeproduk" class="tipeproduk form-control ui-autocomplete-input" value="" autocomplete="off">

                        <div class="input-group-append">
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaltipeproduk">Cari</button>
                        </div>

                        <input style="padding-bottom: 10px;width: 160px;" id="idtipeproduk" type="hidden" name="idtipeproduk" class="idtipeproduk form-control" value="" readonly="">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label>Tingkat Kesulitan<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;width: 160px;" id="idongkosrangka" value="" type="hidden" name="idongkosrangka" class="form-control" readonly="">
                      <div class="input-group">
                        <select id="kesulitan" onchange="getongkosrangka()" class="form-control" name="kesulitan">
                          <option value="">======= Pilih Kesulitan =======</option>
                          <option value="Mudah Kecil 1-2">Mudah Kecil 1-2</option>
                          <option value="Mudah Sedang/3-4">Mudah Sedang/3-4</option>
                          <option value="Mudah Besar &gt;4">Mudah Besar &gt;4</option>
                          <option value="Sedang Kecil 1-2">Sedang Kecil 1-2</option>
                          <option value="Sedang Sedang/3-4">Sedang Sedang/3-4</option>
                          <option value="Sedang Besar &gt;4">Sedang Besar &gt;4</option>
                          <option value="Sulit Kecil 1-2">Sulit Kecil 1-2</option>
                          <option value="Sulit Sedang/3-4">Sulit Sedang/3-4</option>
                          <option value="Sulit Besar &gt;4">Sulit Besar &gt;4</option>
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label>Material<small class="text-danger">*</small></label>
                      <div class="input-group">
                        <input id="material" type="text" name="material" class="form-control">
                        <input style="padding-bottom: 10px;width: 160px;" id="idmaterial" type="hidden" name="idmaterial" class="form-control" readonly>
                        <div class="input-group-append">
                          <button type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalmaterial"><?php echo $this->lang->line('search'); ?></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label>Berat<small class="text-danger">*</small></label>
                      <div class="input-group">
                        <input style="padding-bottom: 10px;max-width: 400px;" type="text" name="beratmaterial" class="form-control" required>
                        <input placeholder="Satuan Berat" id="satuan" readonly type="text" name="satuan" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label><?php echo $this->lang->line('headconcept'); ?><small class="text-danger">*</small></label>
                      <div class="input-group">
                        <input style="padding-bottom: 10px;width: 200px;" id="konsepkepala" type="text" name="konsepkepala" class="form-control" required>
                        <input style="padding-bottom: 10px;width: 160px;" id="idkonsepkepala" type="hidden" name="idkonsepkepala" class="form-control" readonly>
                        <span class="input-group-append">
                          <button type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalkonsepkepala"><?php echo $this->lang->line('search'); ?></button>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Jenis Chrome<small class="text-danger">*</small></label>
                      <div class="input-group">
                        <input style="padding-bottom: 10px;width: 160px;" id="finishing" type="text" name="finishing" class="form-control" required>
                        <input style="padding-bottom: 10px;width: 160px;" id="idfinishing" type="hidden" name="idfinishing" class="form-control" readonly>

                        <span class="input-group-append">
                          <button type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalfinishing"><?php echo $this->lang->line('search'); ?></button>
                        </span>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label><?php echo $this->lang->line('productcolor'); ?><small class="text-danger">*</small></label>
                      <div class="input-group">
                        <input style="padding-bottom: 10px;width: 160px;" id="warnaproduk" type="text" name="warnaproduk" class="form-control" required>
                        <input style="padding-bottom: 10px;width: 160px;" id="idwarnaproduk" type="hidden" name="idwarnaproduk" class="form-control" readonly>
                        <span class="input-group-append">
                          <button type="button" class="btn btn-success btn-flat" data-toggle="modal" required data-target="#modalwarnaproduk"><?php echo $this->lang->line('search'); ?></button>
                        </span>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label>Ongkos Lainnya<small class="text-danger">*</small></label>
                      <div class="input-group">
                        <select onchange="getdataongkoslainnya(this.value)" class="form-control  " id="ongkoslainnya" name="ongkoslainnya">
                          <option value="0">======= Pilih Ongkos Lainnya =======</option>
                          <?php foreach ($ongkos as $data) : ?>
                            <option value="<?= $data->harga ?>"><?= $data->ongkos ?></option>
                          <?php endforeach; ?>
                        </select>

                        <!--   <select id="ongkoslainnya" onchange="getongkoslainnya()" class="form-control" name="ongkoslainnya">
                                            <option value="">======= Pilih Ongkos Lainnya =======</option> 
                                                                                          <option value="40000">Doft</option>
                                                                                          <option value="35000">Enamel</option>
                                                                                          <option value="25000">Laser Logo</option>
                                                                                          <option value="15000">Laser Nama</option>
                                                                                          <option value="110000">Laser Ornamen</option>
                                                                                          <option value="35000">Miligrain</option>
                                                                                      </select> -->
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label><?php echo $this->lang->line('gender'); ?><small class="text-danger">*</small></label>
                      <select class="form-control" name="jeniskelamin">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label><?php echo $this->lang->line('size'); ?><small class="text-danger">*</small></label>
                      <input type="text" name="ukuran" class="form-control">
                    </div>

                    <div class="col-md-4">
                      <label>Point<small class="text-danger">*</small></label>
                      <select required="" class="form-control select2 select2-hidden-accessible" name="point" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option value="" selected="selected" data-select2-id="3">Pilih Point</option>
                        <option value="1">0.25</option>
                        <option value="2">0.5</option>
                        <option value="3">0.75</option>
                        <option value="4">1</option>
                        <option value="5">1.25</option>
                        <option value="6">1.5</option>
                        <option value="7">2</option>
                        <option value="8">2.5</option>
                        <option value="9">3</option>
                        <option value="10">3.5</option>
                        <option value="11">4</option>
                        <option value="12">4.5</option>
                        <option value="13">5</option>
                        <option value="14">6</option>
                        <option value="15">7</option>
                        <option value="16">8</option>
                        <option value="17">9</option>
                        <option value="18">10</option>
                        <option value="19">11</option>
                        <option value="20">12</option>
                        <option value="21">13</option>
                        <option value="22">14</option>
                        <option value="23">15</option>
                      </select>
                      <!-- <span class="mt-2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;">
                        <span class="selection">
                          <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-point-a5-container">
                            <span class="select2-selection__rendered" id="select2-point-a5-container" role="textbox" aria-readonly="true" title="Pilih Point">Pilih Point</span>
                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b>
                            </span>
                          </span>
                        </span>
                        <span class="dropdown-wrapper" aria-hidden="true">
                        </span>
                      </span> -->
                    </div>

                    <!-- detail button -->
                    <!-- <div class="col-md-4"><br>
                      <div class="input-group">

                        <button style="margin-left: 3px;width: 200px;" type="button" class="btn btn-primary btn-flat" data-toggle="modal" required data-target="#ModalTambahsubdetail">Detail Diamond</button>

                        <span class="input-group-btn">
                          <button style="margin-left: 3px;width: 200px;" type="button" class="btn btn-primary btn-flat" data-toggle="modal" required data-target="#modalfinishing">Detail Kepala</button>
                        </span>
                      </div>
                    </div> -->
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-6">
                      <h4>Jatah Susut</h4>

                      <div class="input-group row mb-2">
                        <label class="col-md-3">Finishing<small class="text-danger">*</small></label>
                        <input type="text" name="jsfinishing" class="form-control">
                        <input class="form-control col-md-3" s placeholder="Satuan Berat" id="satuanjsfinishing" readonly type="text" name="satuanjsfinishing" class="form-control" required>
                      </div>

                      <div class="input-group row mb-2">
                        <label class="col-md-3">Poles Rangka<small class="text-danger">*</small></label>
                        <input type="text" name="jspolesrangka" class="form-control">
                        <input placeholder="Satuan Berat" id="satuanjspolesrangka" readonly type="text" name="satuanjspolesrangka" class="form-control col-md-3" required>
                      </div>

                      <div class="input-group row mb-2">
                        <label class="col-md-3">Pasang Batu<small class="text-danger">*</small></label>
                        <input type="text" name="jspasangbatu" class="form-control">
                        <input placeholder="Satuan Berat" id="satuanjspasangbatu" readonly type="text" name="satuanjspasangbatu" class="form-control col-md-3" required>
                      </div>

                      <div class="input-group row mb-2">
                        <label class="col-md-3">Rakit<small class="text-danger">*</small></label>
                        <input type="text" name="jspolesrakit" class="form-control">
                        <input placeholder="Satuan Berat" id="satuanjsrakit" readonly type="text" name="satuanjsrakit" class="form-control col-md-3" required>
                      </div>

                      <div class="input-group row mb-2">
                        <label class="col-md-3">Poles Chrome<small class="text-danger">*</small></label>
                        <input type="text" name="jspoleschrome" class="form-control">
                        <input placeholder="Satuan Berat" id="satuanjspoleschrome" readonly type="text" name="satuanjspoleschrome" class="form-control col-md-3" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <h4>Estimasi Harga</h4>

                      <div class="input-group row mb-2">
                        <label class="col-md-3">Material<small class="text-danger">*</small></label>
                        <input type="text" name="material" class="form-control" readonly>
                      </div>

                      <div class="input-group row mb-2">
                        <label class="col-md-3">Diamond<small class="text-danger">*</small></label>
                        <?php foreach ($diamond as $d)
                        ?>
                        <input type="text" name="diamond" id="diamond" value="Rp. <?= number_format($d->hargadiamond, 0, "", ".") ?>" readonly class="form-control">
                        <input type="hidden" name="totaljumlah" value="<?= $d->totaljumlah ?>" readonly class="form-control">
                        <input type="hidden" name="totalberat" value="<?= $d->totalberat ?>" readonly class="form-control">
                      </div>

                      <div class="input-group row mb-2">
                        <label class="col-md-3">Kepala<small class="text-danger">*</small></label>
                        <input type="text" name="kepala" class="form-control" readonly>
                      </div>

                      <div class="input-group row mb-2">
                        <label class="col-md-3">Ongkos<small class="text-danger">*</small></label>
                        <input id="hargaongkos" type="text" name="ongkos" readonly class="form-control">
                      </div>

                      <div class="input-group row mb-2">
                        <label class="col-md-3">Total<small class="text-danger">*</small></label>
                        <input type="text" name="total" id="total" class="form-control" value="Rp. <?= number_format($d->total, 0, "", ".") ?>" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- detail diamond -->
                  <div class="row mb-4">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row mb-4">
                            <div class="col-md-6">
                              <h4 class="m-0 font-weight-bold text-primary"> Detail Diamond</h4>
                            </div>
                            <div class="col-md-6">
                              <!-- <h6 style="text-align: right" class="m-0 font-weight-bold text-primary">
                                <a id="addbuttonsubdetail" class="text-info" style="text-decoration: none" onclick="tampilDetailDiamond()">
                                  <i class="fas fa-fw fa-plus text-info"></i> Tambah
                                </a>
                              </h6> -->
                              <button type="button" onclick="tampilDetailDiamond()" class="btn btn-default outline-none float-right"><i class="fas fa-fw fa-plus text-info "></i> Tambah</button>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <?= $this->session->flashdata('msg'); ?>
                              <div class="table-responsive">
                                <table class="table" width="100%" cellspacing="0">
                                  <thead id="theadsubdetail">
                                    <tr height="20px">
                                      <th style="width: 350px">Parcel</th>
                                      <th style="width: 60px">Carat</th>
                                      <th style="width: 150px">Harga</th>
                                      <th style="width: 150px">Clarity</th>
                                      <th style="width: 150px">Shape</th>
                                      <th style="width: 150px">Color</th>
                                      <th style="width: 150px">Setting Diamond</th>
                                      <th style="width: 150px">Jumlah</th>
                                      <th style="width: 150px">Berat</th>
                                      <th style="width: 150px">Pengaturan</th>
                                    </tr>
                                  </thead>
                                  <tbody id="tabledetaildiamond">
                                    <?php foreach ($duaddesainsubdetail as $data) : ?>
                                      <tr>
                                        <td><?= $data->parcel; ?></td>
                                        <td><?= $data->carat; ?></td>
                                        <td><?= $data->harga; ?></td>
                                        <td><?= $data->clarity; ?></td>
                                        <td><?= $data->shape; ?></td>
                                        <td><?= $data->color; ?></td>
                                        <td></td>
                                        <td><?= $data->jumlah; ?></td>
                                        <td><?= $data->berat; ?></td>
                                        <td>
                                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" onclick="updateDiamond(<?= $data->id_subdetail ?>)" id="modalupdatediamond" data-id="<?= $data->id_subdetail ?>"><i class="fa fa-pen"></i></button>
                                          <!-- <a href="<?= base_url('updateSubDetail/' . $data->id_subdetail); ?>" class="btn btn-info btn-sm" data-id="<?= $data->id_subdetail ?>"><i class="fa fa-pen"></i></a> -->
                                          <a href="<?= base_url('deleteSubDetail/' . $data->id_subdetail); ?>" onclick="confirm('yakin menghapus data?')" class="btn btn-danger btn-sm" data-id="<?= $data->id_subdetail ?>"><i class="fa fa-trash-alt"></i></a>

                                        </td>
                                      </tr>
                                    <?php endforeach; ?>
                                  </tbody>
                                  <tfoot>
                                    <tr id="addformsubdetail" style="display: none;">
                                      <form id="formsubdetail" action="http://localhost:8080/mmm/dua_d_design/addsubdetail" enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true"></form>
                                      <td>
                                        <div class="input-group row mb-4">
                                          <input id="parcel" type="text" name="parcel" class="form-control ui-autocomplete-input" autocomplete="off">
                                          <input type="hidden" id="iddetail" value="0" name="iddetail" class="form-control">
                                          <input id="idparcel" type="hidden" name="idparcel" class="form-control" value="">
                                          <span class="input-group-append">
                                            <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#modalparcel">Cari</button>
                                          </span>
                                        </div>
                                      </td>
                                      <td style="width: 60px">
                                        <input type="text" style="text-align: right;" readonly="" name="carat" id="carat" class="form-control">
                                      </td>
                                      <td style="width: 250px">
                                        <input type="text" style="text-align: right;" readonly="" name="harga" id="harga" class="form-control">
                                      </td>
                                      <td style="width: 150px">
                                        <input type="text" readonly="" name="clarity" id="clarity" class="form-control">
                                      </td>
                                      <td style="width: 150px">
                                        <input type="text" readonly="" name="shape" id="shape" class="form-control">
                                      </td>
                                      <td style="width: 150px">
                                        <input type="text" readonly="" name="color" id="color" class="form-control">
                                        <input type="hidden" readonly="" name="priceheadsetting" id="priceheadsetting" class="form-control" value="0">
                                      </td>
                                      <td style="width: 200px">
                                        <select onchange="changeValue(this.value)" class="form-control" id="idheadsetting" name="idheadsetting" disabled>
                                          <option value="">- Setting Diamond -</option>
                                          <option value="5">Ganti Kuku</option>
                                          <option value="10">Laser Logo</option>
                                          <option value="4">Pasang Crown</option>
                                          <option value="8">Pasang ELP</option>
                                          <option value="7">Pasang EP/EPR</option>
                                          <option value="6">Pasang EPL/EPA</option>
                                          <option value="9">Pasang Fancy Head</option>
                                          <option value="3">Pasang Head</option>
                                          <option value="14">Prong Setting</option>
                                        </select>
                                      </td>
                                      <td style="width: 150px">
                                        <input type="number" step="any" style="text-align: right;" onchange="hitungberat()" name="jumlah" id="jumlah" class="form-control" readonly="false">
                                        <input type="hidden" style="text-align: right;" name="status" id="status" class="form-control">
                                      </td>
                                      <td style="width: 150px">
                                        <input type="number" step="any" style="text-align: right;" name="berat" onblur="onblurfunctionaddsubdetail()" id="berat" class=" form-control" readonly>
                                      </td>
                                      <td>
                                        <!--    <button style="display: none" type="submit"  id="tombol-simpansubdetail" class="btn btn-info">Simpan</button>  -->
                                        <a class="btn btn-success btn-sm mr-1" title="Tambah item" id="tombolTambahDiamond">
                                          <i class="fas fa-plus"></i>
                                        </a>
                                      </td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <h4 class="m-0 font-weight-bold text-primary">Konsep Kepala</h4>
                            </div>
                            <div class="col-md-6">
                              <!-- <h6 style="text-align: right" class="m-0 font-weight-bold text-primary"> <a id="addbuttondetailkepala" class="text-info" style="text-decoration: none" href="http://localhost:8080/mmm/tambahdata2ddesain#"> <i class="fas fa-fw fa-plus text-info"></i> Tambah</a></h6> -->
                              <button type="button" onclick="tampilKonsepKepala()" class="btn btn-default outline-none float-right"><i class="fas fa-fw fa-plus text-info "></i> Tambah</button>
                            </div>
                          </div>

                          <div class="row" style="display: none;" id="tampilkepala">
                            <form action="http://localhost:8080/mmm/pembelian"></form>
                            <div class="col-md-12">
                              <div class="table-responsive">
                                <div></div>
                                <table class="table table-hover" width="100%" cellspacing="0">
                                  <thead id="theaddetailkepala">
                                    <tr height="20px">
                                      <th>Nama Produk</th>
                                      <th>Tipe Produk</th>
                                      <th>Brand</th>
                                      <th>Etalase</th>
                                      <th>Kondisi</th>
                                      <th>Harga</th>
                                      <th>Jumlah</th>
                                    </tr>
                                  </thead>
                                  <tbody id="tabledetailproduk"></tbody>
                                  <tfoot>
                                    <tr id="addformdetailkepala">
                                      <form id="formprodukdetail" enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true"></form>
                                      <td style="width: 150px">
                                        <div class="input-group row">
                                          <input id="produk" type="text" name="produk" class="form-control ui-autocomplete-input" autocomplete="off">
                                          <input id="idbarang" type="hidden" name="id_barang" class="form-control" value="">
                                          <span class="input-group-append">
                                            <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#modalproduk">Cari</button>
                                          </span>
                                        </div>
                                      </td>
                                      <td style="width: 150px">
                                        <input type="hidden" readonly="" name="iddetail" id="iddetail" value="0" class="form-control">
                                        <input type="text" readonly="" name="tipeproduk" id="tipeproduk" class="form-control ui-autocomplete-input" autocomplete="off">
                                      </td>
                                      <td style="width: 150px">
                                        <input type="text" readonly="" name="brand" id="brand" class="form-control ui-autocomplete-input" autocomplete="off">
                                      </td>
                                      <td style="width: 150px">
                                        <input type="text" style="text-align: right;" readonly="" name="etalase" id="etalase" class="form-control ui-autocomplete-input" autocomplete="off">
                                      </td>
                                      <td style="width: 150px">
                                        <input type="text" readonly="" name="kondisi" id="kondisi" class="form-control ui-autocomplete-input" autocomplete="off">
                                      </td>
                                      <td style="width: 150px">
                                        <input type="hidden" style="text-align: right;" readonly="" name="harga" id="hargaproduk" class="form-control" value="">
                                        <input type="text" style="text-align: right;" readonly="" name="hargaproduk_" id="hargaproduk_" class="form-control">
                                      </td>
                                      <td style="width: 150px">
                                        <input type="text" style="text-align: right;" name="jumlah" onblur="onblurfunctionadddetailkepala()" id="jumlahproduk" class="inputkepala form-control">
                                      </td>
                                      <td style="display: none">
                                      </td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="gambar">
                    <h5> Format gambar .jpg .jpeg .png dan untuk ukuran size maksimal 10 MB</h5>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="drop-zone">
                          <span class="drop-zone__prompt"><?php echo $this->lang->line('picture'); ?> 1</span>
                          <input type="file" name="gambar1" class="drop-zone__input">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="drop-zone">
                          <span class="drop-zone__prompt"><?php echo $this->lang->line('picture'); ?> 2</span>
                          <input type="file" name="gambar2" class="drop-zone__input">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="drop-zone">
                          <span class="drop-zone__prompt"><?php echo $this->lang->line('picture'); ?> 3</span>
                          <input type="file" name="gambar3" class="drop-zone__input">
                        </div>
                      </div>
                      <div class="col-md-4 mt-4">
                        <div class="drop-zone">
                          <span class="drop-zone__prompt"><?php echo $this->lang->line('picture'); ?> 4</span>
                          <input type="file" name="gambar4" class="drop-zone__input">
                        </div>
                      </div>
                      <div class="col-md-4 mt-4">
                        <div class="drop-zone">
                          <span class="drop-zone__prompt"><?php echo $this->lang->line('picture'); ?> 5</span>
                          <input type="file" name="gambar5" class="drop-zone__input">
                        </div>
                      </div>
                    </div><br>
                    <h5> Format video .mp4 .mkv .afi .mpg dan untuk size video maksimal 10 MB</h5>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="drop-zone">
                          <span class="drop-zone__prompt">Video 1</span>
                          <input type="file" name="video1" class="drop-zone__input">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="drop-zone">
                          <span class="drop-zone__prompt">Video 2</span>
                          <input type="file" name="video2" class="drop-zone__input">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="drop-zone">
                          <span class="drop-zone__prompt">Video 3</span>
                          <input type="file" name="video3" class="drop-zone__input">
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12" style="text-align: right;">
                      <button type="submit" class="btn btn-info"><?php echo $this->lang->line('add'); ?></button>
                    </div>
                  </div>
                </form>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-hover" width="100%" cellspacing="0">
                    <thead>
                      <tr height="20px">

                        <th>Model</th>
                        <th><?php echo $this->lang->line('producttype'); ?></th>
                        <th><?php echo $this->lang->line('productcolor'); ?></th>
                        <th>Material</th>
                        <th><?php echo $this->lang->line('fee'); ?></th>
                        <th><?php echo $this->lang->line('pengaturan'); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($detaildesain as $data) {
                      ?>
                        <tr>
                          <td><img src="<?= base_url('assets/file/2ddesain/') . $data->gambar1 ?>" style="width: 200px;height: 100px;"> <br> Model : <?php echo $data->model ?><br> Sub Model : <?php echo $data->submodel ?> </td>
                          <td><?php echo $data->tipeproduk ?></td>
                          <td><?php echo $data->warnaproduk ?></td>
                          <td><?php echo $data->material ?><br> Berat Material : <?php echo $data->beratmaterial ?></td>
                          <td><?php echo $data->ongkos ?></td>
                          <td>

                            <a href="<?= base_url('editdetaildesain/' . $data->id_detail); ?>" class="btn btn-sm btn-secondary" role="button" title="<?php echo $this->lang->line('change'); ?>"><i class="fas fa-fw fa-search"></i> Detail Data</a>
                            <a href="<?= base_url('editdetaildesain/' . $data->id_detail); ?>" class="btn btn-sm btn-success" role="button" title="<?php echo $this->lang->line('change'); ?>"><i class="fas fa-fw fa-pencil-alt"></i> <?php echo $this->lang->line('change'); ?> </a>
                            <a href="#" data-toggle="modal" data-target="#ModalHapusdetaildesain" id="<?= $data->id_detail ?>|<?= $data->id_header ?>|<?= $data->gambar1 ?>|<?= $data->gambar2 ?>|<?= $data->gambar3 ?>|<?= $data->gambar4 ?>|<?= $data->gambar5 ?>|<?= $data->video1 ?>|<?= $data->video2 ?>|<?= $data->video3 ?>" class="hapusdetaildesain btn btn-sm btn-danger" role="button" title="<?php echo $this->lang->line('delete'); ?>"> <i class="fas fa-fw fa-trash"></i> <?php echo $this->lang->line('delete'); ?> </a>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-info"><?php echo $this->lang->line('save'); ?></button> <a href="<?= base_url('list2ddesain'); ?>" class="btn btn-danger"><?php echo $this->lang->line('cancel'); ?></a>
    </form>
  </div>
</div>
</div>
<br>
<br>
<div class="modal fade" id="ModalTambahsubdetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('add'); ?> Sub Detail</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form id="formsubdetail" enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true" class="form-user">
        <div class="modal-body">
          <!-- <div id="isimodalsubdetail"></div> -->

          <div class="row">
            <div class="col-md-6">
              <input style="padding-bottom: 10px;" type="hidden" name="iddetail" class="form-control" value="<?= $id_detail ?>" readonly>
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
<script type="text/javascript">
  <?php echo $jsArray; ?>

  function changeValue(x) {
    document.getElementById('harga').value = prdHarga[x].harga;
  };
</script>