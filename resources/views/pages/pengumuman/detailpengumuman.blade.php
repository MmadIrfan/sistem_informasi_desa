@include('templates.header')
<section class="wrapper bg-soft-primary">
    <div class="container pt-3 pb-19 pt-md-5 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">

                    <!-- /.post-meta -->
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

<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog single mt-n17">
                    <div class="card">
                        <!-- <figure class="card-img-top"><img src="./assets/img/photos/b1.jpg" alt="" /> -->

                        <div class="card-body">
                            <a href="/pengumuman">
                                <- Klik untuk kembali</a>
                                    <hr class="mt-4 mt-md-5 mb-5">
                                    <h1 class="display-4 mb-1">{{ $pengumuman->judul }}</h1>
                                    <div class="post-category text-line">
                                        <a href="javascript:;" rel="category"><i class="uil uil-file-alt fs-15"></i>
                                            Kategori : {{ str_replace('_', ' ', $pengumuman->kategori) }} | <i
                                                class="uil uil-file-alt fs-15"></i> Tanggal Dibuat
                                            : {{ $pengumuman->created_at }}</a>
                                    </div>


                                    <div class="classic-view">
                                        <br class="post">

                                        <div class="basic-slider owl-carousel dots-over" data-nav="true"
                                            data-margin="5">
                                            <div class="item"><img class="lazyimage"
                                                    data-lazyimg="{{ Storage::url('public/pengumuman/') . $pengumuman->image }}"
                                                    class="rounded" alt="" /></div>
                                        </div>
                                        <br class="post">
                                        <!-- /.basic-slider -->
                                        <figure>
                                            <blockquote class="fs-lg">
                                                <p>{{ $pengumuman->tema }}</p>
                                            </blockquote>

                                        </figure>



                                        <p class="mb-2">
                                            {!! $pengumuman->konteks !!}
                                        </p>

                                        <p class="mb-4">
                                            Penulis : {{ $pengumuman->penulis }}
                                        </p>


                                        <!-- /.post -->
                                    </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@extends('templates.footer')
