@section('page')
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/"><img src="/assets/media/img/mum/navbar-logo-ww.png" height="70px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav menu ms-auto">
                @if (session('role') == 'admin')
                    <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="/dashboard/index">Dashboard</a></li>
                @endif
                <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#gallery">Gallery</a></li>
                @if (!Request::is("news/index"))
                <li class="nav-item">
                    @if (!Request::is("article/index"))                    
                    <a class="nav-link fw-bold fs-5 text-uppercase" href="#services">Services</a>
                    @endif
                </li>
                @endif
                @if (!Request::is("news/index"))
                <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#services">Article</a></li>
                @endif
                @if (!Request::is("news/index"))
                <li class="nav-item">
                    @if (!Request::is("article/index"))
                    <a class="nav-link fw-bold fs-5 text-uppercase" href="#about">About</a>
                    @endif
                </li>
                @endif
                @if (!Request::is("article/index"))
                <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#news">News</a></li>
                @endif
                <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#contact">Contact</a></li>
            </ul>
            <ul class="navbar-nav menu ms-auto">
                @auth
                <div class="btn-group">
                    <button type="button" class="btn btn-dark fw-bold">{{ auth()->user()->username }}</button>
                    <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </div>
                @else
                <button type="button" class="btn btn-dark fw-bold">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link ms-auto fw-bold fs-5 px-3" href="/sign_in">Sign In</a></li>
                    </ul>
                </button>
                @endauth
            </ul>
        </div>
    </div>
@endsection
