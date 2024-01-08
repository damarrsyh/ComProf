<section class="page-section-header">
  <header class="masthead" id="home">
    <div class="container-fluid ms-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
<<<<<<< HEAD
        <div class="carousel-inner carousel-fade">
=======
        <div class="carousel-inner">
>>>>>>> 7851e32ad6d737ceb3c2a197877618a1a4113951
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
</section>
