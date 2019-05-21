<?php

namespace Phpsa\CamsGallery\Http\Controllers;

use Phpsa\Datastore\Http\Controllers\DatastoreController;


Class GalleryController extends DatastoreController {

	public function index(){
		$galleries = $this->datastoreRepository->where('shortname','GalleryCategory')->where('status','published')->orderBy('value','asc')->paginate();
		return view('phpsa-cams-gallery::frontend.ams.list')
		->withGalleries($galleries);
	}

}