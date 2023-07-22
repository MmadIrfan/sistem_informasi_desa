@include('templates.header')
<section class="wrapper bg-soft-orange">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Visi & Misi</a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4">DESA SINDANGJAWA</h1>

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
                        </figure>
                        <div class="card-body">
                            <div class="classic-view">
                                @foreach ($visimisis as $visimisi)
                                    <h2 class="h1 mb-4">Visi</h2>
                                    <p>{{ $visimisi->visi }}
                                    </p>
                                    <h2 class="h1 mb-4">Misi</h2>
                                    <p>
                                        {!! $visimisi->misi !!}
                                    </p>
                                @endforeach
                            </div>
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
