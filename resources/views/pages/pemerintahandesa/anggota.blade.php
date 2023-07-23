@include('templates.header')
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row mb-3">
            <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
                <h3 class="display-4 mb-7 px-lg-19 px-xl-15">Anggota Pemerintahan Desa Sindangjawa</h3>
            </div>
            <!-- ini opssional aja ga sih? -->
            <section class="wrapper bg-light wrapper-border">
                <div class="container inner py-8">
                    <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
                        <div class="col-lg-8 align-self-center">

                        </div>
                        <!--/column -->

                        <!-- /column .sidebar -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.container -->
            </section>
            <!--/column -->
        </div>

        <!--/.row -->
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
            <div class="col-md-6 col-lg-3">
                <div class="position-relative">
                    <div class="shape rounded bg-soft-orange rellax d-md-block" data-rellax-speed="0"
                        style="right: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0;">
                    </div>
                    <div class="card cardGuru mb-5">
                        @forelse ($anggotas as $anggota)
                            <figure class="card-img-top"><img class="lazyimage img-fluid"
                                    data-lazyimg="{{ Storage::url('public/anggota/') . $anggota->image }}"
                                    alt="{{ $anggota->image }}" />
                            </figure>
                            <div class="card-body px-6 py-5">
                                <h4 class="mb-1">{{ $anggota->nama }}</h4>
                                <a>{{ $anggota->jabatan }}</a>
                                <p class="mb-0"></p>
                            </div>
                        @empty
                            <div class="alert alert-danger">
                                Data Anggota belum Tersedia.
                            </div>
                        @endforelse
                        <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /div -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->

    </div>
    <!-- /.container -->
</section>
@extends('templates.footer')
