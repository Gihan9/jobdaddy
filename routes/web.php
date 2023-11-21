<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\admin\Controllers\JobuserController;
use App\admin\Controllers\JobseekerController;
use App\admin\Controllers\ExperienceController;
use App\admin\Controllers\EducationController;
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
    Route::get('/educations', [EducationController::class, 'index']);
    Route::get('/educations/create', [EducationController::class, 'create']);
    Route::post('/jd/profile/storeed', [EducationController::class, 'stoed']);
    Route::delete('/educations/{education}', [EducationController::class, 'destroy'])->name('educations.destroy');
    Route::post('/profile/update-picture', [JobseekerController::class, 'updatePicture'])->name('profile.update.picture');
    Route::post('/jd/profile/update-cv', [JobseekerController::class, 'updateCV'])->name('profile.update.cv');
    Route::post('/jd/profile/update-skills', [JobseekerController::class, 'updateSkills'])->name('profile.update.skills');
    Route::delete('/jd/profile/skills/{skillId}', [JobseekerController::class, 'deleteSkill'])->name('skills.delete');
    
    Route::post('/jd/profile/update-job', [JobseekerController::class, 'updatejob'])->name('profile.update.job');

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