@extends('layouts.web')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
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
              <p>NUSANTARA JAYA PESONA has became the biggest Supplier of Coconut Product for local and international markets. we present from best product quality from selected raw material. business is our goal but establishing good relationship with business partners is also our main goal. We believe yhat a good business is a good relationship. therefore, with this company profile, we are always ready to cooperate in the fields that we run.</p>
            </div>

          </div>

          <div class="col-lg-6 video-box">
            <img src="{{ asset('assets/img/product/kelapa.jpg') }}" class="img-fluid" alt="">
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
          <p class="description">Menjadi suplaier buah-buahan segar terbaik di dunia</p>
        </div>

        <div class="row mt-6">
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="fa fa-american-sign-language-interpreting"></i></div>
            <h4 class="title"><a href="">INTEGRITAS</a></h4>
            <p class="description">Bekerja dengan kualitas yang lebih baik: Pelanggan kami adalah prioritas dengan integritas, kami percaya dapat melayani customer dengan kualitas produk terbaik.</p>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fa fa-handshake-o"></i></div>
            <h4 class="title"><a href="">KOMITMEN</a></h4>
            <p class="description">Komitmen kami kpeada pemangku kepentingan terkait : Kami sangat peduli dan bersedia membantu mensejahterakan petani, masyarakat dan pemangku kepentingan terkait.</p>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fa fa-globe"></i></div>
            <h4 class="title"><a href="">SUSTAINBLE</a></h4>
            <p class="description">Kondisi berkelanjutan untuk kehidupan yang lebih baik : Alam sangat penting sehingga kami ingin memastikan generasi berikut nya masih bisa merasakan manfaat nya.</p>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="fa fa-signal"></i></div>
            <h4 class="title"><a href="">GROWTH</a></h4>
            <p class="description">Always grow up to learn : Hingga saat ini dan seterusnya, kami masih belajar meningkatkan suplai kami agar sesuai dan solusi bagi kebutuhan pelanggan.</p>
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
        <div class="col-md-3">
        </div>

        @foreach($categories as $category)
          <div class="col-md-3 text-center" data-aos="fade-up">
            <div class="member">
              <div class="pic">
                <a href="{{ route('category.list', $category->slug) }}">
                <img src="{{ asset('assets/img/category/'.$category->images) }}" class="img-fluid" alt="">
              </a>
              </div>
              {{-- <div class="member-info">
                
              </div> --}}
              
            </div>
            <div class="title-product">
              <h4>{{ $category->name_category }}</h4>
            </div>
            
            <div class="btn-selengkapnya">
              <a href="{{ route('category.list', $category->slug) }}" class="text-black">
                Lihat selengkapnya
              </a>
            </div>
            
          </div>
          @endforeach
          <div class="col-md-3">
          </div>
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

          <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat</p><br>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>{{ profile()->email }}</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
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