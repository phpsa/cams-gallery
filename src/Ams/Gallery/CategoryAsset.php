<?php

namespace Phpsa\CamsGallery\Ams\Gallery;
use Phpsa\Datastore\Asset;


class CategoryAsset extends Asset {

    public $name = 'Gallery Category';
    public $shortname = 'GalleryCategory';
    /* assets that can be children, a value means it is limited to that many children, -1 means unlimited  */
    public $accept = "Phpsa\CamsGallery\Ams\Gallery\PageAsset";
	public $accept_limit = "-1";
	public $status_equals = 'status';

    // map our value as equal to whatever the title property is set on save.
    public $value_equals = 'category';

    public $properties = [
        'category' => array(
            'name' => 'Category',
            'type' => self::STRING
        ),
        'thumbnail' => [
            'name' => 'Category Image',
            'type' => self::IMG
		],
		'status' => [
            'name' => 'Published',
            'type' => self::DROPDOWN,
			'options' => ['published' => 'Published', 'unpublished' => 'Unpublished'],
			'published' => ['published']
        ]
	];

    public static function about() {
        return 'This is a category to which Gallery Pages can be assigned.';
	}

	/**
	 * generate the route for this asset
	 */
	public static function route($record, $path = null){
		$page = $record->page;
		return route('frontend.ams.gallery.category', ['slug' => $page->slug]);
	}

}
