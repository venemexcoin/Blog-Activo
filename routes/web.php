<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Blog\BlogHomeComponent;

use App\Http\Livewire\User\UserDashboardComponent;

use App\Http\Livewire\Editor\EditDashboardComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',BlogHomeComponent::class);

  Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
      return view('dashboard');
})->name('dashboard');

//For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/miespacio',UserDashboardComponent::class)->name('user.miespacio'); 
});

//For User or Edit
Route::middleware(['auth:sanctum', 'verified','authedit'])->group(function(){
    Route::get('/edit/miespacio', EditDashboardComponent::class)->name('edit.miespacio');
});

//For User or Admin
Route::middleware(['auth:sanctum', 'verified','auhtadmin'])->group(function(){
    Route::get('/admin/miespacio', AdminDashboardComponent::class)->name('admin.miespacio');
});