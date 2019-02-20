@extends('admin.layout.admin')

@section('content')
	
<h3>Edit Hospital Information</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route'=>['hospitalinfo.update',$product->id],
						'method'=>'Post']) !!}

		{{ Form::hidden('_method','PUT') }}

			<div class="form-group">
				{{ Form::label('title','Title') }}
				{{ Form::text('title',$product->title,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('number','Number') }}
				{{ Form::text('number',$product->number,array('class'=>'form-control')) }}
			</div>			

			<div class="form-group">
				{{ Form::label('worktime','Work Time') }}
				{{ Form::text('worktime',$product->worktime,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('email','E-mail') }}
				{{ Form::text('email',$product->email,array('class'=>'form-control')) }}
			</div>

			{{ Form::submit('Update',array('class'=>'btn btn-success')) }}	

		{!! Form::close() !!}

		{{-- Show The Flash Message --}}
		@include('elements.flash')
	</div>
</div>
@endsection