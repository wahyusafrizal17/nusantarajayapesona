@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        product
        <small>edit</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box">
            {{ Form::model($product,['url'=>route('product.update',[$product->id]),'method'=>'PUT','files'=>true])}}

                @include('administration.product._form') 

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </section>
  </div>
 
  @endsection