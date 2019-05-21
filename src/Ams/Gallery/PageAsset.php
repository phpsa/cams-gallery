<?php

namespace Phpsa\CamsGallery\Ams\Gallery;
use Phpsa\Datastore\Asset;


class PageAsset extends Asset {

    public $name = 'Gallery Page';
    public $shortname = 'GalleryPage';
    /* assets that can be children, a value means it is limited to that many children, -1 means unlimited  */
    // public $accept = "galleryImageAsset";
    // public $accept_limit = "-1";
    public $children = "Phpsa\CamsGallery\Ams\Gallery\ImageAsset";
    // map our value as equal to whatever the title property is set on save.
	public $value_equals = 'title';
	public $status_equals = 'status';


    public $properties = array(
        'title' => array(
            'name' => 'Gallery Name',
            'type' => self::STRING
        ),
        'blurb' => array(
            'name' => 'Intro',
            'type' => self::STRING
		),
		'status' => [
            'name' => 'Published',
            'type' => self::DROPDOWN,
			'options' => ['published' => 'Published', 'unpublished' => 'Unpublished'],
			'published' => ['published']
        ]
    );

    public static function about() {
        return 'This is a page to which Gallery Images are assigned.';
    }
	/**
	 * generate the route for this asset
	 */
	public static function route($record, $path = null){
		$page = $record->page;
		return route('frontend.ams.gallery.page', ['slug' => $page->slug, 'category' => $path ? $path : 'view']);
	}
}