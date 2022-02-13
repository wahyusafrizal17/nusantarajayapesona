<div class="box-body">
    <div class="form-group">
        <label for="">Name</label>
        {{ Form::text('name_product', null, ['class' => 'form-control', 'placeholder' => 'Name product']) }}
        @if ($errors->has('name_product')) <span class="help-block" style="color:red">{{ $errors->first('name_product') }}</span> @endif
    </div>

    <div class="form-group">
        <label for="">Category</label>
        {{ Form::select('category_id', $category, null, ['class' => 'form-control select2']) }}
        @if ($errors->has('category_id')) <span class="help-block" style="color:red">{{ $errors->first('category_id') }}</span> @endif
    </div>

    <div class="form-group">
        <label for="">Description</label>
        {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'editor1', 'rows' => 10]) }}
        @if ($errors->has('description')) <span class="help-block" style="color:red">{{ $errors->first('description') }}</span> @endif
    </div>

    <div class="form-group">
        <label for="">Image utama</label>
        {{ Form::file('images', null, ['class' => 'form-control']) }}
        @if ($errors->has('images')) <span class="help-block" style="color:red">{{ $errors->first('images') }}</span> @endif
    </div>

    <div class="form-group">
        <label for="">Sub image</label>
        <input type="file" name="image[]" multiple>
    </div>

    @if(!empty($product))
    <div class="form-group row">
        @foreach($images as $image)
        <div class="col-md-3 col-3">
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/img/images/'.$image->images) }}" alt="Card image cap" style="width: 100%">
                <a href="{{ route('images.destroy', $image->id) }}" class="btn btn-danger btn-sm" style="width: 100%"> <i class="fa fa-trash"></i> </a>
              </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
<div class="box-header">
    <button type="submit" class="btn btn-success btn-sm">Submit</button>
    <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm">Back</a>
</div>