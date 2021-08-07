
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="card" style="width:100%;">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Management Data Guru Learnify</h2>
                            <hr>
                            <p class="card-text">Jumlah Guru yang terdaftar di Learnify sekarang adalah
                            <span class="font-weight-bold" style="color:black;">
                                <?php echo $this->db->count_all('guru'); ?> Guru.
                            </span>Guru tidak dapat melakukan pendaftaran online sendiri. Hanya admin yang diperkenankan untuk mendaftarkan guru. </p>
                            <a href="<?= base_url('admin/add_guru') ?>" class="btn btn-success"><i class="fa fa-user-plus"></i> Tambah
                                Data Guru </a>
                            <a href="<?= base_url('guru/print_guru') ?>" class="btn btn-danger" target="_blank"><i class="fa fa-print"></i> Print </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                <div class="table-responsive">
                                    <table id="example" class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">NIP</th>
                                                <th scope="col">Nama Guru</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Nama Mapel</th>
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
                                                        <?php echo $u->nip ?>
                                                    </th>

                                                    <td>
                                                        <?php echo $u->nama_guru ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $u->email ?>
                                                    </td>


                                                    <td>
                                                        <?php echo $u->nama_mapel ?>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('admin/detail_guru/' . $u->nip); ?>" class="btn btn-success">Detail <i class="fa fa-address-card"></i></a>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('admin/update_guru/' . $u->nip); ?>" class="btn btn-info"><i class="fa fa-edit"></i> Update </a>

                                                       <!--  <a href="<?php echo site_url('admin/delete_guru/' . $u->nip); ?>" class="btn btn-danger remove"><i class="fa fa-trash"></i> Delete </a> -->

                                                       <a href="<?php echo ('delete_guru/' . $u->nip); ?>" onclick="javascript: return confirm('yakin ingin hapus?')" class="btn btn-danger remove" ><i class="fa fa-trash"></i> Delete</a>
                                                    </td>

                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <p class="small font-weight-bold">Pendaftaran guru hanya dapat dilakukan admin dan tidak bisa dilakukan sendiri</p>
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
                title: 'Data Guru Telah Dirubah!',
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
                title: 'Data Guru Telah Dihapus!',
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
                title: 'Data Guru Telah Ditambah!',
                text: 'Selamat data telah Ditambah!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

    <!-- End Sweetalert -->
