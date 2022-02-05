@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data user</h3>
      
                <div class="box-tools pull-right">
                  <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah user</a>
                </div>
              </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th width="10">No</th>
                      <th>Namer</th>
                      <th>Email</th>
                      <th width="100">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $row)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->email }}</td>
                      <td>
                          <a href="{{ route('user.edit', $row->id) }}" class="btn btn-primary btn-sm" style="float: inline-start;margin-right: 3px;">Edit</a>
                          {!! Form::open(['route'=>['user.destroy',$row->id],'method'=>'delete']) !!}
                            <button class="btn btn-danger btn-sm" type="submit">
                                Delete
                            </button>
                          {!! Form::close() !!}

                      </td>
                    </tr>
                    @endforeach
                  </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 
  @endsection