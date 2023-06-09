<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>ABSENSI EMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Themesdesign" name="author" />
    <link rel="icon" href="../../../../assets/logo_8.png" type="image/gif" sizes="16x16">


    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets') ?>/login/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets') ?>/login/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets') ?>/login/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!--Custom Css-->

</head>

<body>
    <!--start page Loader -->
    <div id="preloader">
        <div id="status">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <!--end page Loader -->

    <!-- Begin page -->
    <div>


        <div class="main-content">

            <div class="page-content">

                <!-- START SIGN-IN -->
                <section class="bg-auth">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12">
                                <div class="card auth-box">
                                    <div class="row g-0">
                                        <div class="col-lg-6 text-center">
                                            <div class="card-body p-4">
                                                <div class="mt-5">
                                                    <img src="<?= base_url('assets') ?>/logo_8.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="auth-content card-body p-5 h-100 text-white">
                                                <div class="w-100">
                                                    <div class="text-center mb-4">
                                                        <h5>EMS ABSENSI</h5>
                                                        <p class="text-white-70">Silakan LOGIN KAKACK</p>
                                                    </div>
                                                    <?= $this->session->flashdata('message') ?>
                                                    <form action="<?= site_url('auth') ?>" method="post" class="auth-form">
                                                        <div class="mb-3">
                                                            <label for="usernameInput" class="form-label">Username</label>
                                                            <input type="text" class="form-control" name="username" id="usernameInput" placeholder="username mu kaka" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="passwordInput" class="form-label">Password</label>
                                                            <input type="password" class="form-control" name="password" id="passwordInput" placeholder="passwordnya deck" required>
                                                        </div>
                                                        <br>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-white btn-hover w-100">MASOK</button>
                                                        </div>
                                                    </form>
                                                    <div class="mt-4 text-center">
                                                        <p class="mb-0">kamu nanya? <a href="no.html" class="fw-medium text-white text-decoration-underline"> xixi </a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end auth-box-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </section>
                <!-- END SIGN-IN -->

            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Style switcher -->
    <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
        <div>
            <h6>kamu pengurus?</h6>
            <P>tinggal pencet warna biru xixi</P>
            <ul class="pattern list-unstyled mb-0">
                <!-- <li>
                    <a class="color-list color1" href="../index.html"></a>
                </li> -->
                <li>
                    <a class="color-list color2" href="admin" onclick="setColor('blue')"></a>
                </li>
                <!-- <li>
                    <a class="color-list color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                </li> -->
            </ul>
            <div class="mt-3">
                <h6>ganti warna gelap terang pencet yang bawah ini:(bulan sabit)</h6>
                <div class="text-center mt-3">
                    <!-- light-dark mode -->
                    <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                        <i class="uil uil-brightness mode-dark mx-auto"></i>
                        <i class="uil uil-moon mode-light"></i>
                    </a>
                    <!-- END light-dark Mode -->
                </div>
            </div>
        </div>
        <div class="bottom d-none d-md-block">
            <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
        </div>
    </div>
    <!-- end switcher-->

    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets') ?>/login/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


    <!-- Switcher Js -->
    <script src="<?= base_url('assets') ?>/login/js/pages/switcher.init.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php if (@$_SESSION['invalid']) { ?>
        <script>
            swal("Access Denied", "<?php echo $_SESSION['invalid']; ?>", "warning");
        </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['invalid']);
    } ?>

</body>

</html>