@include('templates.navbaradmin')

<div class="content-wrapper">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('updatepengumuman.update', $pengumuman->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">KATEGORI</label>
                                <select type="text" class="form-control @error('kategori') is-invalid @enderror"
                                    name="kategori" value="{{ old('kategori', $pengumuman->kategori) }}"
                                    placeholder="Masukkan kategori">
                                    <option value="Umum"
                                        {{ old('kategori', $pengumuman->kategori) === 'Umum' ? 'selected' : '' }}>Umum
                                    </option>
                                    <option value="Event"
                                        {{ old('kategori', $pengumuman->kategori) === 'Event' ? 'selected' : '' }}>Event
                                    </option>
                                    <option value="Hari Peringatan"
                                        {{ old('kategori', $pengumuman->kategori) === 'Hari_Peringatan' ? 'selected' : '' }}>
                                        Hari Peringatan</option>
                                </select>
                                <!-- error message untuk kategori -->
                                @error('kategori')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JUDUL</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    name="judul" value="{{ old('judul', $pengumuman->judul) }}"
                                    placeholder="Masukkan judul">

                                <!-- error message untuk judul -->
                                @error('judul')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image">

                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TEMA PENGUMUMAN</label>
                                <input type="text" class="form-control @error('tema') is-invalid @enderror"
                                    name="tema" value="{{ old('tema', $pengumuman->tema) }}"
                                    placeholder="Masukkan tema">

                                <!-- error message untuk tema -->
                                @error('tema')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">KETERANGAN</label>
                                <textarea class="form-control @error('konteks') is-invalid @enderror" name="konteks" rows="5"
                                    placeholder="Masukkan Konten Post">{{ old('konteks', $pengumuman->konteks) }}</textarea>

                                <!-- error message untuk konteks -->
                                @error('konteks')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PENULIS</label>
                                <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                                    name="penulis" value="{{ old('penulis', $pengumuman->penulis) }}"
                                    placeholder="Masukkan penulis">

                                <!-- error message untuk penulis -->
                                @error('penulis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('konteks');
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
