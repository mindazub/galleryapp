@extends('layouts.master')

@section('content')

<!-- turetu buti papildomas #gallery-images style  -->


<div class="row">
	<div class="col-md-12">
		<h1>{{ $gallery->name }}</h1>
	</div>
</div>

<!-- <pre>
	{{ $gallery->images }}
</pre> -->

<div class="row">
	<div class="col-md-12">
		<div id="gallery-images">
			<ul>
			@foreach($gallery->images as $image)
				<li>
					<a href="{{ url($image->file_path) }}" target="_blank" data-lightbox="mygallery" >
						<img src="{{ url('/galleryapp/images/thumbs/' . $image->file_name) }}" alt="">
					</a>
				</li>
			@endforeach
			</ul>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<form action="{{ url('image/do-upload') }}" method="post" 
		class="dropzone"
		id="addImages" 
		>
		{{ csrf_field() }}
		<input type="hidden" name="gallery_id" value="{{ $gallery->id }}">		
			
		</form>
	</div>
</div>	


<div class="row">
	<div class="col-md-12">
		<a href="{{ url('/gallery/index') }}" class="btn btn-primary">Back</a>
	</div>
</div>


@stop