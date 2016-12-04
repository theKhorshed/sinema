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

<div class="form-group">
	<h4>Select Hall and Show Time:</h4>

	@if( count($ShowsOnHalls) > 0 )

	@foreach($ShowsOnHalls as $showOnHall)

		<div class="checkbox">
			<label>
			  <input type="checkbox" name="showed_on[]" value="{{$showOnHall['id']}}" {{$showOnHall['checked']}}>
			  <p>{{$showOnHall['title']}} <span>({{$showOnHall['time']}})</span></p>
			</label>
		</div>
		
	@endforeach

	@else

		<h3>Sorry, No available hall and show time currently!</h3>

	@endif
</div>