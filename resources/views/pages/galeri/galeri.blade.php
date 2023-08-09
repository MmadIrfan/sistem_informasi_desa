@include('templates.header');
<section class="wrapper bg-light">
    <div class="container pt-10 pt-md-14">
        <div class="row">
            <div class="col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                <h1 class="display-1 mb-3">Galeri</h1>
                <p class="lead fs-lg pe-lg-15 pe-xxl-12">Dokumentasi kegiatan di Desa SindangJawa</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="grid grid-view projects-masonry">
            <div class="isotope-filter filter mb-10">
                <p>Filter:</p>
                <ul>
                    <li><a id="filter-all" class="filter-item active" data-filter="*">All</a></li>
                    <li>
                        <a class="filter-item" data-filter=".Umum">Umum</a>
                    <li>
                        <a class="filter-item" data-filter=".Event">Event</a>
                    </li>
                    <li>
                        <a class="filter-item" data-filter=".Hari_Peringatan">Hari Peringatan</a>
                    </li>
            </div>

            <div class="row gx-md-8 gy-10 gy-md-13 mb-4 isotope">
                @forelse ($galeris as $galeri)
                    <div class="project item col-md-6 col-xl-4 {{ $galeri->kategori }}" id="content-area">
                        <article>
                            <figure class="overlay overlay1 lift hover-scale rounded mb-6"><a data-fancybox
                                    data-src="{{ Storage::url('public/galeri/') . $galeri->foto }}"
                                    data-caption="{{ $galeri->judul }}">
                                    <img class="lazyimage"
                                        data-lazyimg="{{ Storage::url('public/galeri/') . $galeri->foto }}"
                                        width="200" height="150" alt="{{ $galeri->judul }}" /></a>
                            </figure>
                            <div class="post-header">
                                <h2 class="post-title h3 mb-3"><a class="link-dark" href=""
                                        style="font-size:1.04rem;">{{ $galeri->judul }}</a></h2>
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
                @empty
                    <div class="alert alert-danger">
                        Data galeri belum Tersedia.
                    </div>
                @endforelse
                <!-- /.item -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.grid -->
    </div>
</section>
@extends('templates.footer');
