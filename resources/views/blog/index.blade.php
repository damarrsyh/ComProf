@extends('layout.main')

@section('pages')
  <section class="page-section-blog">
    <div class="container">
      <h2 class="textheader my-4 fw-bold rounded p-2" style="background: var(--bs-gray-200);">Article & News</h2>
      <div class="row">
        <div class="col-md-9">
          @foreach ($article as $article)
            <div class="card mb-3">
              <div class="row">
                <div class="col-md-4 my-3">
                  <img src="{{ asset("storage/$article->image") }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body ">
                    <h3 class="card-title">{{ $article->title }}</h3>
                    <p class="card-text">{!! Str::limit($article->perview_description) !!}</p>
                    <a type="button" class="btn btn-primary" href="/article/index/{{ $article->id }}">
                      <div class="wrapper">
                        <span>Baca selengkapnya<i class="fa-solid fa-arrow-right mx-2"></i></span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
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
                        <span>Baca Selengkapnya<i class="fa-solid fa-arrow-right mx-2"></i></span>
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
