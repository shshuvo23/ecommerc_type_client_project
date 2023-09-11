<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\employee\BlogController as EmployeeBlogController;
use App\Http\Controllers\employee\BrandController as EmployeeBrandController;
use App\Http\Controllers\employee\Categorycontroller as EmployeeCategorycontroller;
use App\Http\Controllers\employee\ProductController as EmployeeProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/detail/{slug}', [HomeController::class, 'productDetail'])->name('product.detail');

Route::get('/blog/detail/{slug}', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::get('/blog', [HomeController::class, 'allBlog'])->name('blog.all');

Route::get('/category/product/{id}', [HomeController::class, 'categoryWiseProduct'])->name('category.show-product');
Route::get('/brand/product/{id}', [HomeController::class, 'brandWiseProduct'])->name('brand.show-product');

Route::get('/products/filter', [HomeController::class, 'filter'])->name('products.filter');

Route::get('/product/search', [HomeController::class, 'productSearch'])->name('product.search');

Route::get('/dashboard', [AuthController::class, 'redirect'])->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/user-add', [UserController::class, 'index'])->name('user.add');
    Route::post('/user-create', [UserController::class, 'createUser'])->name('user.create');
    Route::get('/user-list', [UserController::class, 'userList'])->name('user.list');
    Route::get('/user-list/admin{id}', [UserController::class, 'makeAdmin'])->name('user.makeAdmin');

    Route::get('/admin/category-add', [CategoryController::class, 'index'])->name('admin.category-add');
    Route::post('/category-create', [CategoryController::class, 'createCategory'])->name('admin.category-create');
    Route::get('/category-list', [CategoryController::class, 'categoryList'])->name('admin.category-list');
    Route::get('/category-delete/{id}', [CategoryController::class, 'categoryDelete'])->name('admin.category-delete');

    Route::get('/brand-add', [BrandController::class, 'index'])->name('admin.brand-add');
    Route::post('/brand-create', [BrandController::class, 'createBrand'])->name('admin.brand-create');
    Route::get('/brand-list', [BrandController::class, 'brandList'])->name('admin.brand-list');
    Route::get('/brand-delete/{id}', [BrandController::class, 'brandDelete'])->name('admin.brand-delete');

    Route::get('/slider-add', [SliderController::class, 'index'])->name('slider.add');
    Route::post('/slider-create', [SliderController::class, 'createSlider'])->name('slider.create');
    Route::get('/slider-list', [SliderController::class, 'sliderList'])->name('slider.list');
    Route::get('/slider/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');

    Route::get('/product/add', [ProductController::class, 'index'])->name('product.add');
    Route::post('/product/create', [ProductController::class, 'productAdd'])->name('product.create');
    Route::get('/product/list', [ProductController::class, 'productList'])->name('product.list');
    Route::get('/product/edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'productUpdate'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete');

    Route::get('/blog-add', [BlogController::class, 'index'])->name('admin.blog-add');
    Route::post('/blog-create', [BlogController::class, 'createBlog'])->name('admin.blog-create');
    Route::get('/blog-list', [BlogController::class, 'blogList'])->name('admin.blog-list');
    Route::get('/blog-edit/{id}', [BlogController::class, 'blogEdit'])->name('admin.blog-edit');
    Route::post('/blog-update/{id}', [BlogController::class, 'blogUpdate'])->name('admin.blog-update');
    Route::get('/blog-delete/{id}', [BlogController::class, 'blogDelete'])->name('admin.blog-delete');
});

Route::middleware('employee')->group(function () {
    Route::get('/category/add', [EmployeeCategorycontroller::class, 'index'])->name('employee.category-add');
    Route::post('/category/create', [EmployeeCategorycontroller::class, 'createCategory'])->name('employee.category-create');
    Route::get('/category/list', [EmployeeCategorycontroller::class, 'categoryList'])->name('employee.category-list');
    Route::get('/category/delete/{id}', [EmployeeCategorycontroller::class, 'categoryDelete'])->name('employee.category-delete');

    Route::get('/brand/add', [EmployeeBrandController::class, 'index'])->name('emloyee.brand-add');
    Route::post('/brand/create', [EmployeeBrandController::class, 'createBrand'])->name('emloyee.brand-create');
    Route::get('/brand/list', [EmployeeBrandController::class, 'brandList'])->name('emloyee.brand-list');
    Route::get('/brand/delete/{id}', [EmployeeBrandController::class, 'brandDelete'])->name('emloyee.brand-delete');

    Route::get('/product-add', [EmployeeProductController::class, 'index'])->name('employee.product-add');
    Route::post('/product-create', [EmployeeProductController::class, 'productAdd'])->name('employee.product-create');
    Route::get('/product-list', [EmployeeProductController::class, 'productList'])->name('employee.product-list');
    Route::get('/product-edit/{id}', [EmployeeProductController::class, 'productEdit'])->name('employee.product-edit');
    Route::post('/product-update/{id}', [EmployeeProductController::class, 'productUpdate'])->name('employee.product-update');
    Route::post('/product-delete/{id}', [EmployeeProductController::class, 'productDelete'])->name('employee.product-delete');

    Route::get('/blog/add', [EmployeeBlogController::class, 'index'])->name('employee.blog-add');
    Route::post('/blog/create', [EmployeeBlogController::class, 'createBlog'])->name('employee.blog-create');
    Route::get('/blog/list', [EmployeeBlogController::class, 'blogList'])->name('employee.blog-list');
    Route::get('/blog/edit/{id}', [EmployeeBlogController::class, 'blogEdit'])->name('employee.blog-edit');
    Route::post('/blog/update/{id}', [EmployeeBlogController::class, 'blogUpdate'])->name('employee.blog-update');
    Route::get('/blog/delete/{id}', [EmployeeBlogController::class, 'blogDelete'])->name('employee.blog-delete');
});
