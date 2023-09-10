<?php
use App\Http\Controllers\EventController;
use App\Http\Controllers\FullCalendarController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/', [EventController::class, 'index'])
        ->name('root');
    Route::resource('events', EventController::class);

    Route::get('/calendar', function() {
        return view('full-calendar');
    })->name('calendar');

    Route::get('/calendar/action', [FullCalendarController::class, 'index']);
    Route::post('/calendar/action', [FullCalendarController::class, 'action']);
});
