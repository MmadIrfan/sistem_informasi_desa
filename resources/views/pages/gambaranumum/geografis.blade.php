@include('templates.header')
<section class="wrapper bg-soft-orange">
            <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
                <div class="row">
                    <div class="col-md-10 col-xl-8 mx-auto">
                        <div class="post-header">
                            <!-- /.post-category -->
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Gambaran Umum</a>
                            </div>
                            <h1 class="display-1 mb-4">Kondisi Geografis</h1>

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
                                </figure>
                                <div class="card-body">
                                    <div class="classic-view">
                                        <article class="post">
                                            <div class="post-content mb-5">
                                                @foreach ($geografis as $data)
                                                <p>
                                                    {!! $data->isi !!}
                                                </p>
                                                @endforeach
                                                </div>
                                            </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@extends('templates.footer')
