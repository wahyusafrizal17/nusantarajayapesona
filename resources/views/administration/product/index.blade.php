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
                <h3 class="box-title">Data product</h3>
      
                <div class="box-tools pull-right">
                  <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah product</a>
                </div>
              </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th width="10">No</th>
                      <th>Name product</th>
                      <th>Category</th>
                      <th>Images</th>
                      <th width="170">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $row)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $row->name_product }}</td>
                      <td>{{ $row->category->name_category }}</td>
                      <td><img src="{{ asset('assets/img/product/'.$row->images) }}" width="100"></td>
                      <td>
                          <a href="{{ route('product.edit', $row->id) }}" class="btn btn-primary btn-sm" style="float: left;margin-right: 3px;">Edit</a>
                          {!! Form::open(['route'=>['product.destroy',$row->id],'method'=>'delete']) !!}
                            <button class="btn btn-danger btn-sm" type="submit" style="float: left;margin-right: 3px;">
                                Delete
                            </button>
                          {!! Form::close() !!}
                          @if($row->is_active == 1)
                          <a class="btn btn-warning btn-sm" href="{{ route('product.active', $row->id) }}">active</a>
                          @else
                          <a class="btn btn-warning btn-sm" href="{{ route('product.active', $row->id) }}">no active</a>
                          @endif
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