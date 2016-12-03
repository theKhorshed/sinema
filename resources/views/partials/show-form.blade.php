@include('errors.alert')

<div class="form-group">
	{!! Form::label('title', 'Show Title') !!}
	{!! Form::text('title', null, ['class' => 'form-control']); !!}
	{!! showMessageIfError($errors, 'title') !!}
</div>

<div class="form-group">
	{!! Form::label('time', 'Show Time') !!}
	{!! Form::text('time', null, ['class' => 'form-control']); !!}
	{!! showMessageIfError($errors, 'time') !!}
</div>