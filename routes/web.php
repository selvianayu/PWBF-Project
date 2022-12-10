<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\adoptmeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\TableUserController;
use App\Http\Controllers\FormUpdateController;
use App\Http\Controllers\dashboardadmController;

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

Route::get('/', [HewanController::class, 'index']);


Route::get('/signIn', [SigninController::class, 'index'])->name('signin');
Route::post('/signIn', [SigninController::class, 'signin']);


Route::get('/signUp', [SignupController::class, 'index']);
Route::get('/logout', [SigninController::class, 'logout']);

Route::group(['middleware'=>['auth','role:customer']],function (){
Route::get('/dashboardcust', [HewanController::class, 'dashboardcust']);
Route::get('/adoptme', [adoptmeController::class, 'index']);
});
Route::group(['middleware'=>['auth','role:admin']],function (){
Route::get('/dashboardadm', [dashboardadmController::class, 'index']);


Route::get('/FormUpdate', [FormUpdateController::class, 'index']);


// Route::get('/TableUser', [TableUserController::class, 'index']);
Route::get('/TableUser', [TableUserController::class, 'table']);
// Route::get('/TableUser', function () {
//     return view('TableUser');
// });

Route::get('/TablePet', [HewanController::class, 'table']);

Route::get('/Report', [ReportController::class, 'index']);
// Route::get('/Report', function () {
//     return view('Report');
// });

Route::get('/Profile', [ProfileController::class, 'index']);
// Route::get('/Profile', function () {
//     return view('Profile');
// });

// Route::get('/Profile', function () {
//     return view('Profile');
// });

// Route::get('/Adoption', [AdoptionController::class, 'index']);
Route::get('/Adoption', function () {
    return view('Adoption');
});

Route::get('/userhome', function () {
    return view('userhome');
});


});
Route::get('/userprofile', function () {
    return view('userprofile');
});

Route::get('/usertracking', function () {
    return view('usertracking');
});
?>
