@extends('layouts.web')
@section('content')

<section id="team" class="team">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-title">
        <h2>Our Catalog</h2>
      </div>

      <div class="row mt-5">


        @foreach($products as $product)
        <div class="col-md-3 text-center mt-5" data-aos="fade-up">
        <div class="member">
            <div class="pic">
              <a href="{{ route('category.list', $product->slug) }}">
              <img src="{{ asset('assets/img/product/'.$product->images) }}" class="img-fluid" alt="">
            </a>
            </div>
            {{-- <div class="member-info">
              
            </div> --}}
            
          </div>
          <div class="title-product">
            <h4>{{ $product->name_product}}</h4>
          </div>
          
          <div class="btn-selengkapnya">
            <a href="{{ route('category.list', $product->slug) }}" class="text-black">
              Lihat selengkapnya
            </a>
          </div>
          
        </div>
        @endforeach

      </div>

    </div>
  </section>

@endsection