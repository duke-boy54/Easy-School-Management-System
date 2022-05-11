<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\StudentClassController;
use App\Http\Controllers\Backend\StudentYearController;
use App\Http\Controllers\Backend\StudentGroupController;
use App\Http\Controllers\Backend\StudentShiftController;
use App\Http\Controllers\Backend\FeeCategoryController;
use App\Http\Controllers\Backend\FeeAmountController;
use App\Http\Controllers\Backend\ExamTypeController;
use App\Http\Controllers\Backend\StudentSubjectController;
use App\Http\Controllers\Backend\AssignSubjectController;
use App\Http\Controllers\Backend\DesignationController;
use App\Models\StudentYear;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\FeeCategory;
use App\Models\FeeAmount;
use App\Models\StudentSubject;
use App\Models\AssignSubject;
use App\Models\Designation;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home');
})->name('dashboard');

// Admin Routes
Route::get('user/logout',[AdminController::class, 'Logout'])->name('user.logout');
Route::get('view/calender',[AdminController::class, 'Calender'])->name('view.calender');

// users Route
Route::prefix('users')->group(function(){

    Route::get('/view',[UserController::class, 'UserView'])->name('user.view');
    Route::get('/add',[UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class, 'StoreUser'])->name('store.user');
    Route::get('/edit/{id}',[UserController::class, 'EditUser'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class, 'UpdateUser'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'DeleteUser'])->name('users.delete');
});

// profiles route

Route::prefix('profile')->group(function(){

    Route::get('/view',[ProfileController::class, 'ProfileView'])->name('profile.view');
    Route::get('/edit',[ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    Route::post('/update',[ProfileController::class, 'ProfileStore'])->name('profile.update');
    Route::get('/change_passwd',[ProfileController::class, 'ChangePassword'])->name('change.password');
    Route::post('/update_passwd',[ProfileController::class, 'UpdatePassword'])->name('password.update');
});

// setups routes
Route::prefix('setups')->group(function(){

    // student Class Routes
    Route::get('/student_class',[StudentClassController::class, 'ViewStudent'])->name('student.view');
    Route::get('/student_add',[StudentClassController::class, 'StudentAdd'])->name('student.add');
    Route::post('/student_store',[StudentClassController::class, 'StudentStore'])->name('student.store');
    Route::get('/student_edit/{id}',[StudentClassController::class, 'StudentEdit'])->name('studentclass.edit');
    Route::post('/student_update/{id}',[StudentClassController::class, 'StudentUpdate'])->name('studentclass.update');
    Route::get('/student_delete/{id}',[StudentClassController::class, 'StudentDelete'])->name('studentclass.delete');

    // student year routes
    
    Route::get('year_view',[StudentYearController::class, 'ViewYear'])->name('studentyear.view');
    Route::get('year_add',[StudentYearController::class, 'AddYear'])->name('studentyear.add');
    Route::post('year_store',[StudentYearController::class, 'StoreYear'])->name('studentyear.store');
    Route::get('/year.edit/{id}',[StudentYearController::class, 'EditYear'])->name('year.edit');
    Route::post('/year.update/{id}',[StudentYearController::class, 'UpdateYear'])->name('year.update');
    Route::get('/year.delete/{id}',[StudentYearController::class, 'DeleteYear'])->name('year.delete');
    
    // student group routes
    Route::get('group_view',[StudentGroupController::class, 'ViewGroup'])->name('studentgroup.view');
    Route::get('group_add',[StudentGroupController::class, 'AddGroup'])->name('studentgroup.add');
    Route::post('group_store',[StudentGroupController::class, 'StoreGroup'])->name('studentgroup.store');
    Route::get('/edit/{id}',[StudentGroupController::class, 'EditGroup'])->name('group.edit');
    Route::post('/update/{id}',[StudentGroupController::class, 'UpdateGroup'])->name('studentgroup.update');
    Route::get('/delete/{id}',[StudentGroupController::class, 'DeleteGroup'])->name('group.delete');

    // student shifts Routes
    Route::get('shift_view',[StudentShiftController::class, 'ViewShift'])->name('studentshift.view');
    Route::get('shift_add',[StudentShiftController::class, 'AddShift'])->name('studentshift.add');
    Route::post('shift_store',[StudentShiftController::class, 'StoreShift'])->name('studentshift.store');
    Route::get('/shift.edit/{id}',[StudentShiftController::class, 'EditShift'])->name('shift.edit');
    Route::post('/shift.update/{id}',[StudentShiftController::class, 'UpdateShift'])->name('shift.update');
    Route::get('/shift.delete/{id}',[StudentShiftController::class, 'DeleteShift'])->name('shift.delete');

    // fee category routes
    Route::get('categoryfee.view',[FeeCategoryController::class, 'ViewFee'])->name('feecategory.view');
    Route::get('categoryname_add',[FeeCategoryController::class, 'AddFeeCat'])->name('feecategory.add');
    Route::post('categoryfee_store',[FeeCategoryController::class, 'StoreFeeCat'])->name('feecategory.store');
    Route::get('/fee.edit/{id}',[FeeCategoryController::class, 'EditFeeCat'])->name('fee.edit');
    Route::post('/fee.update/{id}',[FeeCategoryController::class, 'UpdateFeeCat'])->name('fee.update');
    Route::get('/fee.delete/{id}',[FeeCategoryController::class, 'DeleteFeeCat'])->name('fee.delete');

    // fee amount routes
    Route::get('feeamount.view',[FeeAmountController::class, 'ViewFeeAmount'])->name('feeamount.view');
    Route::get('feeamount.add',[FeeAmountController::class, 'AddFeeAmount'])->name('feeamount.add');
    Route::post('feeamount.store',[FeeAmountController::class, 'StoreFeeAmount'])->name('feeamount.store');
    Route::get('/feeamount.edit/{fee_category_id}',[FeeAmountController::class, 'EditFeeAmount'])->name('feeamount.edit');
    Route::post('/feeamount.update/{fee_category_id}',[FeeAmountController::class, 'UpdateFeeAmount'])->name('feeamount.update');
    Route::get('/feeamount.details/{fee_category_id}',[FeeAmountController::class, 'DetailsFeeAmount'])->name('feeamount.details');

    //Exam type routes
    Route::get('examtype.view',[ExamTypeController::class, 'ViewExamType'])->name('examtype.view');
    Route::get('examtype.add',[ExamTypeController::class, 'AddExamType'])->name('examtype.add');
    Route::post('examtype.store',[ExamTypeController::class, 'StoreExamType'])->name('examtype.store');
    Route::get('/examtype.edit/{id}',[ExamTypeController::class, 'EditExamType'])->name('examtype.edit');
    Route::post('/examtype.update/{id}',[ExamTypeController::class, 'UpdateExamType'])->name('examtype.update');
    Route::get('/examtype.delete/{id}',[ExamTypeController::class, 'DeleteExamType'])->name('examtype.delete');

    //Subject Routes
    Route::get('studentsubject.view',[StudentSubjectController::class, 'ViewStudentSubject'])->name('studentsubject.view');
    Route::get('studentsubject.add',[StudentSubjectController::class, 'AddStuSubject'])->name('stu_subject.add');
    Route::post('studentsubject.store',[StudentSubjectController::class, 'StoreStuSubject'])->name('student_subj.store');
    Route::get('/subject.edit/{id}',[StudentSubjectController::class, 'EditStuSubject'])->name('subject.edit');
    Route::post('/subject.update/{id}',[StudentSubjectController::class, 'UpdateStuSubject'])->name('subject.update');
    Route::get('/subject.delete/{id}',[StudentSubjectController::class, 'DeleteStuSubject'])->name('subject.delete');

    //Assign subject 
    Route::get('assignstudent.view',[AssignSubjectController::class, 'ViewAssignSubject'])->name('assignsubject.view');
    Route::get('assignstudent.add',[AssignSubjectController::class, 'AddAssignSubject'])->name('assignsubject.add');
    Route::post('assignstudent.store',[AssignSubjectController::class, 'StoreAssignedSubject'])->name('assignsubject.store');
    Route::get('/assignsubject.edit/{class_id}',[AssignSubjectController::class, 'EditAssignedSubject'])->name('assignsubject.edit');
    Route::post('/assignsubject.update/{class_id}',[AssignSubjectController::class, 'UpdateAssignedSubject'])->name('assignsubject.update');
    Route::get('/assignsubject.details/{class_id}',[AssignSubjectController::class, 'SubjectDetails'])->name('assignsubject.details');
    Route::get('/subject.delete/{id}',[AssignSubjectController::class, 'DeleteStuSubject'])->name('subject.delete');

    Route::get('designation.view',[DesignationController::class, 'ViewDesignation'])->name('designation.view');
    Route::get('designation.add',[DesignationController::class, 'AddDesignation'])->name('designation.add');
    Route::post('designation.store',[DesignationController::class, 'StoreDesignation'])->name('designation.store');
    Route::get('/designation.edit/{id}',[DesignationController::class, 'EditDesignation'])->name('designation.edit');
    Route::post('/designation.update/{id}',[DesignationController::class, 'UpdateDesignation'])->name('designation.update');
    Route::get('/designation.delete/{id}',[DesignationController::class, 'DeleteDesignation'])->name('designation.delete');
});
