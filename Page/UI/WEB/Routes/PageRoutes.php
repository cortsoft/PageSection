<?php

use App\Containers\PageSection\Page\UI\WEB\Controllers\Admin\CategoryController;
use App\Containers\PageSection\Page\UI\WEB\Controllers\Admin\PageController;
use App\Containers\PageSection\Page\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', [Controller::class, 'index'])
    ->name('page_index');

Route::prefix('admin')->group(function () {
    Route::prefix('page')->group(function () {
        Route::name('admin.page.')->group(function () {
            Route::resource('/category', CategoryController::class);
            Route::resource('/', PageController::class)->parameters([
                '' => 'page'
            ]);
        });
    });
});

