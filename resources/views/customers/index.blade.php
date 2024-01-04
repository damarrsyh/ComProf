@extends('layout.main')

@section('pages')
  <section class="page-section mt-5">
    <div class="container" data-aos="fade-in" data-aos-duration="1000">
      <h2 class="textheader my-4 fw-bold rounded p-2" style="background: var(--bs-gray-200);">OUR CUSTOMERS</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($customers as $customers)
          <div class="col" data-aos="fade-in" data-aos-duration="1000">
            <div class="card h-100" style="background: var(--bs-gray-200);">
              <img src="{{ asset("storage/$customers->image") }}" class="card-img-top" alt="...">
              <div class="card-body px-3">
                <h4 class="card-title pb-2">{{ $customers->name }}</h4>
                <ul class="list-group list-group-flush pb-3">
                  <li class="list-group-item">{{ $customers->branch }}</li>
                  <li class="list-group-item">{{ $customers->business }}</li>
                  <li class="list-group-item">{{ $customers->financing }}</li>
                </ul>
                <a href="/customers/indexd/{{ $customers->id }}" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        @endforeach
        {{-- <div class="col rounded" data-aos="fade-in" data-aos-duration="1000">
          <div class="card h-100" style="background: var(--bs-gray-200);">
            <img src="/assets/media/img/portfolio/fullsize/1.jpg" class="card-img-top" alt="...">
            <div class="card-body px-3">
              <h4 class="card-title pb-2">Nama Anggota</h4>
              <ul class="list-group list-group-flush pb-3">
                <li class="list-group-item">Anggota Cabang</li>
                <li class="list-group-item">Usaha Anggota</li>
                <li class="list-group-item">Pembiayaan Anggota</li>
              </ul>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col rounded" data-aos="fade-in" data-aos-duration="1000">
          <div class="card h-100" style="background: var(--bs-gray-200);">
            <img src="/assets/media/img/portfolio/fullsize/1.jpg" class="card-img-top" alt="...">
            <div class="card-body px-3">
              <h4 class="card-title pb-2">Nama Anggota</h4>
              <ul class="list-group list-group-flush pb-3">
                <li class="list-group-item">Anggota Cabang</li>
                <li class="list-group-item">Usaha Anggota</li>
                <li class="list-group-item">Pembiayaan Anggota</li>
              </ul>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col rounded" data-aos="fade-in" data-aos-duration="1000">
          <div class="card h-100" style="background: var(--bs-gray-200);">
            <img src="/assets/media/img/portfolio/fullsize/1.jpg" class="card-img-top" alt="...">
            <div class="card-body px-3">
              <h4 class="card-title pb-2">Nama Anggota</h4>
              <ul class="list-group list-group-flush pb-3">
                <li class="list-group-item">Anggota Cabang</li>
                <li class="list-group-item">Usaha Anggota</li>
                <li class="list-group-item">Pembiayaan Anggota</li>
              </ul>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
@endsection
