<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\BookCategories\BookCategoryList;
use App\Http\Livewire\Books\BookComponent;
use App\Http\Livewire\Books\BooksComponent;
use App\Http\Livewire\Books\CreateBook;
use App\Http\Livewire\BookCategories\CreateBookCategory;
use App\Http\Livewire\BookCategories\EditBookCategory;
use App\Http\Livewire\Books\EditBookComponent;
use App\Http\Livewire\Components\HomeComponent;
use App\Http\Livewire\Workers\CreateWorker;
use App\Http\Livewire\Workers\EditWorker;
use App\Http\Livewire\Workers\WorkersList;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your , application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::middleware('isWorker')->group(function () {
    Route::get('/categories/create', CreateBookCategory::class);
    Route::get('/categories/{id}/edit', EditBookCategory::class)->name('edit-category');

    Route::get('/books/{id}/edit', EditBookComponent::class)->name('edit-book');
    Route::get('/books/create', CreateBook::class)->name('create-book');

    Route::get('/workers', WorkersList::class)->name('workers');
    Route::get('/workers/{id}/edit', EditWorker::class)->name('edit-worker');
    Route::get('/workers/create', CreateWorker::class)->name('create-worker');
});

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

    Route::get('/books', BooksComponent::class)->name('books');
    Route::get('/books/{id}', BookComponent::class)->name('book');

    Route::get('/categories', BookCategoryList::class)->name('categories');

    Route::get('/excel', function () {
        return view('excel');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('logout', LogoutController::class)
        ->name('logout');
});
