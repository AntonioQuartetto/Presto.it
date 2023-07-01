<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*-- Route delle Page --*/
Route::get('/', [PageController::class, 'index'])->name('page.homepage');
Route::get('/categoria/{category}', [PageController::class, 'categoryShow'])->name('categoryShow');


/*-- Route degli annunci--*/
Route::get('/annuncio',[AnnouncementController::class, 'create'])->name('announcement.create');
Route::get('/annuncio/{announcement}/dettagli',[AnnouncementController::class, 'show'])->name('announcement.show');
Route::get('/annuncio/{announcement}/edit',[AnnouncementController::class, 'edit'])->name('announcement.edit');





Route::get('/ricerca/annuncio',[PageController::class, 'searchAnnouncaments'])->name('announcement.search');

