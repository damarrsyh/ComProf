@extends('layout.main')

@section('pages')
  <section class="page-section">
    <div class="container my-5" id="services">
      <div class="row">
        <div class="col-md-8 align-self-center" style="border-radius: 15px; background: var(--bs-gray-100);">
          <div class="card mx-5 my-5">
            <div class="card-header">
              <img src="/assets/media/img/mum/logo.png" width="30px" alt="">
              <span class="fs-5">Mitra Usaha Mandiri</span>
            </div>
            <div class="card-body">
              <h2 class="card-title text-uppercase my-3" style="letter-spacing: 2px">
                <strong>{{ $news->title }}</strong>
              </h2>
              <img src="{{ asset('storage/' . $news->image) }}" class="card-img-top" alt="...">
              <p class="card-text text-justify">{!! $news->description !!}</p>
            </div>
            <div class="card-footer text-muted">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="row">
            @foreach ($article as $article)
              <div class="col">
                <div class="card">
                  <img src="{{ asset("storage/$article->image") }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title fw-bold text-uppercase" style="letter-spacing: 1px;">{{ $article->title }}</h5>
                    <p class="card-text">{!! Str::limit($article->description) !!}</p>
                    <a type="button" class="btn btn-primary" href="/article/index/{{ $article->id }}">
                      <div class="wrapper">
                        <span>More</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
