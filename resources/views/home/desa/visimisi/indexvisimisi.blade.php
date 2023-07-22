@include('templates.navbaradmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <div class="card-body">
                        <div class="classic-view">
                            <article class="post">
                                <h1 class="text-center">Visi Misi </h1>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead class="text-center">
                                            <tr>
                                                <th scope="col">VISI</th>
                                                <th scope="col">MISI</th>
                                                <th scope="col">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($visimisis as $visimisi)
                                                <tr>
                                                    <td class="text-left">{{ $visimisi->visi }}</td>
                                                    <td class="text-left">{!! $visimisi->misi !!}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('updatevisimisi.edit', $visimisi->id) }}"
                                                            class="btn btn-sm btn-primary">EDIT</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data visimisi belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $visimisis->links() }}
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('lte') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('lte') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('lte') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('lte') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('lte') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('lte') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('lte') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('lte') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('lte') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('lte') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('lte') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('lte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('lte') }}/dist/js/pages/dashboard.js"></script>
