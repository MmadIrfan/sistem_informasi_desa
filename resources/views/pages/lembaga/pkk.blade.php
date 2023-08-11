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
                    <h1 class="display-1 mb-3">Pemberdayaan Kesejahteraan Keluarha</h1>
                    <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18">( PKK )</p>
                    <img class="lazyimage logo-jurusan" data-lazyimg="{{ asset('/storage/images/LogoPkk.png') }}"
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
                                    <p>Pemberdayaan Kesejahteraan Keluarga, disingkat PKK, adalah organisasi
                                        kemasyarakatan yang memberdayakan wanita untuk turut berpartisipasi dalam
                                        pembangunan Indonesia.</p>
                                </div>
                                <!--/.row -->
                            </div>
                            <div class="row align-items-center mb-10">
                                <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-6 pe-lg-17">
                                    <a href="#">
                                        <h2 class="display-6 mb-3">Dokumentasi</h2>
                                    </a>
                                    <p class="">Dokumentasi Kegiatan PKK</p>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                            <div class="carousel owl-carousel grid-view" data-margin="30" data-dots="true"
                                data-autoplay="false" data-autoplay-timeout="5000"
                                data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                                <p class="text-center">Belum ada dokumentasi saat ini</p>
                            </div>

                            <div class="row align-items-center mb-7">
                                <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-6 pe-lg-17">
                                    <a href="#">
                                        <h2 class="display-6 mb-3">Prestasi</h2>
                                    </a>
                                    <p class="">Prestasi PKK</p>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                            <div class="carousel owl-carousel grid-view" data-margin="30" data-dots="true"
                                data-autoplay="false" data-autoplay-timeout="5000"
                                data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>


                                <p class="text-center">Belum ada prestasi saat ini.</p>

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
