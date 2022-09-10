<?php

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
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/pos', [PosController::class, 'index'])->name('pos');

    Route::get('/test', function () {
        return view('test');
    });

    Route::get('orders/', function() { return view('order'); })->name('orders.index');
    Route::get('orders/metode-pembayaran', function() { return view('dashboard.dashboard'); })->name('orders.metode-pembayaran');
    Route::get('orders/cicilan', function() { return view('dashboard.dashboard'); })->name('orders.cicilan');

    Route::get('suplier/', function() { return view ('dashboard.dashboard'); })->name('suplier.index');
    Route::get('suplier/create', function() { return view ('dashboard.dashboard'); })->name('suplier.create');

    Route::get('akunting/expanses', function() { return view('dashboard.dashboard'); })->name('akunting.expanses');
    Route::get('akunting/create-expanses', function() { return view('dashboard.dashboard'); })->name('akunting.create-expanses');
    Route::get('akunting/cash-flow-history', function() { return view('dashboard.dashboard'); })->name('akunting.cash-flow-history');
    Route::get('akunting/akun', function() { return view('dashboard.dashboard'); })->name('akunting.akun');
    Route::get('akunting/create-akun', function() { return view('dashboard.dashboard'); })->name('akunting.create-akun');

    Route::get('pajak/', function() { return view('dashboard.dashboard'); })->name('pajak.index');
    Route::get('pajak/tambah', function() { return view('dashboard.dashboard'); })->name('pajak.create');
    Route::get('pajak/taxes-group', function() { return view('dashboard.dashboard'); })->name('pajak.taxes-group');
    Route::get('pajak/taxes-group/create', function() { return view('dashboard.dashboard'); })->name('pajak.create-taxes-group');

    Route::get('pengadaan/', function() { return view('dashboard.dashboard'); })->name('pengadaan.index');
    Route::get('pengadaan/tambah', function() { return view('dashboard.dashboard'); })->name('pengadaan.create');
    Route::get('pengadaan/produk', function() { return view('dashboard.dashboard'); })->name('pengadaan.produk');

    // Route::get('users/', function() { return view('dashboard.dashboard'); })->name('users.index');
    // Route::get('users/tambah', function() { return view('dashboard.dashboard'); })->name('users.create');
    // Route::get('users/roles', function() { return view('dashboard.dashboard'); })->name('users.roles');
    // Route::get('users/roles/tambah', function() { return view('dashboard.dashboard'); })->name('users.roles.creat');
    // Route::get('users/permissions', function() { return view('dashboard.dashboard'); })->name('users.permissions');

    Route::get('konsumen/', function() { return view ('dashboard.dashboard'); })->name('konsumen.index');
    Route::get('konsumen/create', function() { return view ('dashboard.dashboard'); })->name('konsumen.create');
    Route::get('konsumen/groups', function() { return view ('dashboard.dashboard'); })->name('konsumen.groups');
    Route::get('konsumen/create-group', function() { return view ('dashboard.dashboard'); })->name('konsumen.create-group');
    Route::get('konsumen/reward-systems', function() { return view ('dashboard.dashboard'); })->name('konsumen.reward-systems');
    Route::get('konsumen/create-reward', function() { return view ('dashboard.dashboard'); })->name('konsumen.create-reward');
    Route::get('konsumen/list-coupons', function() { return view ('dashboard.dashboard'); })->name('konsumen.list-coupons');
    Route::get('konsumen/create-coupon', function() { return view ('dashboard.dashboard'); })->name('konsumen.create-coupon');

    Route::get('inventory/produk', function() { return view('dashboard.dashboard'); })->name('inventory.produk');
    Route::get('inventory/create', function() { return view('dashboard.dashboard'); })->name('inventory.create-produk');
    Route::get('inventory/print-labels', function() { return view('dashboard.dashboard'); })->name('inventory.print-labels');
    Route::get('inventory/categories', function() { return view('dashboard.dashboard'); })->name('inventory.categories');
    Route::get('inventory/create-category', function() { return view('dashboard.dashboard'); })->name('inventory.create-category');
    Route::get('inventory/units', function() { return view('dashboard.dashboard'); })->name('inventory.units');
    Route::get('inventory/create-unit', function() { return view('dashboard.dashboard'); })->name('inventory.create-unit');
    Route::get('inventory/unit-groups', function() { return view('dashboard.dashboard'); })->name('inventory.unit-groups');
    Route::get('inventory/create-unit-groups', function() { return view('dashboard.dashboard'); })->name('inventory.create-unit-groups');
    Route::get('inventory/stock-adjustment', function() { return view('dashboard.dashboard'); })->name('inventory.stock-adjustment');
    Route::get('inventory/stock-flow-records', function() { return view('dashboard.dashboard'); })->name('inventory.stock-flow-records');

    Route::get('report/sales-report', function() { return view('dashboard.dashboard'); })->name('report.sales-report');
    Route::get('report/sales-progress', function() { return view('dashboard.dashboard'); })->name('report.sales-progress');
    Route::get('report/customer-statement', function() { return view('dashboard.dashboard'); })->name('report.customer-statement');
    Route::get('report/stock-report', function() { return view('dashboard.dashboard'); })->name('report.stock-report');
    Route::get('report/sold-report', function() { return view('dashboard.dashboard'); })->name('report.sold-report');
    Route::get('report/incomes-&-loosses', function() { return view('dashboard.dashboard'); })->name('report.incomes-&-loosses');
    Route::get('report/cash-flow', function() { return view('dashboard.dashboard'); })->name('report.cash-flow');
    Route::get('report/annual-report', function() { return view('dashboard.dashboard'); })->name('report.annual-report');
    Route::get('report/sales-by-payment', function() { return view('dashboard.dashboard'); })->name('report.sales-by-payment');

    Route::get('setting/umum', function() { return view('dashboard.dashboard'); })->name('setting.umum');
    Route::get('setting/pos', function() { return view('dashboard.dashboard'); })->name('setting.pos');
    Route::get('setting/konsumen', function() { return view('dashboard.dashboard'); })->name('setting.konsumen');
    Route::get('setting/orders', function() { return view('dashboard.dashboard'); })->name('setting.orders');
    Route::get('setting/akunting', function() { return view('dashboard.dashboard'); })->name('setting.akunting');
    Route::get('setting/reports', function() { return view('dashboard.dashboard'); })->name('setting.reports');
    Route::get('setting/invoice-setting', function() { return view('dashboard.dashboard'); })->name('setting.invoice-setting');
    Route::get('setting/workers', function() { return view('dashboard.dashboard'); })->name('setting.workers');
    Route::get('setting/reset', function() { return view('dashboard.dashboard'); })->name('setting.reset');
    Route::get('setting/about', function() { return view('dashboard.dashboard'); })->name('setting.about');

});
