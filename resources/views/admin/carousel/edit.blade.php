@extends('admin.layout.admin')

@section('content')

<h3>Edite Carousel Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!!	Form::open(['route'=>['carousel.update',$items->id],'method'=>'Post','enctype'=>'multipart/form-data']) !!}
			{{ Form::hidden('_method','Put') }}

			{{ Form::hidden('oldBackgroundImage', $items->background_image) }}
			
			<div class="form-group">
				{{ Form::label('title','Title') }}
				{{ Form::text('title',$items->title,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('logo_phrase','Logo Phrase') }}
				{{ Form::text('logo_phrase',$items->logo_phrase,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('button','Button') }}
				{{ Form::text('button',$items->button,array('class'=>'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('background_image','Background Photo') }}
				<img class="img-responsive" src="/storage/photos/carousel/{{$items->background_image}}"><br>
				{{ Form::file('background_image',['class'=>'form-control']) }}
			</div>

			{{ Form::submit('Update',array('class' => 'btn btn-success')) }}

		{!! Form::close() !!}
		
		{{-- Show The Flash Message --}}
		@include('elements.flash')

	</div>
</div>		
@endsection