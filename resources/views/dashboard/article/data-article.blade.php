@extends('layouts.master')
@section('content')
<main id="main">
    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">My Blog</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Profesional Blog Page</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
              @include('dashboard.article.partials.sidebar')
          </div>
          
          <!-- Content -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <h3>{{ $title }}</h3>

            {{-- JIKA PERLU --}}
            {{-- <div class="card mb-3">
              <a href="/articles/{{ $articles[0]->slug }}">
                <img src="/assets/img/blog/1.jpg" class="card-img-top">
              </a>
              <div class="card-body">
                <div class="col-md-12">
                  <span>
                    <i class="bi bi-person"></i>
                    <a href="#" class="text-muted">{{ $articles[0]->user->name }}</a>
                  </span>
                  <span class="mx-2">
                    <i class="bi bi-folder"></i>
                    in <a href="/articles/categories/{{ $articles[0]->articlecategory->slug }}" class="text-danger">{{ $articles[0]->articlecategory->name }}</a>
                  </span>
                  <span class="text-muted">
                    <i class="bi bi-calendar"></i>
                    {{ $articles[0]->articlecategory->created_at->diffForHumans() }}
                  </span>
                </div>
                <h5 class="card-title mt-3"><a href="/articles/{{ $articles[0]->slug }}" class="text-black">{{ $articles[0]->title }}</a></h5>
                <p class="card-text">{{ $articles[0]->excerpt }}</p>
                <a href="/articles/{{ $articles[0]->slug }}" class="btn btn-primary">Readmore</a>
              </div>
            </div> --}}
            <div class="row">
              @if($articles->count())
                @foreach ($articles->skip(0) as $article)
                  <div class="col-md-6 mb-4">
                    <div class="card">
                      <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                        <span class="text-white">in </span> <a class="text-warning" href="/articles/categories/{{ $article->articlecategory->slug }}">{{ $article->articlecategory->name }}</a>
                      </div>
                      <a href="/articles/{{ $article->slug }}">
                        <img src="/assets/img/blog/1.jpg" class="card-img-top">
                      </a>
                      <div class="card-body">
                        <div class="col-md-12">
                          {{-- <span>
                            <i class="bi bi-person"></i>
                            <a href="#" class="text-muted">{{ $article->user->name }}</a>
                          </span> --}}
                          <span class="text-muted">
                            <i class="bi bi-calendar"></i>
                            {{ $article->articlecategory->created_at->diffForHumans() }}
                          </span>
                        </div>
                        <h5 class="card-title mt-3"><a href="/articles/{{ $article->slug }}" class="text-black">{{ $article->title }}</a></h5>
                        <p class="card-text">{{ $article->excerpt }}</p>
                        <a href="/articles/{{ $article->slug }}" class="btn btn-primary">Readmore</a>
                      </div>
                    </div>
                    {{-- <div class="single-blog">
                      <div class="single-blog-img">
                        <a href="/articles/{{ $article->slug }}">
                          <img src="/assets/img/blog/1.jpg" alt="">
                        </a>
                      </div>
                      <div class="blog-meta">
                        <span class="comments-type">
                          <i class="bi bi-person"></i>
                          <a href="#">{{ $article->user->name }}</a>
                        </span>
                        <span class="comments-type">
                          <i class="bi bi-folder"></i>
                          Category in <a href="/articles/categories/{{ $article->articlecategory->slug }}" class="text-danger">{{ $article->articlecategory->name }}</a>
                        </span>
                        <span class="date-type">
                          <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
                        </span>
                      </div>
                      <div class="blog-text">
                        <h4>
                          <a href="/articles/{{ $article->slug }}">{{ $article->title }}</a>
                        </h4>
                        <p>
                          {{ $article->excerpt }}
                        </p>
                      </div>
                      <span>
                        <a href="/articles/{{ $article->slug }}" class="ready-btn">Read more</a>
                      </span>
                    </div> --}}
                  </div>
                @endforeach
              @else
                  <h5 class="text-center">No Article Found</h5>
              @endif
              <!-- End single blog -->

              {{ $articles->links() }}
              {{-- <div class="blog-pagination">
                <ul class="pagination">
                  <li class="page-item"><a href="#" class="page-link">&lt;</a></li>
                  <li class="page-item active"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">&gt;</a></li>
                </ul>
              </div> --}}
            </div>
        </div>
        
          
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->
@endsection