<?php







Route::group(['namespace' => 'Frontend', 'as' => 'frontend.ams.', 'prefix' => 'gallery' ], function () {
	Route::get('{slug}', [DatastoreController::class, 'articleCategory'])->name('gallery.category');
});
