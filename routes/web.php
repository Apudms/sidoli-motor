<?php

use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Owner\OwnerDashboardComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeComponent::class);
Route::get('/toko', ShopComponent::class);
Route::get('/keranjang', CartComponent::class)->name('produk.keranjang');
Route::get('/checkout', CheckoutComponent::class);
Route::get('/produk/{slug}', DetailsComponent::class)->name('produk.detail');
Route::get('/kategori-produk/{category_slug}', CategoryComponent::class)->name('produk.kategori');
Route::get('/cari', SearchComponent::class)->name('produk.cari');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//For Owner
Route::middleware(['auth:sanctum', 'verified', 'authowner'])->group(function () {
    Route::get('/owner/dashboard', OwnerDashboardComponent::class)->name('owner.dashboard');
    // Route::get('/owner/brands', OwnerBrandComponent::class)->name('owner.brands');
    // Route::get('/owner/brands/add', OwnerAddBrandComponent::class)->name('owner.addbrands');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/kategori', AdminCategoryComponent::class)->name('admin.kategori');
    Route::get('/admin/kategori/tambah', AdminAddCategoryComponent::class)->name('admin.tambahkategori');
    Route::get('/admin/kategori/ubah/{category_slug}', AdminEditCategoryComponent::class)->name('admin.ubahkategori');

    // Route::get('/admin/brands', AdminBrandComponent::class)->name('admin.brands');
    // Route::get('/admin/brands/add', AdminAddBrandComponent::class)->name('admin.addbrands');
});

//For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});
