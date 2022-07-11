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
	echo '| Rotas Lbank |';
});
