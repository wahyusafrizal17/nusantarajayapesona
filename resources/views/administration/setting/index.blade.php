@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Setting
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
          <div class="col-md-3">
  
            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{ asset('assets/img/logo/'.$setting->logo) }}" alt="User profile picture">
  
                <h3 class="profile-username text-center">{{ $setting->name }}</h3>
  
                <p class="text-muted text-center">{{ $setting->email }}</p>
  
                <p class="text-muted text-center">{{ $setting->phone }}</p>

                <p class="text-muted text-center">{{ $setting->address }}</p>
  
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  
          </div>
          <!-- /.col -->
          <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        {{ Form::model($setting,['url'=>route('setting.update',['id' => $setting->id]),'class'=>'form-horizontal','method'=>'POST','files'=>true])}}

                            <div class="form-group">
                              <label for="inputName" class="col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  {{ Form::text('name', null, ['class' => 'form-control']) }}
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                {{ Form::email('email', null, ['class' => 'form-control']) }}
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputName" class="col-sm-2 control-label">Phone</label>
                              <div class="col-sm-10">
                                {{ Form::text('phone', null, ['class' => 'form-control']) }}
                              </div>
                            </div>

                              <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">Logo</label>
                                <div class="col-sm-10">
                                    {{ Form::file('logo', ['class' => 'form-control']) }}
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Vision</label>
                                <div class="col-sm-10">
                                  {{ Form::text('vision', null, ['class' => 'form-control']) }}
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">Link facebook</label>
                                <div class="col-sm-10">
                                    {{ Form::text('link_facebook', null, ['class' => 'form-control']) }}
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    {{ Form::textarea('address', null, ['class' => 'form-control', 'rows' => 2]) }}
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