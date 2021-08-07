            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Management Data bimbel Learnify Education</h2>
                            <hr>
                            <p class="card-text">Jumlah bimbel yang terdaftar di Learnify Education sekarang adalah
                            <span class="font-weight-bold" style="color:black;">
                                <?php echo $this->db->count_all('bimbel'); ?> bimbel.
                            </span></p>
                            <a href="<?= base_url('guru/add_bimbel') ?>" class="btn btn-success"><i class="fa fa-plus-square"></i> Tambah Bimbel</a><br><br>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                                <div class="table-responsive"><form class="navbar-form navbar-right" role="search">
                                   <!--  <form method="get" action="<?php echo base_url("admin/pencarian/")?>">
                                <div class="col-md- col-sm-2 col-xs-2" align="center">Nama Bimbel <br>
                                <select class="form-control" name="nama_mapel">
                                  <option>Semua</option>
                                  <option value="Matematika">Matematika</option>
                                  <option value="ipa">IPA</option>
                                  <option value="ips">IPS</option>
                                  <option value="bahasa indo">Bahasa Indo</option>
                                  <option value="bahasa ingg">Bahasa Ingg</option>
                                  <option value="Pendidikan">Pendidikan</option>
                                </select>
                                </div>
                                 <br><input type="submit" class="btn btn-primary" value="Cari">              </div>
                        </form>
                            </form><br><br> -->
                                 <!--  <div class="form-group">
                                        <select required id="inputState" name="kelas" class="form-control">
                                            <option selected>Pilih disini</option>
                                                    <option value="X">X IPA</option>
                                                    <option value="X">X IPS</option>
                                                    <option value="X">X AGAMA</option>
                                                    <option value="XI">XI IPA</option>
                                                    <option value="XI">XI IPS</option>
                                                    <option value="XI">XI AGAMA</option>
                                                    <option value="XII">XII IPA</option>
                                                    <option value="XII">XII IPS</option>
                                                    <option value="XII">XII AGAMA</option>
                                        </select><br>
                                         <button type="submit" name="Cari" class="btn btn-danger">Filter</button>
                                    </div> -->
                                </form>
                                    <table id="example" class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama bimbel</th>
                                                <th scope="col">Modul</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Kelas</th>
                                               <!--  <th scope="col">Option</th> -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            foreach ($user as $u) {
                                            ?>
                                                <tr class="text-center">

                                                    <th scope="row">
                                                        <?php echo $u->id_bimbel ?>
                                                    </th>

                                                    <td>
                                                        <?php echo $u->nama_mapel ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $u->video ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $u->deskripsi ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $u->kelas ?>
                                                    </td>
<!-- 
                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('admin/update_bimbel/' . $u->id_bimbel); ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                                        <a href="<?php echo site_url('guru/delete_bimbel/' . $u->id_bimbel); ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                                    </td> -->
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <p class="small font-weight-bold">* Angka 1 menunjukan akun telah aktif sedangkan
                                        Angka
                                        0 menunjukan akun
                                        belum
                                        aktif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->

    <!-- Start Sweetalert -->

    <?php if ($this->session->flashdata('success-edit')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data bimbel Telah Dirubah!',
                text: 'Selamat data berubah!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('user-delete')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data bimbel Telah Dihapus!',
                text: 'Selamat data telah Dihapus!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success-add')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data Materi Telah Ditambah!',
                text: 'Selamat data telah Ditambah!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

    <!-- End Sweetalert -->

 