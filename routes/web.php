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
use App\Http\Controllers\OtherServicesController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\ServiceInformationController;
use App\Http\Controllers\DeceasedInformationController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Owner\OwnerDashboardController;
use App\Http\Controllers\Customer\CustomerDasboardController;
use App\Models\ServiceRequest;

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

route::get('/show-news/{announcement}', [AnnouncementController::class, 'show'])
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
    Route::prefix('/profile')->controller(ProfileController::class)->as('profile.')->group(function () {
        Route::get('/edit', 'edit')->name('edit');
        Route::patch('/update', 'update')->name('update');
        Route::delete('/destroy', 'destroy')->name('destroy');
    });

    //Order Receipt
    Route::get('/receipt/{orderId}', [ReceiptController::class, 'index'])->name('receipt.view');
    Route::get('/generate-receipt/{orderId}', [ReceiptController::class, 'generateReceipt'])->name('invoice.print');


    Route::prefix('/service')->as('service.')->group(function () {
        Route::controller(ServiceInformationController::class)->group(function () {
            Route::get('/type/{serviceId?}', 'index')->name('type.index');
            Route::post('/type-save/{serviceId?}', 'store')->name('type.store');
            Route::post('/choose-casket', 'storeFromCasket')->name('type.storeFromCasket');
        });

    });

   

    Route::prefix('/service/{serviceInformation}')->as('service.')->group(function () {


        Route::controller(ServiceInformationController::class)->group(function () {
            Route::delete('', 'destroy')->name('destroy');
            Route::get('/deceased-info', 'deceased')->name('deceased');
            Route::get('/informant-info', 'informant')->name('informant');
            Route::get('/inclusions', 'inclusions')->name('inclusions');
            Route::get('/other-services', 'otherServices')->name('other-services');
            Route::get('/caskets', 'caskets')->name('caskets');
            Route::get('/hearses', 'hearses')->name('hearses');
            Route::get('/flowers', 'flowers')->name('flowers');
            Route::get('/summary', 'serviceSummary')->name('summary');
            Route::put('/gallons-water-save', 'setGallonsOfWater')->name('gallons.water');
            Route::get('/service-recieved', 'recieved')->name('received');
            Route::put('/submit-request', 'submitRequest')->name('submit.request');
            Route::put('/other-services', 'setOtherServices')->name('setOtherServices');

        });

        Route::controller(DeceasedInformationController::class)->group(function () {
            Route::post('/decease-info/save', 'store')->name('deceased.store');
        });

        Route::controller(InformantController::class)->group(function () {
            Route::post('/informant-info/save', 'store')->name('informant.store');
        });

        Route::controller(CasketController::class)->group(function () {
            Route::put('/casket/select', 'selectCasket')->name('casket.select');
        });

        Route::controller(HearseController::class)->group(function () {
            Route::put('/hearse/select', 'selectHearse')->name('hearse.select');
        });

        Route::controller(OtherServicesController::class)->group(function () {
            Route::post('/other-services/save', 'store')->name('other-services.store');
        });

        Route::controller(ServiceRequestController::class)->group(function () {
            Route::post('/service-request/save', 'store')->name('service-request.store');
        });


    });

});

// CUSTOMER
Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::prefix('customer')->controller(CustomerDasboardController::class)->as('customer.')->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    //CARTS
    Route::prefix('/cart')->as('cart.')->controller(CartController::class)->group(function () {
        Route::get('/cart', 'index')->name('index');
        Route::put('/{cartItem}/add', 'addQuantity')->name('add');
        Route::post('/show/{product}/save', 'addToCart')->name('save');
        Route::delete('/cart-delete/{cartItem}', 'destroy')->name('destroy');

        Route::put('/{cartItem}/subtract', 'subtractQuantity')->name('subtract');
    });


    // OORDERS
    Route::prefix('/order')->controller(OrderController::class)->as('order.')->group(function () {
        Route::post('/create', 'store')->name('store');
        Route::get('/existing', 'index')->name('index');
        Route::delete('/{orderId}/delete', 'destroy')->name('destroy');
    });


    


});
// END CUSTOMER

// ADMIN
Route::middleware(['auth', 'role:admin'])->group(function () {

    // dashboard
    Route::prefix('/admin')->controller(AdminDashboardController::class)->as('admin.')->group(function () {
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

    // caskets
    Route::prefix('/casket')->controller(CasketController::class)->as('casket.')->group(function () {
        Route::get('/caskets', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{casket}/edit', 'edit')->name('edit');
        Route::put('/{casket}/update', 'update')->name('update');
        Route::delete('/{casket}/delete', 'destroy')->name('destroy');
    });

    // hearses
    Route::prefix('/hearse')->controller(HearseController::class)->as('hearse.')->group(function () {
        Route::get('/hearses', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{hearse}/edit', 'edit')->name('edit');
        Route::put('/{hearse}/update', 'update')->name('update');
        Route::delete('/{hearse}/delete', 'destroy')->name('destroy');
    });

    // products
    Route::prefix('/product')->controller(ProductController::class)->as('product.')->group(function () {
        Route::get('/products', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{product}/edit', 'edit')->name('edit');
        Route::put('/{product}/update', 'update')->name('update');
        Route::delete('/{product}/delete', 'destroy')->name('destroy');
    });

    

    // orders
    Route::prefix('/request')->controller(ServiceRequestController::class)->as('orders.')->group(function () {
        Route::get('/pending', 'pending')->name('current');
        Route::get('/completed', 'completedOrders')->name('completed');
        Route::get('/current/{orderId}', 'processOrder')->name('process');
        Route::put('/current/{orderId}/confirm', 'confirmOrder')->name('confirm');
    });


    Route::prefix('/request')->as('service.')->group(function () {
        Route::controller(ServiceRequestController::class)->group(function () {
            Route::get('/pending', 'pending')->name('pending');
            Route::get('/completed', 'completed')->name('completed');
            Route::get('/{requestId}/process', 'process')->name('process');
            Route::put('/{requestId}/complete', 'complete')->name('complete');
        });
    });


});
// END ADMIN

// OWNER
Route::middleware(['auth', 'role:owner'])->group(function () {
    // dashboard
    Route::prefix('owner')->controller(OwnerDashboardController::class)->as('owner.')->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
});
// END OWNER


require __DIR__ . '/auth.php';