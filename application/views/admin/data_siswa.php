            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Management Data Siswa Learnify Education</h2>
                            <hr>
                            <p class="card-text">Jumlah Siswa yang terdaftar di Learnify Education sekarang 
                            <span class="font-weight-bold" style="color:black;"><!-- 
                                <?php echo $this->db->count_all('siswa'); ?> Siswa -->.
                            </span></p>
                            <a href="<?= base_url('admin/registration') ?>" class="btn btn-success"><i class="fa fa-user-plus"></i> Tambah
                                Siswa </a>
                            <a href="<?= base_url('user/print_siswa') ?>" class="btn btn-danger" target="_blank"><i class="fa fa-print"></i> Print </a>
                            <!-- <a href="<?= base_url('user/export_excel') ?>" class="btn btn-warning"><i class="fa fa-file-excel"></i> Export </a> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                                <div class="table-responsive">
                                    <table id="example" class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Akun Aktif *</th>
                                                <th scope="col">Detail</th>
                                                <th scope="col">Option</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            foreach ($user as $u) {
                                            ?>
                                                <tr class="text-center">

                                                    <th scope="row">
                                                        <?php echo $u->id ?>
                                                    </th>

                                                    <td>
                                                        <?php echo $u->nama ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $u->email ?>
                                                    </td>

                                                    <td>
                                                        <img height="20px" src="<?= base_url() . 'assets/profile_picture/' . $u->image; ?>">
                                                    </td>

                                                    <td>
                                                        <?php echo $u->is_active ?>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('admin/detail_siswa/' . $u->id); ?>" class="btn btn-success"><i class="fa fa-address-card"></i> Detail </a>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('admin/update_siswa/' . $u->id); ?>" class="btn btn-info"><i class="fa fa-edit"></i> Update </a>

                                                        <!-- <a href="<?php echo site_url('admin/delete_siswa/' . $u->id); ?>" class="btn btn-danger remove"><i class="fa fa-trash"></i> Delete </a> -->
                                                        <a href="<?php echo ('delete_siswa/' . $u->id); ?>" onclick="javascript: return confirm('yakin ingin hapus?')" class="btn btn-danger remove" ><i class="fa fa-trash"></i> Delete</a>
                                                         <!-- <a onclick="deletedata(<?php echo $u->id ?>)" href="#" data-toggle="tooltip" data-placement="bottom" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a> -->
                                                    </td>

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
                title: 'Data Siswa Telah Dirubah!',
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
                title: 'Data Siswa Telah Dihapus!',
                text: 'Selamat data telah Dihapus!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success-reg')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data Siswa Telah Ditambah!',
                text: 'Selamat data telah Ditambah!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

   
    <!-- End Sweetalert -->

 