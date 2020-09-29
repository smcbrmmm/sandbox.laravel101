<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/hello/id', function () {
    return 'Hello ID';
});

Route::get('/pages', [PagesController::class,'index'])->name('pages.index');

Route::get('/pages/{id}', [PagesController::class,'show'])->name('pages.show');

Route::resource('/posts',PostController::class);


//Route::get('/pages','App\Http\Controllers\PagesController@index');
////Route::get('/pages/{id?}','App\Http\Controllers\PagesController@show');
////Route::get('/pages/{name?}/{tag?}','App\Http\Controllers\PagesController@drop');

// Route::get('/admin/page/{id?}', function ($id='default') {
//     return 'This is Page: ' . $id;
// })->name('admin.page');

// Route::get('/staff/news/{id?}', function ($id=null) {
//     return 'This is News: ' . $id;
// })->name('staff.news');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
