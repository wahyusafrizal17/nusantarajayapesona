<div class="box-body">
    <div class="form-group">
        <label for="">Name</label>
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name user']) }}
        @if ($errors->has('name')) <span class="help-block" style="color:red">{{ $errors->first('name') }}</span> @endif
    </div>

    <div class="form-group">
        <label for="">Email</label>
        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
        @if ($errors->has('email')) <span class="help-block" style="color:red">{{ $errors->first('email') }}</span> @endif
    </div>

    <div class="form-group">
        <label for="">Password</label>
        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => '********']) }}
        @if ($errors->has('password')) <span class="help-block" style="color:red">{{ $errors->first('password') }}</span> @endif
    </div>
    
</div>
<div class="box-header">
    <button type="submit" class="btn btn-success btn-sm">Submit</button>
    <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm">Back</a>
</div>