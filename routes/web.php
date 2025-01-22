<?php

use App\Models\Tickets;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketsController;
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

Route::get('/', [TicketsController::class, 'landing_ticket']);
Route::get('tiket', [TicketsController::class, 'entry_ticket']);
Route::get('tiket/{id}', [TicketsController::class, 'detail_ticket']);