<?php

namespace Phpsa\CamsGallery\Ams\Gallery;

use Phpsa\CamsGallery\Ams\CopyrightAsset;

use Phpsa\Datastore\Asset;

class ImageAsset extends Asset {

    public $name = 'Gallery Image';
    public $is_child = true;
    public $shortname = 'galleryImage';
    public $value_equals = 'caption';
    public $properties = array(
        'caption' => array(
            'name' => 'Caption',
            'type' => self::STRING
        ),
        'image' => array(
            'name' => 'Image',
            'type' => self::IMG
		),
		'copyright' => [
			'name' => 'Copyright',
			'type' => CopyrightAsset::class
		]

    );

    public static function about() {
        return 'An Image for the Gallery Subsystem.';
    }

}
