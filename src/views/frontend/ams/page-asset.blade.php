@extends('frontend.layouts.app')

@include('phpsa-datastore::frontend.ams.includes.asset-common', $page)

@section('content')
<section class="jumbotron text-center">
		<div class="container">
		  <h1 class="jumbotron-heading">{{  $datastore->prop('title') }}</h1>
		  <p class="lead text-muted">{{ $datastore->prop('blurb') }}</p>
		</div>
	  </section>

	  <div class="row mb-4">
@foreach($children as $child)
<div class="col-md-4">
		<div class="card mb-4 shadow-sm">
			<img class="bd-placeholder-img card-img-top img-thumbnail img-fluid" src="{{ $child->render('image') }}" />
			<div class="card-body">
			  <p class="card-text">{{ $child->prop('caption') }}</p>
			  <footer class="blockquote-footer text-right">&copy; <cite title="Source Title">{{ $child->prop('copyright') }}</cite></footer>
			</div>
		  </div>
		</div>
@endforeach
	</div>

@endsection