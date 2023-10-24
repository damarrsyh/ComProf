@extends('layout.main')

@section('page')
    <!-- Services-->
    <div class="container px-4 px-lg-5 py-5 my-5" id="services">
        <div class="row g-0">
            <div class="col-6 col-md-9 py-5" style="border-radius: 15px; background: var(--bs-gray-100);">
                <h2 class="text-center textheader fw-bold" data-aos="fade-in" data-aos-duration="2100">OUR SERVICES PRODUCTS</h2>
                <hr class="divider"  data-aos="fade-in" data-aos-duration="2200">
                <div class="row mt-5 justify-content-center">
                    <div class="col-6 text-center hov">
                        <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal1">
                            <div class="mb-2"><i class="fa-solid fa-hand-holding-dollar fs-1"  data-aos="fade-in" data-aos-duration="2500"></i></div>
                            <hr class="divider" data-aos="fade-in" data-aos-duration="2600">
                            <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="2700">PEMBIAYAAN SISTEM GRAMEEN BANK</h3>
                        </div>
                    </div>
                    <div class="col-6 text-center hov">
                        <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal2">
                            <div class="mb-2" data-aos="fade-in" data-aos-duration="2300"><i class="fa-solid fa-hand-holding-dollar fs-1"></i></div>
                            <hr class="divider" data-aos="fade-in" data-aos-duration="2400">
                            <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="2500">PEMBIAYAAN KHUSUS</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-6 text-center hov">
                        <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal3">
                            <div class="mb-2"><i class="fa-solid fa-coins fs-1"  data-aos="fade-in" data-aos-duration="2500"></i></div>
                            <hr class="divider" data-aos="fade-in" data-aos-duration="2600">
                            <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="2700">SIMPANAN BERJANGKA (SIMBA)</h3>
                        </div>
                    </div>
                    <div class="col-6 text-center hov">
                        <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal4">
                            <div class="mb-2" data-aos="fade-in" data-aos-duration="2300"><i class="fa-solid fa-coins fs-1"></i></div>
                            <hr class="divider" data-aos="fade-in" data-aos-duration="2400">
                            <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="2500">SIMPANAN SUKARELA</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-6 text-center hov">
                        <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal5">
                            <div class="mb-2" data-aos="fade-in" data-aos-duration="2300"><i class="fa-solid fa-person-dress fs-1"></i></div>
                            <hr class="divider" data-aos="fade-in" data-aos-duration="2400">
                            <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="2500">PELAYANAN KESEHATAN UNTUK PEREMPUAN</h3>
                        </div>
                    </div>
                    <div class="col-6 text-center hov">
                        <div class="mt-5 hov-1" data-bs-toggle="modal" data-bs-target="#Modal6">
                            <div class="mb-2"><i class="fa-solid fa-person-dress fs-1"  data-aos="fade-in" data-aos-duration="2500"></i></div>
                            <hr class="divider" data-aos="fade-in" data-aos-duration="2600">
                            <h3 class="h4 mb-2 fw-bold px-6" data-aos="fade-in" data-aos-duration="2700">PELAYANAN PENGEMBANGAN WIRAUSAHA PEREMPUAN</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3" id="services">
                <div class="card artikel float-end pb-3 mb-5" style="width: 18rem;" data-aos="fade-left" data-aos-duration="2200">
                <img src="assets/media/img/artikel/1.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body px-3">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-primary" href="/article/index">
                            <div class="wrapper">
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card artikel float-end pb-3 mb-5" style="width: 18rem;" data-aos="fade-left" data-aos-duration="2200">
                    <img src="assets/media/img/artikel/2.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body px-3">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-primary" href="/article/index">
                            <div class="wrapper">
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About-->
    <div class="container px-4 px-lg-5 py-5 my-5" id="about" style="border-radius: 15px; background: var(--bs-gray-100);">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col text-center">
                <div class="card-header">
                    <div class="text-center">
                        <h2 class="section-heading textheader fw-bold" data-aos="fade-in" data-aos-duration="2000">
                            V & M
                            <br>
                            COMPANY
                        </h2>
                        <hr class="divider"  data-aos="fade-in" data-aos-duration="2000">
                    </div>
                </div>
                <div class="card-group">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-1 fw-bold"  data-aos="fade-in" data-aos-duration="2300"> VISI </h5>
                            <p class="card-text fs-3 fw-bold py-3 px-2 text-muted"  data-aos="fade-in" data-aos-duration="2400">Terwujudnya lembaga ekonomi yang berkeadilan, demokratis dan berwawasan lingkungan yang dapat diakses dan dikontrol oleh masyarakat miskin
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
            <div class="col">
                <div class="card h-100">
                    <img src="assets/media/img/misi/1.jpg" class="card-img-top" alt="..." data-aos="fade-in" data-aos-duration="2400">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-1 fw-bold py-1 px-3" data-aos="fade-in" data-aos-duration="2600"> MISI </h5>
                        <p class="card-text fs-3 fw-bold py-3 text-muted" data-aos="fade-in" data-aos-duration="2600">Memberikan pelayanan keuangan mikro kepada kelompok perempuan miskin.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/assets/media/img/misi/2.jpg" class="card-img-top" alt="..." data-aos="fade-in" data-aos-duration="2400">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-1 fw-bold py-1 px-3" data-aos="fade-in" data-aos-duration="2600"> MISI </h5>
                        <p class="card-text fs-3 fw-bold py-3 text-muted" data-aos="fade-in" data-aos-duration="2600">Meningkatkan kapasitas dan kesejahteraan karyawan.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/assets/media/img/misi/3.jpg" class="card-img-top" alt="..." data-aos="fade-in" data-aos-duration="2400">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-1 fw-bold py-1 px-3" data-aos="fade-in" data-aos-duration="2600"> MISI </h5>
                        <p class="card-text fs-3 fw-bold py-3 text-muted" data-aos="fade-in" data-aos-duration="2600">Memberdayakan masyarakat miskin agar memiliki akses  terhadap sumberdaya ekonomi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--History-->
    <div class="container px-4 px-lg-5 py-5 my-5" data-aos="fade-in" data-aos-duration="2000" id="news">
        <div class="row">
            <div class="col-md-8 py-5 px-5" style="border-radius: 15px; background: var(--bs-gray-100);">
                <div class="text-center pb-5">
                    <h2 class="section-heading textheader fw-bold">MILESTONES</h2>
                    <hr class="divider">
                </div>
                <ul class="timeline">
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>1998
                                <br>
                                Awal
                            </h4>
                        </div>
                        <div class="timeline-panel" data-aos="fade-in" data-aos-duration="2100">
                            <div class="timeline-heading">
                                <h4>Awal Pembentukan</h4>
                                <h4 class="subheading">Mitra Usaha Mandiri</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="desc text-muted">Tahun 1998 Yayasan Mitra Usaha (YMU) mulai mengembangkan sebuah program 
                                    untuk melayani Keluarga Miskin dengan mereplikasi model Grameen Bank.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Lokasi
                                <br>
                                Pertama
                                <br>
                                MUM
                            </h4>
                        </div>
                        <div class="timeline-panel" data-aos="fade-in" data-aos-duration="2200">
                            <div class="timeline-heading">
                                <h4>Lokasi</h4>
                                <h4 class="subheading">Mitra Usaha Mandiri</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="desc text-muted">Lokasi pertama di Kabupaten Bekasi (Propinsi Jawa Barat), Kecamatan Babelan, 
                                    Desa Muara Bakti. Secara bertahap program tersebut berkembang dibeberapa lokasi, yaitu Desa Harapan 
                                    Jaya, Desa Taruma Jaya di Kabupaten Bekasi, kemudian di Kabupaten Indramayu, Kabupaten Subang, 
                                    Kabupaten Karawang (Jatiragas) di Propinsi Jawa Barat. Kemudian bergerak ke Propinsi Jawa Tengah 
                                    : Kabupaten Rembang – Desa Sulang dan Kabupaten Pati, serta di Kabupaten Klaten, berjumlah 9 (Sembilan) 
                                    lokasi.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>2001
                                <br>
                                Lembaga
                            </h4>
                        </div>
                        <div class="timeline-panel" data-aos="fade-in" data-aos-duration="2300">
                            <div class="timeline-heading">
                                <h4>Lembaga Otonom</h4>
                                <h4 class="subheading">Mitra Usaha Mandiri</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="desc text-muted">Setelah tiga tahun dipandang perlu program tersebut menjadi lembaga otonom 
                                    yang terpisah dari YMU dengan Badan Hukum Koperasi ( oleh Kementrian Koperasi RI pada 1 Mei 2001 
                                    No. Badan Hukum : 92/BH/MENEG.I/V/2001).</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>2011
                                <br>
                                Evaluasi
                            </h4>
                        </div>
                        <div class="timeline-panel" data-aos="fade-in" data-aos-duration="2400">
                            <div class="timeline-heading">
                                <h4>Evaluasi</h4>
                                <h4 class="subheading">Mitra Usaha Mandiri</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="desc text-muted">KOPMUM pada tahun 2011 pernah memiliki  9 cabang.   Dalam perkembangnya setelah 
                                    dilakukan evaluasi dari segi ketepatan lokasi dan efektifitas serta efesiensi maka dilakukan penggabungan 
                                    dan penutupan sehingga menjadi 6 cabang yang selektif.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>2017
                                <br>
                                Cabang
                            </h4>
                        </div>
                        <div class="timeline-panel" data-aos="fade-in" data-aos-duration="2500">
                            <div class="timeline-heading">
                                <h4>Cabang</h4>
                                <h4 class="subheading">Mitra Usaha Mandiri</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="desc text-muted">Sampai dengan tahun 2017 KOPMUM memiliki Cabang di Jawa Barat: Indramayu, Subang dan Karawang. 
                                    Di Jawa Tengah:  Rembang, Pati dan Klaten.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 float-end" id="news">
                <div class="card artikel float-end pb-3 mb-5" style="width: 18rem;" data-aos="fade-left" data-aos-duration="2100">
                    <img src="/assets/media/img/artikel/3.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body px-3">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-primary" href="/news/index">
                            <div class="wrapper">
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card artikel float-end pb-3 mb-5" style="width: 18rem;" data-aos="fade-left" data-aos-duration="2100">
                    <img src="/assets/media/img/artikel/4.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body px-3">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-primary" href="/news/index">
                            <div class="wrapper">
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card artikel float-end pb-3 mb-5" style="width: 18rem;" data-aos="fade-left" data-aos-duration="2100">
                    <img src="/assets/media/img/artikel/5.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body px-3">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-primary" href="/news/index">
                            <div class="wrapper">
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card artikel float-end pb-3 mb-5" style="width: 18rem;" data-aos="fade-left" data-aos-duration="2100">
                    <img src="/assets/media/img/artikel/6.jpg" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body px-3">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-primary" href="/news//index">
                            <div class="wrapper">
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Structure-->
    <div class="container px-4 px-lg-5 py-5 my-5" data-aos="fade-up" data-aos-duration="2500" style=" background: #fff;">
        <h2 class="text-center textheader mt-0 fw-bold">STRUCTURE ORGANIZATION</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col text-center">
                <div class="card-group">
                    <div class="card">
                        <img src="/assets/media/img/structure/1.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-light" id="ModalLabel1">Pembiayaan Sistem Grameen Bank</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <p>Metode Grameen Bank merupakan program penyaluran kredit mikro yang ditujukan bagi golongan masyarakat miskin di pedesaan.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-light" id="ModalLabel2">Pembiayaan Khusus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="ModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-light" id="ModalLabel3">Simpanan Berjangka(SIMBA)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <p> Simpanan Berjangka adalah simpanan di koperasi yang penyetorannya dilakukan sekali dan penarikannya hanya dapat dilakukan pada waktu tertentu menurut perjanjian antara penyimpan dengan koperasi yang bersangkutan.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="ModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-light" id="ModalLabel4">Simpanan Sukarela</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <p>Simpanan sukarela adalah iuran yang dibayar oleh anggota koperasi secara sukarela atau tidak ada paksaan dimana besarnya iuran sesuai dengan kemampuan masing-masing anggota. Simpanan ini bisa diambil sewaktu-waktu sesuai dengan jumlah simpanan anggota yang bersangkutan.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="ModalLabel5" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-light" id="ModalLabel5">Pelayanan Kesehatan Untuk Perempuan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="ModalLabel6" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-light" id="ModalLabel6">Pelayanan Pengembangan Wirausaha Perempuan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection