<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Models\Detail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    $details = Detail::all();
    return view('dashboard', compact('details'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/form_submission', [DetailController::class, 'store'])->name('form_submission');
});

Route::get('/sub_form', function () {
    return view('submission.index');
})->middleware(['auth', 'verified'])->name('sub_form');

Route::get('/college_form', function () {
    return view('submission.college');
})->middleware(['auth', 'verified'])->name('college_form');

require __DIR__.'/auth.php';
