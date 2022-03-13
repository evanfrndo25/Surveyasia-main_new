@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')

{{-- Hero Syarat --}}
<section class="hero-about py-5" id="hero-about">
    <div class="container">
        <div class="row h-25">
            <div class="col-auto align-self-center">
                <h1 class="text-white">Syarat dan Ketentuan</h1>
            </div>
        </div>
    </div>
</section>
{{-- End Hero Syarat --}}

{{-- Syarat & Ketentuan --}}
<section class="vision-mission py-5" id="vision-mission">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-justify">
                <h3 class="text-center fw-bold mb-5">Syarat & Ketentuan Penggunaan SurveyAsia</h3>
                <p>Terima kasih telah mengunjungi kami, dan sudah mempercayakan website SurveyAsia sebagai
                    pilihan dalam membantu riset Anda. Ketentuan aturan berikut mengatur penggunaan Anda
                    terhadap website SurveyAsia dan Anda wajib mematuhi segala aturan yang telah ditetapkan
                    oleh SurveyAsia.
                </p>
                <p>User yang mengakses website SurveyAsia disarankan untuk membaca secara seksama dan
                    memahami peraturan yang anda karena akan berdampak pada hak dan kewajiban yang tersirat
                    tersirat terhadap hukum.
                </p>
                <ol start="1" type="1">
                    <li class="fw-semibold mt-3 m-0">Pernyataan Pengguna</li>
                    <ol start="1" type="a">
                        <li> Dengan ini “Saya mengerti dan menyetujui” syarat dan ketentuan dan segala aturan yang telah
                            ditetapkan oleh SurveyAsia dalam hak dan larangan saat
                            mengakses situs SurveyAsia.</li>
                        <li> Syarat dan ketentuan adalah perjanjian yang sah antara pengguna dengan
                            SurveyAsia, pengguna harus menyetujui semua syarat dan ketentuan yang telah
                            ada, dan jika tidak menyetujui salah satu poin saja diperkenankan tidak
                            mengakses situs SurveyAsia.</li>
                        <li>SurveyAsia berhak mengganti syarat dan ketentuan sewaktu-waktu tanpa
                            pemberitahuan kepada pengguna, diharapkan pengguna selalu membaca syarat
                            dan ketentuan yang ada setiap ingin mengakses situs SurveyAsia.</li>
                    </ol>
                    <li class="fw-semibold mt-3 m-0">Researcher</li>
                    <ol start="1" type="a">
                        <li>Wajib mengisi data diri asli dan sebenarnya untuk data riset yang akurat.</li>
                        <li>Membuat survey dengan syarat dan ketentuan yang telah ditetapkan oleh SurveyAsia.</li>
                        <li>Menggunakan bahasa yang baik dalam membuat survey.</li>
                        <li>Tidak mengandung unsur yang dapat menyinggung orang lain seperti mengandung ejekan/sindiran
                            terhadap ras, suku, agama, dan budaya.</li>
                        <li>Tidak menggunakan cara/program ilegal dalam pembuatan dan hasil riset.</li>
                    </ol>
                    <li class="fw-semibold mt-3 m-0">Responden</li>
                    <ol start="1" type="a">
                        <li>Wajib mengisi data diri asli dan sebenarnya untuk data riset yang akurat.</li>
                        <li>Responden wajib mengupload data diri (KTP) untuk validasi akun.</li>
                        <li>Mengisi studi yang ada dengan jujur dan sebenarnya.</li>
                        <li>Memberikan data dengan jujur dan sebenarnya.</li>
                        <li>Responden akan dikirimkan email dan/atau notifikasi berupa ajakan untuk berpartisipasi dalam
                            sebuah studi yang ada.</li>
                        <li>Tidak menggunakan cara/program ilegal dalam menyelesaikan studi.</li>
                    </ol>
                    <li class="fw-semibold mt-3 m-0">Data Informasi</li>
                    <ol start="1" type="a">
                        <li> Pengguna menyetujui bahwa SurveyAsia telah berhak dalam menyimpan dan menggunakan semua
                            data informasi yang telah diberikan kepada SurveyAsia, dan data informasi tersebut dapat
                            digunakan oleh SurveyAsia dalam tujuan analisis.</li>
                        <li>Pengguna menyutujui bahwa SurveyAsia dapat menggunakan data pengguna dan segala data yang
                            telah diberikan untuk analisis yang dilakukan oleh SurveyAsia.</li>
                        <li>SurveyAsia menjamin kerahasiaan data pengguna yang telah diberikan dan informasi yang
                            tertera pada KTP, dan tidak akan diberikan kepada pihak yang bekerja sama dengan SurveyAsia
                            terkecuali mendapat persetujuan oleh pengguna tersebut.</li>
                    </ol>
                    <li class="fw-semibold mt-3 m-0">Saldo dan Penarikan</li>
                    <ol start="1" type="a">
                        <li>Pengguna wajib memberikan data akun bank / dompet digital dengan benar, agar tidak terjadi
                            kesalahan.</li>
                        <li>Jika terjadi kesalahan dalam memasukkan data pencairan dana, itu menjadi tanggung jawab
                            pengguna.</li>
                        <li>Pengguna mendapat reward saldo setelah menyelesaikan studi dengan baik dan benar, dan telah
                            disetujui oleh SurveyAsia.</li>
                        <li>SurveyAsia berhak mengurangi saldo pengguna jika ditemukan kecurangan, data palsu, data yang
                            tidak akurat, duplikasi, dan penggunaan program ilegal dalam studi yang dilakukan oleh
                            responden.</li>
                        <li>Penarikan dana akan diproses secepatnya dengan maksimal 3 x 24 jam hari kerja.</li>
                        <li>Jika ditemukan kecurangan dan pelanggaran terhadap syarat dan ketentuan, maka SurveyAsia
                            dapat melakukan penundaan/pembatalan terhadap proses penarikan dana.</li>
                    </ol>
                    <li class="fw-semibold mt-3 m-0">Pertautan Akun dengan SurveyAsia</li>
                    <ol start="1" type="a">
                        <li>Pengguna dapat mendaftar akun dengan mengaitkan akun yang telah disediakan oleh SurveyAsia
                            (Google, Facebook, LinkedIn).</li>
                        <li>SurveyAsia terigentrasi dengan Google, Facebook, dan LinkedIn.</li>
                        <li>Jika layanan SurveyAsia ditautkan ke situs dan sumber lain yang telah disediakan oleh pihak
                            ketiga, tautan tersebut hanya disediakan untuk informasi pengguna, SurveyAsia tidak ada
                            kendali untuk mengakses situs tersebut, dan tidak bertanggung jawab atas kerugian yang
                            mungkin timbul kepada pengguna.</li>
                    </ol>
                    <li class="fw-semibold mt-2 m-0">Pelanggaran dan Tindakan</li>
                    <ol start="1" type="a">
                        <li>Jika ditemukan adanya pelanggaran terhadap persyaratan ini, pihak SurveyAsia dapat melakukan
                            beberapa tindakan seperti berikut sesuai dengan pelanggaran yang dilakukan:</li>

                        <ul type="circle">
                            <li>Pencabutan hak pengguna dalam mengakses layanan yang disediakan SurveyAsia secara
                                sementara atau permanen.</li>
                            <li>Memberikan peringatan kepada pengguna.</li>
                            <li>Mengajukan tuntukan hukum terhadap pengguna.</li>
                            <li>Penghapusan dan blacklist akun pengguna.</li>
                        </ul>

                        <li>Penguna setuju untuk mengganti semua biaya kerugian dan kerusakan akibat pelanggaran
                            persyaratan SurveyAsia.</li>
                    </ol>
                </ol>
            </div>
        </div>
    </div>
</section>
{{-- End TaC --}}
@endsection