<?php

use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

route::get('/', [AdminController::class, 'home']);

route::get('/home', [AdminController::class, 'index'])->name('home');

route::get('/create_room', [AdminController::class, 'create_room'])->middleware(['auth', 'admin']);
route::post('/add_room', [AdminController::class, 'add_room'])->middleware(['auth', 'admin']);
route::get('/view_room', [AdminController::class, 'view_room'])->middleware(['auth', 'admin']);

route::get('/room_delete/{id}', [AdminController::class, 'room_delete'])->middleware(['auth', 'admin']);
route::get('/room_update/{id}', [AdminController::class, 'room_update'])->middleware(['auth', 'admin']);
route::post('/edit_room/{id}', [AdminController::class, 'edit_room'])->middleware(['auth', 'admin']);

route::get('/room_details/{id}', [HomeController::class, 'room_details']);
route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);

route::get('/bookings', [AdminController::class, 'bookings'])->middleware(['auth', 'admin']);

route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking'])->middleware(['auth', 'admin']);
route::get('/approve_booking/{id}', [AdminController::class, 'approve_booking'])->middleware(['auth', 'admin']);
route::get('/cancel_booking/{id}', [AdminController::class, 'cancel_booking'])->middleware(['auth', 'admin']);

route::get('/view_gallery', [AdminController::class, 'view_gallery'])->middleware(['auth', 'admin']);

route::post('/upload_gallery', [AdminController::class, 'upload_gallery'])->middleware(['auth', 'admin']);
route::get('/delete_image/{id}', [AdminController::class, 'delete_image'])->middleware(['auth', 'admin']);

route::get('/add_offer', [AdminController::class, 'add_offer'])->middleware(['auth', 'admin']);

route::post('/add_discount', [AdminController::class, 'add_discount'])->middleware(['auth', 'admin']);
route::get('/delete_discount/{id}', [AdminController::class, 'delete_discount'])->middleware(['auth', 'admin']);

route::post('/contact', [HomeController::class, 'contact']);

route::get('/all_messages', [AdminController::class, 'all_messages'])->middleware(['auth', 'admin']);
route::get('/send_mail/{id}', [AdminController::class, 'send_mail'])->middleware(['auth', 'admin']);

route::get('/our_room', [HomeController::class, 'our_room']);
route::get('/about_us', [HomeController::class, 'about_us']);
route::get('/our_gallery', [HomeController::class, 'our_gallery']);
route::get('/faq', [HomeController::class, 'faq']);
route::get('/restaurant', [HomeController::class, 'restaurant']);
route::get('/services', [HomeController::class, 'services']);
route::get('/contact_us', [HomeController::class, 'contact_us']);

route::post('/reservation', [HomeController::class, 'reservation']);

route::get('/add_food_gallery', [ManagerController::class, 'add_food_gallery'])->middleware(['auth', 'manager']);
route::get('/update_gallery', [ManagerController::class, 'update_gallery'])->middleware(['auth', 'manager']);
route::get('/delete_food_image', [ManagerController::class, 'delete_food_image'])->middleware(['auth', 'manager']);

route::get('/add_menu', [ManagerController::class, 'add_menu'])->middleware(['auth', 'manager']);
route::get('/view_menu', [ManagerController::class, 'view_menu'])->middleware(['auth', 'manager']);
route::post('/add_item', [ManagerController::class, 'add_item'])->middleware(['auth', 'manager']);

route::get('/item_delete/{id}', [ManagerController::class, 'item_delete'])->middleware(['auth', 'manager']);
route::get('/update_item/{id}', [ManagerController::class, 'update_item'])->middleware(['auth', 'manager']);
route::post('/edit_item/{id}', [ManagerController::class, 'edit_item'])->middleware(['auth', 'manager']);

route::get('/view_reservation', [ManagerController::class, 'view_reservation'])->middleware(['auth', 'manager']);
route::get('/delete_reservation/{id}', [ManagerController::class, 'delete_reservation'])->middleware(['auth', 'manager']);
route::get('/approve_reservation/{id}', [ManagerController::class, 'approve_reservation'])->middleware(['auth', 'manager']);
route::get('/cancel_reservation/{id}', [ManagerController::class, 'cancel_reservation'])->middleware(['auth', 'manager']);


Route::post('check_booking', [HomeController::class, 'check_booking']);
