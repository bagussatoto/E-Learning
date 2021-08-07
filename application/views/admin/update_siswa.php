            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <form action="<?= base_url('admin/user_edit') ?>" enctype="multipart/form-data" method="post">
                        <?php foreach ($user as $u) { ?>
                            <div class="">
                                <div class="hero text-white hero-bg-image" data-background="<?= base_url('assets/') ?>stisla-assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg">
                                    <div class="col-md-4 mx-auto rounded-circle bg-white p-3" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                                        <img src="<?= base_url() . 'assets/profile_picture/' . $u->image; ?>" class="card-img-top  rounded-circle img-responsive" alt="...">
                                    </div>
                                    <div class="input-group mt-3 mx-auto" style="width: 50%;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Upload Photo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div id="detail" class="col-md-12 bg-white p-3" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                                <h1 class="font-weight-bold card-title text-center" style="color: black;">Update Data
                                    Siswa
                                </h1>
                                <p class="text-center" style="line-height: 5px;">Silahkan isi data dibawah untuk update
                                    data, dan upload file diatas untuk update data profile picture</p>
                                <hr>
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?= $u->id ?>">
                                    <input type="hidden" name="password" value="<?= $u->password ?>">
                                    <input type="hidden" name="is_active" value="<?= $u->is_active ?>">
                                    <input type="hidden" name="date_created" value="<?= $u->date_created ?>">
                                    <label for="exampleInputEmail1" class="font-weight-bold" style="font-size: 20px;">Nama</label>
                                    <input type=" text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="nama" value="<?= $u->nama ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="font-weight-bold" style="font-size: 20px;">Email</label>
                                    <input type="email" class="form-control" readonly name="email" value="<?= $u->email ?>" id="exampleInputPassword1">
                                </div>
                                <input type="submit" value="Update ⭢" class="btn btn-success btn-block">
                            </div>
                        <?php } ?>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
