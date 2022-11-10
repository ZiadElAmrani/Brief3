<?php

use App\Http\Controllers\Promotion_Controller;
use App\Http\Controllers\students_Controller;
use App\Http\Controllers\briefs_Controller;
use App\Http\Controllers\tasks_Controller;
use App\Http\Controllers\briefStudent_Controller;
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

// PROMOTIONS ROUTES

Route::get('promotions', [Promotion_Controller::class, 'index'])->name('index');

Route::get('promotions/add', [Promotion_Controller::class, 'add_promotion'])->name('add-promotion');

Route::post('promotions/add', [Promotion_Controller::class, 'insert_promotion'])->name('insert-promotion');

Route::get('promotion/{id}/edit', [Promotion_Controller::class, 'edit_promotion'])->name('edit-promotion');

Route::post('update/{id}', [Promotion_Controller::class, 'update_promotion'])->name('update-promotion');

Route::get('promotion/delete', [Promotion_Controller::class, 'delete_promotion'])->name('delete-promotion');

Route::get('search/{name}', [Promotion_Controller::class, 'search']);

Route::get('search', [Promotion_Controller::class, 'search']);

// STUDENTS ROUTES

Route::get('studentadd/{id}', [students_Controller::class, 'form_student']);

Route::post('studentstore', [students_Controller::class, 'studentstore']);

Route::get('student/{id}/edit', [students_Controller::class, 'student_edit']);

Route::post('student/{id}/update', [students_Controller::class, 'student_update']);

Route::get('student/{id}/delete', [students_Controller::class, 'student_delete']);

// BRIEFS ROUTES

Route::get('briefs_index', [briefs_Controller::class, 'index_briefs']);

Route::get('briefs_add', [briefs_controller::class, 'add_briefs']);

Route::post('briefs_insert', [briefs_controller::class, 'insert_briefs']);

Route::get('Brief/{id}/edit', [briefs_controller::class, 'edit_briefs']);

Route::post('Brief/{id}/update', [briefs_Controller::class, 'update_briefs']);

Route::get('Brief/{id}/delete', [briefs_Controller::class, 'delete_briefs']);

Route::post('search_brief', [briefs_Controller::class, 'search_brief']);

// TAKSKS ROUTES

Route::get('Brief/{id}/add_task', [tasks_Controller::class, 'form_task']);

Route::POST('insert_task', [tasks_Controller::class, 'insert_task']);

Route::get('task/{id}/edit', [tasks_Controller::class, 'edit_task']);

Route::post('task/{id}/update', [tasks_Controller::class, 'update_task']);

Route::get('task/{id}/delete', [tasks_Controller::class, 'delete_task']);

// ASSIGN BRIEFS FOR STUDENTS ROUTES

Route::get('BriefAssign/{id}', [briefStudent_Controller::class, 'displayStudents']);

Route::get('BriefAssign/{brief_id}/Attach/{id}', [briefStudent_Controller::class, 'attachBriefSt']);

Route::get('BriefAssign/{brief_id}/Detach/{id}', [briefStudent_Controller::class, 'detachBriefSt']);

Route::get('BriefAssign/{brief_id}/AttachClass/{id}', [briefStudent_Controller::class, 'attachClass']);
