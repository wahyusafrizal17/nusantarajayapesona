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
        <label for="">Image</label>
        <input type="file" name="images[]" multiple>
    </div>
</div>
<div class="box-header">
    <button type="submit" class="btn btn-success btn-sm">Save</button>
    <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm">Back</a>
</div>