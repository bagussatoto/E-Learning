
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="card" style="width:100%;">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Management Data Kelas Learnify</h2>
                            <hr>
                            <p class="card-text">Jumlah Kelas yang ada di Learnify sekarang adalah
                            <span class="font-weight-bold" style="color:black;">
                                <?php echo $this->db->count_all('kelas'); ?> Kelas.
                            </span>Hanya admin saja yang dapat menambahkan kelas </p>
                            <a href="<?= base_url('admin/add_kelas') ?>" class="btn btn-success"><i class="fa fa-user-plus"></i> Tambah
                                Data Kelas </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                <div class="table-responsive">
                                    <table id="example" class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col"> Kelas</th>
                                                <th scope="col"> Option</th>
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
                                                        <?php echo $u->kelas ?>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('admin/update_kelas/' . $u->id); ?>" class="btn btn-info"><i class="fa fa-edit"></i> Update </a>

                                                        <!-- <a href="<?php echo site_url('admin/delete_kelas/' . $u->id); ?>" class="btn btn-danger remove"><i class="fa fa-trash"></i> Delete </a> -->

                                                        <a href="<?php echo ('delete_kelas/' . $u->id); ?>" onclick="javascript: return confirm('yakin ingin hapus?')" class="btn btn-danger remove" ><i class="fa fa-trash"></i> Delete</a>
                                                    </td>

                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <p class="small font-weight-bold">add kelas hanya bisa dilakukan oleh admin saja</p>
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
                title: 'Data Kelas Telah Dirubah!',
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
                title: 'Data Kelas Telah Dihapus!',
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
                title: 'Data Kelas Telah Ditambah!',
                text: 'Selamat data telah Ditambah!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>
    <!-- End Sweetalert -->
