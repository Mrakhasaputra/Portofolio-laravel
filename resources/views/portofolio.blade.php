@extends('master')

@section('content')

<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>My Portfolio</span>
          <h2>My Portfolio</h2>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio/portfolio-3.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{ asset('assets/img/portfolio/portfolio-3.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio/portfolio-2.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="{{ ('assets/img/portfolio/portfolio-2.png" data-gallery="portfolioGallery') }}" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio/portfolio-1.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 1</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>

@endsection