<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CasketController;
use App\Http\Controllers\HearseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\InformantController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\ServiceInformationController;
use App\Http\Controllers\DeceasedInformationController;
use App\Http\Controllers\Admin\AdminDashboardController;
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

Route::get('/', [ProductController::class, 'welcomePageProducts'])
->name('welcome');

// ABOUT US
Route::get('/about-us', function () {
    return view('pages.about_us');
})->name('about-us');

// CONTACT US
route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');



// PRODUCTS
Route::get('/show/{product}', [ProductController::class, 'show'])
->name('product.show');

Route::get('/product/browse', [ProductController::class, 'browse'])
    ->name('product.browse');

//END PRODUCTS

// NEWS & ANNOUNCEMENTS
// route::get('/news-announcement', function () {
//     return view('news-announcement.browse');
// })->name('news-announcement');

route::get('/show/{announcement}', [AnnouncementController::class, 'show'])
->name('news-announcement.show');

route::get('/news-announcement/browse', [AnnouncementController::class, 'browse'])
->name('news-announcement.browse');
// END NEWS & ANNOUNCEMENTS


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
    Route::get('/receipt/{orderId}', [ReceiptController::class, 'index'])->name('receipt.view');
    Route::get('/generate-receipt/{orderId}', [ReceiptController::class, 'generateReceipt'])->name('invoice.print');

});

// CUSTOMER
Route::middleware(['auth', 'role:customer'])->group(function() {
    Route::prefix('customer')->controller(CustomerDasboardController::class)->as('customer.')->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    //CARTS
    Route::prefix('/cart')->as('cart.')->controller(CartController::class)->group(function() {
        Route::get('/cart', 'index')->name('index');
        Route::put('/{cartItem}/add', 'addQuantity')->name('add');
        Route::post('/show/{product}/save', 'addToCart')->name('save');
        Route::delete('/cart-delete/{cartItem}', 'destroy')->name('destroy');
        
        Route::put('/{cartItem}/subtract', 'subtractQuantity')->name('subtract');
    });


    // OORDERS
    Route::prefix('/order')->controller(OrderController::class)->as('order.')->group(function() {
        Route::post('/create', 'store')->name('store');
        Route::get('/existing', 'index')->name('index');
        Route::delete('/{orderId}/delete', 'destroy')->name('destroy');
    });


    Route::prefix('/service')->as('service.')->group(function() {

        Route::get('/type', [ServiceInformationController::class, 'index'])->name('index');
        Route::post('/type-save', [ServiceInformationController::class, 'store'])->name('store');

        Route::prefix('/{serviceInformation}')->group(function() {
            Route::controller(ServiceInformationController::class)->group(function() {
                Route::get('/deceased-info', 'deceased')->name('deceased');
                Route::get('/informant-info', 'informant')->name('informant');
                Route::get('/inclusions', 'inclusions')->name('inclusions');
                Route::get('/other-services', 'otherServices')->name('other-services');
            });
        });

    });





});
// END CUSTOMER

// ADMIN
Route::middleware(['auth', 'role:admin'])->group(function() {

    // dashboard
    Route::prefix('/admin')->controller(AdminDashboardController::class)->as('admin.')->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    // List of users
    Route::get('/List-user', function () {
        return view('pages.List-user');
    })->name('List-user');


    // create news and announcement
    route::prefix('/news-announcement')->controller(AnnouncementController::class)->as('news-announcement.')->group(function() {
        Route::get('/news-announcements', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{announcement}/edit', 'edit')->name('edit');
        Route::put('/{announcement}/update', 'update')->name('update');
        Route::delete('/{announcement}/delete', 'destroy')->name('destroy');
    });

    // products
    Route::prefix('/product')->controller(ProductController::class)->as('product.')->group(function() {
        Route::get('/products', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{product}/edit', 'edit')->name('edit');
        Route::put('/{product}/update', 'update')->name('update');
        Route::delete('/{product}/delete', 'destroy')->name('destroy');
    });

    // orders
    Route::prefix('/orders')->controller(OrderController::class)->as('orders.')->group(function() {
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
