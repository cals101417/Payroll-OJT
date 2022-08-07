<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Employeelist;
use App\Http\Controllers\Attendance;
use App\Http\Controllers\Realtimechat;
use App\Http\Controllers\Salary;
use App\Http\Controllers\payroll;



use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    return view('index');
});

Route::get('/login', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class, 'registration'])->middleware('alreadyLoggedIn');

Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/logout', [CustomAuthController::class, 'logout']);


Route::get('/employee', [Employeelist::class, 'employee']);
Route::post('/add', [Employeelist::class, 'add']);
Route::get('delete/{id}', [Employeelist::class, 'delete']);

Route::get('edit/{id}', [Employeelist::class, 'edit']);
Route::post('update', [Employeelist::class, 'update'])->name('update');


Route::get('/attendance', [Attendance::class, 'attendance'])->middleware('isLoggedIn');
Route::post('/addattendance', [Attendance::class, 'addattendance']);
Route::post('/attendance', [Attendance::class, 'searchAttendance'])->name('attendance');
Route::get('deleteattendance/{id}', [Attendance::class, 'deleteAttendance']);

Route::get('/chat', [Realtimechat::class, 'realtimechat'])->middleware('isLoggedIn');

Route::get('/salary', [Salary::class, 'salary'])->middleware('isLoggedIn');
Route::post('/addsalary', [Salary::class, 'addsalary']);
Route::post('/salary', [Salary::class, 'searchSalary'])->name('salary');
Route::get('deletesalary/{id}', [Salary::class, 'deletesalary']);

Route::get('/payroll', [payroll::class, 'payroll'])->middleware('isLoggedIn');
Route::post('/payroll', [payroll::class, 'searchpayroll'])->name('payroll');

Route::post('/send-message', function (Request $request) {
    event(
        new Message(
            $request->input('username'),
            $request->input('message')
        )
    );
    return ["sucess" => true];
});
