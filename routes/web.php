<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\BookingAdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserFoodController;
use App\Http\Controllers\Admin\FoodOrderAdminController;
use App\Http\Controllers\Admin\FoodMenuAdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Admin\FeedbackAdminController;
use App\Http\Controllers\Admin\RoomAdminController;
use App\Http\Controllers\UserPaymentController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/rooms', 'pages.rooms')->name('rooms');
// Route::view('/booking', 'pages.booking')->name('booking');
Route::view('/contact-us', 'pages.contact')->name('contact');
Route::view('/more', 'pages.more')->name('more');
Route::view('/more/gallery', 'pages.more-gallery')->name('more.gallery');
Route::get('/more/feedbacks',
[FeedbackController::class, 'showPublicFeedbacks'])

->name('more.feedbacks');
Route::view('/more/offers', 'pages.more-offers')->name('more.offers');


// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::post('/check-availability', [AvailabilityController::class, 'check'])
->name('availability.check');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function() {
    if(auth()->user()->user_type === 'admin'){
        return redirect()->route('admin.dashboard');
    }

    return redirect()->route('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


////////////////////////////////////////////////////////////////
//User dashboard
Route::middleware(['auth', 'role:user'])->group(function (){
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
    ->name('user.dashboard');
});

Route::middleware('auth')->group(function () {

    // USER DASHBOARD EXTRA PAGES
    // Route::get('/user/rooms', fn () => 'User Rooms')->name('user.rooms');
    // Route::get('/user/food-menus', fn () => 'User Food Menus')->name('user.food-menus');
    
    Route::get('/user/feedbacks', fn () => 'User Feedbacks')->name('user.feedbacks');
    Route::get('/user/vehicles', fn () => 'User Vehicles')->name('user.vehicles');

    // NEW: payments
    Route::get('/user/payments', [UserPaymentController::class, 'index'])
        ->name('user.payments');

    Route::post('/user/payments/{booking}/update-method', [UserPaymentController::class, 'updateMethod'])
    ->name('user.payments.updateMethod');

    Route::post('/user/payments/{booking}/proceed', [UserPaymentController::class, 'proceed'])
    ->name('user.payments.proceed');

});

//Food Orders
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/food-menus', [UserFoodController::class, 'index'])
        ->name('user.food-menus');
});

// Route::get('/user/food-menus', [UserFoodController::class, 'index'])
//     ->name('user.food-menus');

Route::post('/user/food-orders', [UserFoodController::class, 'store'])
    ->name('user.food-orders.store');

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::view('/user/rooms', 'user.rooms')->name('user.rooms');
});

////////////////////////////////////////////////////////////////////////
//Admin dashboard
Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');
});



// Route::get('/admin/food-orders', [FoodOrderAdminController::class, 'index'])
//     ->name('admin.food-orders');


// ADMIN routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Route::get('/admin/rooms', fn () => 'Admin Rooms')->name('admin.rooms');

    Route::get('/admin/rooms', [RoomAdminController::class, 'index'])
        ->name('admin.rooms');

    Route::get('/admin/bookings', [BookingAdminController::class, 'index'])
        ->name('admin.bookings');   // ← changed 
    // Route::get('/admin/bookings', fn () => 'Admin Bookings')->name('admin.bookings');
    Route::get('/admin/customers', fn () => 'Admin Customers')->name('admin.customers');
    Route::get('/admin/food-menus', fn () => 'Admin Food Menus')->name('admin.food-menus');
    // Route::get('/admin/food-orders', fn () => 'Admin Food Orders')->name('admin.food-orders');
    Route::get('/admin/feedbacks', fn () => 'Admin Feedbacks')->name('admin.feedbacks');

    Route::post('/admin/booking/{booking}/cancel', [BookingAdminController::class, 'cancel'])
        ->name('admin.booking.cancel');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/food-orders', [FoodOrderAdminController::class, 'index'])
        ->name('admin.food-orders.index');
});


////////////////Food Menu Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/food-menus', [FoodMenuAdminController::class, 'index'])
        ->name('admin.food-menus.index');

    Route::post('/admin/food-menus', [FoodMenuAdminController::class, 'store'])
        ->name('admin.food-menus.store');
});

//show booking form
Route::get('/booking', [BookingController::class, 'create'])->name('booking');

//handle form submit
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');





//User Feedback Side
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/feedbacks', [FeedbackController::class, 'create'])
        ->name('user.feedbacks');
    Route::post('/user/feedbacks', [FeedbackController::class, 'store'])
        ->name('user.feedbacks.store');
});

//User Booked room
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
        ->name('user.dashboard');

    Route::get('/user/rooms', [UserDashboardController::class, 'rooms'])
        ->name('user.rooms');
});



// Admin feedback page
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/feedbacks', [FeedbackAdminController::class, 'index'])
        ->name('admin.feedbacks.index');
});







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
