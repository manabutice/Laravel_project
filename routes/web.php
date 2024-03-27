<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

// 在庫一覧のルート
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');

// 在庫新規作成のルート
Route::get('/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('/inventory', [InventoryController::class, 'store'])->name('inventory.store');

// 在庫編集のルート
Route::get('/inventory/{id}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::put('/inventory/{id}', [InventoryController::class, 'update'])->name('inventory.update');

// 在庫削除のルート
Route::delete('/inventory/{id}', [InventoryController::class, 'destroy'])->name('inventory.destroy');
