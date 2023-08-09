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
                                data-lazyimg="{{ asset('/storage/images/sindangjawa.jpg') }}" alt="Desa Sindangjawa" />
                        </figure>
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
                                    data-lazyimg="{{ asset('/storage/images/perpus.jpeg') }}" alt="Desa Sindangjawa"
                                    loading="lazy"></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-5 offset-lg-1">
                            <h2 class="fs-15 text-uppercase text-muted mb-3">Siapa Kami?</h2>
                            <h3 class="display-4 mb-6">Tentang Desa Sindangjawa</h3>
                            @foreach ($sejarahs as $sejarah)
                                <p class="mb-6">
                                    {!! substr($sejarah->content, 45, 330) !!}...
                                </p>
                            @endforeach
                            <a href="/sejarah">Baca Selengkapnya</a>
                            <p class="mb-6"></p>
                        </div>
                    </div>

                    <!-- Pengumuman -->
                    <section class="wrapper bg-light angled upper-end">
                        <div class="container py-14 py-md-16">
                            <div class="row">
                                <div class="col-lg-9 col-xl-8 col-xxl-7">
                                    <h2 class="fs-16 text-uppercase text-line text-orange mb-3">Pengumuman</h2>
                                    <a href="/pengumuman">
                                        <h3 class="display-4 mb-9">Pengumuman Terbaru Desa Sindangjawa</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel owl-carousel blog grid-view mb-10" data-margin="30" data-dots="true"
                                data-autoplay="false" data-autoplay-timeout="5000"
                                data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                                @foreach ($pengumumen as $pengumuman)
                                    <div class="item">
                                        <article>
                                            <figure class="overlay overlay1 hover-scale rounded mb-6"><a
                                                    href="{{ route('updatepengumuman.show', $pengumuman->id) }}">
                                                    <img class="lazyimage"
                                                        data-lazyimg="{{ Storage::url('public/pengumuman/') . $pengumuman->image }}"
                                                        alt="{{ $pengumuman->judul }}"
                                                        style="height: 200px !important;" /></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Baca Selengkapnya</h5>

                                                </figcaption>
                                            </figure>
                                            <div class="post-header">
                                                <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                        href=" {{ route('updatepengumuman.show', $pengumuman->id) }} ">{{ $pengumuman->judul }}</a>
                                                </h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta">
                                                    <li class="post-date"><i
                                                            class="uil uil-calendar-alt"></i><span>{{ $pengumuman->created_at }}</span>
                                                    </li>
                                                    <li class="post-comments"><a href="#"><i
                                                                class="uil uil-file-alt fs-15"></i>{{ str_replace('_', ' ', $pengumuman->kategori) }}</a>
                                                    </li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                        <!-- /article -->
                                    </div>
                                @endforeach
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
                                    {!! substr($kepaladesa->sambutan, 46, 662) !!}...
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
                                        data-image-src="{{ asset('/storage/images/bg.jpg') }}">
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
                            <p>Desa kami memiliki banyak anggota dengan berbagai jenis lulusan yang handal dan
                                berkompeten dibidangnya masing-masing.</p>
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
                                <a href="/galeri">
                                    <h2 class="display-4 mb-3">Dokumentasi</h2>
                                </a>
                                <p class="lead fs-lg">Dokumentasi Kegiatan Sindangjawa</p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->

                        <div class="carousel owl-carousel grid-view" data-margin="30" data-dots="true"
                            data-autoplay="false" data-autoplay-timeout="5000"
                            data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                            @foreach ($galeris as $galeri)
                                <div class="item">
                                    <article>
                                        <figure class="overlay overlay1 hover-scale rounded mb-6"><a data-fancybox
                                                data-src="{{ Storage::url('public/galeri/') . $galeri->foto }}"
                                                data-caption="{{ $galeri->judul }}">
                                                <img class="lazyimage"
                                                    data-lazyimg="{{ Storage::url('public/galeri/') . $galeri->foto }}"
                                                    width="200" height="150" alt="{{ $galeri->judul }}" /></a>
                                        </figure>
                                        <div class="post-header">
                                            <h2 class="post-title h3 mb-3"><a class="link-dark"
                                                    href=" {{ route('updategaleri.show', $galeri->id) }} ">{{ $galeri->judul }}</a>
                                            </h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date"><i
                                                        class="uil uil-calendar-alt"></i><span>{{ $galeri->created_at }}</span>
                                                </li>
                                                <li class="post-comments"><a href="#"><i
                                                            class="uil uil-file-alt fs-15"></i>{{ str_replace('_', ' ', $galeri->kategori) }}</a>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /article -->
                                </div>
                            @endforeach
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
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15848.190641509698!2d108.44129027966677!3d-6.764043583220952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1fa29c445767%3A0xd2db1107d3cbfc7!2sSindangjawa%2C%20Kec.%20Dukupuntang%2C%20Kabupaten%20Cirebon%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1690134869923!5m2!1sid!2sid"
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
                                                            Sindangjawa, Dukupuntang, Cirebon
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
                                                            <a href="tel:012-345-678" class="link-body">012-345-678
                                                                (Call)</a><br>
                                                            <a href="https://wa.me/6289364334274" class="link-body">
                                                                089364334274 (Only Chat WhatsApp) <i
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
                                                            <a href="mailto:sindangjawa@gmail.com" class="link-body">
                                                                sindangjawa@gmail.com
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
                                                            <a href="https://www.instagram.com/officialsindangjawa/"
                                                                class="link-body">
                                                                officialsindangjawa
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
                                                            <a href="https://www.youtube.com/c/OfficialSindangjawa"
                                                                class="link-body" id="yt">
                                                                OfficialSindangjawa
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
