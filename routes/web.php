<?php

use App\Livewire\IncomingGoodAdd;
use App\Livewire\IncomingGoodEdit;
use App\Livewire\IncomingGoodList;
use App\Livewire\Index;
use App\Livewire\ItemAdd;
use App\Livewire\ItemEdit;
use App\Livewire\ItemList;
use App\Livewire\OfficeAdd;
use App\Livewire\OfficeEdit;
use App\Livewire\OfficeList;
use App\Livewire\OutcomingGoodAdd;
use App\Livewire\OutcomingGoodEdit;
use App\Livewire\OutcomingGoodList;
use App\Livewire\PositionAdd;
use App\Livewire\PositionEdit;
use App\Livewire\PositionList;
use App\Livewire\ReservationAdd;
use App\Livewire\ReservationEdit;
use App\Livewire\ReservationList;
use App\Livewire\SuplierAdd;
use App\Livewire\SuplierEdit;
use App\Livewire\SuplierList;
use App\Livewire\UserAdd;
use App\Livewire\UserEdit;
use App\Livewire\UserList;
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

Route::get('/', Index::class)->name('dashboard');

Route::get('/manajemen/kantor', OfficeList::class)->name('office.list');
Route::get('/manajemen/kantor/tambah', OfficeAdd::class)->name('office.add');
Route::get('/manajemen/kantor/edit/{office}', OfficeEdit::class)->name('office.edit');

Route::get('/manajemen/jabatan', PositionList::class)->name('position.list');
Route::get('/manajemen/jabatan/tambah', PositionAdd::class)->name('position.add');
Route::get('/manajemen/jabatan/edit/{position}', PositionEdit::class)->name('position.edit');

Route::get('/manajemen/karyawan', UserList::class)->name('user.list');
Route::get('/manajemen/karyawan/tambah', UserAdd::class)->name('user.add');
Route::get('/manajemen/karyawan/edit/{user}', UserEdit::class)->name('user.edit');

Route::get('/reservasi', ReservationList::class)->name('reservation.list');
Route::get('/reservasi/tambah-reservasi', ReservationAdd::class)->name('reservation.add');
Route::get('/reservasi/edit/{reservation}', ReservationEdit::class)->name('reservation.edit');

Route::get('/inventaris/barang', ItemList::class)->name('inventory.item.list');
Route::get('/inventaris/barang/tambah', ItemAdd::class)->name('inventory.item.add');
Route::get('/inventaris/barang/edit/{item}', ItemEdit::class)->name('inventory.item.edit');

Route::get('/inventaris/suplier', SuplierList::class)->name('inventory.supplier.list');
Route::get('/inventaris/suplier/tambah', SuplierAdd::class)->name('inventory.supplier.add');
Route::get('/inventaris/suplier/edit/{supplier}', SuplierEdit::class)->name('inventory.supplier.edit');

Route::get('/inventaris/barang-masuk', IncomingGoodList::class)->name('inventory.incoming.good.list');
Route::get('/inventaris/barang-masuk/tambah', IncomingGoodAdd::class)->name('inventory.incoming.good.add');
Route::get('/inventaris/barang-masuk/edit/{incomingGood}', IncomingGoodEdit::class)->name('inventory.incoming.good.edit');

Route::get('/inventaris/barang-keluar', OutcomingGoodList::class)->name('inventory.outcoming.good.list');
Route::get('/inventaris/barang-keluar/tambah', OutcomingGoodAdd::class)->name('inventory.outcoming.good.add');
Route::get('/inventaris/barang-keluar/edit/{outcomingGood}', OutcomingGoodEdit::class)->name('inventory.outcoming.good.edit');

