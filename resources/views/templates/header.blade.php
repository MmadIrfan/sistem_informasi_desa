<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>
        DESA SINDANGJAWA
    </title>


    <link rel="shortcut icon"
        href="https://w1.pngwing.com/pngs/823/446/png-transparent-java-logo-cirebon-bekasi-regency-kpu-kabupaten-cirebon-cirebon-regency-symbol-education-sri-baduga-maharaja-west-java.png" />


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desa Sindangjawa" name="keywords">
    <meta content="Sindangjawa adalah desa di kecamatan Dukupuntang, Cirebon, Jawa Barat, Indonesia."
        name="description">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/sistem_informasi_desa/resources/assets/css/landingcss/plugins.css">
    <link rel="stylesheet" href="http://localhost/sistem_informasi_desa/resources/assets/css/landingcss/style.css">
    <link rel="preload" href="http://localhost/sistem_informasi_desa/resources/assets/css/landingcss/fonts/dm.css"
        as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <style>
        img.lazy {
            background: #F1F1FA;
            width: 100%;
            height: 30%;
            display: block;
            margin: 0;
            border: 0;
        }
    </style>

</head>
<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="/" class="nav-title">
                    <img src="https://w1.pngwing.com/pngs/823/446/png-transparent-java-logo-cirebon-bekasi-regency-kpu-kabupaten-cirebon-cirebon-regency-symbol-education-sri-baduga-maharaja-west-java.png"
                        class="nav-logo" alt="" />DESA SINDANGJAWA
                </a>
            </div>
            <div class="navbar-collapse offcanvas-nav">
                <div class="offcanvas-header d-lg-none d-xl-none">
                    <a href="https://localhost/sistem_informasi_desa/resources/views/welcome.blade.php"><img
                            src="https://w1.pngwing.com/pngs/823/446/png-transparent-java-logo-cirebon-bekasi-regency-kpu-kabupaten-cirebon-cirebon-regency-symbol-education-sri-baduga-maharaja-west-java.png"
                            alt="SMKN 1 Depok" /></a>
                    <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                        aria-label="Close"></button>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                            href="/">Beranda</a></li>
                    <li class="nav-item dropdown"><a
                            class="nav-link has-submenu {{ Request::is('visimisi', 'sejarah', 'sambutan', 'geografis', 'demografis', 'kondisiekonomi') ? 'active' : '' }}"
                            href="javaScript:void(0)">Profil</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a
                                    class="dropdown-item dropdown-toggle {{ Request::is('visimisi', 'sejarah', 'sambutan') ? 'active' : '' }}">Desa</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a
                                            class="dropdown-item {{ Request::is('visimisi') ? 'active' : '' }}"
                                            href="/visimisi">Visi Misi</a></li>
                                    <li class="nav-item"><a
                                            class="dropdown-item {{ Request::is('sejarah') ? 'active' : '' }}"
                                            href="/sejarah">Sejarah</a></li>
                                    <li class="nav-item"><a
                                            class="dropdown-item {{ Request::is('sambutan') ? 'active' : '' }}"
                                            href="/sambutan">Kepala Desa</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a
                                    class="dropdown-item dropdown-toggle {{ Request::is('geografis', 'demografis', 'kondisiekonomi') ? 'active' : '' }}"
                                    href="javaScript:void(0)">Gambaran Umum</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a
                                            class="dropdown-item {{ Request::is('geografis') ? 'active' : '' }}"
                                            href="/geografis">Kondisi Geografis
                                        </a></li>
                                    <li class="nav-item"><a
                                            class="dropdown-item {{ Request::is('demografis') ? 'active' : '' }}"
                                            href="/demografis">Demografis </a>
                                    </li>
                                    <li class="nav-item"><a
                                            class="dropdown-item {{ Request::is('kondisiekonomi') ? 'active' : '' }}"
                                            href="/kondisiekonomi">Kondisi Ekonomi
                                        </a></li>
                                </ul>
                        </ul>
                    </li>

                    <li class="nav-item dropdown"><a
                            class="nav-link dropdown-toggle {{ Request::is('pkk') ? 'active' : '' }}"
                            href="javaScript:void(0)">Lembaga</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item {{ Request::is('pkk') ? 'active' : '' }}"
                                    href="/pkk">PKK</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="">Karang Taruna</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link {{ Request::is('pengumuman*') ? 'active' : '' }}"
                            href="/pengumuman">Pengumuman</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('pemerintahandesa') ? 'active' : '' }}"
                            href="/pemerintahandesa">Pemerintahan Desa</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}"
                            href="/galeri">Galeri</a></li>

                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-90 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                    <li class="nav-item d-lg-none">
                        <div class="navbar-hamburger"><button class="hamburger animate plain"
                                data-toggle="offcanvas-nav"><span></span></button></div>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
