<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\ChartmController;
use App\Http\Controllers\ChartyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\TeamController;

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

Route::get('/storage-link', function () {
  $targetFolder = storage_path('app/public');
  $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
  symlink($targetFolder, $linkFolder);
});



Route::post('/', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/', [HomeController::class, 'index'])->name('home.layout.main');

Route::prefix('article')->group(function () {
  Route::get('/index/{id}', [ArticleController::class, 'index']);
});

Route::prefix('news')->group(function () {
  Route::get('/index/{id}', [NewsController::class, 'index']);
});

Route::prefix('team')->group(function () {
  Route::get('/index', [TeamController::class, 'index']);
});

Route::prefix('customers')->group(function () {
  Route::get('/index', [CustomersController::class, 'index']);
});

Route::prefix('blog')->group(function () {
  Route::get('/index', [BlogController::class, 'index']);
});

Route::prefix('faq')->group(function () {
  Route::get('/index', [FaqController::class, 'index']);
});


Route::prefix("admin")->group(function () {
  // index => tombol new, tombol edit, tombol delete
  // edit => url buat ke controller nya
  Route::get('/', [AuthController::class, 'index'])->middleware('guest');
  Route::get('/sign_up', [AuthController::class, 'sign_up']);
  Route::post('/registration', [AuthController::class, 'registration'])->middleware('guest');

  Route::prefix('dashboard')->group(function () {
    Route::get('/index', [AdminController::class, 'index'])->middleware('auth');
  });

  Route::prefix('header')->group(function () {
    Route::get('/index', [HeaderController::class, 'index'])->middleware('auth');
    Route::get('/create', [HeaderController::class, 'create'])->middleware('auth');
    Route::post('/store', [HeaderController::class, 'store']);
    Route::get('/edit/{id}', [HeaderController::class, 'edit'])->middleware('auth');
    Route::post('/update/{id}', [HeaderController::class, 'update']);
    Route::post('/destroy/{id}', [HeaderController::class, 'destroy']);
  });

  Route::prefix('summary')->group(function () {
    Route::get('/index', [SummaryController::class, 'index'])->middleware('auth');
    Route::get('/create', [SummaryController::class, 'create'])->middleware('auth');
    Route::post('/store', [SummaryController::class, 'store']);
    Route::get('/edit/{id}', [SummaryController::class, 'edit'])->middleware('auth');
    Route::post('/update/{id}', [SummaryController::class, 'update']);
  });

  Route::prefix('chartm')->group(function () {
    Route::get('/index', [ChartmController::class, 'index'])->middleware('auth');
    Route::get('/create', [ChartmController::class, 'create'])->middleware('auth');
    Route::post('/store', [ChartmController::class, 'store']);
    Route::get('/edit/{id}', [ChartmController::class, 'edit'])->middleware('auth');
    Route::post('/update/{id}', [ChartmController::class, 'update']);
    Route::post('/destroy/{id}', [ChartmController::class, 'destroy']);
  });

  Route::prefix('charty')->group(function () {
    Route::get('/index', [ChartyController::class, 'index'])->middleware('auth');
    Route::get('/create', [ChartyController::class, 'create'])->middleware('auth');
    Route::post('/store', [ChartyController::class, 'store']);
    Route::get('/edit/{id}', [ChartyController::class, 'edit'])->middleware('auth');
    Route::post('/update/{id}', [ChartyController::class, 'update']);
    Route::post('/destroy/{id}', [ChartyController::class, 'destroy']);
  });

  Route::prefix('gallery')->group(function () {
    Route::get('/index', [GalleryController::class, 'index'])->middleware('auth');
    Route::get('/create', [GalleryController::class, 'create'])->middleware('auth');
    Route::post('/store', [GalleryController::class, 'store']);
    Route::get('/edit/{id}', [GalleryController::class, 'edit'])->middleware('auth');
    Route::post('/update/{id}', [GalleryController::class, 'update']);
    Route::post('/destroy/{id}', [GalleryController::class, 'destroy']);
  });

  Route::prefix('article')->group(function () {
    Route::get('/aindex', [ArticleController::class, 'aindex'])->middleware('auth');
    Route::get('/create', [ArticleController::class, 'create'])->middleware('auth');
    Route::post('/store', [ArticleController::class, 'store']);
    Route::get('/edit/{id}', [ArticleController::class, 'edit'])->middleware('auth');
    Route::post('/update/{id}', [ArticleController::class, 'update']);
    Route::post('/destroy/{id}', [ArticleController::class, 'destroy']);
  });

  Route::prefix('news')->group(function () {
    Route::get('/aindex', [NewsController::class, 'aindex'])->middleware('auth');
    Route::get('/create', [NewsController::class, 'create'])->middleware('auth');
    Route::post('/store', [NewsController::class, 'store']);
    Route::get('/edit/{id}', [NewsController::class, 'edit'])->middleware('auth');
    Route::post('/update/{id}', [NewsController::class, 'update']);
    Route::post('/destroy/{id}', [NewsController::class, 'destroy']);
  });

  Route::prefix('customers')->group(function () {
    Route::get('/aindex', [CustomersController::class, 'aindex'])->middleware('auth');
    Route::get('/create', [CustomersController::class, 'create'])->middleware('auth');
    Route::post('/store', [CustomersController::class, 'store']);
    Route::get('/edit/{id}', [CustomersController::class, 'edit'])->middleware('auth');
    Route::post('/update/{id}', [CustomersController::class, 'update']);
    Route::post('/destroy/{id}', [CustomersController::class, 'destroy']);
  });

  Route::prefix('faq')->group(function () {
    Route::get('/aindex', [FaqController::class, 'aindex'])->middleware('auth');
    Route::get('/create', [FaqController::class, 'create'])->middleware('auth');
    Route::post('/store', [FaqController::class, 'store']);
    Route::get('/edit/{id}', [FaqController::class, 'edit'])->middleware('auth');
    Route::post('/update/{id}', [FaqController::class, 'update']);
    Route::post('/destroy/{id}', [FaqController::class, 'destroy']);
  });
});
