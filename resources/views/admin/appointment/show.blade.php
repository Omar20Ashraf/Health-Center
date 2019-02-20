@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Appointments </h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Section Title</th>
			{{-- <th >Departments Name</th> --}}
			<th>Backkground Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($items as $item)
			<tr>
				<td> <h4>{{$item->id}}</h4> </td>
				<td> <h4>{{$item->name}}</h4> </td>

{{-- 				<td> <a href="{{route('addDepartement.index')}}" 
						class="btn btn-default" style="margin-bottom: 15px;">
						Edit
					 </a>
				 </td> --}}
				<td> <img class="img-responsive" src="/storage/photos/appointment/{{$item->background_image}}"></td>
				
				<td>
					<a href="{{route('appointment.edit',$item->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					
					{{-- delete button --}}
			        <form action="{{route('appointment.destroy',$item->id)}}"  method="POST">
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