<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\JobController;
use App\Http\Controllers\backend\JobProviderController;
use App\Http\Controllers\JobProvider\DashboardController as JobProviderDashboardController;
use App\Http\Controllers\SuperAdmin\DashboardController as SuperAdminDashboardController;
use App\Http\Controllers\JobSeeker\DashboardController as JobSeekerDashboardController;
use App\Http\Controllers\superAdmin\registerController;
use Illuminate\Routing\RouteGroup;

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

    return view('welcome') ;
})->name('home');

Route::prefix('About')->group(function () {
    Route::controller(AboutController::class)->group(function () {
        Route::get('/aboutUs', 'aboutUs')->name('aboutUs');
        Route::get('/aboutUsDetails', 'aboutUsDetails')->name('aboutUsDetails');
        Route::get('/testinomial', 'testinomial')->name('testinomial');
        Route::get('/not-found', 'notFound')->name('notFound');
    });
});

Route::prefix('Contact')->group(function () {
    Route::controller(ContactController::class)->group(function () {
        Route::get('/contact', 'contact')->name('contact');
        Route::post('/sendContactMail', 'sendContactMail')->name('sendContactMail');

    });
});


Route::prefix('Job')->group(function () {
    Route::controller(JobController::class)->group(function () {
        Route::get('/job-list', 'jobList')->name('jobList');
        Route::get('/job-details/{id}', 'jobDetails')->name('jobDetails');
        Route::get('/job-category', 'jobCategory')->name('jobCategory');
      });
});




Route::prefix('SuperAdmin')->group(function () {
    //registerController
 Route::controller(registerController::class)->group(function () {
    Route::get('/registerForm', 'registerForm')->name('adminRegisterForm') ;
    Route::post('/register', 'register')->name('adminRegister') ;
    Route::get('/loginForm', 'loginForm')->name('adminLoginForm') ;
     Route::post('/login', 'login')->name('adminLogin') ;
     Route::get('/logOut', 'logOut')->name('adminLogOut') ;
    });

//SuperAdminDashboardController
    Route::controller(SuperAdminDashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('superAdminDashboard')->middleware('admin');
        Route::get('/job-providers', 'jobProviders')->name('jobProviders')->middleware('admin');
        Route::get('/provider-edit-form/{id}', 'providerEditForm')->name('providerEditForm')->middleware('admin');
        Route::post('/update-provider/{id}', 'updateProvider')->name('updateProvider')->middleware('admin');
        Route::get('/provider-password-edit-form/{id}', 'providerPasswordEditForm')->name('providerPasswordEditForm')->middleware('admin');
        Route::post('/update-password-provider/{id}', 'updatePasswordProvider')->name('updatePasswordProvider')->middleware('admin');
        Route::get('/delete-provider/{id}', 'deleteProvider')->name('deleteProvider')->middleware('admin');
        Route::get('/jobseekersList', 'jobseekersList')->name('jobseekersList')->middleware('admin');
        Route::get('/currentJobs', 'currentJobs')->name('currentJobs')->middleware('admin');
        Route::get('/edit-Job-Form/{id}','editJobForm')->name('edit-Job-Form')->middleware('admin');
        Route::post('edit-job/{id}','editJob')->name('edit-Job');
        Route::get('/delete-Job/{id}','deleteJob')->name('delete-Job')->middleware('admin');

    });
});



 Route::prefix('JobProvider')->group(function () {
     Route::controller(JobProviderDashboardController::class)->group(function () {
         Route::get('/dashboard', 'dashboard')->name('jobProviderDashboard')->middleware('jobProvider');
         Route::get('/job-post-form', 'jobPostForm')->name('jobPostForm')->middleware('jobProvider');
         Route::post('/job-post','jobPost')->name('jobPost')->middleware('jobProvider');
         Route::get('/my-jobs','myJobs')->name('myJobs')->middleware('jobProvider');
         Route::get('/edit-job-form/{id}','editJobForm')->name('editJobForm')->middleware('jobProvider');
         Route::post('edit-job/{id}','editJob')->name('editJob');
         Route::get('/deleteJob/{id}','deleteJob')->name('deleteJob')->middleware('jobProvider');
         Route::get('/appliedCandidate/{jobId}','appliedCandidate')->name('appliedCandidate')->middleware('jobProvider');
         Route::get('/applicationList','applicationList')->name('applicationList')->middleware('jobProvider');
         Route::get('/shortListed/{jobId}','shortListed')->name('shortListed')->middleware('jobProvider');
         Route::get('/deleteShortListed/{shortListId}','deleteShortListed')->name('deleteShortListed')->middleware('jobProvider');
         Route::get('/interview/{shortListId}','interview')->name('interview')->middleware('jobProvider');
         Route::get('/viewCV/{detailsId}','viewCV')->name('viewCV')->middleware('jobProvider');
         Route::get('/shortList/{appId}','shortList')->name('shortList')->middleware('jobProvider');
         Route::get('/interview-list/{jobId}','finalInterviewList')->name('finalInterviewList')->middleware('jobProvider');
         Route::get('/delete-interview/{interviewId}','deleteInterview')->name('deleteInterview')->middleware('jobProvider');
         Route::get('/finalSelection/{interviewId}','finalSelection')->name('finalSelection')->middleware('jobProvider');
         Route::get('/selected/{jobId}','selected')->name('selected')->middleware('jobProvider');
         Route::get('/detailsForm', 'detailsForm')->name('detailsForm')->middleware('jobProvider');
         Route::post('/storeCompanyDetails', 'storeCompanyDetails')->name('storeCompanyDetails')->middleware('jobProvider');

        });
 });



Route::prefix('JobSeeker')->group(function () {
    Route::controller(JobSeekerDashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('jobSeekerDashboard');
        Route::get('/apply/{jobId}/{providerId}', 'apply')->name('apply');
        Route::get('/applied','applied')->name('appliedJobs');
        Route::get('/deleteApplication/{appId}','deleteApplication')->name('deleteApplication');
        Route::get('/careerProfile-Form','careerProfileForm')->name('careerProfileForm');
        Route::post('/careerProfile','careerProfile')->name('careerProfile');
        Route::get('/show-career-profile','showCareerProfile')->name('showCareerProfile');
        Route::get('/edit-career-profile-form','editCareerForm')->name('editCareerForm');
        Route::post('/edit-career-profile','editCareerProfile')->name('editCareerProfile');
        Route::get('/delete-career-profile','deleteCareerProfile')->name('deleteCareerProfile');
        Route::post('/try','try')->name('try');
        Route::post('/filterJobs','filterJobs')->name('filterJobs');
        Route::post('/filter','filter')->name('filter');
        Route::get('/shortlistedRecord','shortlistedRecord')->name('shortlistedRecord');
        Route::get('/SelectedRecord','SelectedRecord')->name('SelectedRecord');

    });
});







Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
