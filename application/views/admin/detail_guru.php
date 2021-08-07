            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="card" style="width:100%;">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Detail Guru | <?= $detail->nama_guru ?> </h2>
                            <hr>
                            <p class="card-text">Detail guru meliputi Nomor Induk Pengajar, Nama Guru, Alamat Email, Password, dan Mata Pelajaran yang diajarkan
                            </p>
                            <a href="#detail" class="btn btn-success">Saya paham dan
                                ingin melanjutkan ⭢</a>
                        </div>
                    </div>
                    <div id="detail" class="col-md-12 bg-white p-3" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                        <h1 class="font-weight-bold card-title text-center" style="color: black;">Detail Guru </h1>
                        <p class="text-center" style="line-height: 5px;">Berikut data detail yang terdapat di
                            database, meliputi NIP, Nama, Email
                            dan Mapel yang diajar.</p>
                        <hr>
                        <table style="width: 100%" class="container text-center">
                            <tbody>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Nomor Induk Pegawai :</span></td>
                                    <td> <?= $detail->nip ?></td>
                                </tr>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Nama Guru :</span></td>
                                    <td> <?= $detail->nama_guru ?></td>
                                </tr>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Alamat Email :</span></td>
                                    <td><?= $detail->email ?></td>
                                </tr>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Password : </span></td>
                                    <td>Terenkripsi</td>
                                </tr>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Mata Pelajaran :</span></td>
                                    <td><?= $detail->nama_mapel ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="font-weight:500px!important;font-size:18px;text-align:justify;" class="text-justify">
                        </p>
                        <a href="<?= base_url('admin/data_guru') ?>" class="btn btn-success btn-block">Kembali</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->

