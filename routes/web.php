<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['ru', 'uz'])) {
        abort(400);
    }
    session()->put('locale', $locale);
    return back();
})->name('lang.switch');

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/admin/products/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Show edit form
Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::get('/categories/{category}', [ProductController::class, 'showByCategory'])->name('categories.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
