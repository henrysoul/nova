<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ChatsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');

Route::get('about', [WebsiteController::class, 'about'])->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('schedule-assessment', [WebsiteController::class, 'schedule'])->name('schedule-assessment');
    Route::post('schedule-assessment', [WebsiteController::class, 'saveSchedule'])->name('schedule-assessment');

    // admin routes
    Route::get('assessments', [AdminController::class, 'index']);
    Route::get('view-assessment/{id}', [AdminController::class, 'view']);
    Route::get('update_assessment/{uuid}', [AdminController::class, 'view']);
    Route::post('update_assessment', [AdminController::class, 'update']);
    Route::post('update_status', [AdminController::class, 'update_status']);
    Route::get('assessments', [AdminController::class, 'assessments'])->name('assessments');
    Route::post('uploadFiles', [AdminController::class, 'uploadFiles'])->name('uploadFiles');
    Route::get('uploads/{path}', [AdminController::class, 'download'])->name('download');
    Route::get('delete_file/{uuid}', [AdminController::class, 'delete_file'])->name('download');
    Route::get('users', [AdminController::class, 'users'])->name('users');
    Route::post('update_user', [AdminController::class, 'update_user'])->name('update_user');
    Route::get('delete_user/{uuid}', [AdminController::class, 'delete_user'])->name('delete_user');
    // routes/web.php

    Route::get('/chat', [ChatsController::class,'index']);
    Route::get('messages', [ChatsController::class,'fetchMessages']);
    Route::post('messages', [ChatsController::class,'sendMessage']);

});

// Route::get('test',function(){
//     return view('test');
// });

require __DIR__ . '/auth.php';
