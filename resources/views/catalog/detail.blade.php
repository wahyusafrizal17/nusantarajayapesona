@extends('layouts.web')
@section('content')

<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Product Details</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('category.list', $product->category->slug) }}">Product</a></li>
          <li>{{ $product->name_product }}</li>
        </ol>
      </div>

    </div>
  </section>

  <section id="portfolio-details" class="portfolio-details">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-8">
            <h3>{{ $product->name_product }}</h3>
            {{-- <div class="row">
                <div class="col-md-12 team" style="padding: 0px">
                  <div class="member" style="margin-bottom: 0">
                    <div class="pic">
                    <img src="{{ asset('assets/img/product/'.$product->images) }}" class="img-fluid" alt="" width="100%">
                    </div>
                  </div>
                </div>
                @if(count($images) > 0)
                <hr>
                @endif
                @foreach($images as $image)
                    <div class="col-md-3 col-4 team" style="padding: 20px 5px">
                      <div class="member" style="margin-bottom: 0">
                        <div class="pic">
                        <img src="{{ asset('assets/img/images/'.$image->images) }}" class="img-fluid" alt="" width="80%">
                        </div>
                      </div>
                    </div>
                @endforeach
            </div> --}}
            <section id="hero" class="detail-catalog">
              <div class="hero-container">
                <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
          
                  <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
          
                  <div class="carousel-inner" role="listbox">
          
                    <!-- Slide 1 -->
                    <div class="carousel-item active img-detail-slide" style="background-image: url('/assets/img/product/{{ $product->images }}');">
                    </div>
          
                    @foreach($images as $image)
                    <div class="carousel-item img-detail-slide" style="background-image: url('/assets/img/images/{{ $image->images }}');">
                    </div>
                    @endforeach
          
                  </div>
          
                  <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                  </a>
                  <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                  </a>
          
                </div>
              </div>
            </section>
            <hr>
            <div>
              <a href="https://www.facebook.com/sharer/sharer.php?u={{url('product/'.$product->slug)}}" target="_blank" class="btn btn-primary btn-order"><i class="fa fa-share-alt"></i> Bagikan ke facebook</a>
              <a href="https://api.whatsapp.com/send?phone=62{{ str_replace('-','', substr(profile()->phone,4,20)) }}&text=Saya%20tertarik%20untuk%20membeli%20produk%20{{ $product->name_product }}." target="_blank" class="btn btn-success btn-order"><i class="fa fa-whatsapp"></i> Hubungi supplier</a>
            </div>
            <div class="mt-3">
              <strong>Description :</strong>
                <p>{!! $product->description !!}</p>
            </div>
        </div> 

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Catalog</h3>
            <ul>
            @foreach ($catalogs as $catalog)
              <li>- <a href="{{ route('category.list', $catalog->slug) }}" class="text-black">{{ $catalog->name_category }}</a></li>
            @endforeach
            </ul>
          </div>

          <div class="portfolio-info mt-3">
            <h3>New product</h3>
            
            @foreach ($products as $row)
            <div class="row">
                <div class="col-md-4 col-4">
                  <a href="{{ route('catalog.detail', $row->slug) }}" class="text-black">
                    <img src="{{ asset('assets/img/product/'.$row->images) }}" alt="" width="100%">
                  </a>
                </div>
                <div class="col-md-8 col-8 title-new-product">
                  <a href="{{ route('catalog.detail', $row->slug) }}" class="text-black">
                    {{ $row->name_product }}
                    <p> <i class="fa fa-codepen"></i> {{ $row->category->name_category }}</p>
                  </a>
                </div>
            </div>
            @endforeach
          </div>
        </div>

      </div>

    </div>
  </section>


@endsection