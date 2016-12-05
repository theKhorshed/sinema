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

<div class="form-group">
	{!! Form::label('price', 'Ticket Price for This Hall') !!}
	{!! Form::number('price', null, ['class' => 'form-control']); !!}
	{!! showMessageIfError($errors, 'price') !!}
</div>
