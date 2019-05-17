@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . 'Gallery')


@section('content')
	<h2>Galleries</h2>
		<div class="row mb-4">
@if($galleries)
@foreach($galleries as $gallery)

			<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
							<img class="bd-placeholder-img card-img-top img-thumbnail img-fluid" src="{{ $gallery->datastore->render('thumbnail') }}" />
							<div class="card-body">
							  <p class="card-text">{{ $gallery->datastore->category }}</p>
							  <div class="d-flex justify-content-between align-items-center text-right">

								  <a href="{{ $gallery->route }} " type="button" class="btn btn-sm btn-outline-secondary">View</a>


							  </div>
							</div>
						  </div>
			</div><!-- row -->
			@endforeach
			@else
			<div class="col text-center">
				<p>No Galleries Found</p>
			</div>
			@endif
{!! $galleries->render() !!}
		</div><!-- row -->
@endsection
