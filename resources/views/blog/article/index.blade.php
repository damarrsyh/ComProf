@extends('layout.main')
@section('pages')
  <!--Section Article-->
  <section class="page-section">
    <div class="container my-5" id="services">
      <h2 class="textheader my-4 fw-bold rounded p-2" style="background: var(--bs-gray-200);">Our Article & News</h2>
      <div class="row">
        <div class="col-md-8" style="border-radius: 15px; background: var(--bs-gray-100);">
          <div class="card mx-5 my-5">
            <div class="card-header">
              <a href="/blog/index" class="btn btn-primary mb-3 float-end">Back</a>
              <br>
              <img src="/assets/media/img/mum/logo.png" width="30px" alt="">
              <span class="fs-5">Mitra Usaha Mandiri</span>
            </div>
            <div class="card-body">
              <h2 class="card-title text-uppercase my-3" style="letter-spacing: 2px">
                <strong>{{ $article->title }}</strong>
              </h2>
              <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="...">
              <p class="card-text text-justify">{!! $article->description !!}</p>
            </div>
            <div class="card-footer text-muted">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="row">
            @foreach ($news as $news)
              <div class="col">
                <div class="card">
                  <img src="{{ asset("storage/$news->image") }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title fw-bold text-uppercase" style="letter-spacing: 1px;">{{ $news->title }}</h5>
                    <p class="card-text">{!! Str::limit($news->description) !!}</p>
                    <a type="button" class="btn btn-primary" href="/news/index/{{ $news->id }}">
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
