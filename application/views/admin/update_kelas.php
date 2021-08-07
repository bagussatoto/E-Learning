            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="card card-success">
                        <div class="col-md-12 text-center">
                            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                Update Data Kelas</p>
                            <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                dibawah </p>
                            <hr>
                        </div>
                        <?php foreach ($user as $u) { ?>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('admin/kelas_edit') ?>">

                                    <div class="form-group">
                                        <label for="id">ID</label>
                                        <input readonly id="id" type="text" class="form-control" value="<?= $u->id ?>" name="id">
                                        <?= form_error('id', '<small class="text-danger">', '</small>'); ?>
                                        <div class="invalid-feedback">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="kelas">kelas</label>
                                        <input id="kelas" type="text" value="<?= $u->kelas ?>" class="form-control" name="kelas">
                                        <?= form_error('kelas', '<small class="text-danger">', '</small>'); ?>
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
