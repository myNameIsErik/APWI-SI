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
                  <h1 class="title2">E - Learning</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Kumpulan Video</h2>
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
              @include('dashboard.elearning-video.partials.sidebar')
          </div>
          
          <!-- Content -->
          @include('dashboard.elearning-video.data-elearning')
          
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->
@endsection