@extends('frontend.layouts.app')

@include('phpsa-datastore::frontend.ams.includes.asset-common', $page)

@section('content')

		  <h2>{{  $page->datastore->category }}</h2>

    <div class="row mb-4">

@foreach($accepted as $gallery)
<div class="col-md-4">
		<div class="card mb-4 shadow-sm">
				<img class="bd-placeholder-img card-img-top img-thumbnail img-fluid" src="{{ $gallery->datastore->datastore->render('thumbnail') }}" />
				<div class="card-body">
						<h4>{{ $gallery->datastore->title }}</h4>
				  <p class="card-text">{{ $gallery->datastore->blurb }}</p>
				  <div class="d-flex justify-content-between align-items-center text-right">

					  <a href="{{ $gallery->datastore->routeChild($page->slug) }} " type="button" class="btn btn-sm btn-outline-secondary">View</a>


				  </div>
				</div>
			  </div>
</div>

@endforeach

    </div><!-- row -->
@endsection