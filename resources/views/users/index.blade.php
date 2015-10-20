@extends('layouts.master')

@section('content')

<h1>All users</h1>

@if(count($users->all()) > 0)
<table class="table table-striped table-bordered">
			<thead>
				<th>id</th>
				<th>Name</th>
				<th>Email</th>
				
			</thead>

			<tbody>

			@foreach($users->all() as $user )
			<tr> 
				<td>{{ $user->id }}</td>				
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
				
				</td>	
				<!-- <form action="/flyers" method="DELETE">
				    <input type="hidden" name="_method" value="PUT">
				    <input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form> -->
                <td><a href="#"><button class="btn btn-xs btn-danger">Del</button></a></td>
                </td>
			</tr>
			@endforeach
			</tbody>
		</table>
@else

<h1>No Users at all. </h1>

@endif

@stop