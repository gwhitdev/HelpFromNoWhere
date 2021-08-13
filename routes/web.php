<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpportunitiesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\OrganisationsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\VisibilitiesController;
use App\Http\Controllers\StatusesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
    
});

// Opportunities Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/opportunities', [OpportunitiesController::class,'index'])->name('opportunities');
    Route::get('/opportunity/{id}', [OpportunitiesController::class,'show']);
    Route::get('/opportunity/{id}/edit', [OpportunitiesController::class, 'edit']);
    Route::post('/opportunity/{id}/edit', [OpportunitiesController::class, 'update']);
    Route::get('/opportunity/{id}/remove', [OpportunitiesController::class, 'remove']);
    Route::get('/opportunity/new', [OpportunitiesController::class, 'new']);
    Route::post('/opportunity/new', [OpportunitiesController::class, 'store']);
});

// Organisations Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/organisations', [OrganisationsController::class,'index'])->name('organisations');
    Route::get('/organisation/{id}', [OrganisationsController::class,'show']);
    Route::get('/organisation/{id}/edit', [OrganisationsController::class, 'edit']);
    Route::post('/organisation/{id}/edit', [OrganisationsController::class, 'update']);
    Route::get('/organisation/{id}/remove', [OrganisationsController::class, 'remove']);
    Route::get('/organisation/new', [OrganisationsController::class, 'new']);
    Route::post('/organisation/new', [OrganisationsController::class, 'store']);
});

// Tasks Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/tasks', [TasksController::class,'index'])->name('tasks');
    Route::get('/task/{id}', [TasksController::class,'show']);
    Route::get('/task/{id}/edit', [TasksController::class, 'edit']);
    Route::post('/task/{id}/edit', [TasksController::class, 'update']);
    Route::get('/task/{id}/remove', [TasksController::class, 'remove']);
    Route::get('/task/new', [TasksController::class, 'new']);
    Route::post('/task/new', [TasksController::class, 'store']);
});

// Images Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/images', [ImagesController::class,'index'])->name('images');
    Route::get('/image/{id}', [ImagesController::class,'show']);
    Route::get('/image/{id}/edit', [ImagesController::class, 'edit']);
    Route::post('/image/{id}/edit', [ImagesController::class, 'update']);
    Route::get('/image/{id}/remove', [ImagesController::class, 'remove']);
    Route::get('/image/new', [ImagesController::class, 'new']);
    Route::post('/image/new', [ImagesController::class, 'store']);
});

// Visibilities Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/visibilities', [VisibilitiesController::class,'index'])->name('visibilities');
    Route::get('/visibility/{id}', [VisibilitiesController::class,'show']);
    Route::get('/visibility/{id}/edit', [VisibilitiesController::class, 'edit']);
    Route::post('/visibility/{id}/edit', [VisibilitiesController::class, 'update']);
    Route::get('/visibility/{id}/remove', [VisibilitiesController::class, 'remove']);
    Route::get('/visibility/new', [VisibilitiesController::class, 'new']);
    Route::post('/visibility/new', [VisibilitiesController::class, 'store']);
});

// Categories Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/categories', [CategoriesController::class,'index'])->name('categories');
    Route::get('/category/{id}', [CategoriesController::class,'show']);
    Route::get('/category/{id}/edit', [CategoriesController::class, 'edit']);
    Route::post('/category/{id}/edit', [CategoriesController::class, 'update']);
    Route::get('/category/{id}/remove', [CategoriesController::class, 'remove']);
    Route::get('/category/new', [CategoriesController::class, 'new']);
    Route::post('/category/new', [CategoriesController::class, 'store']);
});

// Statuses Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/statuses', [StatusesController::class,'index'])->name('statuses');
    Route::get('/status/{id}', [StatusesController::class,'show']);
    Route::get('/status/{id}/edit', [StatusesController::class, 'edit']);
    Route::post('/status/{id}/edit', [StatusesController::class, 'update']);
    Route::get('/status/{id}/remove', [StatusesController::class, 'remove']);
    Route::get('/status/new', [StatusesController::class, 'new']);
    Route::post('/status/new', [StatusesController::class, 'store']);
});



