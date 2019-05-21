<?php

namespace Phpsa\CamsGallery\Ams;
use Phpsa\Datastore\Asset;

class CopyrightAsset extends Asset {

    public $type = CopyrightAsset::class;
    public $namespace = 'property';

    public static function html($data) {
        return '<blockquote>' . $data['value'] . '</blockquote>';
    }
}
?>
