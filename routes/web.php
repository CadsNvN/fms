<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Owner\OwnerDashboardController;
use App\Http\Controllers\Customer\CustomerDasboardController;
use App\Http\Controllers\ReceiptController;

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

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // PROFILE
    Route::prefix('/profile')->controller(ProfileController::class)->as('profile.')->group(function() {
        Route::get('/edit', 'edit')->name('edit');
        Route::patch('/update', 'update')->name('update');
        Route::delete('/destroy', 'destroy')->name('destroy');
    });
    
    //Order Receipt
    Route::get('/generate-receipt/{orderId}', [ReceiptController::class, 'generateReceipt'])->name('invoice.print');

});

// CUSTOMER
Route::middleware(['auth', 'role:customer'])->group(function() {
    Route::prefix('customer')->as('customer.')->controller(CustomerDasboardController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    //CARTS
    Route::prefix('')->as('cart.')->controller(CartController::class)->group(function() {
        Route::get('/cart', 'index')->name('index');
        Route::post('show/{product}/cart/save', 'addToCart')->name('add');
        Route::delete('/cart-delete/{cartItem}', 'destroy')->name('destroy');
    });

    // CART QUANTITY
    Route::prefix('/cart')->as('quantity.')->controller(CartController::class)->group(function() {
        Route::put('/{cartItem}/add', 'addQuantity')->name('add');
        Route::put('/{cartItem}/subtract', 'subtractQuantity')->name('subtract');
    });

    // OORDERS
    Route::prefix('/order')->controller(OrderController::class)->as('order.')->group(function() {
        Route::post('/create', 'store')->name('store');
        Route::get('/existing', 'index')->name('index');
        Route::delete('/{orderId}/delete', 'destroy')->name('destroy');
    });
});
// END CUSTOMER

// ADMIN
Route::middleware(['auth', 'role:admin'])->group(function() {

    // dashboard
    Route::prefix('admin')->as('admin.')->controller(AdminDashboardController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    // products
    Route::prefix('/product')->as('product.')->controller(ProductController::class)->group(function() {
        Route::get('/products', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{product}/edit', 'edit')->name('edit');
        Route::put('/{product}/update', 'update')->name('update');
        Route::delete('/{product}/delete', 'destroy')->name('destroy');
    });

    // orders
    Route::prefix('/orders')->as('orders.')->controller(OrderController::class)->group(function() {
        Route::get('/current', 'currentOrders')->name('current');
        Route::get('/completed', 'completedOrders')->name('completed');
        Route::get('/current/{orderId}', 'processOrder')->name('process');
        Route::put('/current/{orderId}/confirm', 'confirmOrder')->name('confirm');
    });

});
// END ADMIN

// OWNER
Route::middleware(['auth', 'role:owner'])->group(function() {
    // dashboard
    Route::prefix('owner')->controller(OwnerDashboardController::class)->as('owner.')->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
});
// END OWNER


require __DIR__.'/auth.php';
