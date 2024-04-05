<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DepartureController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\OriginController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\FlightController;
use App\Http\Controllers\Admin\OfferController;


// ====================FrontEnd Controllers Path ================


use App\Http\Controllers\Frontend\FrontendController;


// ==================== End FrontEnd Controllers Path ==================




// =======================================FrontEnd Routes =============================================

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/get-places-by-country/{id}', [FrontendController::class, 'getPlaceByCountry'])->name('get-places-by-country');
Route::post('/search', [FrontendController::class, 'search'])->name('search');
Route::get('/packages/place/{id}', [FrontendController::class, 'getPackageByPlace'])->name('place.package');
Route::get('/packages/category/{id}', [FrontendController::class, 'getPackageByCategory'])->name('category.package');
Route::get('category/all', [FrontendController::class, 'categoryView'])->name('category.all');
Route::Post('submit-package-booking', [FrontendController::class, 'submitpackagebooking'])->name('submit-package-booking');
Route::get('package-details/{id}', [FrontendController::class, 'packagedetails'])->name('package-details');
Route::get('contact-us', [FrontendController::class, 'contactus'])->name('contact-us');
Route::post('contact-form-submit', [FrontendController::class, 'contactformsubmit'])->name('contact-form-submit');
Route::post('news-letter-submit', [FrontendController::class, 'newslettersubmit'])->name('news-letter-submit');



Route::get('all-packages', [FrontendController::class, 'allpackages'])->name('all-packages');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('offer', [FrontendController::class, 'offer'])->name('offer');
Route::get('countrys', [FrontendController::class, 'countrys'])->name('countrys');
Route::get('flight-tickets', [FrontendController::class, 'flighttickets'])->name('flight-tickets');
// Route::get('con', [FrontendController::class, 'about'])->name('about');
Route::get('blog-details/{id}', [FrontendController::class, 'blogdetails'])->name('blog-details');
Route::get('menu-package-details/{id}', [FrontendController::class, 'menupackagedetails'])->name('menu-package-details');
Route::Post('submit-tickets', [FrontendController::class, 'submittickets'])->name('submit-tickets');





// ================================== FrontEnd Routes End =============================================


// ========================================= Admin Routes Start =====================================
    Route::get('admin/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('admin/login', [LoginController::class, 'loginSubmit'])->name('admin.login');

Route::prefix('admin/')->name('admin.')->middleware('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


      // =========================================== departure_point Routes ======================================

      Route::group(['as' => 'departure_point.', 'prefix' => 'departure_point'], function () {
        Route::get('/list', [DepartureController::class, 'index'])->name('list');
        Route::get('/add', [DepartureController::class, 'create'])->name('add');
        Route::post('/submit', [DepartureController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [DepartureController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [DepartureController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [DepartureController::class, 'destroy'])->name('delete');
    });

    // =========================================== End departure_point Routes ======================================

    // =========================================== Country Routes ======================================

    Route::group(['as' => 'country.', 'prefix' => 'country'], function () {
        Route::get('/list', [CountryController::class, 'index'])->name('list');
        Route::get('/add', [CountryController::class, 'create'])->name('add');
        Route::post('/submit', [CountryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CountryController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CountryController::class, 'destroy'])->name('delete');
    });

    // =========================================== End Country Routes ======================================

    // =========================================== Place Routes ======================================

    Route::group(['as' => 'place.', 'prefix' => 'place'], function () {
        Route::get('/list', [PlaceController::class, 'index'])->name('list');
        Route::get('/add', [PlaceController::class, 'create'])->name('add');
        Route::post('/submit', [PlaceController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PlaceController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [PlaceController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [PlaceController::class, 'destroy'])->name('delete');
    });

    // =========================================== End Place Routes ======================================


    // =========================================== origin Routes ======================================

    Route::group(['as' => 'origin.', 'prefix' => 'origin'], function () {
        Route::get('/list', [OriginController::class, 'index'])->name('list');
        Route::get('/add', [OriginController::class, 'create'])->name('add');
        Route::post('/submit', [OriginController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [OriginController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [OriginController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [OriginController::class, 'destroy'])->name('delete');
    });

    // =========================================== End origin Routes ======================================

    // =========================================== destination Routes ======================================

    Route::group(['as' => 'destination.', 'prefix' => 'destination'], function () {
        Route::get('/list', [DestinationController::class, 'index'])->name('list');
        Route::get('/add', [DestinationController::class, 'create'])->name('add');
        Route::post('/submit', [DestinationController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [DestinationController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [DestinationController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [DestinationController::class, 'destroy'])->name('delete');
    });

    // =========================================== End destination Routes ======================================

    // =========================================== tickets Routes ======================================

    Route::group(['as' => 'tickets.', 'prefix' => 'tickets'], function () {
        Route::get('/list', [FlightController::class, 'index'])->name('list');
        // Route::get('/add', [FlightController::class, 'create'])->name('add');
        // Route::post('/submit', [FlightController::class, 'store'])->name('store');
        // Route::get('/edit/{id}', [FlightController::class, 'edit'])->name('edit');
        // Route::post('/update/{id}', [FlightController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [FlightController::class, 'destroy'])->name('delete');
    });

    // =========================================== End tickets Routes ======================================

    // =========================================== Category Routes ======================================

      Route::group(['as' => 'category.', 'prefix' => 'category'], function () {
        Route::get('/list', [CategoryController::class, 'index'])->name('list');
        Route::get('/add', [CategoryController::class, 'create'])->name('add');
        Route::post('/submit', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
    });

    // =========================================== End Category Routes ======================================

      // =========================================== Package Routes ======================================

      Route::group(['as' => 'package.', 'prefix' => 'package'], function () {
        Route::get('/list', [PackageController::class, 'index'])->name('list');
        Route::get('/add', [PackageController::class, 'create'])->name('add');
        Route::post('/submit', [PackageController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PackageController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [PackageController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [PackageController::class, 'destroy'])->name('delete');
        Route::get('/places/{country}', [PackageController::class, 'getPlacesByCountry'])->name('places.by_country');
        Route::get('/day/delete', [PackageController::class, 'deleteDay'])->name('day.delete');
        Route::get('/activity/delete', [PackageController::class, 'deleteActivity'])->name('activity.delete');

      });

    // =========================================== End Package Routes ======================================



      // =========================================== booking Routes ======================================

      Route::group(['as' => 'booking.', 'prefix' => 'booking'], function () {
        Route::get('/list', [BookingController::class, 'index'])->name('list');
        Route::get('/add', [BookingController::class, 'create'])->name('add');
        Route::post('/submit', [BookingController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BookingController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BookingController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [BookingController::class, 'destroy'])->name('delete');
        Route::get('/get-departures/{tourId}', [BookingController::class, 'getDepartures']);
      });

    // =========================================== End booking Routes ======================================



    // =========================================== Testimonial Routes ======================================

    Route::group(['as' => 'testimonial.', 'prefix' => 'testimonial'], function () {
        Route::get('/list', [TestimonialController::class, 'index'])->name('list');
        Route::get('/add', [TestimonialController::class, 'create'])->name('add');
        Route::post('/submit', [TestimonialController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [TestimonialController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [TestimonialController::class, 'destroy'])->name('delete');
    });

    // =========================================== End Testimonial Routes ======================================


    // =========================================== offer Routes ======================================

    Route::group(['as' => 'offer.', 'prefix' => 'offer'], function () {
        Route::get('/list', [OfferController::class, 'index'])->name('list');
        Route::get('/add', [OfferController::class, 'create'])->name('add');
        Route::post('/submit', [OfferController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [OfferController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [OfferController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [OfferController::class, 'destroy'])->name('delete');
    });

    // =========================================== End offer Routes ======================================


    // =========================================== Slider Routes ======================================

    Route::group(['as' => 'slider.', 'prefix' => 'slider'], function () {
        Route::get('/list', [SliderController::class, 'index'])->name('list');
        Route::get('/add', [SliderController::class, 'create'])->name('add');
        Route::post('/submit', [SliderController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [SliderController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [SliderController::class, 'destroy'])->name('delete');
    });

    // =========================================== End Slider Routes ======================================

    // ================================= Setting ==========================

    Route::group(['as' => 'setting.', 'prefix' => 'setting'], function () {
        Route::get('/list', [SettingController::class, 'index'])->name('list');
        Route::get('/add', [SettingController::class, 'create'])->name('add');
        Route::post('/submit', [SettingController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [SettingController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [SettingController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [SettingController::class, 'destroy'])->name('delete');
    });

    // ============================= End Setting ================================


    // ================================= blog ==========================

    Route::group(['as' => 'blog.', 'prefix' => 'blog'], function () {
        Route::get('/list', [BlogController::class, 'index'])->name('list');
        Route::get('/add', [BlogController::class, 'create'])->name('add');
        Route::post('/submit', [BlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BlogController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [BlogController::class, 'destroy'])->name('delete');
    });

    // ============================= End blog ================================


    Route::group(['as' => 'message.', 'prefix' => 'message'], function () {
        Route::get('/list', [SettingController::class, 'message'])->name('list');
    });
    Route::group(['as' => 'newsletter.', 'prefix' => 'newsletter'], function () {
        Route::get('/list', [SettingController::class, 'newsletter'])->name('list');
    });




    // ==================== Admin Routes End=======================

});


