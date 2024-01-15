<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\Jobseeker;
use OpenAdmin\Admin\Layout\Content;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\User;
use Livewire\Components\SearchPeople;


use App\Models\JobPreference;
use App\Models\Experience;


class JobseekerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Jobseeker';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Jobseeker());

        $grid->column('id', __('Id'));
        $grid->column('profile_picture')->image();
        $grid->column('name', __('name'));
        $grid->column('age', __('age'));
        $grid->column('sex', __('sex'));
        $grid->column('marital_status', __('marital_status'));
        $grid->column('designation', __('designation'));
       
        $grid->column('phone', __('Phone'));
        $grid->column('location', __('Location'));
       
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
        $show = new Show(Jobseeker::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('profile_picture', __('profile_picture'));
        $show->field('name', __('Name'));
        $show->field('age', __('Age'));
        $show->field('sex', __('Sex'));
        $show->field('marital_status', __('Marital_status'));
        $show->field('designation', __('Designation'));
      
        $show->field('phone', __('Phone'));
        $show->field('location', __('Location'));
       
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
        $form = new Form(new Jobseeker());

        $form->text('name', __('name'));
        $form->text('age', __('age'));
        $form->text('sex', __('sex'));
        $form->text('marital_status', __('marital_status'));
        $form->text('designation', __('designation'));
        
        $form->number('phone', __('Phone'));
        $form->text('location', __('Location'));
       

        return $form;
    }

    public function so()
    {
        // Fetch user details and profile
        $user = auth()->user();
        $profile = $user->profile;
        $experiences = auth()->user()->experiences;
        $educations = auth()->user()->educations;
        return view('jd.profile.jobseeker', compact('user', 'profile', 'experiences', 'educations', 'experiences' ));
    }

    public function edit($id, Content $content)
    {
        // Fetch user details and profile
        $user = auth()->user();
        $profile = $user->profile;
        return view('jd.profile.edit', compact('user', 'profile'));
    }

    public function up()
    {
        
        request()->validate([
            'name' => 'required|string|max:255',
            'age' => 'nullable|integer',
            'sex' => 'nullable|string|max:10',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:255',
            'marital_status' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
        ]);

        // Update user details
        $user = auth()->user();
        $user->update(['name' => request()->input('name')]);

        // Update or create profile data
        $profile = $user->profile;
        if (!$profile) {
            $profile = new Jobseeker();
            $profile->user_id = $user->id;
        }
        $profile->fill(request()->only(['name', 'age', 'sex', 'phone', 'location', 'marital_status', 'designation']));
        $profile->save();

        return redirect('/jd/profile');
    }

    public function updatePicture(Request $request)
    {
        

        $user = auth()->user();

        $profile = $user->profile;

    if (!$profile) {
        $profile = new Jobseeker();
        $profile->user_id = $user->id;
    }

    // Handle the uploaded profile picture
        if (request()->hasFile('profile_picture')) {
        $request->validate([
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profilePicture = request()->file('profile_picture');
        $path = $profilePicture->store('profile_pictures', 'public');
        $profile->profile_picture = $path;
        }

        $profile->save();

        return redirect('/jd/profile')->with('success', 'Profile picture updated successfully!');
    }

    public function updateCV(Request $request)
    {
        $request->validate([
            'cv' => 'file|mimes:pdf|max:2048',
        ]);

        $user = auth()->user();
        $profile = $user->profile;

        if (!$profile) {
            $profile = new Jobseeker();
            $profile->user_id = $user->id;
        }

        if ($request->hasFile('cv')) {
            $cvFile = $request->file('cv');
            $cvPath = $cvFile->store('cv_files', 'public');
            $profile->cv_path = $cvPath;
        }

        $profile->save();

        return redirect('/jd/profile')->with('success', 'CV updated successfully!');
    }



    public function updateSkills(Request $request)
    {
        // Validate the request
        $request->validate([
            'skill' => 'string|max:255',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Check if the user already has a skill with the provided name
        $existingSkill = Skill::where('user_id', $user->id)
                            ->where('skill', $request->input('skill'))
                            ->first();

        if ($existingSkill) {
        
            $existingSkill->update(['skill' => $request->input('skill')]);
        } else {
            
            $user->skills()->create(['skill' => $request->input('skill')]);
        }

        // Redirect with success message
        return redirect('/jd/profile')->with('success', 'Skills updated successfully!');
    }


    public function deleteSkill($skillId)
    {
        // Get the authenticated user
        $user = auth()->user();

        
        $skill = Skill::find($skillId);

        // Check if the skill exists and belongs to the authenticated user
        if ($skill && $skill->user_id === $user->id) {
            
            $skill->delete();

        
            return redirect('/jd/profile')->with('success', 'Skill deleted successfully!');
        } else {
            
            return redirect('/jd/profile')->with('error', 'Skill not found or you don\'t have permission to delete it.');
        }
    }


    public function updatejob(Request $request)
    {
        
        $request->validate([
            'preference' => 'string|max:255',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Check if the user already has a job preference with the provided name
        $existingPreference = JobPreference::where('user_id', $user->id)
                                            ->where('job', $request->input('preference'))
                                            ->first();

        if ($existingPreference) {
        
            $existingPreference->update(['job' => $request->input('preference')]);
        } else {
        
            $user->jobPreferences()->create(['job' => $request->input('preference')]);
        }

        // Redirect with success message
        return redirect('/jd/profile')->with('success', 'Job Preferences updated successfully!');
    }

    public function deletejobPreference($jobPreferenceId)
    {
        // Get the authenticated user
        $user = auth()->user();

        
        $job = JobPreference::find($jobPreferenceId);

        // Check if the JobPreference exists and belongs to the authenticated user
        if ($job && $job->user_id === $user->id) {
            
            $job->delete();

        
            return redirect('/jd/profile')->with('success', 'job Preference deleted successfully!');
        } else {
            
            return redirect('/jd/profile')->with('error', 'job Preference not found or you don\'t have permission to delete it.');
        }
    }


    public function updateSalary(Request $request)
    {
        $request->validate([
            'salary_range' => 'string',
        ]);

        $user = auth()->user();
        $profile = $user->profile;

        if ($profile) {
            // If the user already has a profile, update the salary_range
            $profile->update(['salary_range' => $request->input('salary_range')]);
        } else {
            // If the user doesn't have a profile, create a new one
            $user->profile()->create(['salary_range' => $request->input('salary_range')]);
        }

        return redirect('/jd/profile')->with('success', 'Salary range updated successfully!');
    }

    public function showJobSeekers()
    {
        $jobSeekers = JobSeeker::with(['user', 'skills'])->paginate(10);
       
        return view('jd.peoplefeed.people', ['jobSeekers' => $jobSeekers ]);
    }

   public function searchpeople(Request $request)
    {
        $query = $request->input('query');

        // Retrieve job seekers from the database based on the search query
        $jobSeekers = JobSeeker::where('designation', 'like', '%' . $query . '%')
            ->paginate(10);

        // Load the skills relationship for the job seekers
        $jobSeekers->load('skills');

        // Return the view with the job seekers and skills
        return view('jd.peoplefeed.people', ['jobSeekers' => $jobSeekers]);
    }

   /* public function searchpeople(Request $request, SearchPeople $searchPeople)
    {
        return view('jd.peoplefeed.people')->with('searchPeople', $searchPeople);
    }*/


    public function showDetails($id)
    {
        // Fetch job seeker details and related information based on $id
        $jobSeeker = user::with(['jobSeeker','skills', 'jobPreferences', 'experiences', 'educations'])
                               ->find($id);
    
        // Return a view with job seeker details
        return view('jd.outpeople.outpeople', ['jobSeeker' => $jobSeeker]);
    }

}
