<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile Mitra Usaha Mandiri</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/media/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
                <li class="nav-item mx-2"><a class="nav-link fs-5" href="/dashboard/index">Dashboard</a>
                </li>
                @endif
                <li class="nav-item mx-2"><a class="nav-link fs-5" href="/">Homepage</a></li>
                <li class="nav-item mx-2 dropdown">
                    <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item fs-5" href="/team/index">Our Team</a></li>
                        <li><a class="dropdown-item fs-5" href="/customers/index">Our Customers</a></li>
                        <li><a class="dropdown-item fs-5" href="/blog/index">Blog</a></li>
                    </ul>
                </li>
                @if (session('role') == 'admin')
                <li class="nav-item mx-2"><a class="nav-link fs-5" href="/logout">Logout</a></li>
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

    {{-- Footer --}}
    <footer class="bg-dark py-5">
        <div class="container px-4 px-lg-5"> 
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
    $(document).ready(function(){
        $('.your-class').slick({
        setting-name: setting-value
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
