@extends('admin.layout.admin')

@section('content')

<h3>Edite About Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!!	Form::open(['route'=>['ourdoctors.update',$items->id],'method'=>'Post','enctype'=>'multipart/form-data']) !!}
			
			{{ Form::hidden('_method','Put') }}

			{{ Form::hidden('oldImage', $items->dr_img) }}

			<div class="form-group">
				{{ Form::label('dr_name','Dr Name') }}
				{{ Form::text('dr_name',$items->dr_name,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('dr_specialist','Dr Specialist') }}
				{{ Form::text('dr_specialist',$items->dr_specialist,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('dr_phone','Dr Phone') }}
				{{ Form::text('dr_phone',$items->dr_phone,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('dr_email','Dr E-mail') }}
				{{ Form::text('dr_email',$items->dr_email,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('facebook','Dr Facebook') }}
				{{ Form::text('facebook',$items->facebook,array('class'=>'form-control')) }}
			</div>			

			<div class="form-group">
				{{ Form::label('twitter','Dr Twitter') }}
				{{ Form::text('twitter',$items->twitter,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('dr_img','Dr Photo') }}
				<img class="img-responsive" src="/storage/photos/ourDoctors/{{$items->dr_img}}">
				{{ Form::file('dr_img',['class'=>'form-control']) }}
			</div>
			
			{{ Form::submit('Update',array('class' => 'btn btn-success')) }}

		{!! Form::close() !!}
		
		{{-- Show The Flash Message --}}
		@include('elements.flash')

	</div>
</div>		
@endsection