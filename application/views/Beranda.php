<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $judul_halaman ?>
    </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('asset/user/') ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('asset/user/') ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('asset/user/') ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('asset/user/') ?>css/plyr.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('asset/user/') ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('asset/user/') ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('asset/user/') ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('asset/user/') ?>css/style.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="<?= base_url('asset/user/') ?>img/logo2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">Homepage</a></li>
                                <li><a href="<?= base_url('C_Beranda/blog') ?>">Our Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 mt-3">
                    <form action="<?= base_url('C_Beranda') ?>" method="post">
                        <div class="input-group mx-3">
                            <input name="keyword" type="text" class="form-control bg-dark text-light"
                                placeholder="cari filem" autocomplete="off">
                            <input class="btn btn-danger" type="submit" name="submit">
                        </div>
                    </form>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <?php foreach ($caraousel as $b) { ?>
                    <div class="hero__items set-bg"
                        data-setbg="<?= base_url('asset/admin/img/caraousel/' . $b['foto_caraousel']) ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">
                                    <h2>
                                        <?= $b['judul'] ?>
                                    </h2>
                                    <a href="<?= base_url('C_Beranda/play/' . $b['slug']) ?>"><span>Watch Now</span> <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title ">
                                    <div class="row">
                                        <h4 class="mt-2">Semua filem</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($filem as $a) { ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="<?= base_url('asset/admin/img/anime/' . $a['foto']) ?>">
                                            <div class="ep">
                                                <?= $a['kualitas'] ?>
                                            </div>
                                            <!-- <div class="comment"><i class="fa fa-comments"></i>
                                            </div> -->
                                            <div class="view"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    <path
                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                </svg>
                                                <?= $a['durasi'] ?>
                                            </div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>
                                                    <?= $a['jenis_filem'] ?>
                                                </li>
                                            </ul>
                                            <h5><a href="<?= base_url('C_Play/play/' . $a['slug']) ?>">
                                                    <?= $a['judul'] ?>
                                                </a></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8 mt-2">
                    <div class="product__sidebar">
                        <div class="product__sidebar__comment">
                            <div class="section-title">
                                <h4>filem Terbaru</h4>
                            </div>
                            <?php foreach ($terbaru as $c) { ?>
                                <div class="product__sidebar__comment__item">
                                    <div class="product__sidebar__comment__item__pic">
                                        <img src="<?= base_url('asset/admin/img/anime/' . $c['foto']) ?>" alt="">
                                    </div>
                                    <div class="product__sidebar__comment__item__text">
                                        <ul>
                                            <li>
                                                <?= $c['jenis_filem'] ?>
                                            </li>
                                        </ul>
                                        <h5><a href="#">
                                                <?= $c['judul'] ?>
                                            </a></h5>
                                        <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="<?= base_url('asset/user/') ?>img/logo2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
                        is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="<?= base_url('asset/user/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('asset/user/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('asset/user/') ?>js/player.js"></script>
    <script src="<?= base_url('asset/user/') ?>js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('asset/user/') ?>js/mixitup.min.js"></script>
    <script src="<?= base_url('asset/user/') ?>js/jquery.slicknav.js"></script>
    <script src="<?= base_url('asset/user/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('asset/user/') ?>js/main.js"></script>


</body>

</html>