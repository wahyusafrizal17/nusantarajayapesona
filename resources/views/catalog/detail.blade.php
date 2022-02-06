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
            <div class="row">
                <div class="col-md-12 mb-3">
                    <img src="{{ asset('assets/img/product/'.$product->images) }}" alt="" width="100%">
                </div>

                @foreach($images as $image)
                    <div class="col-md-3">
                        <img src="{{ asset('assets/img/images/'.$image->images) }}" alt="" width="100%">
                    </div>
                @endforeach
            </div>
            <hr>
            <div class="mt-3">
                <p>{!! $product->description !!}</p>
            </div>
        </div>

        

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Catalog</h3>
            <ul>
            @foreach ($catalogs as $catalog)
              <li><strong>- <a href="{{ route('category.list', $catalog->slug) }}" class="text-black">{{ $catalog->name_category }}</a></strong></li>
            @endforeach
            </ul>
          </div>

          <div class="portfolio-info mt-3">
            <h3>New product</h3>
            
            @foreach ($products as $row)
            <div class="row">
                <div class="col-md-4 col-4">
                    <img src="{{ asset('assets/img/product/'.$row->images) }}" alt="" width="100%">
                </div>
                <div class="col-md-8 col-8">
                    <strong>{{ $row->name_product }}</strong>
                    <p> <i class="fa fa-codepen"></i> {{ $row->category->name_category }}</p>
                </div>
            </div>
            @endforeach
          </div>
        </div>

      </div>

    </div>
  </section>


@endsection