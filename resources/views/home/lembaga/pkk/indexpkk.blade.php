@include('templates.navbaradmin')
<div class="content-wrapper">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">INFORMASI</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pkks as $pkk)
                            <tr>
                                <td>{!! $pkk->informasi !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('updatepkk.destroy', $pkk->id) }}" method="POST">
                                        <a href="{{ route('updatepkk.edit', $pkk->id) }}"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Informasi pkk belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                <br>
                <a href="{{ route('updatekegiatanpkk.create') }}" class="btn btn-sm btn-success">TAMBAH KEGIATAN</a>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">KEGIATAN</th>
                            <th scope="col">KETERANGAN</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kegiatanpkks as $kegiatanpkk)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ Storage::url('public/kegiatanpkk/') . $kegiatanpkk->kegiatan }}"
                                        class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $kegiatanpkk->judulkegiatan }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('updatekegiatanpkk.destroy', $kegiatanpkk->id) }}"
                                        method="POST">
                                        <a href="{{ route('updatekegiatanpkk.edit', $kegiatanpkk->id) }}"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                            </tr>
                        @empty
                            <br>
                            <div class="alert alert-danger">
                                kegiatan pkk belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                <br>
                <a href="{{ route('updateprestasipkk.create') }}" class="btn btn-sm btn-success">TAMBAH
                    PRESTASI</a>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">PRESTASI</th>
                            <th scope="col">KETERANGAN</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($prestasipkks as $prestasipkk)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ Storage::url('public/prestasipkk/') . $prestasipkk->prestasi }}"
                                        class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $prestasipkk->judulprestasi }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('updateprestasipkk.destroy', $prestasipkk->id) }}"
                                        method="POST">
                                        <a href="{{ route('updateprestasipkk.edit', $prestasipkk->id) }}"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <br>
                            <div class="alert alert-danger">
                                prestasi pkk belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                {{ $pkks->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    //message with toastr
    @if (session()->has('success'))

        toastr.success('{{ session('success') }}', 'BERHASIL!');
    @elseif (session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!');
    @endif
</script>
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
