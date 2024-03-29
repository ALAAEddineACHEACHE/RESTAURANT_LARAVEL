<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Dashboard Admin Route
// Route::get('admin', [AdminController::class, 'redirects']);
Route::get('admin', [HomeController::class, 'redirects']);

//Users Section
Route::get('users', [AdminController::class, 'user']);
Route::get('deleteuser/{id}', [AdminController::class, 'deleteuser']);
//Food Section
Route::get('addfoodmenu', [AdminController::class, 'addfoodmenu'])->name('addfoodmenu');
Route::get('foodmenu', [AdminController::class, 'foodmenu'])->name('foodmenuprincipal');
Route::post('uploadfood', [AdminController::class, 'upload'])->name('uploadfood');
Route::get('updateview/{id}', [AdminController::class, 'updateview'])->name('updateview');
Route::post('update/{id}', [AdminController::class, 'update'])->name('update');
Route::get('deletemenu/{id}', [AdminController::class, 'deletemenu'])->name('deletemenu');
//Chiefs Section
Route::get('viewchefs', [AdminController::class, 'viewchefs'])->name('viewchefs');
Route::get('addchef', [AdminController::class, 'addchef'])->name('addchef');
Route::post('uploadchef', [AdminController::class, 'uploadchef'])->name('uploadchef');
Route::get('updatechef/{id}', [AdminController::class, 'updatechef'])->name('updatechef');
Route::post('updatefoodchef/{id}', [AdminController::class, 'updatefoodchef'])->name('updatefoodchef');
Route::get('deletechef/{id}', [AdminController::class, 'deletechef'])->name('deletechef');
//Reservations Section
Route::post('reservation', [AdminController::class, 'reservation'])->name('reservation');
Route::get('viewreservation', [AdminController::class, 'viewreservation'])->name('viewreservation');
//Carts Section
Route::post('/addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/showcart/{id}', [HomeController::class, 'showcart']);
Route::get('/remove/{id}', [HomeController::class, 'remove']);
Route::post('orderconfirm', [HomeController::class, 'orderconfirm'])->name('orderconfirm');
Route::get('orders', [AdminController::class, 'orders']);
Route::get('deleteorder/{id}', [AdminController::class, 'deleteorder']);
//GeneralSettings Route
Route::get('generalsettings', [AdminController::class, 'generalsettings']);
Route::put('profile-edit/{id}', [AdminController::class, 'updateProfile'])->name('profile.edit');
//DashboardClient
Route::get('viewclientreservations', [ClientController::class, 'viewclientreservations']);
//Client Reservations
Route::get('clientreservation', [ClientController::class, 'viewreservation'])->name('viewreservation');
Route::get('deletereservation/{id}', [ClientController::class, 'deletereservation'])->name('deletereservation');
//Client Orders
// Route::get('clientorders', [ClientController::class, 'viewclientorders'])->name('viewclientorders');
// Route::get('deleteclientorder/{id}', [ClientController::class, 'deleteclientorder'])->name('deleteclientorder');
//Dashboard of the Restaurateur
Route::get('vieworders', [HomeController::class, 'viewdashboard']);
Route::get('removeorder/{id}', [HomeController::class, 'removeorder']);
