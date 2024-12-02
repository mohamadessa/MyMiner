<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTrashController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\CurrentUserController;

Route::prefix('admin')->group(function () {
    Route::resources([
        'posts' => PostController::class,
        'categories' => CategoryController::class,
        'comments' => CommentController::class,
    ]);
    Route::prefix('trash')->name('trash.')->group(function () {
        Route::get('/', [PostTrashController::class, 'index'])->name('index'); // عرض السجلات المحذوفة
        Route::get('/restore/{id}', [PostTrashController::class, 'restore'])->name('restore'); // استرجاع سجل
        Route::delete('/force-delete/{id}', [PostTrashController::class, 'forceDelete'])->name('forceDelete'); // حذف نهائي
    });
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('all');
        Route::post('/update', [SettingController::class, 'updateAll'])->name('updateAll');
    });
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->prefix('admin')->group(function () {
//     Route::resources([
//         'posts' => PostController::class,
//         'categories' => CategoryController::class,
//         'comments' => CommentController::class,
//     ]);
// });