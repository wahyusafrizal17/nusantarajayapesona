@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        slider
        <small>edit</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box">
            {{ Form::model($slider,['url'=>route('slider.update',[$slider->id]),'method'=>'PUT','files'=>true])}}

                @include('administration.slider._form') 

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </section>
  </div>
 
  @endsection