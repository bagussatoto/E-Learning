            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <!-- <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Update Data Materi</h2>
                                <hr>
                                <p class="card-text"> After I ran into Helen at a restaurant, I realized she was just office pretty drop-dead date put in in a deck for our standup today. Who's responsible for the ask for this request? who's responsible for the ask for this request? but moving the goalposts gain traction.
                                </p>
                                <a href="#detail" class="btn btn-success">Saya paham dan
                                    ingin melanjutkan ⭢</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="card card-success">
                        <div class="col-md-12 text-center">
                            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                Update Data Materi</p>
                            <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                dibawah </p>
                            <hr>
                        </div>
                        <?php foreach ($user as $u) { ?>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('admin/materi_edit') ?>">
                                    <input type="hidden" name="id" value="<?= $u->id ?>">
                                    <div class="form-group">
                                        <label for="nip">Nama Guru</label>
                                        <input readonly id="nama_guru" type="text" class="form-control" value="<?= $u->nama_guru ?>" name="nama_guru">
                                        <?= form_error('nama_guru', '<small class="text-danger">', '</small>'); ?>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_mapel">Mata Pelajaran</label>
                                        <input readonly id="nama_mapel" type="text" value="<?= $u->nama_mapel ?>" class="form-control" name="nama_mapel">
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Deskripsi Materi</label>
                                        <textarea class="form-control txtarea" name="deskripsi" id="exampleFormControlTextarea1" rows="3">
                                        <?= $u->deskripsi ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">
                                            Update ⭢
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

