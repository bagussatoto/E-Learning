            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="card card-success">
                        <div class="col-md-12 text-center">
                            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                Update Data Guru</p>
                            <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                dibawah </p>
                            <hr>
                        </div>
                        <?php foreach ($user as $u) { ?>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('admin/guru_edit') ?>">

                                    <div class="form-group">
                                        <label for="nip">Nomor Induk Pegawai</label>
                                        <input readonly id="nip" type="text" class="form-control" value="<?= $u->nip ?>" name="nip">
                                        <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>
                                        <div class="invalid-feedback">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" value="<?= $u->email ?>" class="form-control" name="email">
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group" id="detail">
                                        <label for="nama">Nama Lengkap</label>
                                        <input id="nama" type="text" value="<?= $u->nama_guru ?>" class="form-control" name="nama">
                                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">
                                            Update data ⭢
                                        </button>
                                    </div>
                                </form>
                            <?php } ?>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
