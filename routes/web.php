<?php

use App\Http\Controllers\Admin\DestinyController as AdminDestinyController;
use App\Http\Controllers\Admin\FleetController as AdminFleetController;
use App\Http\Controllers\Admin\TicketController as AdminTicketController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FleetController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\DestinyController;
use App\Http\Controllers\ProfileController;
use Faker\Provider\UserAgent;

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

Route::get('/destinies', [DestinyController::class,'index'])->name('destinies.index');

Route::get('/users', [UserController::class,'index'])->name('users.index');

Route::get('/tickets', [TicketController::class,'index'])->name('tickets.index');

Route::get('/tickets/{ticket}', [TicketController::class,'show'])->name('tickets.show');

Route::get('/destinies/{destiny}',[DestinyController::class ,'show'])->name('destinies.show');

Route::get('/fleets', [FleetController::class,'index'])->name('fleets.index');

Route::get('/fleets/{fleet}', [FleetController::class,'show'])->name('fleets.show');

Route::get('/seats/{seat}', [SeatController::class,'show'])->name('seats.show');

Route::get('/admin/tickets',[AdminTicketController::class,'index'])->middleware(['auth', 'verified'])->name('admin.tickets.index');

Route::get('/admin/fleets',[AdminFleetController::class,'index'])->middleware(['auth', 'verified'])->name('admin.fleets.index');

Route::get('/admin/destinies',[AdminDestinyController::class,'index'])->middleware(['auth', 'verified'])->name('admin.destinies.index');

Route::get('/admin/users',[AdminUserController::class,'index'])->middleware(['auth', 'verified'])->name('admin.users.index');

Route::get('admin/tickets/create',[AdminTicketController::class,'create'])->middleware(['auth', 'verified'])->name('admin.tickets.create');

Route::get('admin/fleets/create',[AdminFleetController::class,'create'])->middleware(['auth', 'verified'])->name('admin.fleets.create');

Route::get('admin/destinies/create',[AdminDestinyController::class,'create'])->middleware(['auth', 'verified'])->name('admin.destinies.create');

Route::post('/admin/tickets',[AdminTicketController::class,'store'])->middleware(['auth', 'verified'])->name('admin.tickets.store');

Route::post('/admin/destinies',[AdminDestinyController::class,'store'])->middleware(['auth', 'verified'])->name('admin.destinies.store');

Route::post('/admin/fleets',[AdminFleetController::class,'store'])->middleware(['auth', 'verified'])->name('admin.fleets.store');

Route::get('/admin/destinies/{destiny}',[AdminDestinyController::class,'show'])->middleware(['auth', 'verified'])->name('admin.destinies.show');

Route::get('/admin/fleets/{fleet}',[AdminFleetController::class,'show'])->middleware(['auth', 'verified'])->name('admin.fleets.show');

Route::get('/admin/tickets/{ticket}',[AdminTicketController::class,'show'])->middleware(['auth', 'verified'])->name('admin.tickets.show');

Route::get('/admin/users/{user}',[AdminUserController::class,'show'])->middleware(['auth', 'verified'])->name('admin.users.show');

Route::get('/admin/destinies/{destiny}/edit',[AdminDestinyController::class,'edit'])->middleware(['auth', 'verified'])->name('admin.destinies.edit');

Route::put('/admin/destinies/{destiny}',[AdminDestinyController::class,'update'])->middleware(['auth', 'verified'])->name('admin.destinies.update');

Route::delete('/admin/destinies/{destiny}',[AdminDestinyController::class,'destroy'])->middleware(['auth', 'verified'])->name('admin.destinies.destroy');

Route::get('/admin',function(){
    return view('admin.index');
})->middleware(['auth', 'verified']);

Route::get('/', function(){
    return view('new');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users',[UserController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
