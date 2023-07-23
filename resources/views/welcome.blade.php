@include('templates.header')

<body>
    <div class="content-wrapper">
        <section class="wrapper bg-light">
            <div class="container pt-8 pt-md-14">
                <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
                        <div class="shape bg-dot orange rellax w-17 h-19" data-rellax-speed="1"
                            style="top: -1.7rem; left: -1.5rem;"></div>
                        <div class="shape rounded bg-soft-orange rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                        <figure class="rounded"><img class="lazyimage"
                                data-lazyimg="https://1.bp.blogspot.com/-Bwoe1FMhb8Q/WSzH-xArnyI/AAAAAAAABUs/gYcURqg9U5E15CliRKL6XNGNGmOjgPMmgCLcB/w620/sindangjawa.jpg"
                                alt="Desa Sindangjawa" /></figure>
                    </div>
                    <!-- wlcme text -->
                    <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 mt-lg-n2 text-center text-lg-start order-2 order-lg-0"
                        data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-1 mb-5 mx-md-10 mx-lg-0">Selamat Datang Di Desa Sindangjawa <br /><span
                                class="typer text-orange text-nowrap" data-delay="100"
                                data-words="Dukupuntang,Cirebon,Jawa Barat,Indonesia"></span><span
                                class="cursor text-orange" data-owner="typer"></span></h1>
                        <p class="lead fs-lg mb-7">Sindangjawa adalah desa di kecamatan Dukupuntang, Cirebon, Jawa
                            Barat, Indonesia.</p>

                        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                            data-group="page-title-buttons" data-delay="900">
                            <span><a href="#about" class="btn btn-lg btn-orange rounded-pill me-2">Mulai
                                    Jelajahi</a></span>
                        </div>
                    </div>
                </div>

                <!-- pengenalan -->
                <div class="container" id="about">
                    <!-- tentang smkn 1 Depok -->
                    <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-17 mb-lg-10">
                        <div class="col-md-8 col-lg-6 position-relative light-gallery-wrapper">
                            <!-- <a href="https://vimeo.com/374265101" class="btn btn-circle btn-orange btn-play ripple mx-auto mb-5 lightbox position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"><i class="icn-caret-right"></i></a> -->
                            <div class="shape rounded bg-soft-orange rellax d-md-block" data-rellax-speed="0"
                                style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                            <figure class="rounded"><img class="lazyimage"
                                    data-lazyimg="https://www.smkn1depok.sch.id/assets/images/sekolah/dalam-onedek.jpg"
                                    alt="Desa Sindangjawa" loading="lazy"></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-5 offset-lg-1">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">Siapa Kami?</h2>
                            <h3 class="display-4 mb-6">Tentang Desa Sindangjawa</h3>
                            @foreach ($sejarahs as $sejarah)
                                <p class="mb-6">
                                    {!! substr($sejarah->content, 45, 312) !!}
                                </p>
                            @endforeach
                            <a href="/sejarah">Baca Selengkapnya</a>
                            <p class="mb-6"></p>
                        </div>
                    </div>

                    <!-- berita -->
                    <section class="wrapper bg-light angled upper-end">
                        <div class="container py-14 py-md-16">
                            <div class="row">
                                <div class="col-lg-9 col-xl-8 col-xxl-7">
                                    <h2 class="fs-16 text-uppercase text-line text-orange mb-3">Berita</h2>
                                    <a href="https://www.smkn1depok.sch.id/index/berita/berita-sekolah">
                                        <h3 class="display-4 mb-9">Berita Terbaru Desa Sindangjawa</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel owl-carousel blog grid-view mb-10" data-margin="30" data-dots="true"
                                data-autoplay="false" data-autoplay-timeout="5000"
                                data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                                <div class="item">
                                    <article>
                                        <figure class="overlay overlay1 hover-scale rounded mb-6"><a
                                                href="https://www.smkn1depok.sch.id/index/berita/berita-sekolah/read/workshop-pkdk">
                                                <img class="lazyimage"
                                                    data-lazyimg="https://www.smkn1depok.sch.id/img/berita/workshop-pkdk_1640283105_workshop-pkdk-thumb.jpg"
                                                    alt="Workshop PKDK" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Baca Selengkapnya</h5>

                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                    href=" https://www.smkn1depok.sch.id/index/berita/berita-sekolah/read/workshop-pkdk ">Workshop
                                                    PKDK</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date"><i
                                                        class="uil uil-calendar-alt"></i><span>2021-12-23
                                                        18:11:46</span></li>
                                                <li class="post-comments"><a href="#"><i
                                                            class="uil uil-file-alt fs-15"></i>Event</a></li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /article -->
                                </div>
                                <!-- /.item -->
                                <div class="item">
                                    <article>
                                        <figure class="overlay overlay1 hover-scale rounded mb-6"><a
                                                href="https://www.smkn1depok.sch.id/index/berita/berita-sekolah/read/rapat-luring-dalam-kantor">
                                                <img class="lazyimage"
                                                    data-lazyimg="https://www.smkn1depok.sch.id/img/berita/rapat-luring-dalam-kantor_1640283800_rapat-luring-dalam-kantor-thumb.jpg"
                                                    alt="Rapat Luring dalam Kantor" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Baca Selengkapnya</h5>

                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                    href=" https://www.smkn1depok.sch.id/index/berita/berita-sekolah/read/rapat-luring-dalam-kantor ">Rapat
                                                    Luring dalam Kantor</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date"><i
                                                        class="uil uil-calendar-alt"></i><span>2021-12-23
                                                        18:23:20</span></li>
                                                <li class="post-comments"><a href="#"><i
                                                            class="uil uil-file-alt fs-15"></i>General</a></li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /article -->
                                </div>
                                <!-- /.item -->
                                <div class="item">
                                    <article>
                                        <figure class="overlay overlay1 hover-scale rounded mb-6"><a
                                                href="https://www.smkn1depok.sch.id/index/berita/berita-sekolah/read/pelatihan-penerapan-budaya-kerja-industri">
                                                <img class="lazyimage"
                                                    data-lazyimg="https://www.smkn1depok.sch.id/img/berita/pelatihan-penerapan-budaya-kerja-industri_1640300052_pelatihan-penerapan-budaya-kerja-industri-thumb.jpg"
                                                    alt="Pelatihan Penerapan Budaya Kerja Industri" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Baca Selengkapnya</h5>

                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                    href=" https://www.smkn1depok.sch.id/index/berita/berita-sekolah/read/pelatihan-penerapan-budaya-kerja-industri ">Pelatihan
                                                    Penerapan Budaya Kerja Industri</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date"><i
                                                        class="uil uil-calendar-alt"></i><span>2021-12-23
                                                        22:54:12</span></li>
                                                <li class="post-comments"><a href="#"><i
                                                            class="uil uil-file-alt fs-15"></i>Event</a></li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /article -->
                                </div>
                                <!-- /.item -->
                                <div class="item">
                                    <article>
                                        <figure class="overlay overlay1 hover-scale rounded mb-6"><a
                                                href="https://www.smkn1depok.sch.id/index/berita/berita-sekolah/read/peringatan-hari-guru-2021">
                                                <img class="lazyimage"
                                                    data-lazyimg="https://www.smkn1depok.sch.id/img/berita/peringatan-hari-guru-2021_1640300572_hari-guru-21-thumb.jpg"
                                                    alt="Peringatan Hari Guru 2021" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Baca Selengkapnya</h5>

                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                    href=" https://www.smkn1depok.sch.id/index/berita/berita-sekolah/read/peringatan-hari-guru-2021 ">Peringatan
                                                    Hari Guru 2021</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date"><i
                                                        class="uil uil-calendar-alt"></i><span>2021-12-23
                                                        23:02:52</span></li>
                                                <li class="post-comments"><a href="#"><i
                                                            class="uil uil-file-alt fs-15"></i>Hari Peringatan</a></li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /article -->
                                </div>
                                <!-- /.item -->
                                <div class="item">
                                    <article>
                                        <figure class="overlay overlay1 hover-scale rounded mb-6"><a
                                                href="https://www.smkn1depok.sch.id/index/berita/berita-sekolah/read/workshop-penelusuran-tamatan">
                                                <img class="lazyimage"
                                                    data-lazyimg="https://www.smkn1depok.sch.id/img/berita/workshop-penelusuran-alumni_1640301246_workshop-penelusuran-alumni-thumb.jpg"
                                                    alt="Workshop Penelusuran Tamatan" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Baca Selengkapnya</h5>

                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                    href=" https://www.smkn1depok.sch.id/index/berita/berita-sekolah/read/workshop-penelusuran-tamatan ">Workshop
                                                    Penelusuran Tamatan</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date"><i
                                                        class="uil uil-calendar-alt"></i><span>2021-12-23
                                                        23:14:06</span></li>
                                                <li class="post-comments"><a href="#"><i
                                                            class="uil uil-file-alt fs-15"></i>General</a></li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /article -->
                                </div>
                                <!-- /.item -->


                            </div>
                        </div>
                    </section>
                    <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-17 mb-lg-19">
                        <div class="col-md-8 col-lg-6 position-relative light-gallery-wrapper">
                            <div class="shape rounded bg-soft-orange rellax d-md-block" data-rellax-speed="0"
                                style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                            <figure class="rounded"><img class="lazyimage"
                                    data-lazyimg="https://harianpelitanews.id/wp-content/uploads/2020/03/IMG-20200326-WA0017.jpg"
                                    srcset="https://harianpelitanews.id/wp-content/uploads/2020/03/IMG-20200326-WA0017.jpg 2x"
                                    alt="H. E. Kasturi"></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-5 offset-lg-1">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">Kepala Desa</h2>
                            <h3 class="display-4 mb-6">H. E. Kasturi</h3>
                            @foreach ($kepaladesas as $kepaladesa)
                                <p class="mb-6">
                                    {!! substr($kepaladesa->sambutan, 46, 660) !!}
                                </p>
                            @endforeach
                            <a href="/sambutan">Baca Selengkapnya</a>
                        </div>
                    </div>

                    <!-- data Sekolah -->
                    <section class="wrapper bg-light">
                        <div class="container py-14 py-md-10">
                            <div class="row">
                                <div class="col-xl-12 mx-auto">
                                    <div class="card image-wrapper bg-full bg-image bg-overlay"
                                        data-image-src="https://www.smkn1depok.sch.id/assets/images/bg-themes/bg3.webp">
                                        <div class="card-body p-9 p-xl-10">
                                            <div
                                                class="row align-items-center counter-wrapper gy-4 text-center text-white">
                                                <div class="col-sm">
                                                    <h3 class="counter counter-lg text-white">5215 Jiwa</h3>
                                                    <p>Penduduk Sindangjawa</p>
                                                </div>

                                                <div class="col-sm">
                                                    <h3 class="counter counter-lg text-white">2631 Jiwa</h3>
                                                    <p>Penduduk Laki-laki</p>
                                                </div>

                                                <div class="col-sm">
                                                    <h3 class="counter counter-lg text-white">2584 Jiwa</h3>
                                                    <p>Penduduk Perempuan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /section -->

                    <!-- guru -->
                    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-16 mb-md-17 mb-xl-10 align-items-center">
                        <div class="col-lg-4">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">Tenaga kerja</h2>
                            <h3 class="display-5 mb-5">Anggota Pemerintah Desa</h3>
                            <a href="/pemerintahandesa" class="btn btn-orange rounded-pill mt-3">Lihat
                                Selengkapnya</a>
                        </div>
                        <!--/column -->
                        <div class="col-lg-8">
                            <div class="carousel owl-carousel text-center" data-margin="30" data-dots="true"
                                data-autoplay="false" data-autoplay-timeout="5000"
                                data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                                @foreach ($anggotas as $anggota)
                                    <div class="item">
                                        <img class="rounded-circle img-fluid  mx-auto mb-4 "
                                            src="{{ Storage::url('public/anggota/') . $anggota->image }}"
                                            alt="{{ $anggota->nama }}" loading="lazy" />
                                        <h4 class="mb-1">{{ $anggota->nama }}</h4>
                                        <div class="meta mb-2"></div>
                                        <p class="nim mb-2"></p>
                                        <!-- /.social -->
                                    </div>
                                @endforeach
                            </div>
                            <!-- /.owl-carousel -->
                        </div>
                        <!--/column -->
                    </div>
                </div>
                <!-- /.owl-carousel -->

                <!-- galeri -->
                <section class="wrapper bg-light">
                    <div class="container py-14 py-md-12">
                        <div class="row align-items-center mb-7">
                            <div class="col-md-8 col-lg-8 col-xl-7 col-xxl-6 pe-lg-17">
                                <a href="https://www.smkn1depok.sch.id/galeri">
                                    <h2 class="display-4 mb-3">Dokumentasi</h2>
                                </a>
                                <p class="lead fs-lg">Dokumentasi Tentang Sindangjawa</p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->

                        <div class="carousel owl-carousel grid-view" data-margin="30" data-dots="true"
                            data-autoplay="false" data-autoplay-timeout="5000"
                            data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                            <div class="item">
                                <figure class="rounded mb-6"><a href="javascript:;">
                                        <!-- 1. Video Wrapper Container -->
                                        <div class="embed-youtube"
                                            data-video-id="08JIbArHdGw?Short Movie I SEPELE - PONDOK KASTARA I MULTIMEDIA SMKN 1 DEPOK">
                                            <!-- 2. The preview button that will contain the Play icon -->
                                            <div class="embed-youtube-play"></div>
                                        </div>
                                        <!--<iframe alt="Short Movie I SEPELE - PONDOK KASTARA I MULTIMEDIA SMKN 1 DEPOK" class="mb-4" width="350" height="225" data-src="https://www.youtube.com/embed/08JIbArHdGw" title="Short Movie I SEPELE - PONDOK KASTARA I MULTIMEDIA SMKN 1 DEPOK" name="Short Movie I SEPELE - PONDOK KASTARA I MULTIMEDIA SMKN 1 DEPOK" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>-->
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-yellow">2021-12-24
                                                    01:06:30</div>
                                                <a href=" https://www.smkn1depok.sch.id/galeri/20 ">
                                                    <h2 class="post-title h3">Short Movie I SEPELE - PONDOK KASTARA I
                                                        MULTIMEDIA SMKN 1 DEPOK</h2>
                                                </a>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <figure class="rounded mb-6"><a href="javascript:;">
                                        <!-- 1. Video Wrapper Container -->
                                        <div class="embed-youtube" data-video-id="Eb87gQmmWcM?BLUD SMKN 1 DEPOK">
                                            <!-- 2. The preview button that will contain the Play icon -->
                                            <div class="embed-youtube-play"></div>
                                        </div>
                                        <!--<iframe alt="BLUD SMKN 1 DEPOK" class="mb-4" width="350" height="225" data-src="https://www.youtube.com/embed/Eb87gQmmWcM" title="BLUD SMKN 1 DEPOK" name="BLUD SMKN 1 DEPOK" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>-->
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-yellow">2021-12-24
                                                    01:23:20</div>
                                                <a href=" https://www.smkn1depok.sch.id/galeri/22 ">
                                                    <h2 class="post-title h3">BLUD SMKN 1 DEPOK</h2>
                                                </a>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <figure class="rounded mb-6"><a href="javascript:;">
                                        <!-- 1. Video Wrapper Container -->
                                        <div class="embed-youtube"
                                            data-video-id="m90FclNOe5Q?TA KKSI SMART SCHOOL 2021 - SMKN 1 DEPOK - EDOTEL">
                                            <!-- 2. The preview button that will contain the Play icon -->
                                            <div class="embed-youtube-play"></div>
                                        </div>
                                        <!--<iframe alt="TA KKSI SMART SCHOOL 2021 - SMKN 1 DEPOK - EDOTEL" class="mb-4" width="350" height="225" data-src="https://www.youtube.com/embed/m90FclNOe5Q" title="TA KKSI SMART SCHOOL 2021 - SMKN 1 DEPOK - EDOTEL" name="TA KKSI SMART SCHOOL 2021 - SMKN 1 DEPOK - EDOTEL" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>-->
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-yellow">2021-12-24
                                                    01:26:51</div>
                                                <a href=" https://www.smkn1depok.sch.id/galeri/23 ">
                                                    <h2 class="post-title h3">TA KKSI SMART SCHOOL 2021 - SMKN 1 DEPOK
                                                        - EDOTEL</h2>
                                                </a>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <figure class="rounded mb-6"><a href="javascript:;">
                                        <!-- 1. Video Wrapper Container -->
                                        <div class="embed-youtube"
                                            data-video-id="BKGMzPQBWm0?SMK NEGERI 1 DEPOK l PUSAT KEUNGGULAN l SEKTOR HOSPITALITY">
                                            <!-- 2. The preview button that will contain the Play icon -->
                                            <div class="embed-youtube-play"></div>
                                        </div>
                                        <!--<iframe alt="SMK NEGERI 1 DEPOK l PUSAT KEUNGGULAN l SEKTOR HOSPITALITY" class="mb-4" width="350" height="225" data-src="https://www.youtube.com/embed/BKGMzPQBWm0" title="SMK NEGERI 1 DEPOK l PUSAT KEUNGGULAN l SEKTOR HOSPITALITY" name="SMK NEGERI 1 DEPOK l PUSAT KEUNGGULAN l SEKTOR HOSPITALITY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>-->
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-yellow">2021-12-24
                                                    01:27:52</div>
                                                <a href=" https://www.smkn1depok.sch.id/galeri/24 ">
                                                    <h2 class="post-title h3">SMK NEGERI 1 DEPOK l PUSAT KEUNGGULAN l
                                                        SEKTOR HOSPITALITY</h2>
                                                </a>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="item">
                                <figure class="rounded mb-6"><a href="javascript:;">
                                        <!-- 1. Video Wrapper Container -->
                                        <div class="embed-youtube"
                                            data-video-id="_ET6dW2ImA4?Live Stream SMK Negeri 1 Depok | HUT PGRI KE-76 &amp; HARI GURU NASIONAL 2021">
                                            <!-- 2. The preview button that will contain the Play icon -->
                                            <div class="embed-youtube-play"></div>
                                        </div>
                                        <!--<iframe alt="Live Stream SMK Negeri 1 Depok | HUT PGRI KE-76 &amp; HARI GURU NASIONAL 2021" class="mb-4" width="350" height="225" data-src="https://www.youtube.com/embed/_ET6dW2ImA4" title="Live Stream SMK Negeri 1 Depok | HUT PGRI KE-76 &amp; HARI GURU NASIONAL 2021" name="Live Stream SMK Negeri 1 Depok | HUT PGRI KE-76 &amp; HARI GURU NASIONAL 2021" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>-->
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-yellow">2021-12-24
                                                    01:29:17</div>
                                                <a href=" https://www.smkn1depok.sch.id/galeri/25 ">
                                                    <h2 class="post-title h3">Live Stream SMK Negeri 1 Depok | HUT PGRI
                                                        KE-76 &amp; HARI GURU NASIONAL 2021</h2>
                                                </a>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.owl-carousel -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /section -->



                <section class="wrapper bg-light">
                    <div class="container py-14 py-md-16">
                        <div class="row">
                            <div class="col-xl-10 mx-auto">
                                <div class="card">
                                    <div class="row gx-0">
                                        <div class="col-lg-6 align-self-stretch">
                                            <div class="mapouter">
                                                <div class="gmap_canvas"><iframe width="100%" height="100%"
                                                        id="gmap_canvas"
                                                        src="https://maps.google.com/maps?q=sindangjawa&t=&z=14&ie=UTF8&iwloc=&output=embed"
                                                        frameborder="0" scrolling="no" marginheight="0"
                                                        marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br>
                                                    <style>
                                                        .mapouter {
                                                            position: relative;
                                                            text-align: right;
                                                            height: 100%;
                                                            width: 100%;
                                                        }
                                                    </style><a href="https://embedgooglemap.2yu.co/">html embed google
                                                        map</a>
                                                    <style>
                                                        .gmap_canvas {
                                                            overflow: hidden;
                                                            background: none !important;
                                                            height: 100%;
                                                            width: 100%;
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                            <!-- /.map -->
                                        </div>
                                        <!--/column -->
                                        <div class="col-lg-6">
                                            <div class="p-10 p-md-11 p-lg-14">
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <div class="icon text-orange fs-28 me-4 mt-n1">
                                                            <i class="uil uil-location-pin-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="align-self-start justify-content-start">
                                                        <h5 class="mb-1" id="alamat">Alamat</h5>
                                                        <address>
                                                            Gang Bhakti Suci No.100, Cimpaeun, Tapos, Kota Depok, Jawa
                                                            Barat, 16459
                                                        </address>
                                                    </div>
                                                </div>
                                                <!--/div -->
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <div class="icon text-orange fs-28 me-4 mt-n1">
                                                            <i class="uil uil-phone-volume"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">Telepon</h5>
                                                        <p>
                                                            <a href="tel:021-8790-7233" class="link-body"
                                                                id="_phone">021-8790-7233 (Call)</a><br>
                                                            <a href="https://wa.me/6287744450066" class="link-body"
                                                                id="tel">
                                                                0877444450066 (Only Chat WhatsApp) <i
                                                                    class="uil uil-whatsapp"></i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--/div -->
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <div class="icon text-orange fs-28 me-4 mt-n1">
                                                            <i class="uil uil-envelope"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">E-mail</h5>
                                                        <p class="mb-0">
                                                            <a href="mailto:smkn1depok@gmail.com" class="link-body"
                                                                id="_email">
                                                                smkn1depok@gmail.com
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div><br>
                                                <!--/div -->
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <div class="icon text-orange fs-28 me-4 mt-n1">
                                                            <i class="uil uil-instagram-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">Instagram</h5>
                                                        <p class="mb-0">
                                                            <a href="https://www.instagram.com/officialsmkn1depok/"
                                                                class="link-body">
                                                                officialsmkn1depok
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div><br>
                                                <!--/div -->
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <div class="icon text-orange fs-28 me-4 mt-n1">
                                                            <i class="uil uil-youtube"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">Youtube</h5>
                                                        <p class="mb-0">
                                                            <a href="https://www.youtube.com/c/OfficialSMKN1Depok"
                                                                class="link-body" id="yt">
                                                                OfficialSMKN1Depok
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--/div -->
                                            </div>
                                            <!--/column -->
                                        </div>
                                        <!--/.row -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                </section>
                <!-- /section -->

                <!-- /.container-fluid -->

                <!--/.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>



    </div>
    @extends('templates.footer')
</body>
