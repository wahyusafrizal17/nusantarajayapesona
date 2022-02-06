@extends('layouts.web')
@section('content')

<section id="team" class="team">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-title">
        <h2>Our Catalog</h2>
      </div>

      <div class="row mt-5">


        @foreach($products as $product)
        <div class="col-xl-3 col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up">
          <div class="member">
            <div class="pic">
            <a href="{{ route('catalog.detail', $product->slug) }}">
                <img src="{{ asset('assets/img/product/'.$product->images) }}" class="img-fluid" alt="">
            </a>
            </div>
            <div class="member-info">
              <h4>{{ $product->name_product }}</h4>
              <div class="social">
                <a href=""><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>

    </div>
  </section>

@endsection