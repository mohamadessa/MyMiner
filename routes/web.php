<?php

use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\CommentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', function () {
    return redirect()->route('login');
})->name('register');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('posts.index');
    })->name('dashboard');
});

// ----------------------------------------------------------------

Route::get('mail', [ContactController::class, 'getMail']);
Route::post('mail', [ContactController::class, 'sentMail'])->name('mail.sent');

Route::get('/web', [HomeController::class, 'index'])->name('web.index');
Route::get('/web/blog', [BlogController::class, 'index'])->name('web.blog.index');

Route::get('/web/contact', [ContactController::class, 'index'])->name('web.contact.index');
Route::post('/web/contact', [ContactController::class, 'store'])->name('web.contact.store');

Route::get('/web/blog/{post:slug}', [BlogController::class, 'show'])->name('web.blog.show');


//Route::post('/web/blog/{post:slug}/comments', [CommentController::class, 'store'])->name('web.blog.comments.store');
