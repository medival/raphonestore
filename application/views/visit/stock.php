<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('visit/_partials/header'); ?>
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- /END GA -->
    <style>
        .branding .col-2 {
            padding-left: 1rem;
            padding-right: 1rem;
            text-align: center;
        }

        .branding .col-2 img {
            /* max-width: 3rem; */
            max-height: 3rem;
            text-align: center;
        }

        .branding .col-2 h6 {
            padding-top: 1rem;
            text-align: center;
        }

        .laku6 .col-2 {
            margin-top: 0.5rem;
            margin-left: 1rem;
            margin-right: 1rem;
            text-align: center;
        }

        .laku6:first-child {
            margin-left: 1rem;
        }

        .laku6 h6 {
            margin-top: 1rem;
        }

        .laku6 p {
            font-size: 12px;
        }

        .colors {
            margin-top: 3rem;
            margin-bottom: 2.5rem;
        }

        .colors .newsletter {
            min-height: 150px;
            width: 100%;
            background-color: #6777EF;
        }

        .colors .newsletter h5 {
            color: #FFFFFF;
            margin-top: 5%;
            margin-left: 5rem;
            text-align: left;
            line-height: 2rem;
        }

        .colors .newsletter .col-5:last-child {
            margin-top: 3%;
            text-align: left;
        }

        .newsletter .email-box .tbox {
            width: 200px;
        }

        /* form {
            width: 450px;
            margin: 17% auto;
        } */

        .input {
            display: flex;
            align-items: center;
        }


        .button {
            height: 44px;
            border: none;
        }


        #email {
            width: 50%;
            /* background: #FDFCFB; */
            font-family: inherit;
            color: #737373;
            letter-spacing: 1px;
            text-indent: 5%;
            border-radius: 5px 0 0 5px;
        }

        #submit {
            width: 25%;
            height: 46px;
            outline: 2px solid #6777E0;
            /* background: #E86C8D; */
            font-family: inherit;
            font-weight: bold;
            color: inherit;
            letter-spacing: 1px;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: background .3s ease-in-out;
        }

        #submit:hover {
            background: #6777E0;
            color: white;
        }

        .list-unstyled li {
            line-height: 2rem;
        }

        .list-unstyled a:hover {
            text-decoration: none;
        }

        .keterangan .row {
            margin-top: 1rem;
        }

        .keterangan .row p {
            line-height: 2rem;
        }
    </style>
</head>

<body class="layout-3">
    <div id="app">

        <div class="main-wrapper container">
            <?php $this->load->view('visit/_partials/navbar'); ?>
            <!-- Main Content -->

            <div class="main-content">
                <div class="body">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('/assets_onetech/img/banner/banner1.png') ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('/assets_onetech/img/banner/banner2.jpeg') ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('/assets_onetech/img/banner/banner3.jpg') ?>" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- </div> -->
                <div class="div mt-2 mb-2"></div>
                <section class="section">
                    <div class="section-header">
                        <h1> Daftar Smartphone </h1>
                        <div class="section-header-breadcrumb">
                        </div>
                    </div>
                    <div class="section-body">

                    </div>
                    <div class="section-body">
                        <div class="row">
                            <?php foreach ($product as $p) : ?>
                                <div class="col-lg-3 col-md-3 col-sm-12 ">
                                    <article class="article article-style-c ">
                                        <div class="article-header">
                                            <img alt="image" src="<?php echo base_url('upload/product/' . $p->image_product) ?>" class=" img-fluid">
                                        </div>
                                        <div class="title text-center mt-2 mb-2 text-bold">
                                            <?php echo $p->nama_product ?>
                                        </div>
                                        <div class="price text-small text-center ">
                                            <?php $rupiah = "Rp " . number_format($p->harga_product, 2, ',', '.'); ?>
                                            <h6> <?php echo $rupiah ?></h6>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="col-6 text-right"> Varian : <?php echo $p->varian_product; ?></div>
                                            <div class="col-6 text-left"> Stock
                                                <?php if ($p->stok_product < 1) {
                                                    echo "<span class='badge badge-danger'> $p->stok_product </span>";
                                                } else {
                                                    echo "<span class='badge badge-info'> $p->stok_product </span>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <?php if ($p->stok_product < 1) : ?>
                                                <button onclick="sweet()" class="btn btn-icon mx-1 mb-4 icon-left btn-danger button-cart"> <i class="fas fa-shopping-cart"></i> Order Now </button>
                                            <?php else : ?>
                                                <a href="<?php echo site_url('site/details/' . $p->id_product) ?>" class="btn btn-icon mx-1 mb-4 icon-left btn-primary button-cart"> <i class="fas fa-shopping-cart"></i> Order Now </a>
                                            <?php endif; ?>
                                        </div>
                                    </article>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>


                    <!-- Branding  -->

                    <h6 class="mb-3"> Branding Ternama </h6>
                    <div class="card">
                        <!-- <div class="card-header">
                                <h4>Card ssssTitle</h4>
                            </div> -->
                        <div class="card-body">
                            <div class="container ">
                                <div class="row branding ">
                                    <?php foreach ($brand as $b) : ?>
                                        <div class="col-2">
                                            <img src="<?php echo base_url('upload/brand/' . $b->image_brand) ?>" alt="" srcset="">
                                            <h6><?= $b->nama_brand ?></h6>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End of Branding  -->
                    <h6 class="mb-3"> Mengapa membeli di RAPHONESTORE?</h6>
                    <div class="card">
                        <!-- <div class="card-header">
                                <h4>Card ssssTitle</h4>
                            </div> -->
                        <div class="card-body">
                            <div class="container">
                                <div class="row laku6">
                                    <div class="col-2">
                                        <img src="https://www.laku6.com/images/d977ee8.png" alt="" srcset="">
                                        <h6>Barang Bergaransi
                                        </h6>
                                        <p> Produk di Raphonestore sudah lulus test dan juga bergaransi </p>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://www.laku6.com/images/bbe683a.png" alt="" srcset="">
                                        <h6> Free Ongkir </h6>
                                        <p> Tersedia free ongkos kirim juga untuk lokasi-lokasi tertentu </p>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://www.laku6.com/images/3d678f4.png" alt="" srcset="">
                                        <h6> Cicilan 0% </h6>
                                        <p>Kamu juga bisa dapat cicilan sampai dengan 0% loh!
                                        </p>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://www.laku6.com/images/e1f3b8f.png" alt="" srcset="">
                                        <h6> Layanan COD </h6>
                                        <p>Ingin menggunakan layanan COD, di Raphonestore juga ada kok.</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://www.laku6.com/images/e5b1ed1.png" alt="" srcset="">
                                        <h6> Harga Bersaing </h6>
                                        <p>Harga produk di Raphonestore juga bersaing, Silahkan cek toko sebelah kakak</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <!-- <div class="card-header">
                                <h4>Card ssssTitle</h4>
                            </div> -->
                        <div class="card-body">
                            <div class="container keterangan">
                                <div class="row">
                                    <h5> Raphonestore - Jual Handphone Bekas Beragaransi</h5>
                                    <p> Raphonestore telah hadir di Indonesia sejak tahun 2015 dengan menawarkan transaksi jual beli online bagi kalian yang ingin melakukan pembelian dan penjualan handphone bekas dengan kualitas terbaik. Mari bergabung dengan pengguna lainnya yang telah memperoleh solusi dari kami dalam mencari handphone bekas yang diinginan. Keamanan transaksi kamu terjamin, dengan adanya perlindungan dari kami untuk transaksi, kualitas barang, free ongkir dan asuransi pengiriman yang kami berikan, hingga barang diterima oleh pembeli. Ayo gabung sebagai Seller & Buyer di Raphonestore.com dan mulai sekarang juga!</p>
                                </div>
                                <div class="row">
                                    <h5> Beli Handphone Bekas dengan Garansi hingga 12 Bulan</h5>
                                    <p> Kami memberikan solusi dan rasa aman untuk kamu yang ragu membeli handphone bekas. <br>
                                        “Takut kualitas barang tidak sesuai” <br>
                                        ”Takut baru dipakai sebentar sudah rusak” <br>
                                        “Handphone tidak original” <br>
                                        “Kalau rusak perbaikinya bagaimana?” <br>
                                        Kami jawab keraguan anda dengan jaminan : <br>
                                        GARANSI 7 HARI PERGANTIAN PRODUK DARI BARANG DITERIMA <br>
                                        GARANSI 3 BULAN / 90 HARI PERBAIKAN / SERVICE UNTUK SETIAP PRODUK YANG DIJUAL MELALUI WEBSITE Raphonestore.COM <br>
                                        OPSI TAMBAHAN GARANSI HINGGA 12 BULAN* <br>
                                        Selain rasa aman, kami mengerti bahwa kamu juga membutuhkan kemudahan dalam bertransaksi, mulai dari FREE ONGKIR untuk setiap pembelian kamu di Raphonestore.com, Cicilan 0% dari berbagai Bank hingga tenor 12 Bulan, & Cash on Delivery menggunakan kurir terpercaya. Untuk kamu yang berdomisili di sekitar kota Jakarta juga dapat langsung datang ke kantor kami untuk melakukan pembelian produk. Kamu bisa langsung melihat barang yang kamu beli tanpa ragu barang yang dikirimkan tidak sesuai dgn yang diharapkan.</p>
                                </div>
                                <div class="row">
                                    <h5>Mudahnya Jualan Online di Raphonestore.com</h5>
                                    <p> Raphonestore adalah pusat jual beli handphone bekas yang saat ini juga menyediakan fitur Seller untuk kamu yang ingin menjadi mitra kami dalam mengiklankan produk yang kamu miliki, Ajukan ketertarikan kamu terhadap fitur Seller di Raphonestore.com melalui website ini, dan kami akan segera menghubungi kamu. Bergabunglah sekarang dan mulailah berjualan! Produk yang kamu iklankan akan mendapatkan seluruh fasilitas yang ada di Raphonestore.com : Sosial Media, opsi pembayaran yang akan memudahkan pembeli, promosi yang berjalan, garansi produk & gratis biaya kirim / free ongkir. Semakin mudah dengan adanya fitur live chat , diskusi produk dan notifikasi order untuk membantu kamu mendapatkan update / info terbaru dari setiap produk yang tayang di Raphonestore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            </section>
        </div>
    </div>
    <div class="colors">
        <div class="color newsletter">
            <div class="row ">
                <div class="col-1"></div>
                <div class="col-5">
                    <h5>
                        Berlangganan newsletter kami sekarang dan jadilah yang pertama mengetahui promo terbaru dari Raphonestore!
                    </h5>
                </div>
                <div class="col-5">
                    <form action="#" method="post" name="sign up for beta form">
                        <div class="input">
                            <input type="text" class="button" id="email" name="email" placeholder="Masukkan Email">
                            <input type="submit" class="button" id="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer mb-2"></div>
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase text-bold mb-3"> RAPHONESTORE </h5>
                    <b> Got Question? Call Us</b>
                    <div class="mt-3"></div>
                    <p>Keep touch with us.</p>
                    <div class="row">
                        <div class="col-1"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                        <div class="col-1"><a href="#"><i class="fab fa-twitter"></i></a></div>
                        <div class="col-1"><a href="#"><i class="fab fa-youtube"></i></a></div>
                        <div class="col-1"><a href="#"><i class="fab fa-google"></i></a></div>
                        <div class="col-1"><a href="#"><i class="fab fa-vimeo-v"></i></a></div>
                    </div>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Find it Fast</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Smartphone</a>
                        </li>
                        <li>
                            <a href="#!">Tablets</a>
                        </li>
                        <li>
                            <a href="#!">Accessoris</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase text-bold"> Customer Care</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!"> My Account</a>
                        </li>
                        <li>
                            <a href="#!">Order Tracking</a>
                        </li>
                        <li>
                            <a href="#!">Customer Services</a>
                        </li>
                        <li>
                            <a href="#!"> FAQs</a>
                        </li>
                        <li>
                            <a href="#!"> Product Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php $this->load->view('visit/_partials/footer'); ?>
    </div>
    <?php $this->load->view('visit/_partials/js'); ?>

</body>

</html>

<script>
    $('.owl-carousel').owlCarousel({
        items: 1,
        margin: 10,
    });

    function sweet() {
        swal("Out of stock", "There is no available item, try another one :)", "error");
    }

    $('.owl-slide').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>