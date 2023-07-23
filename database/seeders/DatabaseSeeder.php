<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        Geografis::create([
            'isi' => '<p>Desa Sindangjawa berada di wilayah kecamatan Dukupuntang kabupaten Cirebon Provinsi Jawa Barat di ketinggian 105 meter dari permukaan laut dengan luas wilayah 211,998 Ha. Terbagi dalam 5(lima) Rukun Warga(RW) dan 41 (empatpuluhsatu) Rukun Tetangga(RT) masyarakatnya sebagian besar petani yang mengandalkan lahan pertanian 100 Ha, dari luas desa Sindangjawa 211,998 Ha. Kurang lebih 4(empat)km sebelah barat ibu kota Kecamatan Dukupuntang.</p>

            <p>Sindangjawa yang secara geografis merupakan desa penyangga Ibu kota kabupaten yang seharusnya menjadi tampilan wajah (performance) Kabupaten Cirebon.</p>
            
            <p>Masyarakat Sindangjawa bermatapencarian petani, buruh tani, buruh harian lepas, buruh bangunan, karyawan swasta, wiraswasta, Pegawai Negeri Sipil, dan TNI/POLRI.</p>'
        ]);

    }
}
