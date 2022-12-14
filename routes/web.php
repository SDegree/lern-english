<?php

use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\VocabularyController;
use App\Models\English;
use App\Models\User;
use Illuminate\Http\Request;
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

Route::resource('/', VocabularyController::class);
Route::get('/ind', [VocabularyController::class, 'ind']);
Route::get('/choose', [VocabularyController::class, 'choose']);
Route::get('/task', [VocabularyController::class, 'task']);
Route::get('/task/ind', [VocabularyController::class, 'taskInd']);
Route::get('/signIn', [SignInController::class, 'index'])->middleware('guest')->name('login');
Route::post('/signIn', [SignInController::class, 'autenticate']);
Route::get('/logout', [SignInController::class, 'logout'])->middleware('auth');
Route::get('signUp', [SignUpController::class, 'index'])->middleware('guest');
Route::post('signUp', [SignUpController::class, 'store']);
Route::get('/nextLevel', function () {
  return view('profile', [
    'levels' => count(English::all()) / 10,
  ]);
});
Route::post('/nextLevel', function (Request $request) {
  $validate = $request->validate([
    'unlock_level' => 'required',
  ]);
  User::where('id', auth()->user()->id)->update($validate);
  return redirect('/');
});
