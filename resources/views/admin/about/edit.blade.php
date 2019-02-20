@extends('admin.layout.admin')

@section('content')

<h3>Edite About Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!!	Form::open(['route'=>['about.update',$items->id],'method'=>'Post','enctype'=>'multipart/form-data']) !!}
			{{ Form::hidden('_method','Put') }}

			{{ Form::hidden('oldDrImage', $items->dr_img) }}

			{{ Form::hidden('oldBackgroundImage', $items->background_image) }}

			<div class="form-group">
				{{ Form::label('description','Description') }}
				{{ Form::textarea('description',$items->description,array('class'=>'form-control ckeditor')) }}
			</div>

			<div class="form-group">
				{{ Form::label('dr_name','Dr Name') }}
				{{ Form::text('dr_name',$items->dr_name,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('dr_specialist','Dr Specialist') }}
				{{ Form::text('dr_specialist',$items->dr_specialist,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('dr_img','Dr Photo') }}
				<img class="img-responsive" src="/storage/photos/about/{{$items->dr_img}}"><br>
				{{ Form::file('dr_img',['class'=>'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('background_image','Background Photo') }}
				<img class="img-responsive" src="/storage/photos/about/{{$items->background_image}}"><br>
				{{ Form::file('background_image',['class'=>'form-control']) }}
			</div>

			{{ Form::submit('Update',array('class' => 'btn btn-success')) }}

		{!! Form::close() !!}
		
		{{-- Show The Flash Message --}}
		@include('elements.flash')

	</div>
</div>		
@endsection