@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Doctors Information</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>ID</th>
			<th >Dr Name</th>
			<th >Dr Specialist</th>
			<th>Dr Photo</th>
			<th >Dr Phone</th>
			<th >Dr E-mail</th>
			<th >Dr Facebook</th>
			<th >Dr Twitter</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($infos as $item)
			<tr>
				<td> <h4>{{$item->id}}</h4> </td>	
				<td> <h4>{{$item->dr_name}}</h4> </td>
				<td> <h4>{{$item->dr_specialist}} </h4> </td>
				<td> 
					<img class="img-responsive" src="/storage/photos/ourDoctors/{{$item->dr_img}}">
				</td>
				<td> <h4>{{$item->dr_phone}}</h4> </td>
				<td> <h4>{{$item->dr_email}}</h4> </td>
				<td> <h4>{{$item->facebook}}</h4> </td>
				<td> <h4>{{$item->twitter}}</h4> </td>
				<td>
					<a href="{{route('ourdoctors.edit',$item->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					
					{{-- delete button --}}
			        <form action="{{route('ourdoctors.destroy',$item->id)}}"  method="POST">
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