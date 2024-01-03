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