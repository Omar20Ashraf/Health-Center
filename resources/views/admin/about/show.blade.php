@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>About</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>ID</th>
			<th>description</th>
			<th >Dr Name</th>
			<th >Dr Specialist</th>
			<th>Dr Photo</th>
			<th>Backkground Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($items as $item)
			<tr>
				<td> <h4>{{$item->id}}</h4> </td>
				<td> <h4>{!! $item->description !!}</h4> </td>	
				<td> <h4>{{$item->dr_name}}</h4> </td>
				<td> <h4>{{$item->dr_specialist}} </h4> </td>
				<td> <img class="img-responsive" src="/storage/photos/about/{{$item->dr_img}}"></td>
				<td> <img class="img-responsive" src="/storage/photos/about/{{$item->background_image}}"></td>
				<td>					
					<a href="{{route('about.edit',$item->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					
					{{-- delete button --}}
			        <form action="{{route('about.destroy',$item->id)}}"  method="POST">
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