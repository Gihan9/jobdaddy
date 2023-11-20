<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\Jobseeker;
use OpenAdmin\Admin\Layout\Content;
use Illuminate\Http\Request;


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
    return view('jd.profile.jobseeker', compact('user', 'profile', 'experiences', 'educations' ));
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

    

}
