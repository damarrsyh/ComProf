@extends('layout.main')

@section('pages')
  <section class="page-section-blog">
    <div class="container">
      <h2 class="textheader my-4 fw-bold rounded p-2 text-center" style="background: var(--bs-gray-200);">Frequently
        Asked
        Questions</h2>
      <div class="row">
        @foreach ($faq as $index => $faq)
          <div class="col-12 align-self-center" data-aos="fade-in" data-aos-duration="1000">
            <div class="accordion accordion-flush" id="faq">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed fw-bold fs-4 text-decoration-underline text-primary"
                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-{{ $index }}"
                    aria-expanded="false" aria-controls="flush-collapseOne">
                    {{ $faq->question }}
                  </button>
                </h2>
                <div id="collapseOne-{{ $index }}" class="accordion-collapse collapse"
                  aria-labelledby="flush-headingOne" data-bs-parent="#faq">
                  <div class="accordion-body">{!! $faq->answer !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
