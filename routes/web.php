<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevisorController;

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


/*-- Route Profile --*/

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');


/*-- Route degli annunci--*/
Route::get('/annuncio',[AnnouncementController::class, 'index'])->name('announcement.index');
Route::get('/annuncio/crea',[AnnouncementController::class, 'create'])->name('announcement.create');
Route::get('/annuncio/{announcement}/dettagli',[AnnouncementController::class, 'show'])->name('announcement.show');
Route::get('/annuncio/{announcement}/edit',[AnnouncementController::class, 'edit'])->name('announcement.edit');
Route::get('/ricerca/annuncio',[PageController::class, 'searchAnnouncaments'])->name('announcement.search');


/*--Route Rewiewers--*/
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::get('/lavora-con-noi', [RevisorController::class, 'create'])->name('revisor.create');
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncements'])->middleware('isRevisor')->name('revisor.accept_announcements');
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncements'])->middleware('isRevisor')->name('revisor.reject_announcements');
Route::patch('/annulla/annuncio/{announcement}', [RevisorController::class, 'rewindAnnouncements'])->middleware('isRevisor')->name('revisor.rewind_announcements');
Route::get('/revisor/richiesta', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');