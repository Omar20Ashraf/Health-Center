@extends('admin.layout.admin')

@section('content')

<h3>Edite Appointment Department Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!!	Form::open(['route'=>['department.update',$items->id],'method'=>'Post']) !!}

			{{ Form::hidden('_method','Put') }}


				<div class="form-group">
					{{ Form::label('departments','Department Name') }}
					{{ Form::text('departments',$items->departments,array('class'=>'form-control')) }}
				</div>

			{{ Form::submit('Update',array('class' => 'btn btn-success')) }}

		{!! Form::close() !!}
		
		{{-- Show The Flash Message --}}
		@include('elements.flash')

	</div>
</div>		
@endsection