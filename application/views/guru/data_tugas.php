            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Management Data tugas Learnify Education</h2>
                            <hr>
                            <p class="card-text">Jumlah tugas yang terdaftar di Learnify Education sekarang adalah
                            <span class="font-weight-bold" style="color:black;">
                                <?php echo $this->db->count_all('tugas'); ?> tugas.
                            </span></p>
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
                                                <th scope="col">ID BImbel</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Tugas</th>
                                                <th scope="col">Option</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            foreach ($user as $u) {
                                            ?>
                                                <tr class="text-center">

                                                    <th scope="row">
                                                        <?php echo $u->id_tugas ?>
                                                    </th>
                                                    <th scope="row">
                                                        23
                                                    </th>

                                                    <td>Vera Kristina <!-- <?php
                                                    $data['user'] = $this->db->get_where('siswa', ['email' =>
                                                    $this->session->userdata('email')])->row_array();
                                                    echo $data['user']['nama'];
                                                    ?> -->
                                                    </td>

                                                    <td>
                                                        <img height="100px" width="100px" src="<?= base_url() . 'assets/materi_video/' . $u->video; ?>">
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('guru/download_tugas/' . $u->id_tugas); ?>" class="btn btn-success"><i class="fa fa-download"></i>  Download</a>
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
                title: 'Data tugas Telah Dirubah!',
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
                title: 'Data tugas Telah Dihapus!',
                text: 'Selamat data telah Dihapus!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>

    <!-- End Sweetalert -->

 