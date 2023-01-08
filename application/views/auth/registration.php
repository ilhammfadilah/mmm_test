<body class="bg-gradient-info">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
                            </div>
                             <?= $this->session->flashdata('message'); ?>
                            <form class="user" method="post" action="<?= base_url('registrasi') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" 
                                        placeholder="Masukkan Nama Anda" value="<?= set_value('nama')?>">
                                         <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" 
                                        placeholder="Masukkan Email Anda" value="<?= set_value('email')?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                     <input type="text" class="form-control form-control-user" id="provinsi" name="provinsi" 
                                        placeholder="Masukkan Provinsi Anda" value="<?= set_value('provinsi')?>">
                                        <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                 <div class="form-group row">
                                    <div class="col-md-6">
                                       <input type="text" class="form-control form-control-user" id="kota" name="kota" 
                                        placeholder="Masukkan Kota Anda" value="<?= set_value('kota')?>">
                                        <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-user" id="kecamatan" name="kecamatan" 
                                        placeholder="Masukkan Kecamatan Anda" value="<?= set_value('kecamatan')?>">
                                        <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" 
                                        placeholder="Masukkan Alamat Anda" value="<?= set_value('alamat')?>">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-user btn-block"> Daftar Akun</button> 
                            </form>
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="<?php echo base_url() ?>lupapassword">Lupa Password?</a>
                            </div> -->
                            <div class="text-center">
                                <a class="small text-info" href="<?php echo base_url()?>login">Sudah Punya Akun ? Silahkan Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>