<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

//User
Route::get('user/sign-in', [LoginController::class, 'showLoginForm']);
Route::get('user/sign-up', [RegisterController::class, 'showRegisterForm']);
Route::get('user/update', [UserController::class, 'update']);
Route::get('user/delete', [UserController::class, 'delete']);

//Journal
Route::get('journal/{journal_id}/create-diary', function ($journal_id) {
    return view('diary.create', ['journal_id' => $journal_id]);
});
Route::view('create-journal', 'journal.create');
Route::get('public-journals', [JournalController::class, 'index']);
Route::get('my-journals', [JournalController::class, 'showMyJournals']);
Route::get('journal/{journal_id}', [JournalController::class, 'showOne']);

//Diary
Route::get('diary/{diary_id}', [DiaryController::class, 'showOne']);
Route::get('diary', [DiaryController::class, 'showOne']);
