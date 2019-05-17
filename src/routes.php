<?php

use Phpsa\CamsGallery\Http\Controllers\GalleryController;





Route::group(['namespace' => 'Frontend', 'as' => 'frontend.ams.', 'prefix' => 'gallery' ], function () {
	Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
	Route::get('{slug}', [GalleryController::class, 'page'])->name('gallery.category');
	//Route::get('{category}/{slug}', [GalleryController::class, 'galleryPage'])
	Route::get('{category}/{slug}', function($category, $slug)
	{
		return App::make(GalleryController::class)->page($slug);
	})->name('gallery.page');
});
