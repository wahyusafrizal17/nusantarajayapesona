@extends('layouts.web')
@section('content')

<section id="team" class="team">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-title">
        <h2>Our Catalog</h2>
      </div>

      <div class="row">


        @if(count($products) > 0)
        @foreach($products as $product)
        <div class="col-md-3 col-6 text-center mt-5" data-aos="fade-up">
        <div class="member product">
            <div class="pic">
            <a href="{{ route('catalog.detail', $product->slug) }}">
              <img src="{{ asset('assets/img/product/'.$product->images) }}" class="img-fluid img-catalog" alt="">
            </a>
            </div>
          </div>
          <div class="title-product">
            <h4>{{ $product->name_product}}</h4>
          </div>
          
          <div class="btn-selengkapnya">
            <a href="{{ route('catalog.detail', $product->slug) }}" class="text-black">
              Lihat selengkapnya
            </a>
          </div>
          
        </div>
        @endforeach
        @else
        <div class="col-md-12 col-12 text-center text-center" data-aos="fade-up">
          <div class="member">
            -- product tidak tersedia --
          </div>
        </div>
        @endif

        <div class="col-md-12 mt-5">
            {{ $products->render("pagination::bootstrap-4") }}
        </div>
      </div>

    </div>
  </section>

@endsection