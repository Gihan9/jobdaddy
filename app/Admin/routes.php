<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('brands', BrandController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('jobseekers', JobseekerController::class);
    $router->resource('profiles', ProfileController::class);
    $router->resource('education', EducationController::class);
    $router->resource('experiences', ExperienceController::class);
    $router->resource('curriculars', CurricularController::class);
    $router->resource('jobpreferences', JobpreferenceController::class);
    $router->resource('reviews', ReviewsController::class);
    $router->resource('jobapplicationstatuses', jobappstatusController::class);
    $router->resource('companies', CompanyController::class);
    $router->resource('company-profiles', CompanyProfileController::class);
    $router->resource('companyreviews', CompanyreviewsController::class);
    $router->resource('jobs', JobsController::class);
    $router->resource('applicants', ApplicantsController::class);
    $router->resource('tests', TestController::class);
    $router->resource('jobusers', JobuserController::class);
    $router->resource('skills', SkillController::class);



});
