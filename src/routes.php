<?php

use Phpsa\CamsGallery\Http\Controllers\GalleryController;





Route::group(['namespace' => 'Frontend', 'as' => 'frontend.ams.', 'prefix' => 'gallery' ], function () {
	Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
	Route::get('{slug}', [GalleryController::class, 'category'])->name('gallery.category');
	Route::get('{category}/{slug}', [GalleryController::class, 'page'])->name('gallery.page');
});
