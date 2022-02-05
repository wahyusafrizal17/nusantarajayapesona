<div class="box-body">
    <div class="form-group">
        <label for="">Name</label>
        {{ Form::text('name_category', null, ['class' => 'form-control', 'placeholder' => 'Name category']) }}
        @if ($errors->has('name_category')) <span class="help-block" style="color:red">{{ $errors->first('name_category') }}</span> @endif
    </div>

    <div class="form-group">
    <label for="">Images</label>
    {{ Form::file('images', ['class' => 'form-control', 'placeholder' => 'Name category']) }}
    @if ($errors->has('images')) <span class="help-block" style="color:red">{{ $errors->first('images') }}</span> @endif
    </div>
</div>
<div class="box-header">
    <button type="submit" class="btn btn-success btn-sm">Save</button>
    <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">Back</a>
</div>