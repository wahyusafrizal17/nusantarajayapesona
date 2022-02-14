<div class="box-body">
    <div class="form-group">
        <label for="">Images</label>
        {{ Form::file('images', ['class' => 'form-control', 'placeholder' => 'Name slider']) }}
        @if ($errors->has('images')) <span class="help-block" style="color:red">{{ $errors->first('images') }}</span> @endif
    </div>

    <div class="form-group">
        <label for="">Status</label>
        {{ Form::select('status', ['active' => 'Active', 'sub active' => 'Sub active'], null ,['class' => 'form-control'])}}
    </div>

</div>
<div class="box-header">
    <button type="submit" class="btn btn-success btn-sm">Submit</button>
    <a href="{{ route('slider.index') }}" class="btn btn-primary btn-sm">Back</a>
</div>