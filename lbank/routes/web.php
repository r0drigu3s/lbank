<?php

use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;
use Doctrine\DBAL\Schema\Index;
use Faker\Test\Provider\UserAgentTest;
use Illuminate\Support\Facades\Route;

require_once __DIR__ . '/../vendor/autoload.php';

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

Route::get('/', function () {
	return 'Rotas Lbank';
});

// rota para os Controllers e o método index
Route::get(
	'/users',
	[
		UserController::class, 'index'
	]
);
Route::get(
	'/accounts',
	[
		AccountController::class, 'index'
	]
);
Route::get(
	'/transactions',
	[
		TransactionController::class, 'index'
	]
);

// rota para os Controllers e o método create/operation
Route::get(
	'/users/create/{name}/{age}/{email}',
	[
		UserController::class, 'create'
	]
);
Route::get(
	'/accounts/create/{name}/{number_account}/{balance}',
	[
		AccountController::class, 'create'
	]
);
Route::get(
	'/transactions/operation/{name}/{number_account}/{type}/{amount}',
	[
		TransactionController::class, 'operation'
	]
);
