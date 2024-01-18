<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KSPMUM - Finance For The Poor</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/media/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    {{-- <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
    rel="stylesheet" type="text/css" /> --}}
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@300&display=swap"
      rel="stylesheet">
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/a2c4039640.js" crossorigin="anonymous"></script>
    <!--animate aos css-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Core theme JS-->
    <script src="/assets/js/scripts.js"></script>
    <!--Jquery-->
    <script src="/assets/js/jquery-3.6.1.min.js"></script>
  </head>

  <body>

    <!--Menu Bar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-1" id="mainNav">
      <div class="container-fluid mx-5 px-4 px-lg-5">
        <a class="navbar-brand" href="/"><img src="/assets/media/img/mum/lognav.png" height="80px"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation"><i class="fa-solid fa-bars text-light"></i></button>
        <div class="collapse navbar-collapse p-2" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            @if (session('role') == 'admin')
              <li class="nav-item mx-2"><a class="nav-link fs-5" href="/dashboard/index">Dashboard</a>
              </li>
            @endif
            <li class="nav-item mx-2"><a class="nav-link fs-5" href="/blog/index">Blog</a>
            <li class="nav-item mx-2 dropdown">
              <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                About Us
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item fs-5" href="/team/index">Our Team</a></li>
                <li><a class="dropdown-item fs-5" href="/customers/index">Our Customers</a></li>
                <li><a class="dropdown-item fs-5" href="/">Our Profile</a></li>
              </ul>
            </li>
            <li class="nav-item mx-2"><a class="nav-link fs-5" href="/faq/index">FAQ</a>
              @if (session('role') == 'admin')
            <li class="nav-item mx-2"><a class="nav-link fs-5" href="/logout">Logout</a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    @yield('pages')

    <section class="page-section bg-primary">
      <div class="container" data-aos="fade-in" data-aos-duration="1000">
        <h2 class="text-center text-white textheader mt-0 fw-bold">CONTACT AND BRANCH</h2>
        <hr class="divider bg-white" />
        <br>
        <div class="row mx-6">
          <div class="col-md-4">
            <h3 class="mx-5 text-center text-white fs-2">
              Complaint Services :
            </h3>
            <br>
            <div class="row">
              <div class="col">
                <ul class="text-white">
                  <li class="my-4" style="list-style: none">
                    <i class="fa-solid fa-location-dot mx-2 fs-2"></i>
                    <span class="fs-5 mx-4">Kalibata Utara V, No 23A</span>
                  </li>
                  <li class="my-4" style="list-style: none">
                    <i class="fa-solid fa-phone mx-2 fs-2"></i>
                    <span class="fs-5 mx-3">021 21279772</span>
                  </li>
                  <li class="my-4" style="list-style: none">
                    <i class="fa-solid fa-envelope mx-2 fs-2"></i>
                    <span class="fs-5 mx-3">headoffice.kopmum@gmail.com</span>
                  </li>
                  <li class="my-4" style="list-style: none">
                    <i class="fa-regular fa-calendar-days mx-2 fs-2"></i>
                    <span class="fs-5 mx-3">Senin - Jumat</span>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="text-white">
                  <li class="my-4" style="list-style: none">
                    <i class="fa-solid fa-clock mx-2 fs-2"></i>
                    <span class="fs-5 mx-3">08:00 WIB - 16:00 WIB</span>
                  </li>
                  <li class="my-4" style="list-style: none">
                    <i class="fa-brands fa-instagram mx-2 fs-2"></i>
                    <span class="fs-5 mx-3">kspmumpusat</span>
                  </li>
                  <li class="my-4" style="list-style: none">
                    <i class="fa-brands fa-facebook mx-2 fs-2"></i>
                    <span class="fs-5 mx-3">Ksp Mitra Usaha Mandiri</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <h3 class="mx-5 text-center text-white fs-2">
              Our Branch :
            </h3>
            <br>
            <div class="row">
              <div class="col">
                <ul class="text-white">
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Plered</span>
                    <br>
                    <span class="subheading fs-5">Perumahan Griya Plered Indah Blok 1 No 26 Sindangsari, Plered,
                      Purwakarta</span>
                  </li>
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Karawang</span>
                    <br>
                    <span class="subheading fs-5">Perum Green Village blok C7 no 9 Pangulah baru, Kec. Kota Baru, Kab.
                      Karawang</span>
                  </li>
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Subang</span>
                    <br>
                    <span class="subheading fs-5"></span>
                  </li>
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Indramayu</span>
                    <br>
                    <span class="subheading fs-5">Perumahan Pring Gading Blok G2 Desa Sukamelang, Kec. Kroya</span>
                  </li>
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Jatirogo</span>
                    <br>
                    <span class="subheading fs-5">Perum Griya Mulya Regency Ds. Wotsogo Kec. Jatirogo Kab. Tuban</span>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="text-white">
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Rembang</span>
                    <br>
                    <span class="subheading fs-5">Perum Graha Kartini F31 Desa. Kabongankidul, Kec. Rembang, Kab.
                      Rembang</span>
                  </li>
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Blora</span>
                    <br>
                    <span class="subheading fs-5">Perum Griya Utama Permai K14 RT/05 RW/05 Kel/Desa. Kabongankidul,
                      Kec. Rembang, Kab. Rembang</span>
                  </li>
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Pati</span>
                    <br>
                    <span class="subheading fs-5">Ds. Jembangan RT/07 RW/02 Kec. Bantangan, Kab. Pati</span>
                  </li>
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Klaten</span>
                    <br>
                    <span class="subheading fs-5">Ds, Sewan 023/077, Mayungan, Ngawen, Klaten</span>
                  </li>
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Boyolali</span>
                    <br>
                    <span class="subheading fs-5">JL. Pramuka, Ngaliyani RT/06 RW/02 Pelem, Simo, Boyolali</span>
                  </li>
                  <li class="my-5" style="list-style: none">
                    <i class="fa-solid fa-location-dot fs-2"></i>
                    <span class="fw-bold fs-4 mx-2 p-2 rounded">Purbalingga</span>
                    <br>
                    <span class="subheading fs-5">Gran Hayata, Dusun 2, karangsentul Kec. Padamara, Kab. Purbalingga
                      Jawa Tengah 53372</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="py-5">
      <div class="px-4 px-lg-5">
        <a href="/sign_in" style="text-decoration: none">
          <div class="small text-center text-muted fw-bold">Koperasi Mitra Usaha Mandiri</div>
        </a>
      </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

    <!-- Slick -->
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.your-class').slick({
          setting - name: setting - value
        });
      });
    </script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!--aos css-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
      const changeBackground = () => {
        $('.change-background').click()
      }
    </script>
  </body>

</html>
