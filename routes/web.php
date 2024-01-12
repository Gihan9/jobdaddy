<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\admin\Controllers\JobuserController;
use App\admin\Controllers\JobseekerController;
use App\admin\Controllers\ExperienceController;
use App\admin\Controllers\EducationController;
use App\admin\Controllers\CompanyController;
use App\admin\Controllers\CompanyProfileController;
use App\admin\Controllers\CompanyqaController;
use App\admin\Controllers\JobsController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

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
    Route::post('/jd/profile/update', [JobseekerController::class, 'up']);
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




Route::get('/jd/advertdetails', function () {
    return view('jd.advert.advert');


});

Route::get('/jobs', [JobsController::class, 'jobfeed'])->name('jobs.index');

Route::get('/jobs/{job}', [JobsController::class, 'showjob'])->name('jobs.show');


Route::get('/jd/postad', function () {
    return view('jd.postad.postad');
});

// Display the registration form
Route::get('/company/register', [CompanyController::class, 'companyshow'])->name('company.register');

// Handle the registration form submission
Route::post('/company/register', [CompanyController::class, 'register'])->name('company.register.submit');


// Display the login form
Route::get('/company/login', [CompanyController::class, 'showLoginForm'])->name('company.login');

// Handle the login form submission
Route::post('/company/login', [CompanyController::class, 'login'])->name('company.login.submit');



Route::middleware(['auth:company'])->group(function () {
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

    Route::get('/jobs/create', [JobsController::class, 'createpost'])->name('jobs.create');
    Route::post('/jobs/store', [JobsController::class, 'storepost'])->name('jobs.store');
});

