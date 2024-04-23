@extends('layout.main')

@section('pages')
  <section class="page-section mt-5">
    <div class="container" data-aos="fade-in" data-aos-duration="1000">
      <h2 class="textheader my-4 fw-bold rounded p-3" style="background: var(--bs-gray-200);">OUR CUSTOMERS</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($customers as $customers)
          <div class="col" data-aos="fade-in" data-aos-duration="1000">
            <div class="card h-100" style="background: var(--bs-gray-200);">
              <img src="{{ asset("storage/$customers->image") }}" class="card-img-top" alt="...">
              <div class="text-on-image-left rounded py-2 px-3">{{ $customers->branch }}</div>
              <div class="card-body hov px-3">
                <h4 class="card-title pb-2">{{ $customers->name }}</h4>
                <ul class="list-group list-group-flush pb-3">
                  <li class="list-group-item">{{ $customers->business }}</li>
                  @foreach (explode(',', $customers->financing) as $financing)
                    <li class="list-group-item">Pembiayaan Ke {{ $loop->iteration }} : Rp. {{ $financing }}</li>
                  @endforeach
                  {{-- <li class="list-group-item">Rp. {{ $customers->financing }}</li> --}}
                </ul>
                <a class="btn btn-primary hov-1 text-white" data-bs-toggle="modal"
                  data-bs-target="{{ $customers->id }}">Read More</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- <!--MODAL-->
  <div class="modal fade" id="{{ $customers->id }}" tabindex="-1" aria-labelledby="ModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-light" id="ModalLabel1">{{ $customers->name }} - {{ $customers->branch }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>{!! $customers->description !!}</p>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div> --}}
@endsection
