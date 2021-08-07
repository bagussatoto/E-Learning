            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div id="detail" class="card card-success">
                        <div class="col-md-12 text-center">
                            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                Pendaftaran Guru</p>
                            <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                dibawah </p>
                            <hr>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="<?= base_url('admin/add_guru') ?>">
                                <?php
                                $random_code = rand(100, 200);

                                $chdt = "";
                                if($random_code >= 100){
                                $chdt = "19".$random_code;
                                }else{
                                $chdt = "".$random_code;
                                }
                            ?>
                                <div id="" class="form-group">
                                    <label for="nip">Nomor Induk Pegawai</label>
                                    <input id="nip" type="text" class="form-control" name="nip" value="<?php echo $chdt; ?>"readonly required>
                                    <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input id="nama" type="text" class="form-control" name="nama">
                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Konfirmasi Password</label>
                                        <input id="password2" type="password" class="form-control" name="password2">
                                        <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div id="" class="row">
                                    <div class="form-group col-12">
                                        <label>Mata Pelajaran yang diajar</label>
                                        <select class="form-control selectric" name="mapel">
                                            <option>Matematika</option>
                                            <option>IPA</option>
                                            <option>Bahasa Inggris</option>
                                            <option>Bahasa Indonesia</option>
                                            <option>Pendidikan Agama Islam</option>
                                        </select>
                                        <?= form_error('mapel', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">Saya Mengerti dan ingin
                                            melajutkan.</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">
                                        Daftar ⭢
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
