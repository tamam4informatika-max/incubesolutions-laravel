<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AboutSectionController;

use App\Models\AboutSection;

Route::get('/', function () {
    $about = AboutSection::latest()->first();
    return view('welcome', compact('about'));
});

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/about', [AboutSectionController::class, 'index'])
        ->name('about.index');

    Route::get('/about/create', [AboutSectionController::class, 'create'])
        ->name('about.create');

    Route::post('/about', [AboutSectionController::class, 'store'])
        ->name('about.store');

    Route::get('/about/{id}/edit', [AboutSectionController::class, 'edit'])
        ->name('about.edit');

    Route::put('/about/{id}', [AboutSectionController::class, 'update'])
        ->name('about.update');

      Route::delete('/about/{id}', [AboutSectionController::class, 'destroy'])
        ->name('about.destroy');
});