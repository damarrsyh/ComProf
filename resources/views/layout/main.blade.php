<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Mitra Usaha Mandiri</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="/assets/media/favicon.ico" />
<!-- Bootstrap Icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
<!-- Google fonts-->
{{-- <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
    rel="stylesheet" type="text/css" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
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
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
</head>

<body>
    <!--Menu Bar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-1" id="mainNav">
        <div class="container-fluid mx-5 px-4 px-lg-5">
        <a class="navbar-brand" href="/"><img src="/assets/media/img/mum/lognav.png" height="85px"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><i class="fa-solid fa-bars text-light"></i></button>
            <div class="collapse navbar-collapse p-2" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    @if (session('role') == 'admin')
                    <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="/dashboard/index">Dashboard</a>
                    </li>
                    @endif
                    <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#portfolio">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#article">Article</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#news">News</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#contact">Contact</a></li>
                    @if (session('role') == 'admin')
                    <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="/logout">Logout</a></li>
                @endif
                </ul>
            </div>
        </div>
    </nav>

    {{-- Header --}}
    <header class="masthead" id="home">
        <div class="container-fluid ms-auto p-0">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                @foreach ($headers as $key => $header)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ">
                    <img src="{{ asset('storage/' . $header->image) }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Content -->
    
    <!-- Summary -->

    <section class="page-section">
        <div class="container-fluid ms-auto">
            <div class="row g-0" data-aos="fade-in" data-aos-duration="1000">
                @foreach ($summaries as $summary)
                <div class="col hov my-3 mx-3 text-center bg-light" style="border-radius: 15px;">
                    <div class="my-5 p-3 hov-1">
                        <div class="mb-2">
                            <img src="/assets/media/img/{{ $summary->image }}" alt="" width="100px">
                        </div>
                        <hr class="divider">
                        <h4 class="mb-2 fw-bold">{{ $summary->jumlah }}</h3>
                        <h3 class="mb-2 fw-bold">{{ $summary->nama }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--End summary-->

    <!-- Gallery -->
    <section class="page-section" id="portfolio">
        <div class="container-fluid ms-auto" data-aos="fade-in" data-aos-duration="1000">
            <div class="row g-0">
                @foreach ($galleries as $key => $gallery)
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('storage/' . $gallery->image) }}"
                    title="{{ $gallery->description }}">
                    <img class="img-fluid" src="{{ asset('storage/' . $gallery->image) }}" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">{{ $gallery->title }}</div>
                        <div class="project-name">{{ $gallery->description }}</div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--End Gallery-->

    @yield('pages')

    <!-- Mitra Kerja -->
    <div class="container align-items-center my-5 py-5" data-aos="fade-in" data-aos-duration="1000">
        <div class="row text-center my-6">
            <div class="col-3 my-3 text-center px-3 py-3" style="border-radius: 15px">
                <img class="img-fluid" width=200rem src="/assets/media/img/logos/bprs/bprs_amwalul_hasanah.png" alt="..."
                aria-label="Hasanah Logo"/>
            </div>
            <div class="col-3 my-3 text-center px-3 py-3" style="border-radius: 15px">
                <img class="img-fluid" width=300rem src="/assets/media/img/logos/bprs/bprs_buana_mitra.png" alt="..."
                aria-label="Buana Mitra Logo" />
            </div>
            <div class="col-3 my-3 text-center px-3 py-3" style="border-radius: 15px">
                <img class="img-fluid" width=200rem src="/assets/media/img/logos/bprs/bprs_botani.png" alt="..."
                aria-label="Botani Logo" />
            </div>
            <div class="col-3 my-3 text-center px-3 py-3" style="border-radius: 15px">
                <img class="img-fluid" width=150rem src="/assets/media/img/logos/bprs/bprs_mustindo.png" alt="..."
                aria-label="Mustindo Logo"/>
            </div>
        </div>
        <div class="row text-center my-6">
            <div class="col-3 my-3 text-center px-3 py-3" style="border-radius: 15px">
                <img class="img-fluid" width="150rem" src="/assets/media/img/logos/other/Danamon.svg" alt="..."
                aria-label="Danamon Logo" />
            </div>
            <div class="col-3 my-3 text-center px-3 py-3" style="border-radius: 15px">
                <img class="img-fluid" width="150rem" src="/assets/media/img/logos/other/prudential.svg" alt="..."
                aria-label="Prudential Logo"/>
            </div>
            <div class="col-3 my-3 text-center px-3 py-3" style="border-radius: 15px">
                <img class="img-fluid" width="200rem" src="/assets/media/img/logos/other/grameentrust.jpg" alt="..."
                aria-label="grameentrust Logo" />
            </div>
            <div class="col-3 my-3 text-center px-3 py-3" style="border-radius: 15px">
                <img class="img-fluid" width="200rem" src="/assets/media/img/logos/other/mercy.png" alt="..."
                aria-label="Mercy Logo" />
            </div>
        </div>
    </div>

    <!-- Contact-->
    <div class="container my-5 py-5" id="contact" data-aos="fade-in" data-aos-duration="1000">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0 textheader fw-bold">CONTACT</h2>
                <hr class="divider" />
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <!-- Name input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                    data-sb-validations="required" />
                    <label for="name">Full name</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>
                <!-- Email address input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" placeholder="name@example.com"
                    data-sb-validations="required,email" />
                    <label for="email">Email address</label>
                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                </div>
                <!-- Phone number input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                    data-sb-validations="required" />
                    <label for="phone">Phone number</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                </div>
                <!-- Message input-->
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                    style="height: 10rem" data-sb-validations="required"></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a
                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="d-grid">
                    <button class="btn btn btn-xl disabled btn-primary" id="submitButton"
                    type="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>(021) 212 796 62</div>
            </div>
        </div>
    </div>

    <!--End Content-->

    <footer class="bg-dark py-5">
        <div class="px-4 px-lg-5">
        <a href="/sign_in" style="text-decoration: none">
            <div class="small text-center text-muted">Copyright &copy; 2022 - Mitra Usaha Mandiri</div>
        </a>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="/assets/js/scripts.js"></script>
    <!--Jquery-->
    <script src="/assets/js/jquery-3.6.1.min.js"></script>
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
