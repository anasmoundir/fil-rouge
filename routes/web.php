<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstructorAuthController;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\InstructorCourseController;
use App\Http\Controllers\StudentLessonController;
use App\Http\Controllers\InstructorLessonController;
use App\Http\Controllers\VideoUploadController;
use App\Http\Controllers\StudentResourceController;
use App\Http\Controllers\approveInstructor;
use App\Http\Controllers\DashboardUser;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LessonResourceController;

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



Route::get('/student/login', [StudentAuthController::class, 'showLoginForm'])->name('student.showLoginForm');
Route::post('/student/login', [StudentAuthController::class, 'login'])->name('student.login');
Route::get('/student/register', [StudentAuthController::class, 'showRegistrationForm'])->name('student.showRegistrationForm');
Route::post('/student/register', [StudentAuthController::class, 'register'])->name('student.register');
Route::get('/student', [StudentAuthController::class, 'showStudentPage'])->name('student');


Route::get('/instructor/login', [InstructorAuthController::class, 'showLoginForm'])->name('instructor.showLoginForm');
Route::post('/instructor/login', [InstructorAuthController::class, 'login'])->name('instructor.login');
Route::get('/instructor/register', [InstructorAuthController::class, 'showRegistrationForm'])->name('instructor.showRegistrationForm');
Route::post('/instructor/register', [InstructorAuthController::class, 'register'])->name('instructor.register');

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm']);
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/register', [AdminAuthController::class, 'showRegistrationForm']);
Route::post('/admin/register', [AdminAuthController::class, 'register']);


// fetch course item function from lesonRessourceControlle




Route::get('/', [WelcomeController::class, 'index'])->name('welcome');



//lesson Ressource store function 
// Route::post('/lesson/{lesson}/resource', [StudentResourceController::class, 'store'])->name('lesson.resource.store');

Route::post('/lesson/AddNewLesson',[LessonController::class, 'store'])->name('lessons.store');

   //the instructor routes for the instructor instructorlab blade 
Route::get('/instructorlab', [LessonController::class, 'index'])->name('instructorlab');
//define lesson store route 

Route::post('/instructurAddCourse', [LessonController::class, 'AddCourseIfNotexist'])->name('AddCourseIfNotexist');



Route::middleware('auth')->group(function () {
    //let them for student middleware after
    Route::post('/course/{course_id}/enroll', [CourseController::class, 'enroll'])->name('course.enroll');
    Route::get('/courses/{slug}', [CourseController::class, 'coursesByCategory'])->name('courses.by_category');
    Route::get('/my-courses', [CourseController::class, 'myCourses'])->name('enrolled.courses');
    Route::post('/course/{course_id}/unsubscribe', [CourseController::class, 'unsubscribe'])->name('course.unsubscribe');
    //proceed to the  course 
    Route::get('/course/{course_id}/proceed', [CourseController::class, 'proceed'])->name('course.proceed'); 


//route to instructor_approval page for admin from the approveInstructore controller index 
Route::get('/CategorieCourse',[LessonController::class, 'fetchCourseItem'])->name('course.instructor'); 
Route::get('/lesson', [LessonController::class, 'index'])->name('lesson.index');
Route::post('/lesson/uploading', [LessonController::class, 'store'])->name('lesson.store');
Route::get('/lesson/{lesson}/resource', [LessonController::class, 'show'])->name('lesson.resource.show');
Route::delete('/lesson/{lesson}/delete', [LessonController::class, 'deleteLessonResource'])->name('lesson-resource.delete');
Route::delete('/lesson/{lesson}/deleteCourse', [LessonController::class, 'deleteCourse'])->name('lesson.deleteCourse');
Route::delete('/lesson/{lesson}/deleteLesson', [LessonController::class, 'deleteLesson'])->name('lesson.deleteLesson');



Route::get('/instructor_approval', [DashboardUser::class, 'index'])->name('instructor_approval');

Route::post('/approve_profile/{id}', [approveInstructor::class, 'approveInstructor'])->name('approve_instructor');    

//route to reject profile function
Route::post('/reject_profile/{id}', [approveInstructor::class, 'rejectInstructor'])->name('reject_instructor');
//route to download the cv 
Route::get('/download_cv/{id}', [approveInstructor::class, 'downloadResume'])->name('download_cv');

Route::delete('/delete_profile/{id}', [InstructorAuthController::class, 'deleteInstructor'])->name('delete_profile');

    Route::get('/video/upload', [VideoUploadController::class, 'index'])->name('video.upload');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users', [DashboardController::class, 'users'])->name('users');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
    Route::resource('courses', CourseController::class);
  
    Route::resource('categories', CategoryController::class);
    Route::get('/admin', function () { 
    return view('admin.index'); })->name('admin');    
   });


Route :: get ( '/dashboard' , [ DashboardController :: class , 'index' ]) -> name ( 'dashboard' )->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
