@extends('layouts.master')


@section('content')

<div class="row">
	<div class="col-md-12">
		
		<h1>My Galleriessss</h1>

	</div>
</div>

<div class="row">
	<div class="col-md-8">
		@if($galleries->count() > 0)
		<table class="table table-striped table-bordered table-responsive">
			<!-- <caption>The Galleries table</caption> -->
			<thead>
				<tr>
					<th class="success">Name of the Gallery</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($galleries->all() as $gallery)
				<tr>
					<td>{{ $gallery->name }}</td>
					<td><a href="/gallery/view/{{ $gallery->id }}">View</a></td>
					<td>Delete</td>
				</tr>
			@endforeach
			</tbody>
		</table>
			
		@else
			<p>There is no galleries. You can add them here.</p>
		@endif
		
	</div>

	<div class="col-md-4">
	@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			</ul>
			@endforeach
		</div>
	@endif 

		<form class="form" method="POST" action="{{ url('gallery/save') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="user_id" value="{{{ isset($user) ? Auth::user()->id : 'none'  }}}">

			<div class="form-group">
				<input type="text" 
				       name="gallery_name"
				       id="gallery_name" 
				       placeholder="Name of the gallery"
				       class="form-control"
				       value="">

				<button class="btn btn-primary">Save</button>
			</div>
		</form>
	</div>
</div>


@endsection