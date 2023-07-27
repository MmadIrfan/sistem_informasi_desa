<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Demografis;
use App\Models\Ekonomi;
use App\Models\Geografis;
use App\Models\Kepaladesa;
use App\Models\Sejarah;
use App\Models\User;
use App\Models\Visimisi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'sindangjawa',
            'email' => 'sindangjawa@gmail.com',
            'password' => Hash::make('12345')
        ]);

        Visimisi::create([
            'visi' => 'MEWUJUDKAN, DESA MANDIRI, RELIGI, SEJAHTERA, ADIL DAN MAKMUR.',
            'misi' => '<ol>
            <li>
            <p>Meningkatkan Sumber Daya Manusia (SDM) Aparatur Pemerintahan, Kelembagaan dan Masyarakat sehingga tata kelola Pemerintahan Desa menjadi lebih baik;</p>
            </li>
            <li>
            <p>Meningkatkan Pelayanan yang maksimal kepada Masyarakat;</p>
            </li>
            <li>
            <p>Meningkatkan sarana daan prasarana dari segi fisik, ekonomi, pendidikan, kesehatan, kebudayaan di Desa;</p>
            </li>
            <li>
            <p>Meningkatkan kehidupan yang harmonis, toleran, saling menghormati dalam kehidupan berbudaya dan beragama di Desa Sindaangjawa;</p>
            </li>
            <li>
            <p>Meningkatkan kesehatan dengan prilaku hidup bersih dan sehat dalam tatanan Rumah tangga;</p>
            </li>
            <li>
            <p>Meningkatkan kesejahteraan masyarakat Desa dengan mendirikan Badan Usaha Milik Desa (BUMDES); dan program lain untuk membuka lapangan kerja bagi masyarakat desa, serta meningkatkan produksi rumah tangga kecil;</p>
            </li>
            <li>
            <p>Mengedepankan kejujuran, keadilan, transfaransi dalam kehidupan sehari-hari, baik dalam pemerintahan maupun dengan masyarakat.</p>
            </li>
            <li>
            <p>Mewujudkan keamanan dan ketertiban dilingkungan desa.</p>
            </li>
        </ol>'
        ]);

        Kepaladesa::create([
            'sambutan' => '<h2><strong>Kata Sambutan</strong></h2>

            <p>Puji dan syukur marilah kita panjatkan kehadirat Allah SWT. atas limpahan rahmat, taufik dan hidayah-Nya, kita semua diberikan kesehatan sehingga dapat melaksanakan tugas kita di bidang pendidikan. Para pengunjung situs yang berbahagia, kami ucapkan selamat datang di situs Desa Sindangjawa ini. Kami menyadari sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya Teknologi Informasi yang begitu pesat, sangat diperlukan berbagai sarana prasarana yang kondusif.</p>
            
            <p>Dalam rangka melayani kebutuhan berbagai informasi siswa, guru, orang tua maupun masyarakat, kami berusaha mewujudkan hal tersebut, salah satunya melalui Website Desa, meskipun masih belum maksimal.</p>
            
            <p>Website ini diharapkan bisa dijadikan ajang silaturahmi, memperkenalkan diri secara lebih luas untuk ikut bersama-sama meramaikan jagat maya sekaligus bersaing di tengah informasi global, khususnya dalam memperkenalkan keberadaan sekolah di mata publik.</p>
            
            <p>Selain itu diharapkan dapat membangun jaringan komunikasi antara sesama guru antara guru dengan peserta didik, dan antara sesama peserta didik guna menambah wawasan, mempermudah dan mempercepat proses dalam mendapatkan informasi. Selamat berkunjung di laman Desa Sindangjawa, Semoga bermanfaat bagi upaya memperlancar proses pembelajaran sekaligus sebagai media komunikasi antar warga sekolah dan masyarakat, baik siswa, guru, pegawai, orangtua siswa, komite, dan siapa pun yang ingin memanfaatkan laman ini. Akhirnya, terima kasih kami atas dikunjunginya situs ini, mudah-mudahan membawa manfaat bagi kita semua. Aamiin.</p>',
        ]);

        Sejarah::create([
            'content' => '<h2><strong>Sindangjawa, Dukupuntang, Cirebon</strong></h2>
        
            <p>Berawal sekitar abad 16 masehi, seorang Resi yang bernama Pandunata mempunyai seorang putri bernama Nyi Mas Indang Larasakti, mendirikan sebuah pedukuhan disebelah utara kaki gunung Ciremai yang diberi nama Padukuhan Banjarmelati. Kata Banjar yang berarti pekarangan dan Melati berarti bunga putih yang harum baunya. Jadi Banjarmelati artinya sebuah pekarangan atau pemukiman yang bersih dan menyenangkan.</p>
            
            <p>Padukuhan Banjarmelati berada dibawah kekuasaan kerajaan galuh (kawali) yang berafiliasi dengan pakuan pajajaran. Resi Pandunata kemudian menyerahkan tampuk kepemimpinan kepada putrinya yang bernama Nyi Mas Indang Larasakti, pada masa kekuasaan Nyi Mas Indang Larasakti, padukuhan Banjarmelati kedatangan utusan dari Kesultanan Cirebon yang dipimpin oleh Ki Sura yang membawa perintah untuk menyebarkan agama islam. Hal ini sudah diprediksi oleh Resi Pandunata dan menyarankan kepada Nyi Mas Indang Larasakti agar nantinya dapat menerima dengan baik atas kedatangan utusan dari Kesultanan Cirebon.</p>
            
            <p>Dengan kedatangan Ki Sura dan pasukannya dipadukuhan Banjarmelati membawa perubahan yang amat pesat, sehingga pedukuhan atau perkampungan Banjarmelati menjadi ramai dan menyenangkan dengan suasana yang terang benderang. Karena itulah nama Banjarmelati diganti menjadi Banjarpatom, yang berarti pekarangan atau pemukiman yang bercahaya. Pada tahun 1629 M, pasukan tentara Sultan Agung yang dipimpin oleh Ki Padmanegara dan Suryalaga, yang mengalami kegagalan dalam melancaran serangannya terhadap VOC dalam perjalan pulangnya ke Mataram mereka singgah untuk beristirahat di Banjarpatoman, karena suasana perkampungan Banjarpatoman yang ramai dan menyenangkan sehingga mereka nyaman dan kerasan tinggal di Banjarpatoman dan sebagian besar dari mereka memutuskan untuk tetap tinggal di Banjarpatoman. Hal ini kemudian diketahui oleh Sultan Cirebon dan menaruh perhatian besar terhadap pasukan dari Jawa ini karena menganggap mereka adalah pejuang.</p>
            
            <p>Kehadiran tentara Sultan Agung di Banjarpatoman merupakan peristiwa bersejarah yang perlu dikenang. Karena itulah Sultan Cirebon tempat ini diberi nama Sindangjawa. Kata Sindang yang berati singgah dan Jawa berasal dari Orang Jawa (Mataram). Jadi Sindangjawa berarti Singgahnya Orang-orang Jawa. Sejak itulah nama Banjarpatoman dilupakan dan orang sering menyebut dengan nama Sindangjawa. Dalam upaya memajukan perekonomian dan pemerataan pembangunan, pada tanggal 03 Maret 1984 Desa Sindangjawa dimekarkan menjadi 2 (dua) desa yaitu desa induk bernama Sindangjawa dan desa pemekaran yang berada di sebelah Barat diberi nama Sindangmekar.</p>',
        ]);

        Demografis::create([
            'isi' => '<p>A. Luas Wilayah</p>

            <p>&bull; Luas Sindangjawa : 211,998 Ha</p>
            
            <p>&bull; Tanah Bengkok : 24 Ha</p>
            
            <p>&bull; Tanah Tegalan : 12 Ha</p>
            
            <p>&bull; Tanah Perkantoran/ Istansi &amp; Sarana Umum : 2,6 Ha</p>
            
            <p>Terdiri dari :</p>
            
            <p>1. Pekantoran : 0,5 Ha</p>
            
            <p>2. Pendidikan : 1,1 Ha</p>
            
            <p>3. Sarana Olah Raga : 1,0 Ha</p>
            
            <p>&bull; Tanah Kuburan : 1,4 Ha</p>
            
            <p>&bull; Tanah Darat : 95,998 Ha</p>
            
            <p>&bull; Tanah Sawah : 76 Ha</p>
            
            <p>Terdiri dari :</p>
            
            <p>1. Sawah Irigasi Teknis : 40 Ha</p>
            
            <p>2. Sawah Irigasi &frac12; Teknis : 24Ha</p>
            
            <p>3. Sawah Tadah Hujan : 12 Ha</p>
            
            <p>B. Batas Desa</p>
            
            <p>Utara : Desa Karangwagi Kecamatan Depok</p>
            
            <p>Timur : Kelurahan Kenanga dan Kelurahan Tukmudal Kecamatan Sumber</p>
            
            <p>Tenggara : Desa Sidawangi Kecamatan Sumber</p>
            
            <p>Selatan : Desa Cisaat Kecamatan Dukupuntang</p>
            
            <p>Barat : Desa Sindangmekar Kecamatan Dukupuntang</p>
            
            <p>C. Jalan dan Jembatan</p>
            
            <p>1. Panjang Jalan Provinsi : 2.500 m</p>
            
            <p>2. Panjang Jalan Provinsi : 800 m</p>
            
            <p>3. Panjang Jalan Desa : 4.760 m</p>
            
            <p>4. Jalan Tanah : 1.020 m</p>
            
            <p>5. Jembatan Beton : 3 buah</p>
            
            <p>D. Ekonomi Masyarakat</p>
            
            <p>1. Angkatan Kerja [ 19-55 th ] : 1258 Orang.</p>
            
            <p>2. Usia sekolah [ 7-18 th ] : 2260 Orang.</p>
            
            <p>3. Ibu Rumah tangga : 1347 Orang.</p>
            
            <p>4. Pekerja penuh : 1258 Orang.</p>
            
            <p>5. Pekerja yang tidak menentu : 1887 Orang.</p>
            
            <p>6. Rumah tangga Petani : 192 KK</p>
            
            <p>7. Anggota Rumah tangga petani : 452 Orang.</p>
            
            <p>8. Rumah tangga Buruh tani : 78 KK</p>
            
            <p>9. Anggota Rumah tangga buruh tani : 417 Orang.</p>
            
            <p>E. Profesi</p>
            
            <p>1. Petani : 192 Orang.</p>
            
            <p>2. Buruh Tani : 575 Orang.</p>
            
            <p>3. Buruh Harian Lepas : 192 Orang.</p>
            
            <p>4. Karyawan Swasta : 86 Orang.</p>
            
            <p>5. Wirasawasta : 165 Orang.</p>
            
            <p>6. PNS : 81 Orang.</p>
            
            <p>7. Pedagang : 121 Orang.</p>
            
            <p>8. Jasa lainnya : 182 Orang.</p>
            
            <p>F. Produk Domestik Desa</p>
            
            <p>&bull; Pertanian : 100 Ha.</p>
            
            <p>&bull; Perternakan : 4 Kelompok</p>
            
            <p>&bull; Perikanan : 4 Kelompok</p>
            
            <p>&bull; Perkebunan : 17Ha.</p>
            
            <p>&bull; Kerajinan Tangan : 3 pengrajin/pengusaha</p>
            
            <p>&bull; Kompeksi : 1Pengusaha</p>
            
            <p>&bull; Meubeler : 18 Pengrajin</p>
            
            <p>G. Pendidikan</p>
            
            <p>&bull; Sarana Pendidikan</p>
            
            <p>1. TK / Paud : 5 Buah</p>
            
            <p>2. SD / MD : 4 Buah</p>
            
            <p>3. SMP/MTs : 1 Buah</p>
            
            <p>4. Pesantren : 2 Buah</p>
            
            <p>&bull; Tamatan sekolah :</p>
            
            <p>- Tidak tamat SD : 146 Orang</p>
            
            <p>- Tamat SD : 599 Orang</p>
            
            <p>- Tamat SMP : 746 Orang</p>
            
            <p>- Tamat SMA : 595 Orang</p>
            
            <p>- D-1 : 22 Orang</p>
            
            <p>- S-1 : 197 Orang</p>
            
            <p>- S-2 : 23 Orang</p>
            
            <p>- S-3 : 4 Orang</p>
            
            <p>H. Wajib belajar 9 Tahun</p>
            
            <p>&bull; Usia 7 &ndash; 15 tahun : 1035 Jiwa</p>
            
            <p>&bull; Masih sekolah 7 &ndash; 15 tahun : 982 Jiwa</p>
            
            <p>&bull; Tidak sekolah 7 &ndash; 15 tahun : 53 Jiwa</p>
            
            <p>I. Kesehatan Masyarakat</p>
            
            <p>&bull; Bidan Desa : 1 Orang</p>
            
            <p>&bull; Balita : 260 Anak</p>
            
            <p>&bull; Balita Gizi Buruk : - Anak</p>
            
            <p>&bull; Balita Gizi Baik : 260 Anak</p>
            
            <p>&bull; Rumah tangga menggunakan air bersih : 1.347 Rumah tangga</p>
            
            <p>&bull; Rumah tangga menggunakan air sungai : - Rumah tangga</p>
            
            <p>J. Penduduk</p>
            
            <p>&bull; Kepala Rumah Tangga : 1.676 KK</p>
            
            <p>&bull; Penduduk : 5.578 Jiwa</p>
            
            <p>Terdiri dari :</p>
            
            <p>&bull; Laki-laki : 2.931 Jiwa</p>
            
            <p>&bull; Perempuan : 2.647 Jiwa</p>
            
            <p>K. Aparatur Pemerintahan Desa</p>
            
            <p>&bull; Perangkat Desa : 10 Orang</p>
            
            <p>&bull; BPD : 9 Orang</p>
            
            <p>&bull; RT : 41 RT</p>
            
            <p>&bull; RW : 8 Wilayah</p>
            
            <p>&bull; LPMD : 9 Orang</p>
            
            <p>&bull; LINMAS : 10 Anggota</p>
            
            <p>&bull; BKM : 7 Orang</p>
            
            <p>L. Sarana Umum</p>
            
            <p>&bull; Kantor Desa : 1 Unit</p>
            
            <p>&bull; KUA : 1 Buah</p>
            
            <p>&bull; Puskesmas : 1 Unit</p>
            
            <p>&bull; Puskesdes : 1 Unit</p>
            
            <p>&bull; Posyandu : 5 Unit</p>
            
            <p>&bull; Masjid Jami : 3 Buah</p>
            
            <p>&bull; Musholla : 25 Buah</p>
            
            <p>&bull; Lapangan Sepak Bola : 1 Buah</p>
            
            <p>&bull; Poskamling : 9 Buah</p>
            
            <p>&bull; Pemakaman Umum (TPU) : 5 Lokasi</p>'
        ]);

        Geografis::create([
            'isi' => '<p>Desa Sindangjawa berada di wilayah kecamatan Dukupuntang kabupaten Cirebon Provinsi Jawa Barat di ketinggian 105 meter dari permukaan laut dengan luas wilayah 211,998 Ha. Terbagi dalam 5(lima) Rukun Warga(RW) dan 41 (empatpuluhsatu) Rukun Tetangga(RT) masyarakatnya sebagian besar petani yang mengandalkan lahan pertanian 100 Ha, dari luas desa Sindangjawa 211,998 Ha. Kurang lebih 4(empat)km sebelah barat ibu kota Kecamatan Dukupuntang.</p>

            <p>Sindangjawa yang secara geografis merupakan desa penyangga Ibu kota kabupaten yang seharusnya menjadi tampilan wajah (performance) Kabupaten Cirebon.</p>
            
            <p>Masyarakat Sindangjawa bermatapencarian petani, buruh tani, buruh harian lepas, buruh bangunan, karyawan swasta, wiraswasta, Pegawai Negeri Sipil, dan TNI/POLRI.</p>'
        ]);

        Ekonomi::create([
            'isi' => '<p>A. Potensi Unggulan Desa</p>

            <p>Potensi Unggulan Ekonomi desa adalah sektor pertanian, terdapat lahan pertanian 100 Ha 40 % sawah irigasi teknis dan 48 % sawah irigasi non teknis, dari luas wilayah desa Sindangjawa 211,998 Ha, Peternakan, Perikanan, Perkebunan dan Kerajinan.</p>
            
            <p>B. Pertumbuhan Ekonomi Desa</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pertumbuhan perekonomian desa Sindangjawa akhir tahun 2019 ada peningkatan, dengan didirikannya BUMDes, masyarakat termotifasi dan tumbuh kasadaran untuk membentuk Koperasi dan kelompok-kelompok usaha lainnya, diantaranya Koperasi &ldquo;Bina Sejahtera&rdquo; yang digerakan oleh ibu-ibu PKK desa Sindangjawa dan 17 (tujuhbelas) kelompok tani yang terdiri dari kelompok tani pangan, kelompok ternak, kelompok unggas, kelompok perikanan dan kelompok pedagang bakulan yang tergabung dalam gabungan kelompok tani &ldquo;Sidabangkit Jaya&rdquo;</p>
            
            <p>Desa Sindangjawa memiliki potensi unggulan ekonomi masyarakat, disamping potensi pertanian yang sangat dominan ada pula potensi-potensi lain yang menjadi produk andalan Desa Sindangjawa, sebagai berikut :</p>
            
            <p>1. Koperasi : Berkah Sejahtera. Sikado</p>
            
            <p>2. Kerajinan :</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a. Rattan : PT. Romana Wicker</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. Meubeler : Sagung Jaya, H. Carsina, Waluyo, Ubaidilah, Suherman dan lainnya</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c. Sankar Burung : Abdurohman</p>
            
            <p>3. Konveksi : Sdr. Kholid</p>
            
            <p>4. Peternakan :</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a. Sapi Potong : Sdr.H. Abdul Rouf, Barnawi, Sapi&rsquo;I dan Suari</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. Kambing/Domba : Kelompok Cikembang, Pontas Sari dan 28 Peternak lainnya.</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c. Ayam : Gunawang, Widodo, Sukanta</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d. Itik : Sdr. Sunadi</p>
            
            <p>5. Perikanan : Kelompok Budi Mulya, Cigoek Fish. Mina Taruna, Sinar Mas</p>
            
            <p>6. Perkebunan : Sindangjawa Lestari</p>
            
            <p>7. Pedagang Kecil : 245 Pedagang</p>
            
            <p>8. Rumah Makan : Istana Sop Patin. Warung Nasi Sederhana</p>
            '
        ]); 

    }
}