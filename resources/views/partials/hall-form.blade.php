@include('errors.alert')

<div class="form-group">
	{!! Form::label('title', 'Hall Title') !!}
	{!! Form::text('title', null, ['class' => 'form-control']); !!}
	{!! showMessageIfError($errors, 'title') !!}
</div>

<div class="form-group">
	{!! Form::label('seats', 'Total Seats') !!}
	{!! Form::number('seats', null, ['class' => 'form-control']); !!}
	{!! showMessageIfError($errors, 'seats') !!}
</div>