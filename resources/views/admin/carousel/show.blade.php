@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Carousel</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>Title</th>
			<th >Logo Pharse</th>
			<th >Button Name</th>
			<th>Backkground Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($items as $item)
			<tr>
				<td> <h4>{{$item->title}}</h4> 		</td>	
				<td> <h4>{{$item->logo_phrase}}</h4> 	</td>
				<td> <h4>{{$item->button}} </h4> 		</td>
				<td> <img class="img-responsive" src="/storage/photos/carousel/{{$item->background_image}}"></td>
				
				<td>
					<a href="{{route('carousel.edit',$item->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					
					{{-- delete button --}}
			        <form action="{{route('carousel.destroy',$item->id)}}"  method="POST">
			           	{{csrf_field()}}
			            {{method_field('DELETE')}}
			            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
			        </form>
		        </td>
	        </tr>
		@empty
			<h4>No Items has been added</h4>	
		@endforelse	

	</tbody>
</table>

@endsection