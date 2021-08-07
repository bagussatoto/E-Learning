
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
    <title>Selamat Belajar - <?php
                                $data['user'] = $this->db->get_where('siswa', ['email' =>
                                $this->session->userdata('email')])->row_array();
                                echo $data['user']['nama'];
                                ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/popup/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/materi_style.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <link href="<?=base_url('assets')?>/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet"
        type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>

</head>

<body style="overflow-x:hidden;background-color:#fbf9fa">

    <!-- Start Navigation Bar -->
    <header class="header_area" style="background-color: white !important;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img src="<?= base_url('assets/') ?>img/your.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="javascript:void(0)">Hai, <?php $data['user'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row_array(); echo $data['user']['nama'];?></a>
                            </li>
                           <li class="nav-item "><a class="nav-link" href="<?= base_url('user') ?>">Beranda materi</a>
                             <li class="nav-item active"><a class="nav-link" href="<?= base_url('user/bimbel') ?>">Beranda Bimbel</a>
                            </li>
                            <li class=" nav-item "><a class=" nav-link text-danger" href="<?= base_url('welcome/logout') ?>">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Navigation Bar -->


    <!-- Start Greeting Cards -->
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400" style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1 ml-4">
                    <h1 class="display-4" style="color: black; font-family:'poppins';" data-aos="fade-down" data-aos-duration="1400">Selamat Belajar !
                    </h1>
                    <h4 data-aos="fade-down" data-aos-duration="1700"><?php $data['user'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row_array(); echo $data['user']['nama']; ?> - Learnify Students</h3>
                        <p><?= $detail->nama_mapel ?> - Kelas <?= $detail->kelas ?> IPA </p>
                        <hr align="left" width="600;">
                        <p style="line-height: 3px;">Kita akan mempelajari tentang</p>
                        <p class="font-weight-bold mt--5">
                            <?= substr($detail->deskripsi, 0, 120); ?>

                        </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Greeting Cards -->


    <!-- Start Video Player -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto mt-4">
                <embed type="application/pdf" src="<?= base_url() . 'assets/materi_video/' . $detail->video; ?>" width="1150" height="720"></embed>
            </div>
        </div>
    </div>
    <!-- End Video Player -->
    <!-- Start Deskripsi Materi -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 w-150 mb-4">
                <div class="card materi border-0">
                    <div class="card-body p-5">
                        <h1 class="card-title display-4"><!-- <?= $detail->nama_guru; ?> --> Kantong Tugas</h1>
                        <hr style="background-color: white;">
                        <h5 class="card-text"><?= $detail->nama_mapel; ?></h5>
                         <form method="post" enctype="multipart/form-data" action="<?=base_url('bimbel/upload')?>">
                        <div class="form-group">
                            <div class="input-group">
                                    <div class="custom-file">
                                        <input required type="file" name="video" class="custom-file-input"
                                            id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Upload Tugas
                                            Bimbel Disini</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">                
                                <button type="submit" class="btn btn-success btn-lg btn-block"> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success-reg')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Tugas Berhasil Dikumpulkan!',
                text: 'Selamat Tugas Anda telah Disimpan!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>
    <!-- End Deskripsi Materi -->


    <br>


    <!-- Start Disqus Comment -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card komen w-150 border-0">
                    <div class="card-body p-5" style="font-family: 'Poppins', sans-serif !important;">
                        <h1 style="color: black; font-size:44px !important;">Apa komentarmu ?</h1>
                        <br>
                        <?php echo $disqus ?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Start Disqus Comment -->


    <br>
    <br>
    <br>


    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
   <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script>
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });
        </script>
    <!-- End Animate On Scroll -->
    <script src="<?=base_url('assets')?>/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/custom/components/vendors/sweetalert2/init.js" type="text/javascript"></script>
