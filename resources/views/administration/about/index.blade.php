@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        about
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
          <div class="col-md-3">
  
            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class=" img-responsive" src="{{ asset('assets/img/about/'.$about->images) }}" alt="User profile picture">

                <p class="text-muted text-center">{{ $about->address }}</p>
  
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  
          </div>
          <!-- /.col -->
          <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        {{ Form::model($about,['url'=>route('about.update',['id' => $about->id]),'class'=>'form-horizontal','method'=>'POST','files'=>true])}}

                              <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">Images</label>
                                <div class="col-sm-10">
                                    {{ Form::file('images', ['class' => 'form-control']) }}
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 2]) }}
                                </div>
                              </div>
                              
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                              </div>
                            </div>
                          
                            {{ Form::close() }}
                    </div>
                </div>
              </div>
            
          <!-- /.col -->
        </div>
        <!-- /.row -->
  
      </section>
  </div>
 
  @endsection