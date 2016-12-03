@include('errors.alert')

<div class="form-group">
	{!! Form::label('title', 'Movie Title') !!}
	{!! Form::text('title', null, ['class' => 'form-control']); !!}
	{!! showMessageIfError($errors, 'title') !!}
</div>

<div class="form-group">
	{!! Form::label('director_name', 'Director Name') !!}
	{!! Form::text('director_name', null, ['class' => 'form-control']); !!}
	{!! showMessageIfError($errors, 'director_name') !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Movie Description') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control']); !!}
	{!! showMessageIfError($errors, 'description') !!}
</div>