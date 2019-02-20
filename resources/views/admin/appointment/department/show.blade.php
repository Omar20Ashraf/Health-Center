@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Appointments Health Departments</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Departments Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($items as $item)
			<tr>
				<td> <h4>{{$item->id}}</h4> </td>
				<td><h4>{{$item->departments}}</h4></td>
				<td>
					<a href="{{route('department.edit',$item->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					
					{{-- delete button --}}
			        <form action="{{route('department.destroy',$item->id)}}"  method="POST">
			           	{{csrf_field()}}
			            {{method_field('DELETE')}}
			            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
			        </form>
		        </td>
	        </tr>
		@empty
			<h4>No Items has been added</h4>	
		@endforelse	
		<a href="{{route('department.create',$item->id)}}" 
					class="btn btn-success" style="margin-bottom: 15px;">
					Add Health Department 
		</a>

	</tbody>
</table>

@endsection