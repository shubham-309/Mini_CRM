<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::view('/', 'welcome');

/*Stripe Payment Gateway*/

Route::get('/payment', [PaymentController::class,'index']);
Route::post('/charge', [PaymentController::class, 'charge']);
Route::get('/confirm', [PaymentController::class,'confirm']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* Admin Authentication Middleware */


 Route::middleware(['auth', 'isAdmin'])->group(function () {

    /*Admin Dashboard*/

    Route::get('/dashboard', [AdminController::class,'index1']);


    /*Comapny CRUD*/

    Route::get('/company', [CompanyController::class,'index']);
    Route::get('/add-company', [CompanyController::class,'add']);
    Route::post('/insert-company', [CompanyController::class,'insert']);
    Route::get('edit-company/{id}', [CompanyController::class ,'edit']);
    Route::put('update-company/{id}', [CompanyController::class , 'update'] );
    Route::get('delete-company/{id}', [CompanyController::class, 'delete' ]);

    /*Employees CRUD*/


    Route::get('/employe', [EmployeeController::class,'index']);
    Route::get('/add-employe', [EmployeeController::class,'add']);
    Route::post('/add-employe', [EmployeeController::class,'insert']);
    Route::get('edit-employe/{id}', [EmployeeController::class ,'edit']);
    Route::put('update-employe/{id}', [EmployeeController::class , 'update'] );
    Route::get('delete-employe/{id}', [EmployeeController::class, 'delete' ]);

    /*Stripe Payment Gateway*/

    Route::get('/payment', [PaymentController::class,'index']);
    Route::post('/charge', [PaymentController::class, 'charge']);
    Route::get('/confirm', [PaymentController::class,'confirm']);

    /* Registered Users Information */

    Route::get('Users', [UserController::class,'users']);
    Route::get('view-user/{id}', [UserController::class,'viewuser']);


 });



    /*We Can create User Auth Using This Middleware  */

Route::middleware(['auth'])->group(function () {

});
