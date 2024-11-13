<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" href="vendor/adminlte/dist/img/logobms.png" type="png/jpg"> -->
    <title>DINDUKCAPIL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: white;
            padding-top: 70px;
            /* dark */
            background-color: var(--bg-color);
            color: var(--text-color);
            padding-top: 70px;
            transition: background-color 0.3s, color 0.3s;
        }
        .navbar {
            margin-bottom: -20px;
            background-color: #17a2b8;
            /* darkmode */
            background-color: var(--nav-bg);
            transition: background-color 0.3s;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .navbar-toggler {
            border: 2px solid white;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        .dropdown-menu {
            background-color: white;
            border: 1px solid rgba(0,0,0,.15);
        }
        .dropdown-item {
            color: #333 !important;
        }
        .dropdown-item:hover {
            background-color: #17a2b8;
            color: white !important;
        }

        .card {
            background-color: var(--card-bg);
            color: var(--text-color);
            transition: background-color 0.3s, color 0.3s;
        }
        .card-body {
            display: flex;
            flex-direction: row;
            gap: 20px;
            padding: 20px;
        }

        .card-content {
            flex: 0 0 auto;
            max-width: 310px;
        }

        .card-info {
            margin-top: 65px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content:space-around;
        }

        .card-text {
            margin-bottom: 20px;
        }

        .btn-container {
            text-align: right;
            margin-top: 20px;
        }
        .faq-header {
            background: #17a2b8;
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            /* darkmode */
            background: var(--header-gradient);
        }
        
        .accordion-button:not(.collapsed) {
            background-color: #e7f1ff;
            color: #0c63e4;
        }
        
        .requirement-card {
            border-radius: 8px;
            margin-bottom: 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            /* darkmode */
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
        }
        
        .requirement-card .card-header {
            background-color: #f8f9fa;
            border-bottom: 2px solid #e9ecef;
            padding: 1rem;
            /* darkmode */
            background-color: var(--card-bg);
        }
        
        .requirement-list {
            padding-left: 1.5rem;
        }
        
        .requirement-list li {
            margin-bottom: 0.5rem;
        }
        
        .sub-category {
            margin-left: 1.5rem;
            margin-top: 1rem;
        }
        
        .doc-link {
            color: #0d6efd;
            text-decoration: none;
        }
        
        .doc-link:hover {
            text-decoration: underline;
        }
        
        .dark-mode-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            background-color: var(--nav-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.4s;
        }

        .dark-mode-toggle i {
            color: white;
            font-size: 1.5rem;
        }
        
        .footer {
            color: var(--text);;
            text-align: center;
            font-size: 15px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .accordion iframe {
                height: 300px;
            }
            .card-body {
                flex-direction: column;
            }
            
            .card-content {
                max-width: 100%;
            }

            .btn-container {
                text-align: center;
            }
        }

        /* MOD*/
        :root {
            --bg-color: #ffffff;
            --text-color: #000000;
            --nav-bg: #17a2b8;
            --card-bg: #ffffff;
            --border-color: rgba(0,0,0,.15);
            --header-gradient: #17a2b8;
        }

        [data-theme="dark"] {
            --bg-color: #1a1a1a;
            --text-color: #ffffff;
            --nav-bg: #17a2b8;
            --card-bg: #2d2d2d;
            --border-color: rgba(0,0,0,.15);
            --header-gradient: #17a2b8;
        }
        </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <div class="d-flex align-items-center ml-3">
                <button class="dark-mode-toggle" onclick="toggleDarkMode()" title="Toggle Dark Mode">
                    <i class="fas fa-moon"></i>     
                </button>
                <a class="navbar-brand" href="http://127.0.0.1:8000/">
                    <img src="<?php echo e(asset('vendor/adminlte/dist/img/logobms.png')); ?>" alt="Logo" style="width: 48px; height: 48px;" class="mr-2">
                </a> 
                <h4 class="text-white mb-0 ms-2">
                    Dinas Kependudukan dan <br> Pencatatan Sipil
                </h4>
            </div>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo e(route('admin.login')); ?>" target="_blank">Admin</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('login')); ?>" target="_blank">User</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Register
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo e(route('register')); ?>" target="_blank">User</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="header">
        <marquee direction="left" bgcolor="grey" scrollamount="-5">
            Dapatkan informasi terkini dan pemberitahuan penting
        </marquee>
        <h1 class="text-center my-4">Selamat Datang di Portal Informasi Instansi Pemerintah</h1>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h2 class="text-center my-4">Berita Terbaru</h2>
        
        <!-- News Card 1 -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-content">
                    <h5 class="card-title">INFO TERKINI</h5>
                    <p>2 Maret 2024</p>
                    <img src="<?php echo e(asset('vendor/imghome/pegawai.jpg')); ?>" style="width: 300px; height: 300px;" class="card-img-top" alt="Pemberitahuan 1">
                </div>
                <div class="card-info">
                    <b>Adminduk Banyumas "Ora Nganti Sejam", Tidak Jadi Akan Diantar</b>
                    <p>
                        BANYUMAS – Jajaran pegawai Dinas Kependudukan dan Catatan Sipil Kabupaten Banyumas menyampaikan tekad di hadapan Bupati Banyumas Achmad Husein, bahwa mulai Sabtu (29/2/2020) pelayanan administrasi kependudukan selesai dalam waktu satu jam. Hal tersebut disampaikan usai Bupati Banyumas memberi motivasi dan arahan kepada seluruh pegawai Dindukcapil agar melayani masyarakat dengan maksimal.
                        Kepala Dindukcapil Wisnu Sujatmiko menjelaskan perubahan perilaku para pegawai Dindukcapil termasuk tata cara pelayanan, serta pembenahan sarana prasarana yang ada, sebagai respon atas ketidaksukaan bupati saat kunjungan beberapa waktu lalu. Saat itu pelayanan di kantornya terlihat ramai dan tidak teratur.
                    </p>   
                    <a href="https://jatengprov.go.id/beritadaerah/banyumas-terima-10-000-blangko-e-ktp-antrean-200-ribu/" target="_blank" class="btn btn-info">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- News Card 2 -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-content">
                    <h5 class="card-title">INFO TERKINI</h5>
                    <p>24 Maret 2024</p>
                    <img src="<?php echo e(asset('vendor/imghome/dirjen.jpg')); ?>" style="width: 300px; height: 300px;" class="card-img-top" alt="Pemberitahuan 2">
                </div>
                <div class="card-info">
                    <b>Dirjen Apresiasi Kinerja & Inovasi Dindukcapil Banyumas</b>
                    <p>
                        BANYUMAS, Joglo Jateng – Dinas Kependudukan dan Pencatatan Sipil (Dindukcapil) Kabupaten Banyumas mendapat apresiasi dari Direktur Jenderal Kependudukan dan Pencatatan Sipil (Dirjen Dukcapil) Teguh Setyabudi atas kinerja dan inovasi yang telah dilakukan. Hal itu karena Dindukcapil Banyumas mampu memenuhi target nasional untuk perekaman, pencetakan Kartu Tanda Penduduk Elektronik (e-KTP), dan penerbitan Kartu Identitas Anak (KIA).
                        "Kinerja Dindukcapil Banyumas sudah bagus, karena target nasional mampu dilampaui. Meskipun begitu, pelayanan harus terus ditingkatkan. Terlebih menjelang Pemilu 2024, Dindukcapil secara keseluruhan di semua wilayah, termasuk Banyumas, harus mampu menyajikan data yang valid," kata Dirjen Dukcapil, Jumat (17/3).
                    </p>   
                    <a href="https://jatengprov.go.id/beritadaerah/banyumas-terima-10-000-blangko-e-ktp-antrean-200-ribu/" target="_blank" class="btn btn-info">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

<!-- ALL PAGES FAQ -->

    <div class="faq-header text-center">
        <h1>Pertanyaan Umum (FAQ)</h1>
        <p class="lead">Informasi Layanan Kependudukan</p>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-15">
                <div class="alert alert-info mb-4" role="alert">
                    <h5 class="alert-heading">📢 Pemberitahuan Layanan Online</h5>
                    <p class="mb-0">Silakan gunakan layanan online kami di <a href="http://gratiskabeh.banyumaskab.go.id" class="alert-link" target="_blank">gratiskabeh.banyumaskab.go.id</a></p>
                </div>

                <!-- FAQ Accordion -->
                <div class="accordion" id="faqAccordion">
                    <!-- KK Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#kartuKeluarga">
                                Standar Pelayanan Penerbitan Kartu Keluarga
                            </button>
                        </h2>
                        <div id="kartuKeluarga" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">KK Baru untuk Penduduk WNI</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Baru Nikah/Kutipan akta perkawinan/perceraian</li>
                                            <li>Surat Keterangan pindah/datang bagi penduduk dalam wilayah NKRI</li>
                                            <li>Surat keterangan pindah luar negeri yang diterbitkan oleh Dindukcapil kab/kota bagi WNI yang datang dari luar wilayah NKRI karena pindah</li>
                                            <li>Surat keterangan pengganti penduduk rentan</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">KK Baru untuk Penduduk Orang Asing</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Izin tetap tinggal</li>
                                            <li>Buku nikah/kutipan akta perkawinan/perceraian</li>
                                            <li>Surat keterangan pindah/datang</li>
                                            <li>Dokumen perjalanan</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Perubahan Data (Peristiwa Kependudukan, Peristiwa Penting, Elemen Data)</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>KK Lama</li>
                                            <li>Surat keterangan/Bukti perubahan peristiwa kependudukan</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Hilang atau rusak</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Surat keterangan hilang dari kepolisian atau KK yang rusak</li>
                                            <li>KTP-el</li>
                                            <li>Rusak pernyataan penyebab terjadinya Hilang/Rusak</li>
                                            <li><strong>kartu izin tinggal tetap (BAGI WNA)</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KIA -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kia">
                               Penerbitan KIA (Kartu Identitas Anak)
                            </button>
                        </h2>
                        <div id="kia" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Bagi WNI usia kurang dari 5 Tahun</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>KK orangtua/wali</li>
                                            <li>FC akta kelahiran</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">WNI usia 5-17 Tahun</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>KK orangtua/wali</li>
                                            <li>FC akta kelahiran</li>
                                            <li>Kartu izin tinggal tetap</li>
                                            <li>Foto/pas foto anak berwarna UK:3x4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Anak WNA kurang dari 5 TAHUN (memiliki kartu izin tetap tinggal)</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Dokumen perjalanan dan kartu izin tinggal tetap</li>
                                            <li>Kartu Keluarga (KK) orang tua</li>
                                            <li>KTP-el orang tua</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Anak WNA 5-17 TAHUN kurang satu hari (memiliki kartu izin tetap tinggal)</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Dokumen perjalanan dan kartu izin tinggal tetap</li>
                                            <li>Kartu Keluarga (KK) orang tua</li>
                                            <li>KTP-el orang tua</li>
                                            <li>pas foto anak berwarna UK:2x3 | sebanyak 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">KIA Hilang bagi WNI dan WNA yang memiliki kartu izin tinggal tetap</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Surat permohonan penerbitan KIA</li>
                                            <li>surat keterangan hilang dari kepolisian</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">KIA Rusak bagi WNI dan WNA yang memiliki kartu izin tinggal tetap</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>KIA lama yang rusak</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                        <!-- KTP Section -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ktpEl">
                                Standar Pelayanan Penerbitan KTP Elektronik BARU
                            </button>
                        </h2>
                        <div id="ktpEl" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">KTP-el Baru</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>Telah berusia 17 tahun, sudah menikah, atau pernah kawin</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">KTP-el Baru WNA (mempunyai izin tinggal tetap)</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>dokumen perjalanan kartu izin tinggal tetap</li>
                                            <li>Telah berusia 17 tahun, sudah menikah, atau pernah kawin</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Penerbitan diluar domisili</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>tidak melakukan perubahan data</li>
                                            <li>dokumen perjalanan (bagi WNA)</li>
                                            <li>kartu izin tinggal tetap (bagi WNA)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KTP Pindah Datang -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ktpPindahDatang">
                                Standar Pelayanan Penerbitan KTP Elektronik (Pindah Datang - PERPANJANG)
                            </button>
                        </h2>
                        <div id="ktpPindahDatang" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Pindah datang penduduk WNI dalam wilayah NKRI dan WNI yang bertransmigrasi</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>Surat keterangna pindah dari Dindukcapil kab/kota atau daerah asal</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Pindah datang WNI yang datang dari luar wilayah NKRI</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>Surat keterangan pindah dari perwakilan RI</li>
                                            <li>SKPLN</li>
                                            <li>dokoumen perjalanan</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Pindah datang WNA yang memiliki izin tinggal tetap</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>surat keterangan pindah</li>
                                            <li>dokumen perjalanan</li>
                                            <li>kartu izin tinggal tetap</li>
                                            <li>KTP-el daerah asal</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Pindah datang WNI dan WNA yang memiliki izin tinggal tetap</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>ktp-el Lama</li>
                                            <li>kartu izin tinggal tetap</li>
                                            <li>surat keterangan bukti perubahan peristiwa kependudukan dan peristiwa penting</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Perpanjang bagi WNA yang memiliki izin tinggal tetap</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>ktp-el Lama</li>
                                            <li>kartu izin tinggal tetap</li>
                                            </ul>
                                    </div>
                                </div>
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Pindah datang WNI dan WNA yang memiliki izin tinggal tetap</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>ktp-el Lama</li>
                                            <li>kartu izin tinggal tetap</li>
                                            <li>surat keterangan bukti perubahan peristiwa kependudukan dan peristiwa penting</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KTP 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ktpHilang">
                               KTP-el (Hilang atau rusak bagi penduduk WNI atau WNA yang memiliki izin tinggal tetap)
                            </button>
                        </h2>
                        <div id="ktpHilang" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Hilang bagi WNI</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>Dokumen perjalanan RI</li>
                                            <li>Surat keterangan hilang dari kepolisian </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Hilang bagi WNA</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>Dokumen perjalanan</li>
                                            <li>Kartu izin tinggal tetap</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Rusak bagi WNI</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>KTP-el yang rusak</li>
                                            <li>Kartu Keluarga (KK)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Rusak bagi WNA</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Kartu Keluarga (KK)</li>
                                            <li>KTP-el yang rusak</li>
                                            <li>Dokumen perjalanan </li>
                                            <li>Kartu izin tetap tinggal </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- lokasi -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lokasi">
                              Lokasi Dindukcapil Dimana sih?
                            </button>
                        </h2>
                        <div id="lokasi" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <div class="requirement-card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Lokasi Dindukcapil</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="requirement-list">
                                            <li>Anda bisa langsung mengakses atau memeriksa lokasi melalui tautan berikut: 
                                                <a href="https://maps.app.goo.gl/pX1sMYrfJsNtATnN6" target="_blank" rel="noopener noreferrer"><strong>DINDUKCAPIL PURWOKERTO</strong></a>
                                                <br><br>
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1013024.5345178959!2d109.22884429806976!3d-7.339622132391487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e62c2310019%3A0xaf005e0fa2a22b6a!2sDepartment%20of%20Population%20and%20Civil%20Registration%20Banyumas!5e0!3m2!1sen!2sid!4v1731311441373!5m2!1sen!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="footer">
        <p>&copy;2024 Dinas Kependudukan dan Pencatatan Sipil.</p>
</div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
        function toggleDarkMode() {
            const body = document.documentElement;
            const currentTheme = body.getAttribute('data-theme');
            const icon = document.querySelector('.dark-mode-toggle i');
            
            if (currentTheme === 'dark') {
                body.removeAttribute('data-theme');
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
                localStorage.setItem('theme', 'light');
            } else {
                body.setAttribute('data-theme', 'dark');
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
                localStorage.setItem('theme', 'dark');
            }
        }

        window.onload = function() {
            const savedTheme = localStorage.getItem('theme');
            const icon = document.querySelector('.dark-mode-toggle i');
            
            if (savedTheme === 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            }
        }
    </script>

</html><?php /**PATH C:\laragon\www\Dindukcapil-2\resources\views/welcome.blade.php ENDPATH**/ ?>