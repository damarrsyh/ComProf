<section class="page-section" id="history">
    <div class="container ms-auto" data-aos="fade-in" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-8 py-5 px-5 mb-5" style="border-radius: 15px; background: var(--bs-gray-100);">
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
                        <div class="timeline-panel" data-aos="fade-in" data-aos-duration="1100">
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
                        <div class="timeline-panel" data-aos="fade-in" data-aos-duration="1200">
                            <div class="timeline-heading">
                                <h4>Lokasi</h4>
                                <h4 class="subheading">Mitra Usaha Mandiri</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="desc text-muted">Lokasi pertama di Kabupaten Bekasi (Propinsi Jawa Barat), Kecamatan Babelan, 
                                    Desa Muara Bakti. Secara bertahap program tersebut berkembang dibeberapa lokasi, yaitu Desa Harapan 
                                    Jaya, Desa Taruma Jaya di Kabupaten Bekasi, kemudian di Kabupaten Indramayu, Kabupaten Subang, 
                                    Kabupaten Karawang (Jatiragas) di Propinsi Jawa Barat. Kemudian bergerak ke Propinsi Jawa Tengah 
                                    : Kabupaten Rembang-Desa Sulang dan Kabupaten Pati, serta di Kabupaten Klaten, berjumlah 9 (Sembilan) 
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
                        <div class="timeline-panel" data-aos="fade-in" data-aos-duration="1300">
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
                        <div class="timeline-panel" data-aos="fade-in" data-aos-duration="1400">
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
                        <div class="timeline-panel" data-aos="fade-in" data-aos-duration="1500">
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
            <div class="col-md-4" id="news">
                 @foreach ($news as $news)    
                <div class="card artikel pb-3 mb-5" data-aos="fade-in" data-aos-duration="2200">
                <img src="{{ asset("storage/$news->image") }}" class="card-img-top" alt="..." style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body px-3">
                        <h5 class="card-title fw-bold text-uppercase" style="letter-spacing: 1px;">{{ $news->title }}</h5>
                        <p class="card-text desc">{!! Str::limit($news->description, 150, '...') !!}</p>
                        <a type="button" class="btn btn-primary" href="/news/index/{{ $news->id }}">
                            <div class="wrapper">
                                <span>More</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
