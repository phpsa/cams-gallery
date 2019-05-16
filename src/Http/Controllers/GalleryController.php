<?php

namespace Phpsa\CamsGallery\Http\Controllers;

use App\Http\Controllers\Controller;
use Phpsa\Datastore\Datastore;
use Phpsa\Datastore\Asset;
use Phpsa\Datastore\Helpers;
use Phpsa\Datastore\DatastoreException;
use Phpsa\Datastore\Repositories\DatastoreRepository;

use Phpsa\Datastore\Models\Datastore as DatastoreModel;
use Phpsa\Datastore\Models\DatastorePages;

Class GalleryController extends Controller {

	/**
	 * @var DatastoreRepository
	 */
    protected $datastoreRepository;

    /**
     * UserController constructor.
     *
     * @param DatastoreRepository $datastoreRepository
     */
    public function __construct(DatastoreRepository $datastoreRepository)
    {
        $this->datastoreRepository = $datastoreRepository;
	}

	public function index(){

		$galleries = $this->datastoreRepository->where('shortname','GalleryCategory')->where('status','published')->orderBy('value','asc')->paginate();

		dd($galleries);
	}

	public function category($slug){
		$page = DatastorePages::where('slug', $slug)->first();
		if(!$page){
			abort(404);
		}

		$datastore = $page->datastore;
		$user = auth()->user();

		if(!$datastore->statusIsActive() && (!$user || !$user->can('manage datastore'))) {
			abort(404);
		}



		/*
		$data['items'] = db::find(zpASSET, "id IN (
                SELECT dd.datastore_id
                FROM " . $tbl . " dd
                    where dd.datastore2_id = ?
                )
                order by time_updated desc", array($cat_id));*/
		dd($datastore->items);
	}

	public function page($slug){

	}
}