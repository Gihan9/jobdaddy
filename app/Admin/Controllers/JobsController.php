<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Jobs;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use \App\Models\CompanyProfile;
use Illuminate\Support\Facades\Validator;


class JobsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Jobs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Jobs());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('category', __('Category'));
        $grid->column('requirments', __('Requirments'));
        $grid->column('type', __('Type'));
        $grid->column('location', __('Location'));
        $grid->column('email', __('Email'));
        $grid->column('need_cv', __('Need cv'));
        $grid->column('need_cover_letter', __('Need cover letter'));
        $grid->column('company_id', __('Company id'));
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
        $show = new Show(Jobs::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('category', __('Category'));
        $show->field('requirments', __('Requirments'));
        $show->field('type', __('Type'));
        $show->field('location', __('Location'));
        $show->field('email', __('Email'));
        $show->field('need_cv', __('Need cv'));
        $show->field('need_cover_letter', __('Need cover letter'));
        $show->field('company_id', __('Company id'));
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
        $form = new Form(new Jobs());

        $form->text('name', __('Name'));
        $form->text('description', __('Description'));
        $form->text('category', __('Category'));
        $form->text('requirments', __('Requirments'));
        $form->text('type', __('Type'));
        $form->text('location', __('Location'));
        $form->email('email', __('Email'));
        $form->switch('need_cv', __('Need cv'));
        $form->switch('need_cover_letter', __('Need cover letter'));
        $form->text('company_id', __('Company id'));

        return $form;
    }

    // YourController.php
    public function jobfeed(Request $request)
    {
        $selectedCategory = $request->input('category');
        $filters = $request->input('filters');
        

        
    
        
        $jobsQuery = Jobs::latest();
        
        if ($selectedCategory) {
            $jobsQuery->where('category', $selectedCategory);
        }
        
        
        if ($filters) {
            $jobsQuery->whereIn('filter', $filters);
            }
        $jobs = $jobsQuery->paginate(10);
    
        
    
        return view('jd.advertFeed.advertFeed', compact('jobs', 'selectedCategory', 'filters'));
    }


    public function showjob($id)
    {
        $job = Jobs::find($id);
        $relatedJobs = Jobs::where('category', $job->category)->where('id', '<>', $job->id)->limit(5)->get();
    
        return view('jd.advert.advert', compact('job', 'relatedJobs'));
    }
    public function createpost()
    {
        $company = auth()->user();
        $companyProfile = $company->companyProfile;
        return view('jd.postad.postad', compact('companyProfile'));

    }

    public function searchJob(Request $request)
    {
        $query = $request->input('query');
        $selectedCategory = $request->input('category');
        $filters = $request->input('filters');
    
        $jobsQuery = Jobs::latest();
    
        // Perform the search query using the $query variable
        if ($query) {
            $jobsQuery->where(function ($q) use ($query) {
                $q->where('position', 'like', '%' . $query . '%')
                    ->orWhere('company_name', 'like', '%' . $query . '%');
            });
        }
    
        // Apply category filter
        if ($selectedCategory) {
            $jobsQuery->where('category', $selectedCategory);
        }
    
        // Apply filters
        if ($filters) {
            $jobsQuery->whereIn('filter', $filters);
        }
    
        // Retrieve job posts from the database based on the search query, category, and filters
        $jobs = $jobsQuery->paginate(10);
    
        // Return a view with the updated data
        return view('jd.advertFeed.advertFeed', compact('jobs', 'selectedCategory', 'filters'));
    }
    
  


    

    public function storepost()
    {
        

        
        request()->validate([
            'position' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'description' => 'required|string',
            'website' => 'nullable|string',
        
            'work_type' => 'required|in:remote,office', 
            'salary' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
        
        
            'keyword1' => 'nullable|string|max:255',
            'keyword2' => 'nullable|string|max:255',
            'keyword3' => 'nullable|string|max:255',
            'keyword4' => 'nullable|string|max:255',
            'keyword5' => 'nullable|string|max:255',
        
        ]);

        

        // Create a new record in the database
        $job = Jobs::create([
            'user_id' => auth()->id(),
            'position' => request()->input('position'),
            'company_name' => request()->input('company_name'),
            'company_logo' => request()->input('company_logo'),
            'category' => request()->input('category'),
            'description' => request()->input('description'),
            'website' => request()->input('website'),
            'em_type' => request()->input('em_type'),
            'work_type' => request()->input('work_type'),
            'salary' => request()->input('salary'),
            'phone' => request()->input('phone'),
            'location' => request()->input('location'),
            'filter' => request()->input('filter'),
        
            'keyword1' => request()->input('keyword1'),
            'keyword2' => request()->input('keyword2'),
            'keyword3' => request()->input('keyword3'),
            'keyword4' => request()->input('keyword4'),
            'keyword5' => request()->input('keyword5'),
        
            
        ]);

        // Handle file upload for artwork
        if (request()->hasFile('artwork')) {
            $artworkPath = request()->file('artwork')->store('artwork', 'public'); // Adjust storage path as needed
            $job->update(['artwork' => $artworkPath]);
        }

    
      

       
        return redirect()->route('company.profile.form')->with('success', 'Profile picture updated successfully!');
        
    }

    
    public function filterByCategory(Request $request)
    {
        // Retrieve the selected category and filters from the request
        $selectedCategory = $request->input('category');
        $filters = $request->input('filter');

        
    

        // Initialize a query to retrieve jobs
        $jobsQuery = Jobs::latest();

        // Apply filters
        $jobsQuery->when($selectedCategory && $selectedCategory !== 'all', function ($query) use ($selectedCategory) {
            return $query->where('category', $selectedCategory);
        });

        $jobsQuery->when($filters, function ($query) use ($filters) {
            return $query->where('filter', $filters);
        });
    

        // Retrieve the filtered jobs
        $jobs = $jobsQuery->paginate(10);

        

        // Pass the filtered jobs data to the view
        return view('jd.advertFeed.advertFeed', compact('jobs', 'selectedCategory', 'filters'));
    }
}
