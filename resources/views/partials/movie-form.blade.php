@include('errors.alert')

<div class="form-group">
	{!! Form::label('title', 'Movie Title') !!}
	{!! Form::text('title', null, ['class' => 'form-control']); !!}
	@if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
	{!! Form::label('director_name', 'Director Name') !!}
	{!! Form::text('director_name', null, ['class' => 'form-control']); !!}
	@if ($errors->has('director_name'))
        <span class="help-block">
            <strong>{{ $errors->first('director_name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
	{!! Form::label('description', 'Movie Description') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control']); !!}
	@if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>