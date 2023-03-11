<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\adminsConroller;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Frontend\SingleProductController;
use App\Http\Controllers\Frontend\CollectionAllController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CollectionController;


// For Login Only
Route::get('/admin', function () {
    return view('admin.login');
})->middleware('alreadyLoggedIn');

Route::post('/admin', [IndexController::class, 'LogIn']);
Route::get('/admin/logout', [IndexController::class, 'LogOut'])->middleware('isLoggedIn');

Route::get('/admin/index', [IndexController::class, 'index'])->middleware('isLoggedIn');

// For Category Only
Route::group(['prefix' => '/admin', 'middleware' => 'isLoggedIn' ], function () {
    //For Admin
    Route::get('/admins', [adminsConroller::class, 'index']);   
    Route::get('/add-admin', [adminsConroller::class, 'create']);
    Route::post('/add-admin', [adminsConroller::class, 'store']);
    Route::get('/edit-admin/{id}', [adminsConroller::class, 'edit']);
    Route::put('/update-admin/{id}', [adminsConroller::class, 'update']);
    Route::get('/draft-admin/{id}', [adminsConroller::class, 'draft']);
    Route::get('/draft-admin-list', [adminsConroller::class, 'DraftList']);
    Route::get('/retore-admin/{id}', [adminsConroller::class, 'RestoreAdmin']);
    Route::get('/delete-admin/{id}', [adminsConroller::class, 'DeleteAdmin']);
    //For Categorys
    Route::get('/categorys', [CategoryController::class, 'index']);
    Route::get('/add-category', [CategoryController::class, 'create']);
    Route::post('/add-category', [CategoryController::class, 'store']);
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('/update-category/{id}', [CategoryController::class, 'update']);
    Route::get('/delete-category/{id}', [CategoryController::class, 'delete']); 
    //For Product
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/add-product', [ProductController::class, 'create']);
    Route::post('/add-product', [ProductController::class, 'store']);
    Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('/update-product/{id}', [ProductController::class, 'update']);
    Route::get('/draft-product/{id}', [ProductController::class, 'draft']);
    Route::get('/draft-product-list', [ProductController::class, 'DraftList']);
    Route::get('retore-product/{id}', [ProductController::class, 'RestoreProduct']);
    Route::get('/delete-product/{id}', [ProductController::class, 'DeleteProduct']);
});




// For Frontend Only

// Home Page
Route::get('/', [HomeController::class, 'index']);

// Main Product
Route::get('/products/{slug}', [SingleProductController::class, 'index']);

// All Collections
Route::get('/collections/all', [CollectionAllController::class, 'index']);

// User Login
Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'logInUser']);
Route::get('/logout', [UserController::class, 'logout']);

// Cart Page
Route::get('/cart', [CartController::class, 'index']);

// Collection Particular
Route::get('/collections/{slug}', [CollectionController::class, 'collections']);


