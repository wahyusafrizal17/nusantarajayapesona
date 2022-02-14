@extends('layouts.web')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="slider-home">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slider/{{ $sliderA->images }}');">
          </div>

          @foreach ($sliderS as $slider)
          <div class="carousel-item" style="background-image: url('assets/img/slider/{{ $slider->images }}');">
          </div>
          @endforeach

        </div>

        {{-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a> --}}

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up" style="box-shadow: none;">

        <div class="row no-gutters">
          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About Us</h2>
              <p>{{ about()->description }}</p>
            </div>

          </div>

          <div class="col-lg-6 video-box" align="center">
            <img src="{{ asset('assets/img/about/'.about()->images ) }}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Counts Section ======= -->
    {{-- <section class="counts section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Catalog</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-document-folder" style="color: #c042ff;"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="bi bi-live-support" style="color: #46d1ff;"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section --> --}}

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title mb-5">
          <h2>Vision</h2>
          <p class="description">{{ profile()->vision }}</p>
        </div>

        <div class="row mt-6">
          <div class="col-lg-6 col-md-6 col-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="fa fa-american-sign-language-interpreting"></i></div>
            <h4 class="title"><a href="">INTEGRITY</a></h4>
            <p class="description">Work with better quality: Our customers are priority with the integrity, we believe that we can serve customers with the best quality of products.</p>
          </div>
          <div class="col-lg-6 col-md-6 col-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fa fa-handshake-o"></i></div>
            <h4 class="title"><a href="">COMMITMENT</a></h4>
            <p class="description">Our commitment to relevant stakeholders: We really care and  ready to develop the welfare of farmers, communities and related stakeholders.</p>
          </div>
          <div class="col-lg-6 col-md-6 col-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fa fa-globe"></i></div>
            <h4 class="title"><a href="">SUISTAINABLE</a></h4>
            <p class="description">The conditions for a better life: Nature is so important that we want to make sure the next generation can get the benefit from it.</p>
          </div>
          <div class="col-lg-6 col-md-6 col-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="fa fa-signal"></i></div>
            <h4 class="title"><a href="">GROWTH</a></h4>
            <p class="description">Always grow up to learn : Now and beyond, we are still learning to develop our supply to suit and provide solutions for customer needs.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product</h2>
        </div>


        <div class="row">
        <div class="col-md-3"></div>
        @foreach($categories as $category)
          <div class="col-md-3 col-6 text-center" data-aos="fade-up">
            <div class="member product">
              <div class="pic">
                <a href="{{ route('category.list', $category->slug) }}">
                <img src="{{ asset('assets/img/category/'.$category->images) }}" class="img-fluid image-product" alt="">
              </a>
              </div>
            </div>
            <div class="title-product title-catalog">
              <h4>{{ $category->name_category }}</h4>
            </div>
            <div class="btn-selengkapnya">
              <a href="{{ route('category.list', $category->slug) }}" class="text-black">
                Lihat selengkapnya
              </a>
            </div>
          </div>
          @endforeach
          <div class="col-md-3"></div>

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>{{ profile()->address }}</p>
            </div>
          </div>

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>{{ profile()->email }}</p>
            </div>
          </div>

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>{{ profile()->phone }}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

@endsection