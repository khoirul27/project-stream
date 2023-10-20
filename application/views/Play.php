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

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v18.0"
        nonce="dahbvfMn"></script>
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
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="<?= base_url('C_Beranda/index') ?>">Homepage</a></li>
                                <li><a href="<?= base_url('C_Beranda/blog')?>">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <a href="#">Romance</a>
                        <span>Fate Stay Night: Unlimited Blade</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="anime__video__player">
                        <div class="ratio ratio-4x3">
                            <iframe src="https://www.youtube.com/embed/Qyonn5Vbg7s?rel=0" title="YouTube video"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anime Section Begin -->
            <section class="anime-details spad">
                <div class="container">
                    <div class="anime__details__content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="anime__details__pic set-bg"
                                    data-setbg="<?= base_url('asset/admin/img/anime/' . $anime->foto) ?>">
                                    <div class="comment">
                                        <?= $anime->kualitas ?>
                                    </div>
                                    <div class="view"><svg xmlns="http://www.w3.org/2000/svg" margin-top="10px"
                                            width="16" height="16" fill="currentColor" class="bi bi-clock"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg> 9141</div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="anime__details__text">
                                    <div class="anime__details__title">
                                        <h3>
                                            <?= $anime->judul ?>
                                        </h3>

                                    </div>
                                    <div class="anime__details__rating">
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                                        </div>
                                        <span>1.029 Votes</span>
                                    </div>
                                    <p>
                                        <?= $anime->sinopsis ?>
                                    </p>
                                    <div class="anime__details__widget">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <ul>
                                                    <li><span>Produksi:</span>
                                                        <?= $anime->produksi ?>
                                                    </li>
                                                    <li><span>Penulis:</span>
                                                        <?= $anime->penulis ?>
                                                    </li>
                                                    <li><span>Jenis Filem:</span>
                                                        <?= $anime->jenis_filem ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul>
                                                    <li><span>Durasi:</span>
                                                        <?= $anime->durasi ?>
                                                    </li>
                                                    <li><span>Quality:</span>
                                                        <?= $anime->kualitas ?>
                                                    </li>
                                                    <li><span>Tanggal Rilis:</span>
                                                        <?= $anime->tanggal_rilis ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="anime__details__btn">
                                        <a href="<?= $anime->link ?>" class="watch-btn" target="_blank"><span>Watch
                                                Now</span> <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="anime__details__review">
                                <div class="section-title">
                                    <h5>Reviews</h5>
                                </div>
                                <div class="fb-comments" data-colorscheme="light"
                                    data-href="http://[::1]/Istream/C_Beranda/play/<?= $anime->slug ?>" data-width=""
                                    data-numposts="5"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-8 mt-2">
                    <div class="product__sidebar">
                        <div class="product__sidebar__comment">
                            <div class="section-title">
                                <h5>filem Terbaru</h5>
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
            <!-- Anime Section End -->

        </div>
    </section>
    <!-- Anime Section End -->

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