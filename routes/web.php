<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Owner\OwnerDashboardController;
use App\Http\Controllers\Customer\CustomerDasboardController;

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

Route::get('/about-us', function () {
    return view('pages.about_us');
})->name('about-us');

Route::get('/', [ProductController::class, 'welcomePageProducts'])
->name('welcome');

// PRODUCTS
Route::get('/show/{product}', [ProductController::class, 'show'])
->name('product.show');

Route::get('/product/browse', [ProductController::class, 'browse'])
    ->name('product.browse');

//END PRODUCTS

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');

    //CARTS
    Route::post('show/{product}/cart/save', [CartController::class, 'addToCart'])
    ->name('cart.add');

    Route::put('/cart/{cartItem}/add', [CartController::class, 'addQuantity'])->name('quantity.add');

    Route::put('/cart/{cartItem}/subtract', [CartController::class, 'subtractQuantity'])->name('quantity.subtract');

});

Route::middleware(['auth', 'role:customer'])->group(function() {
    Route::get('/customer/dasboard', [CustomerDasboardController::class, 'index'])
    ->name('customer.dashboard');

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
});

Route::middleware(['auth', 'role:admin'])->group(function() {

    // dashboard
    Route::get('/admin/dasboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');

    // products
    Route::get('/products', [ProductController::class, 'index'])
    ->name('product.index');

    Route::get('/product/create', [ProductController::class, 'create'])
    ->name('product.create');

    Route::post('/product/store', [ProductController::class, 'store'])
    ->name('product.store');

    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])
    ->name('product.edit');

    Route::put('/product/{product}/update', [ProductController::class, 'update'])
    ->name('product.update');

    Route::delete('/product/{product}/delete', [ProductController::class, 'destroy'])
    ->name('product.destroy');




    // orders
    Route::get('/orders/current', [OrderController::class, 'currentOrders'])
    ->name('orders.current');

    Route::get('/orders/completed', [OrderController::class, 'completedOrders'])
    ->name('orders.completed');
});

Route::middleware(['auth', 'role:owner'])->group(function() {
    Route::get('/owner/dasboard', [OwnerDashboardController::class, 'index'])
    ->name('owner.dashboard');
});


require __DIR__.'/auth.php';
