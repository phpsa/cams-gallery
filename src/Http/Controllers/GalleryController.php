<?php

namespace Phpsa\CamsGallery\Http\Controllers;

use Phpsa\Datastore\Http\Controllers\DatastoreController;
use Phpsa\Datastore\Datastore;
use Phpsa\Datastore\Asset;
use Phpsa\Datastore\Helpers;
use Phpsa\Datastore\DatastoreException;
use Phpsa\Datastore\Repositories\DatastoreRepository;

use Phpsa\Datastore\Models\Datastore as DatastoreModel;
use Phpsa\Datastore\Models\DatastorePages;
use Phpsa\Datastore\Models\DatastoreDatastore;

Class GalleryController extends DatastoreController {

	public function index(){
		$galleries = $this->datastoreRepository->where('shortname','GalleryCategory')->where('status','published')->orderBy('value','asc')->paginate();
		return view('phpsa-cams-gallery::frontend.ams.list')
		->withGalleries($galleries);
	}

}