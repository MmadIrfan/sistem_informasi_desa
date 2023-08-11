@include('templates.header')
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-15 text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <div class="post-header">
                    <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Lembaga</a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-3">KARANG TARUNA</h1>
                    <img class="lazyimage logo-jurusan" data-lazyimg="{{ asset('/storage/images/LogoKartun.png') }}"
                        alt="" srcset="">
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light wrapper-border">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-12">
                <article class="mt-n18">
                    <figure class="rounded mb-20 mb-md-21">
                        <!--   <img src="" class="img-jurusan" alt="" /> -->
                    </figure>
                    <div class="row mb-10">
                        <div class="col-lg-12 offset-lg-1">
                            <h2 class="display-6 mb-4">Informasi Lembaga</h2>
                            <div class="row gx-0">
                                <div class="col-md-10 text-justify">
                                    @foreach ($kartuns as $kartun)
                                        <p>{!! $kartun->informasi !!}</p>
                                    @endforeach
                                </div>
                                <!--/.row -->
                            </div>
                            <div class="row align-items-center mb-10">
                                <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-6 pe-lg-17">
                                    <a href="#">
                                        <h2 class="display-6 mb-3">Dokumentasi</h2>
                                    </a>
                                    <p class="">Dokumentasi Kegiatan Karang Taruna</p>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                            <div class="carousel owl-carousel grid-view" data-margin="30" data-dots="true"
                                data-autoplay="false" data-autoplay-timeout="5000"
                                data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                                @forelse ($kegiatankartuns as $kegiatankartun)
                                    <div class="item">
                                        <article>
                                            <figure class="overlay overlay1 hover-scale rounded mb-6"><a data-fancybox
                                                    data-src="{{ Storage::url('public/kegiatankartun/') . $kegiatankartun->kegiatan }}"
                                                    data-caption="{{ $kegiatankartun->judulkegiatan }}">
                                                    <img class="lazyimage"
                                                        data-lazyimg="{{ Storage::url('public/kegiatankartun/') . $kegiatankartun->kegiatan }}"
                                                        width="200" height="150"
                                                        alt="{{ $kegiatankartun->judulkegiatan }}" /></a>
                                            </figure>
                                            <div class="post-header">
                                                <h2 class="post-title h3 mb-3">
                                                    <a>{{ $kegiatankartun->judulkegiatan }}</a>
                                                </h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta">
                                                    <li class="post-date"><i
                                                            class="uil uil-calendar-alt"></i><span>{{ $kegiatankartun->created_at }}</span>
                                                    </li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                        <!-- /article -->
                                    </div>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Kegiatan belum Tersedia.
                                    </div>
                                @endforelse
                            </div>

                            <div class="row align-items-center mb-7">
                                <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-6 pe-lg-17">
                                    <a href="#">
                                        <h2 class="display-6 mb-3">Prestasi</h2>
                                    </a>
                                    <p class="">Prestasi Karang Taruna</p>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                            <div class="carousel owl-carousel grid-view" data-margin="30" data-dots="true"
                                data-autoplay="false" data-autoplay-timeout="5000"
                                data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                                @forelse ($prestasikartuns as $prestasikartun)
                                    <div class="item">
                                        <article>
                                            <figure class="overlay overlay1 hover-scale rounded mb-6"><a data-fancybox
                                                    data-src="{{ Storage::url('public/prestasikartun/') . $prestasikartun->prestasi }}"
                                                    data-caption="{{ $prestasikartun->judulprestasi }}">
                                                    <img class="lazyimage"
                                                        data-lazyimg="{{ Storage::url('public/prestasikartun/') . $prestasikartun->prestasi }}"
                                                        width="200" height="150"
                                                        alt="{{ $prestasikartun->judulprestasi }}" /></a>
                                            </figure>
                                            <div class="post-header">
                                                <h2 class="post-title h3 mb-3">
                                                    <a>{{ $prestasikartun->judulprestasi }}</a>
                                                </h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta">
                                                    <li class="post-date"><i
                                                            class="uil uil-calendar-alt"></i><span>{{ $prestasikartun->created_at }}</span>
                                                    </li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                        <!-- /article -->
                                    </div>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Prestasi belum Tersedia.
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </div>

                </article>
                <!-- /.project -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@extends('templates.footer')
