
<?php

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
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminDashboardController;

Route::get('/admin-login', [AdminLoginController::class, 'index']);
Route::post('/auth', [AdminLoginController::class, 'auth']);
//DAshboard
Route::get('/dashboard', [AdminDashboardController::class, 'index']);
Route::get('/cockpit/list', [AdminDashboardController::class, 'cockpit_list']);
Route::get('/cockpit/create/{id?}', [AdminDashboardController::class, 'cockpit_create_page']);
Route::post('/cockpit/create/{id?}', [AdminDashboardController::class, 'cockpit_create']);
//agent
Route::get('/agent/list', [AdminDashboardController::class, 'agent_list']);
Route::get('/agent/create/{id?}', [AdminDashboardController::class, 'agent_create_page']);
Route::post('/agent/create/{id?}', [AdminDashboardController::class, 'create_agent']);
Route::get('/live-page', [AdminDashboardController::class, 'live_page']);
Route::post('/create/live-page', [AdminDashboardController::class, 'create_live']);
Route::get('/matches', [AdminDashboardController::class, 'matches_page']);
Route::post('/matches', [AdminDashboardController::class, 'create_match']);