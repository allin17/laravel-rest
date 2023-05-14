<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Books\BookComponent;
use App\Http\Livewire\Books\BooksComponent;
use App\Http\Livewire\Books\CreateBook;
use App\Http\Livewire\Categories\CreateCategory;
use App\Http\Livewire\Categories\EditBookCategory;
use App\Http\Livewire\Components\HomeComponent;
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
//Route::get('/logout', Login::class);

Route::get('/categories/create', CreateCategory::class);
Route::get('/categories/{id}/edit', EditBookCategory::class)->name('edit-category');
//Route::resource('categories', CategoryController::class);

Route::get('/books/{id}/edit', \App\Http\Livewire\Books\EditBookComponent::class)->name('edit-book');
Route::get('/books/create', CreateBook::class)->name('create-book');
Route::get('/books', BooksComponent::class)->name('books'); //TODO
Route::get('/books/{id}', BookComponent::class)->name('book');
//Route::resource('books', \App\Http\Controllers\BookController::class);


Route::get('/workers', \App\Http\Livewire\Workers\WorkersList::class)->name('workers');
Route::get('/workers/{id}/edit', \App\Http\Livewire\Workers\EditWorker::class)->name('edit-worker');
Route::get('/workers/create', \App\Http\Livewire\Workers\CreateWorker::class)->name('create-worker');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('/', HomeComponent::class)->name('home');

    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::get('logout', LogoutController::class)
        ->name('logout');
});
