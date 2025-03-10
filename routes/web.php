<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CancelReviewController;
use App\Models\User;
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
    // $admin = User::whereName('Admin')->first();
    // dd(admin->toArray());
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $studentCount = User::where('role', 'student')->count();
        $collegecount = User::where('role', 'college')->count();
        $publicCount = User::where('role', 'public')->count();
        // Pass the count to the dashboard view
        return view('dashboard', ['studentCount' => $studentCount, 'collegecount' => $collegecount, 'publicCount'=> $publicCount]);   
    })->name('dashboard');
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/college', [CollegeController::class, 'index']);
Route::get('/review', [ReviewController::class, 'index']);
Route::get('/careers', [ReviewController::class, 'career']);
Route::get('/addblog',[BlogController::class,'addblog'])->name("blog");

//studentpart
Route::post('/submit-form', [FormController::class,'store'])->name('submit-form');
Route::post('/applycourses/submit-form', [FormController::class,'storecourseform'])->name('coursesubmit-form');
Route::get('/apply',[ApplyController::class,'index'])->name("apply");
Route::post('/get-courses', [ApplyController::class, 'getCoursesByCollege']);
Route::get('/applycourses', [CourseController::class, 'studentcourse'])->name('applycourses');
Route::get('/applycollege',[CollegeController::class,'applycollege'])->name("college");
Route::get('/courses/{collegeId}', 'CollegeController@getCoursesByCollegeId');



//collegepart
Route::get('/approvelstudent', [StudentController::class, 'viewselectedstudents'])->name("approvelstudent");
Route::post('/approve-student/{id}', [StudentController::class, 'finalstudent'])->name("approve-student");
Route::get('/finalstudent', [StudentController::class, 'viewfinalstudent'])->name("finalstudent");
Route::get('/viewsingleselectedstudents/{id}',[StudentController::class,'viewsingleselectedstudent'])->name('viewsingleselectedstudents');
Route::get('/course',[CourseController::class,'index'])->name("course");
Route::post('/store/course',[CourseController::class,'store'])->name('store.course');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');
Route::patch('/course',[CourseController::class,'update']);
Route::post('/viewsingleselectedstudents/submitmessage/{id}', [CancelReviewController::class, 'store'])->name('submit.cancelform');


// publicpart
Route::get('/scholorstudent',[StudentController::class,'viewscholorstudent'])->name('donate');
Route::post('/ajax/khalti/store_payment', [PaymentController::class, 'store'])->name('store_payment');
Route::post('/scholorstudent/comment', [StudentController::class, 'store'])->name('submit-comment');


//search part
Route::get('/searchcourse', [ReviewController::class, 'searchcourse'])->name('search');
Route::get('/searchstudent', [ReviewController::class, 'searchstudent'])->name('searchstudent');
Route::get('/searchfinalstudent', [ReviewController::class, 'searchfinalstudent'])->name('searchfinal'); 