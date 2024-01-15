<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \App\Models\jobs;
use \App\Models\Companyqa;
class CompanyProfileController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CompanyProfile';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CompanyProfile());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('about', __('About'));
        $grid->column('established_date', __('Established date'));
        $grid->column('profile_picture', __('Profile picture'));
        $grid->column('rating', __('Rating'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(CompanyProfile::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('about', __('About'));
        $show->field('established_date', __('Established date'));
        $show->field('profile_picture', __('Profile picture'));
        $show->field('rating', __('Rating'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CompanyProfile());

        $form->text('name', __('Name'));
        $form->text('about', __('About'));
        $form->text('established_date', __('Established date'));
        $form->text('profile_picture', __('Profile picture'));
        $form->text('rating', __('Rating'));

        return $form;
    }


    public function showForm()
    {
        $company = auth()->user();
        $companyProfile = $company->companyProfile;
        $companyQnAs = auth()->user()->companyQnAs;
        // Fetch questions and answers related to the logged-in company
       
        return view('jd.companyprofile.company', compact('companyProfile', 'companyQnAs'));
    }

    public function storeOrUpdate(Request $request)
    {
        $companyProfile = auth()->user()->companyProfile;

        if (!$companyProfile) {
            $companyProfile = new CompanyProfile();
            $companyProfile->user_id = auth()->id();
        }

        $companyProfile->fill($request->all());
        $companyProfile->save();

        return redirect()->route('company.profile.form')->with('success', 'Company profile updated successfully!');
    }

   

    public function updateProfilePicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $user = auth()->user();
        $companyProfile = $user->companyProfile;

        // If the company doesn't have a profile, create one
        if (!$companyProfile) {
            $companyProfile = new CompanyProfile();
            $companyProfile->user_id = $user->id;
        }

        // Handle file upload
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $path = $file->store('profile_pictures', 'public'); 

            // Remove old profile picture if exists
            if ($companyProfile->profile_picture) {
                Storage::disk('public')->delete($companyProfile->profile_picture);
            }

            $companyProfile->profile_picture = $path;
            $companyProfile->save();
        }

        return redirect()->route('company.profile.form')->with('success', 'Profile picture updated successfully!');
    }

    
    public function savedCompanies()
    {
        // Retrieve paginated list of saved companies
        $savedCompanies = CompanyProfile::paginate(10);

        // Retrieve a specific job, replace '1' with the actual job ID you want
        $job = Jobs::find(1);

    
        // Check if the job exists
        if ($job) {
            // Retrieve related jobs with the same category
            $categories = Jobs::where('category', $job->category)
                ->where('id','<>', $job->id)
                ->get();

            // Count the number of related jobs
            $jobsCount = $categories->count();
        } else {
            // Handle the case when the job is not found
            $categories = collect(); // An empty collection if the job is not found
            $jobsCount = 0;
        }

        return view('jd.companyFeed.companyFeed', compact('savedCompanies', 'categories', 'jobsCount'));
    }


public function searchcompany(Request $request)
    {
        $query = $request->input('query');
       $savedCompanies = CompanyProfile::paginate(10);
        // Retrieve job seekers from the database based on the search query
        $savedCompanies = CompanyProfile::where('name', 'like', '%' . $query . '%')
            ->paginate(10);

            $job = Jobs::find(1);

   
            // Check if the job exists
            if ($job) {
                // Retrieve related jobs with the same category
                $categories = Jobs::where('category', $job->category)
                    ->where('id', '<>', $job->id)
                    ->limit(5)
                    ->get();
        
                // Count the number of related jobs
                $jobsCount = $categories->count();
            } else {
                // Handle the case when the job is not found
                $categories = collect(); // An empty collection if the job is not found
                $jobsCount = 0;
            }
        // Load the skills relationship for the job seekers
       

        // Return the view with the job seekers and skills
        return view('jd.companyfeed.component.filteredlist', [ 'savedCompanies' => $savedCompanies,'categories' => $categories, 'jobsCount' => $jobsCount , 'query' => $query  ]);
    }

    public function showcompany($id)
    {
        // Retrieve the company details based on the provided ID
        $company = CompanyProfile::findOrFail($id);
        $jobs = Jobs::where('user_id', $company->user_id)->get();
        $qaList = Companyqa::where('user_id', $company->user_id)->get();

        return view('jd.outcomProfile.outcomProfile', ['company' => $company, 'jobs' => $jobs, 'qaList' => $qaList]);
    }

}
