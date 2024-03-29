<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Admin\Controllers\JobuserController;
use App\Admin\Controllers\JobseekerController;
use App\Admin\Controllers\ExperienceController;
use App\Admin\Controllers\EducationController;
use App\Admin\Controllers\CompanyController;
use App\Admin\Controllers\CompanyProfileController;
use App\Admin\Controllers\CompanyqaController;
use App\Admin\Controllers\JobsController;
use App\Livewire\CompanyLogin;
use App\Livewire\CompanyRegister;
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
    return view('jd.home.main');
});

Route::get('/devtest/home', function () {
    return view('landing.landing');
});




Auth::routes();

Route::post('/register', [JobuserController::class, 'register']);
Route::post('/login', [JobuserController::class, 'login']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    // Routes that require authentication
    Route::get('/jd/profile', [JobseekerController::class, 'so']);
    Route::get('/jd/profile/edit', [JobseekerController::class, 'edit']);
    Route::post('/jd/profile/update', [JobseekerController::class, 'updateProfile']);
    Route::post('/jd/profile/store', [ExperienceController::class, 'sto']);
    Route::delete('/jd/experiences/{experience}', [ExperienceController::class, 'destroy'])->name('experiences.destroy');
    Route::get('/jd/profile/experiences/{id}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
    Route::put('/jd/profile/experiences/{id}', [ExperienceController::class, 'update'])->name('experiences.update');    
        
    Route::get('/educations', [EducationController::class, 'index']);
    Route::get('/educations/create', [EducationController::class, 'create']);
    Route::post('/jd/profile/storeed', [EducationController::class, 'stoed']);
    Route::delete('/educations/{education}', [EducationController::class, 'destroy'])->name('educations.destroy');
    Route::post('/profile/update-picture', [JobseekerController::class, 'updatePicture'])->name('profile.update.picture');
    Route::post('/jd/profile/update-cv', [JobseekerController::class, 'updateCV'])->name('profile.update.cv');
    Route::post('/jd/profile/update-skills', [JobseekerController::class, 'updateSkills'])->name('profile.update.skills');
    Route::delete('/jd/profile/skills/{skillId}', [JobseekerController::class, 'deleteSkill'])->name('skills.delete');
    
    Route::post('/jd/profile/update-jobpref', [JobseekerController::class, 'updatejob'])->name('profile.update.jobpref');
    Route::delete('/jd/profile/jobPreferences/{jobPreferenceId}', [JobseekerController::class, 'deletejobPreference'])->name('jobPreferences.delete');

    Route::post('/jd/profile/updateSalary', [JobseekerController::class, 'updateSalary'])
    ->name('jobseeker.updateSalary');


});



Route::middleware(['auth'])->group(function () {
   
    Route::get('/experiences/create', [ExperienceController::class, 'create']);
    
    Route::get('/experiences/{experience}/edit', [ExperienceController::class, 'edit']);
    Route::put('/experiences/{experience}/update', [ExperienceController::class, 'update']);
   
});
/*temp routes */
// jd routes
Route::get('/jd/home', function () {
    return view('jd.home.main');
});



Route::get('/jd/login', function () {
    return view('jd.login.login');
})->name('jd.login');
Route::get('/jd/register', function () {
    return view('jd.register.register');
});

Route::get('/jd/build', function () {
    return view('jd.buildprofile.profileForms');
});

Route::get('/jd/choice', function () {
    return view('jd.buildprofile.choosePath');
});

Route::get('/jd/skip', function () {
    return view('jd.buildprofile.skipProfile');
});

Route::get('/jd/comprof', function () {
    return view('jd.companyprofile.company');
});
Route::get('/jd/testprofile', function () {
    return view('jobseeker');
});

Route::get('/jd/people', function () {
    return view('jd.peoplefeed.people');


});

Route::get('/jd/companies', function () {
    return view('jd.companyFeed.companyFeed');


});

Route::get('/jd/outcomprof', function () {
    return view('jd.outcomProfile.outcomProfile');


});

Route::get('/jd/outpeople', function () {
    return view('jd.outpeople.outpeople');
});

Route::get('/jd/test', function () {
    return view('jd.test.test');
});




Route::get('/jd/advertdetails', function () {
    return view('jd.advert.advert');


});


//Payment Route
Route::get('/jd/payment', function () {
    return view('jd.payment.payment');
});


Route::get('/company/{id}', [CompanyProfileController::class, 'showcompany'])->name('company.show');

Route::get('/user/details/{id}', [JobSeekerController::class, 'showDetails'])->name('user.details');




Route::get('/job_seekers', [JobSeekerController::class, 'showJobSeekers'])->name('job_seekers.show');
Route::get('/searchpeople', [JobSeekerController::class, 'searchpeople'])->name('people.search');

Route::get('/searchcompany', [CompanyProfileController::class, 'searchcompany'])->name('company.search');

Route::get('/jobs', [JobsController::class, 'jobfeed'])->name('jobs.index');

Route::get('/jobs/{job}', [JobsController::class, 'showjob'])->name('jobs.show');

Route::get('/searchjob', [JobsController::class, 'searchjob'])->name('jobs.search');
Route::get('/jobsfilter', [JobsController::class, 'filter'])->name('jobs.filter');


Route::get('/jd/postad', function () {
    return view('jd.postad.postad');
});

Route::get('/filterByCategory', [JobsController::class, 'filterByCategory'])->name('jobs.filterByCategory');

// Display the registration form
Route::get('/companyregister', [CompanyController::class, 'companyregister'])->name('company.register');

// Handle the registration form submission
Route::post('/company/register', [CompanyController::class, 'register'])->name('company.register.submit');


// Display the login form
Route::get('/company/login', [CompanyController::class, 'showLoginForm'])->name('company.login');

// Handle the login form submission
Route::post('/company/login', [CompanyController::class, 'login'])->name('company.login.submit');

    Route::get('/saved-companies', [CompanyProfileController::class, 'savedCompanies'])
    ->name('saved.companies');



Route::middleware(['auth','checkProfile'])->group(function () {



    Route::get('/company/profile/form', [CompanyProfileController::class, 'showForm'])->name('company.profile.form');
    Route::post('/company/profile/store-or-update', [CompanyProfileController::class, 'storeOrUpdate'])->name('company.profile.storeOrUpdate');

    Route::post('/company/profile/update-profile-picture', [CompanyProfileController::class, 'updateProfilePicture'])
    ->name('company.profile.updateProfilePicture');

    // Show all questions and answers
    Route::get('company/qna', [CompanyqaController::class, 'so'])->name('company.qna.index');

    // Show the form to create a new question and answer
    Route::get('company/qna/create', [CompanyqaController::class, 'createqa'])->name('company.qna.create');

    // Store a new question and answer
    Route::post('company/qna', [CompanyqaController::class, 'storeqa'])->name('company.qna.store');

    // Show a specific question and answer
    Route::get('company/qna/{qna}', [CompanyqaController::class, 'showqa'])->name('company.qna.show');

    // Show the form to edit a specific question and answer
    Route::get('company/qna/{qna}/edit', [CompanyqaController::class, 'editqa'])->name('company.qna.edit');

    // Update a specific question and answer
    Route::put('company/qna/{qna}', [CompanyqaController::class, 'updateqa'])->name('company.qna.update');

    // Delete a specific question and answer
    Route::delete('company/qna/{qna}', [CompanyqaController::class, 'destroyqa'])->name('company.qna.destroy');

    //job post form
    Route::get('/cc', [JobsController::class, 'createpost'])->name('jobs.create');
   
    Route::post('/jobs/store', [JobsController::class, 'storepost'])->name('jobs.store');
});

 