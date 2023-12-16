<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignTaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Models\AssignTask;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login-form',[LoginController::class,'index'])->name('login.form');
Route::post('/login-form-submit',[LoginController::class,'loginFormSubmit'])->name('login.form.submit');




Route::get('/register-form',[LoginController::class,'index2'])->name('register.form');
Route::post('/register-form-submit',[LoginController::class,'registerFormSubmit'])->name('register.form.submit');


//user dashboard
Route::get('/user-dashboard',[LoginController::class,'userDashboard'])->name('user.dashboard');
Route::get('/admin-dashboard',[LoginController::class,'adminDashboard'])->name('admin.dashboard');


//admin
Route::get('/admin/view-users',[AdminController::class,'viewUsers'])->name('admin.view.users');
Route::get('/admin/create-task',[AdminController::class,'createTask'])->name('admin.create.task');
Route::get('/admin/view-work-progress',[AdminController::class,'viewWorkProgress'])->name('admin.view.workprogress');

//admin-task
Route::post('/admin/task-submit',[AdminController::class,'taskSubmit'])->name('admin.task.submit');
Route::get('/admin/edit-task/{id}',[AdminController::class,'taskEdit'])->name('task.edit');
Route::post('/admin/update-task/{id}',[AdminController::class,'taskUpdate'])->name('task.update');
Route::get('/admin/delete-task/{id}',[AdminController::class,'taskDelete'])->name('task.delete');
Route::get('/admin/task-assign',[AdminController::class,'taskAssign'])->name('admin.task.assign');
Route::get('/admin/task-assign',[AdminController::class,'taskAssignSubmit'])->name('admin.task.assign.');




//user-task
Route::get('/user-view-assgned-task',[AssignTaskController::class,'viewTaskAssigned'])->name('user.view.assigned.task');





